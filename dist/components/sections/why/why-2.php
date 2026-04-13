<div class="py-14 md:py-20">
  <div class="container-base grid gap-8 md:col-span-2 md:gap-[60px]">
    <h2 class="text-center">
      <?= t('t.index.why_title', ['{year}' =>
      date('Y')]) ?>
    </h2>
    <div class="grid gap-5 md:grid-cols-2 md:gap-6 lg:grid-cols-3">
      <div class="relative">
        <?= pictureSet("rounded-custom pointer-events-none absolute inset-0 overflow-hidden", 'laptop-1.jpg', $theme,
        "md:1000px,100vw", ["class" => "w-full h-full object-cover"]) ?>
      </div>
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
