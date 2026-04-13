<div class="bg-dark rounded-custom-xl text-primary-lightest relative rounded-t-none py-10.5 md:py-20">
  <div class="rounded-custom-xl mirror-x absolute inset-0 overflow-hidden rounded-t-none">
    <div
      class="bg-primary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"
    ></div>
    <div
      class="bg-primary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"
    ></div>
  </div>
  <div class="absolute inset-0 flex justify-center">
    <div class="container-base relative w-screen">
      <div
        class="pointer-events-none absolute left-[78%] z-7 w-[120px] -translate-x-1/2 max-lg:bottom-[-42px] md:w-[200px] lg:top-[-60px] lg:z-3"
      >
        <?= pictureSet("", 'tether-l.png', null, "md:200px,120px") ?>
      </div>
      <div
        class="pointer-events-none absolute left-[20%] z-3 w-[200px] -translate-x-1/2 max-lg:top-[-70px] md:w-[350px] lg:bottom-[-70px] lg:left-[13%]"
      >
        <?= pictureSet("", 'bnb-r.png', null, "md:350px,200px") ?>
      </div>
    </div>
  </div>
  <div class="container-narrow">
    <div class="glass relative z-5 grid justify-items-center gap-8 md:gap-12">
      <div class="grid gap-5 md:gap-6 md:text-center">
        <h2><?= t('t.index.cta1_title') ?></h2>
        <p class="text-big"><?= t('t.index.cta1_text') ?></p>
      </div>
      <a class="btn btn-long btn-secondary" href="<?= url('', '', '#') ?>"><?= t('t.main.signup') ?></a>
    </div>
  </div>
</div>
