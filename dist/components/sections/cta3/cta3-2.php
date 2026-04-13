<div class="bg-primary rounded-custom-xl text-primary-lightest relative rounded-t-none py-10.5 md:py-20">
  <div class="absolute inset-0 flex justify-center">
    <div class="container-base relative w-screen">
      <div
        class="pointer-events-none absolute bottom-[-50px] left-[25%] z-7 w-[120px] -translate-x-1/2 md:w-[200px] lg:top-[-60px] lg:z-3"
      >
        <?= pictureSet("", 'solana-r.png', null, "md:200px,120px") ?>
      </div>
      <div
        class="pointer-events-none absolute left-[70%] z-3 w-[200px] -translate-x-1/2 max-lg:top-[-65px] md:w-[350px] lg:bottom-2.5 lg:left-[80%] lg:z-7"
      >
        <?= pictureSet("", 'ethereum-l.png', null, "md:350px,200px") ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div class="glass relative z-5 grid gap-8 md:gap-12">
      <div class="grid gap-5 md:gap-6 lg:pr-[343px]">
        <h2><?= t('t.index.cta3_title', ['{currency}' => t('v.currencyAmount1')]) ?></h2>
        <p class="text-big"><?= t('t.index.cta3_text') ?></p>
      </div>
      <a class="btn btn-long btn-secondary" href="<?= url('', '', '#') ?>"><?= t('t.main.signup') ?></a>
    </div>
  </div>
</div>
