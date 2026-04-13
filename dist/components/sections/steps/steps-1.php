<div class="py-14 md:py-20" id="start">
  <div class="container-base grid gap-8 md:gap-[60px]">
    <div class="grid gap-3 text-center md:gap-4">
      <h2><?= t('t.index.steps_title') ?></h2>
      <p class="text-big"><?= t('t.index.steps_text') ?></p>
    </div>
    <div class="max-md:overflow-x-scroll max-md:overflow-y-hidden">
      <div class="grid gap-6 max-md:flex md:grid-cols-2 md:gap-8 lg:grid-cols-3">
        <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
          <div class="icon-wrapper"><?php include 'components/icons/num-1.php' ?></div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.steps_item_title_1') ?></p>
            <p><?= t('t.index.steps_item_text_1') ?></p>
          </div>
        </div>
        <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
          <div class="icon-wrapper"><?php include 'components/icons/num-2.php' ?></div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.steps_item_title_2') ?></p>
            <p>
              <?= t('t.index.steps_item_text_2', ['{currency}' =>
              t('v.currencyAmount1')]) ?>
            </p>
          </div>
        </div>
        <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
          <div class="icon-wrapper"><?php include 'components/icons/num-3.php' ?></div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.steps_item_title_3') ?></p>
            <p><?= t('t.index.steps_item_text_3') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
