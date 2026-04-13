<div class="py-14 md:py-20">
  <div class="container-narrow grid gap-8 md:col-span-2 md:gap-[60px]">
    <h2 class="text-center">
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
      <div class="relative aspect-2/1">
        <?= pictureSet("rounded-custom pointer-events-none absolute inset-0 overflow-hidden", 'bitcoin.jpg', null,
        "md:790px,100vw", ["class" => "w-full h-full object-cover"]) ?>
      </div>
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
</div>
