<div class="py-14 md:py-20" id="product">
  <div class="container-base grid gap-6 md:grid-cols-3 md:gap-8">
    <?= pictureSet("block rounded-custom aspect-8/17 overflow-hidden max-md:hidden", 'phone-1.jpg', $theme,
    "md:1000px,100vw", ["class" => "w-full h-full object-cover"]) ?>
    <div class="grid gap-8 md:col-span-2 md:gap-[60px]">
      <h2><?= t('t.index.about_title') ?></h2>
      <?= pictureSet("block rounded-custom aspect-6/5 overflow-hidden md:hidden", 'phone-1.jpg', $theme,
      "md:1000px,100vw", ["class" => "w-full h-full object-cover"]) ?>
      <div class="grid gap-5 md:gap-6">
        <div class="card">
          <p><?= t('t.index.about_item_text_1') ?></p>
        </div>
        <div class="card">
          <p><?= t('t.index.about_item_text_2') ?></p>
        </div>
        <div class="card">
          <p><?= t('t.index.about_item_text_3') ?></p>
        </div>
        <div class="card">
          <p>
            <?= t('t.index.about_item_text_4', ['{currency}' =>
            t('v.currencyAmount1')]) ?>
          </p>
        </div>
        <div class="card">
          <p><?= t('t.index.about_item_text_5') ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
