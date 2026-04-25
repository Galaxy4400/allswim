const STEP_MS = 300;

class Preloader {
  #el;
  #paths;
  #timerId = null;
  #running = false;

  constructor(el) {
    this.#el = el;
    this.#paths = Array.from(el.querySelectorAll('svg path'));

    if (el.hasAttribute('data-active')) {
      this.#startCycle();
    }
  }

  show() {
    if (this.#running) return;
    this.#el.setAttribute('data-active', '');
    this.#startCycle();
  }

  hide() {
    this.#el.removeAttribute('data-active');
    this.#stopCycle();
  }

  #startCycle() {
    this.#running = true;
    let index = 0;

    const step = () => {
      if (!this.#running) return;

      this.#paths[index].setAttribute('data-lit', '');
      index++;

      if (index < this.#paths.length) {
        this.#timerId = setTimeout(step, STEP_MS);
      } else {
        // Wait for the last letter's transition to finish, then restart
        this.#timerId = setTimeout(() => this.#reset(), STEP_MS);
      }
    };

    this.#timerId = setTimeout(step, STEP_MS);
  }

  #reset() {
    if (!this.#running) return;

    // Suppress transitions so the reset is instant (no simultaneous fade-back)
    this.#el.setAttribute('data-resetting', '');
    this.#paths.forEach((p) => p.removeAttribute('data-lit'));

    // Two rAF frames ensure the browser commits the style change before
    // re-enabling transitions and kicking off the next cycle
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        if (!this.#running) return;
        this.#el.removeAttribute('data-resetting');
        this.#startCycle();
      });
    });
  }

  #stopCycle() {
    this.#running = false;
    clearTimeout(this.#timerId);
    this.#el.removeAttribute('data-resetting');
    this.#paths.forEach((p) => p.removeAttribute('data-lit'));
  }
}

const instances = Array.from(document.querySelectorAll('[data-preloader]')).map(
  (el) => new Preloader(el),
);

window.preloader = {
  show(index = 0) {
    instances[index]?.show();
  },
  hide(index = 0) {
    instances[index]?.hide();
  },
  showAll() {
    instances.forEach((p) => p.show());
  },
  hideAll() {
    instances.forEach((p) => p.hide());
  },
};
