const markupSliders = () => {
  document.querySelectorAll('[data-slider]').forEach((slider) => {
    if (slider.hasAttribute('data-init')) return;

    const sliderContainer = slider.firstElementChild;
    const sliderItems = Array.from(sliderContainer.children);

    sliderContainer.setAttribute('data-slider-container', '');

    sliderItems.forEach((slide) => slide.setAttribute('data-slider-item', ''));

    slider.setAttribute('data-init', '');
  });
};

//===============================================================

const setupTweenScale = (sliderApi) => {
  const TWEEN_FACTOR_BASE = 0.15;

  let tweenFactor = 0;
  let tweenNodes = [];

  const numberWithinRange = (number, min, max) => Math.min(Math.max(number, min), max);

  const setTweenNodes = () => {
    tweenNodes = sliderApi.slideNodes().map((slideNode) => slideNode.firstElementChild);
  };

  const setTweenFactor = () => {
    tweenFactor = TWEEN_FACTOR_BASE * sliderApi.scrollSnapList().length;
  };

  const tweenScale = (eventName) => {
    const engine = sliderApi.internalEngine();
    const scrollProgress = sliderApi.scrollProgress();
    const slidesInView = sliderApi.slidesInView();
    const isScrollEvent = eventName === 'scroll';

    sliderApi.scrollSnapList().forEach((scrollSnap, snapIndex) => {
      let diffToTarget = scrollSnap - scrollProgress;
      const slidesInSnap = engine.slideRegistry[snapIndex];

      slidesInSnap.forEach((slideIndex) => {
        if (isScrollEvent && !slidesInView.includes(slideIndex)) return;

        if (engine.options.loop) {
          engine.slideLooper.loopPoints.forEach((loopItem) => {
            const target = loopItem.target();

            if (slideIndex === loopItem.index && target !== 0) {
              diffToTarget = scrollSnap + (target > 0 ? 1 - scrollProgress : -1 - scrollProgress);
            }
          });
        }

        const tweenValue = 1 - Math.abs(diffToTarget * tweenFactor);
        const scale = numberWithinRange(tweenValue, 0.8, 1);
        tweenNodes[slideIndex].style.transform = `scale(${scale})`;
      });
    });
  };

  setTweenNodes();
  setTweenFactor();
  tweenScale();

  sliderApi
    .on('reInit', setTweenNodes)
    .on('reInit', setTweenFactor)
    .on('reInit', tweenScale)
    .on('scroll', tweenScale)
    .on('select', tweenScale);

  return () => {
    tweenNodes.forEach((node) => node.removeAttribute('style'));
  };
};

//===============================================================

const addTogglePrevNextBtnsActive = (sliderApi, prevBtn, nextBtn) => {
  const togglePrevNextBtnsState = () => {
    if (sliderApi.canScrollPrev()) prevBtn.removeAttribute('disabled');
    else prevBtn.setAttribute('disabled', 'disabled');

    if (sliderApi.canScrollNext()) nextBtn.removeAttribute('disabled');
    else nextBtn.setAttribute('disabled', 'disabled');
  };

  sliderApi
    .on('select', togglePrevNextBtnsState)
    .on('init', togglePrevNextBtnsState)
    .on('reInit', togglePrevNextBtnsState);

  return () => {
    prevBtn.removeAttribute('disabled');
    nextBtn.removeAttribute('disabled');
  };
};

//===============================================================

const addPrevNextBtnsClickHandlers = (sliderApi, sliderKey) => {
  const prevBtn = document.querySelector(`[data-prev="${sliderKey}"]`);
  const nextBtn = document.querySelector(`[data-next="${sliderKey}"]`);

  if (!prevBtn || !nextBtn) return;

  const scrollPrev = () => {
    sliderApi.scrollPrev();
  };
  const scrollNext = () => {
    sliderApi.scrollNext();
  };
  prevBtn.addEventListener('click', scrollPrev, false);
  nextBtn.addEventListener('click', scrollNext, false);

  const removeTogglePrevNextBtnsActive = addTogglePrevNextBtnsActive(sliderApi, prevBtn, nextBtn);

  return () => {
    removeTogglePrevNextBtnsActive();
    prevBtn.removeEventListener('click', scrollPrev, false);
    nextBtn.removeEventListener('click', scrollNext, false);
  };
};

//===============================================================

const addDotBtnsAndClickHandlers = (sliderApi, sliderKey) => {
  const paggination = document.querySelector(`[data-paggination="${sliderKey}"]`);

  if (!paggination) return;

  let dots = [];

  const addDotBtnsWithClickHandlers = () => {
    paggination.innerHTML = sliderApi
      .scrollSnapList()
      .map(
        (_, index) => `<button class="paggination-dot" type="button" aria-label="Move to slide ${index + 1}"></button>`,
      )
      .join('');

    const scrollTo = (index) => {
      sliderApi.scrollTo(index);
    };

    dots = Array.from(paggination.querySelectorAll('button'));
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => scrollTo(index), false);
    });
  };

  const toggleDotBtnsActive = () => {
    const previous = sliderApi.previousScrollSnap();
    const selected = sliderApi.selectedScrollSnap();
    dots[previous].removeAttribute('data-active');
    dots[selected].setAttribute('data-active', '');
  };

  sliderApi
    .on('init', addDotBtnsWithClickHandlers)
    .on('reInit', addDotBtnsWithClickHandlers)
    .on('init', toggleDotBtnsActive)
    .on('reInit', toggleDotBtnsActive)
    .on('select', toggleDotBtnsActive);

  return () => {
    paggination.innerHTML = '';
  };
};

//===============================================================
const initSlider = (sliderTag, options = {}) => {
  const slider = document.querySelector(`[data-slider="${sliderTag}"]`);

  if (!slider) return;

  const sliderApi = EmblaCarousel(slider, options);

  const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(sliderApi, sliderTag);
  const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(sliderApi, sliderTag);

  sliderApi.on('destroy', removePrevNextBtnsClickHandlers);
  sliderApi.on('destroy', removeDotBtnsAndClickHandlers);

  if (options?.scale) {
    const removeTweenScale = setupTweenScale(sliderApi);
    sliderApi.on('destroy', removeTweenScale);
  }
};

//===============================================================
const initSliders = () => {
  markupSliders();

  // initSlider('stories', { loop: true, align: 'start' });
  // initSlider('stories-scale', { loop: true, align: 'center', containScroll: false, startIndex: 1, scale: true });
};

//===============================================================
window.sliders = { init: initSliders };
