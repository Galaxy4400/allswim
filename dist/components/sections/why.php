<div class="py-14 md:py-20">
  <div class="container-base grid gap-6 md:gap-8 lg:grid-cols-3">
    <div class="grid gap-8 md:gap-[60px] lg:col-span-2">
      <h2>
        <?= t('t.index.why_title', ['{year}' =>
        date('Y')]) ?>
      </h2>
      <div class="grid gap-5 md:gap-6">
        <div class="card">
          <p>
            <?= t('t.index.why_item_text_1', ['{year}' =>
            date('Y')]) ?>
          </p>
        </div>
        <div class="card">
          <p>
            <?= t('t.index.why_item_text_2', ['{year}' =>
            date('Y')]) ?>
          </p>
        </div>
        <div class="card">
          <p>
            <?= t('t.index.why_item_text_3', ['{year}' =>
            date('Y')]) ?>
          </p>
        </div>
        <?= pictureSet("rounded-custom block aspect-7/5 max-h-[450px] w-full overflow-hidden lg:hidden", 'coins-1.jpg',
        $theme, "md:1000px,100vw", ["class" => "w-full h-full object-cover"]) ?>
        <div class="card">
          <p>
            <?= t('t.index.why_item_text_4', ['{year}' => date('Y'), '{year_prev}' => date('Y') - 1, '{year_next}' =>
            date('Y') + 1]) ?>
          </p>
        </div>
        <div class="card">
          <p>
            <?= t('t.index.why_item_text_5', ['{year}' =>
            date('Y')]) ?>
          </p>
        </div>
      </div>
    </div>
    <?= pictureSet("block rounded-custom aspect-8/19 overflow-hidden max-lg:hidden", 'coins-1.jpg', $theme,
    "md:1000px,100vw", ["class" => "w-full h-full object-cover"]) ?>
  </div>
</div>
