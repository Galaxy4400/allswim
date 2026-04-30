//===============================================================
const initMobileMenu = () => {
  let isOpen = false;

  const icon = document.querySelector('[data-menu-icon]');
  const menu = document.querySelector('[data-mobile-menu]');
  const closeBtn = document.querySelector('[data-menu-close]');

  const toggleMenu = (state) => {
    isOpen = state;

    icon.toggleAttribute('data-active', isOpen);
    menu.toggleAttribute('data-active', isOpen);
    document.body.classList.toggle('overflow-hidden', isOpen);
  };

  icon?.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu(!isOpen);
  });

  closeBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu(false);
  });

  menu?.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    if (isOpen) toggleMenu(false);
  });
};

//===============================================================
const initLazyLoad = () => {
  new LazyLoad({
    elements_selector: '[data-lazy]',
  });
};

//===============================================================
const initSpoilers = () => {
  const sliders = document.querySelectorAll('[data-spoiler]');

  sliders.forEach((slider) => {
    const openByDefault = slider.hasAttribute('data-spoiler-open');
    const items = Array.from(slider.children);

    items.forEach((item) => {
      const button = item.querySelector('[data-spoiler-button]');
      const content = item.querySelector('[data-spoiler-content]');

      if (openByDefault && content) {
        item.setAttribute('data-active', '');
        content.style.maxHeight = (content.scrollHeight + 2) + 'px';
      }

      button?.addEventListener('click', () => {
        const isActive = item.hasAttribute('data-active');

        if (isActive) {
          item.removeAttribute('data-active');
          if (content) content.style.maxHeight = '0';
        } else {
          item.setAttribute('data-active', '');
          if (content) content.style.maxHeight = (content.scrollHeight + 2) + 'px';
        }
      });
    });
  });
};

//===============================================================
const initSearch = () => {
  let isOpen = false;

  const panel = document.querySelector('[data-search-container]');
  const openBtn = document.querySelector('[data-search-open]');
  const closeBtn = document.querySelector('[data-search-close]');
  const clearBtn = document.querySelector('[data-search-clear]');
  const input = document.querySelector('[data-search-input]');

  if (!panel) return;

  const toggle = (state) => {
    isOpen = state;
    panel.toggleAttribute('data-active', isOpen);
  };

  openBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    toggle(true);
  });

  closeBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    toggle(false);
  });

  clearBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    if (input) {
      input.value = '';
      input.focus();
    }
  });

  panel.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    if (isOpen) toggle(false);
  });
};

//===============================================================
const openFooterSpoilers = () => {
  document.querySelectorAll('[data-spoiler^="footer-"] [data-spoiler-button]').forEach((btn) => {
    btn.click();
  });
};

//===============================================================
const initModals = () => {
  const closeAll = () => {
    document.querySelectorAll('[data-modal]').forEach((m) => m.removeAttribute('data-active'));
    document.body.removeAttribute('data-modal-lock');
    document.body.style.removeProperty('--scrollbar-width');
  };

  const openModal = (name) => {
    closeAll();
    const modal = document.querySelector(`[data-modal="${name}"]`);
    if (!modal) return;
    const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
    if (scrollbarWidth > 0) document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`);
    modal.setAttribute('data-active', '');
    document.body.setAttribute('data-modal-lock', '');
  };

  document.addEventListener('click', (e) => {
		const target = e.target;

    const openTrigger = target.closest('[data-modal-open]');
    if (openTrigger) {
      openModal(openTrigger.dataset.modalOpen);
      return;
    }

    if (target.closest('[data-modal-close]')) {
      closeAll();
      return;
    }

    if (target.hasAttribute('data-modal') && target.hasAttribute('data-active')) {
      closeAll();
    }
  });
};

//===============================================================
const initSizeSelected = () => {
  const container = document.querySelector('[data-size-selected]');
  if (!container) return;

  const list = container.querySelector('[data-size-list]');
  const inputs = document.querySelectorAll('input[name="size[]"]');

  const update = () => {
    const selected = [...inputs].filter((i) => i.checked).map((i) => i.value);
    container.toggleAttribute('data-active', selected.length > 0);
    list.textContent = selected.join(', ');
  };

  inputs.forEach((input) => input.addEventListener('change', update));
  update();
};

//===============================================================
const initColorSelected = () => {
  const container = document.querySelector('[data-color-selected]');
  if (!container) return;

  const list = container.querySelector('[data-color-list]');
  const inputs = document.querySelectorAll('input[name="color[]"]');

  const update = () => {
    const seen = new Map();
    inputs.forEach((input) => {
      if (input.checked && !seen.has(input.value)) {
        seen.set(input.value, input.dataset.label ?? input.value);
      }
    });

    container.toggleAttribute('data-active', seen.size > 0);
    list.textContent = [...seen.values()].join(', ');
  };

  inputs.forEach((input) => input.addEventListener('change', update));
  update();
};

//===============================================================
const initCounters = () => {
  document.querySelectorAll('[data-counter]').forEach((counter) => {
    const [btnMinus, btnPlus] = counter.querySelectorAll('button');
    const input = counter.querySelector('input');

    if (!btnMinus || !btnPlus || !input) return;

    const min = input.min !== '' ? Number(input.min) : null;
    const max = input.max !== '' ? Number(input.max) : null;

    const clamp = (val) => {
      if (min !== null && val < min) return min;
      if (max !== null && val > max) return max;
      return val;
    };

    const updateButtons = (val) => {
      btnMinus.disabled = min !== null && val <= min;
      btnPlus.disabled = max !== null && val >= max;
    };

    const setValue = (val) => {
      const clamped = clamp(val);
      input.value = clamped;
      updateButtons(clamped);
    };

    btnMinus.addEventListener('click', () => setValue(Number(input.value) - 1));
    btnPlus.addEventListener('click', () => setValue(Number(input.value) + 1));

    input.addEventListener('change', () => {
      const parsed = parseInt(input.value, 10);
      setValue(isNaN(parsed) ? (min ?? 0) : parsed);
    });

    setValue(Number(input.value));
  });
};

//===============================================================
initLazyLoad();
initMobileMenu();
initSearch();
initSpoilers();
openFooterSpoilers();
initModals();
initSizeSelected();
initColorSelected();
initCounters();
