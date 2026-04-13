<div class="py-14 md:py-20" id="product">
  <div class="container-narrow grid gap-8 md:col-span-2 md:gap-[60px]">
    <h2 class="text-center"><?= t('t.index.about_title') ?></h2>
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
      <div class="relative aspect-2/1">
        <?= pictureSet("rounded-custom pointer-events-none absolute inset-0 overflow-hidden", 'tether.jpg', null,
        "md:790px,100vw", ["class" => "w-full h-full object-cover"]) ?>
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
