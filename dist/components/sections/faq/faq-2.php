<div class="py-14 md:py-20" id="faq">
  <div class="container-base grid gap-8 md:gap-[60px]">
    <h2><?= t('t.index.faq_title') ?></h2>
    <div class="grid gap-6 md:gap-8">
      <div class="grid content-start gap-4 md:grid-cols-3 md:gap-8">
        <p class="h3"><?= t('t.index.faq_item_title_1') ?></p>
        <p class="md:col-span-2"><?= t('t.index.faq_item_text_1') ?></p>
      </div>
      <div class="grid content-start gap-4 md:grid-cols-3 md:gap-8">
        <p class="h3">
          <?= t('t.index.faq_item_title_2', ['{currency}' =>
          t('v.currencyAmount1')]) ?>
        </p>
        <p class="md:col-span-2">
          <?= t('t.index.faq_item_text_2', ['{currency}' =>
          t('v.currencyAmount1')]) ?>
        </p>
      </div>
      <div class="grid content-start gap-4 md:grid-cols-3 md:gap-8">
        <p class="h3"><?= t('t.index.faq_item_title_3') ?></p>
        <p class="md:col-span-2"><?= t('t.index.faq_item_text_3') ?></p>
      </div>
      <div class="grid content-start gap-4 md:grid-cols-3 md:gap-8">
        <p class="h3"><?= t('t.index.faq_item_title_4') ?></p>
        <p class="md:col-span-2"><?= t('t.index.faq_item_text_4') ?></p>
      </div>
      <div class="grid content-start gap-4 md:grid-cols-3 md:gap-8">
        <p class="h3"><?= t('t.index.faq_item_title_5') ?></p>
        <p class="md:col-span-2"><?= t('t.index.faq_item_text_5') ?></p>
      </div>
    </div>
  </div>
</div>
