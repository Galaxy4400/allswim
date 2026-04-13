<div class="relative py-14 md:py-20" id="faq">
  <div class="container-narrow grid gap-8 md:gap-14">
    <h2 class="max-md:text-center"><?= t('t.index.faq_title') ?></h2>
    <div class="grid gap-3 md:gap-6" data-accordion>
      <div
        id="accordion-1"
        class="group/item rounded-custom border-primary-light overflow-hidden border-2 transition-all"
      >
        <button
          class="bg-primary-light group-data-active/item:text-primary group/button hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-5 py-2.5 md:px-6 md:py-3"
          onclick="toggleAccordion(1)"
        >
          <span
            class="h3 group-hover/button:text-primary group-data-active/item:text-primary text-primary-dark text-left transition-colors"
          >
            <?= t('t.index.faq_item_title_1') ?>
          </span>
          <span class="accordion-icon"></span>
        </button>
        <div id="content-1" class="max-h-0 overflow-hidden transition-all">
          <div class="grid gap-2 px-5 py-2.5 md:px-6 md:py-3">
            <p><?= t('t.index.faq_item_text_1') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-2"
        class="group/item rounded-custom border-primary-light overflow-hidden border-2 transition-all"
      >
        <button
          class="bg-primary-light group-data-active/item:text-primary group/button hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-5 py-2.5 md:px-6 md:py-3"
          onclick="toggleAccordion(2)"
        >
          <span
            class="h3 group-hover/button:text-primary group-data-active/item:text-primary text-primary-dark text-left transition-colors"
          >
            <?= t('t.index.faq_item_title_2') ?>
          </span>
          <span class="accordion-icon"></span>
        </button>
        <div id="content-2" class="max-h-0 overflow-hidden transition-all">
          <div class="grid gap-2 px-5 py-2.5 md:px-6 md:py-3">
            <p><?= t('t.index.faq_item_text_2') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-3"
        class="group/item rounded-custom border-primary-light overflow-hidden border-2 transition-all"
      >
        <button
          class="bg-primary-light group-data-active/item:text-primary group/button hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-5 py-2.5 md:px-6 md:py-3"
          onclick="toggleAccordion(3)"
        >
          <span
            class="h3 group-hover/button:text-primary group-data-active/item:text-primary text-primary-dark text-left transition-colors"
          >
            <?= t('t.index.faq_item_title_3') ?>
          </span>
          <span class="accordion-icon"></span>
        </button>
        <div id="content-3" class="max-h-0 overflow-hidden transition-all">
          <div class="grid gap-2 px-5 py-2.5 md:px-6 md:py-3">
            <p><?= t('t.index.faq_item_text_3') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-4"
        class="group/item rounded-custom border-primary-light overflow-hidden border-2 transition-all"
      >
        <button
          class="bg-primary-light group-data-active/item:text-primary group/button hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-5 py-2.5 md:px-6 md:py-3"
          onclick="toggleAccordion(4)"
        >
          <span
            class="h3 group-hover/button:text-primary group-data-active/item:text-primary text-primary-dark text-left transition-colors"
          >
            <?= t('t.index.faq_item_title_4') ?>
          </span>
          <span class="accordion-icon"></span>
        </button>
        <div id="content-4" class="max-h-0 overflow-hidden transition-all">
          <div class="grid gap-2 px-5 py-2.5 md:px-6 md:py-3">
            <p><?= t('t.index.faq_item_text_4') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-5"
        class="group/item rounded-custom border-primary-light overflow-hidden border-2 transition-all"
      >
        <button
          class="bg-primary-light group-data-active/item:text-primary group/button hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-5 py-2.5 md:px-6 md:py-3"
          onclick="toggleAccordion(5)"
        >
          <span
            class="h3 group-hover/button:text-primary group-data-active/item:text-primary text-primary-dark text-left transition-colors"
          >
            <?= t('t.index.faq_item_title_5') ?>
          </span>
          <span class="accordion-icon"></span>
        </button>
        <div id="content-5" class="max-h-0 overflow-hidden transition-all">
          <div class="grid gap-2 px-5 py-2.5 md:px-6 md:py-3">
            <p><?= t('t.index.faq_item_text_5') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
