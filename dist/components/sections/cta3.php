<div class="bg-primary relative max-md:pt-[120px]">
  <div class="absolute inset-0 flex justify-center">
    <div class="container-base relative w-screen">
      <div
        class="pointer-events-none absolute left-[25%] z-3 w-[120px] -translate-x-1/2 max-md:top-[41px] md:bottom-[-60px] md:left-[7%] md:w-[200px]"
      >
        <?= pictureSet("", 'solana-r.png', null, "md:200px,120px") ?>
      </div>
      <div
        class="pointer-events-none absolute top-[-66px] left-[65%] z-3 w-[200px] -translate-x-1/2 md:top-[-70px] md:left-[22%] md:w-[350px]"
      >
        <?= pictureSet("", 'ethereum-l.png', null, "md:350px,200px") ?>
      </div>
    </div>
  </div>
  <div class="container-base grid gap-6 md:grid-cols-3">
    <div
      class="relative z-5 grid content-center gap-8 py-8 md:col-span-2 md:col-start-2 md:gap-12 md:py-12 md:pl-[60px] lg:pl-[120px]"
    >
      <div
        class="bg-dark absolute top-0 left-1/2 h-full w-screen max-md:-translate-x-1/2 max-md:rounded-t-[40px] md:left-0 md:rounded-l-[60px]"
      ></div>
      <div class="text-primary-lightest relative grid gap-5 md:gap-6">
        <h2><?= t('t.index.cta3_title', ['{currency}' => t('v.currencyAmount1')]) ?></h2>
        <p class="text-big"><?= t('t.index.cta3_text') ?></p>
      </div>
      <a class="btn btn-long btn-secondary relative" href="<?= url('', '', '#') ?>"><?= t('t.main.signup') ?></a>
    </div>
  </div>
</div>
