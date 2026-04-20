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
    const items = Array.from(slider.children);

    items.forEach((item) => {
      const button = item.querySelector('[data-spoiler-button]');
      const content = item.querySelector('[data-spoiler-content]');

      button?.addEventListener('click', () => {
        const isActive = item.hasAttribute('data-active');

        items.forEach((i) => {
          i.removeAttribute('data-active');
          const c = i.querySelector('[data-spoiler-content]');
          if (c) c.style.maxHeight = '0';
        });

        if (!isActive) {
          item.setAttribute('data-active', '');
          if (content) content.style.maxHeight = content.scrollHeight + 'px';
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

    container.classList.toggle('hidden', seen.size === 0);
    list.textContent = [...seen.values()].join(', ');
  };

  inputs.forEach((input) => input.addEventListener('change', update));
};

//===============================================================
initLazyLoad();
initMobileMenu();
initSearch();
initSpoilers();
openFooterSpoilers();
initModals();
initColorSelected();
