<div class="py-14 md:py-20" id="benefits">
  <div class="container-base grid gap-8 md:gap-[60px]">
    <h2 class="text-center"><?= t('t.index.benefits_title') ?></h2>
    <div class="max-md:overflow-x-scroll max-md:overflow-y-hidden">
      <div class="grid gap-5 max-md:flex md:gap-6">
        <div class="grid gap-5 max-md:flex md:grid-cols-2 md:gap-6 lg:grid-cols-3">
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80vw]">
            <div class="icon-wrapper"><?php include 'components/icons/user-love.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_1') ?></p>
              <p><?= t('t.index.benefits_item_text_1') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80vw]">
            <div class="icon-wrapper"><?php include 'components/icons/official-regulated.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_2') ?></p>
              <p><?= t('t.index.benefits_item_text_2') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80vw]">
            <div class="icon-wrapper"><?php include 'components/icons/ai-trading.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_3') ?></p>
              <p>
                <?= t('t.index.benefits_item_text_3', ['{currency}' =>
                t('v.currencyAmount1')]) ?>
              </p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80vw] lg:hidden">
            <div class="icon-wrapper"><?php include 'components/icons/trading-access.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_4') ?></p>
              <p><?= t('t.index.benefits_item_text_4') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80vw] lg:hidden">
            <div class="icon-wrapper"><?php include 'components/icons/customer-support.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_5') ?></p>
              <p><?= t('t.index.benefits_item_text_5') ?></p>
            </div>
          </div>
        </div>
        <div class="grid gap-5 max-lg:hidden max-md:flex md:grid-cols-2 md:gap-6">
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/trading-access.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_4') ?></p>
              <p><?= t('t.index.benefits_item_text_4') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/customer-support.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.benefits_item_title_5') ?></p>
              <p><?= t('t.index.benefits_item_text_5') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
