<div class="py-14 md:py-20">
  <div class="container-base grid gap-8 md:gap-[60px]">
    <div class="max-w-container-narrow mx-auto grid gap-3 text-center md:gap-4">
      <h2><?= t('t.index.trust_title') ?></h2>
      <p class="text-big"><?= t('t.index.trust_text') ?></p>
    </div>
    <div class="grid gap-5 md:gap-6">
      <p class="h3 max-w-container-narrow mx-auto text-center"><?= t('t.index.trust_label') ?></p>
      <div class="max-md:overflow-x-scroll max-md:overflow-y-hidden">
        <div class="grid gap-5 max-md:flex md:grid-cols-2 md:gap-6">
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/bank.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.trust_item_title_1') ?></p>
              <p><?= t('t.index.trust_item_text_1') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/security.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.trust_item_title_2') ?></p>
              <p><?= t('t.index.trust_item_text_2') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/transparent.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.trust_item_title_3') ?></p>
              <p><?= t('t.index.trust_item_text_3') ?></p>
            </div>
          </div>
          <div class="card shrink-0 max-md:w-[300px] max-sm:w-[80%]">
            <div class="icon-wrapper"><?php include 'components/icons/support.php' ?></div>
            <div class="grid gap-1.5 md:gap-2">
              <p class="h3"><?= t('t.index.trust_item_title_4') ?></p>
              <p><?= t('t.index.trust_item_text_4') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
