<div class="bg-dark relative">
  <div class="mirror-y absolute inset-0 overflow-hidden">
    <div
      class="bg-primary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"
    ></div>
    <div
      class="bg-primary absolute top-[15%] left-[50%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"
    ></div>
  </div>
  <div class="absolute inset-0 flex justify-center">
    <div class="container-whide relative w-screen">
      <div
        class="pointer-events-none absolute top-[-25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[-15px] md:left-[8%] md:w-[150px]"
      >
        <?= pictureSet("", 'ethereum-f.png', null, "md:150px,80px", [], false) ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[380px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[81px] md:left-[46%] md:w-[250px]"
      >
        <?= pictureSet("", 'bitcoin-r.png', null, "md:250px,150px", [], false) ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[-59px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-70px] md:left-[42%] md:w-[200px]"
      >
        <?= pictureSet("", 'solana-l.png', null, "md:200px,110px", [], false) ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div
      class="grid min-h-[674px] items-center gap-20 max-md:grid-rows-[1fr_auto] max-md:pt-10.5 md:min-h-[582px] md:grid-cols-2 md:gap-8"
    >
      <div class="relative z-10 grid gap-5 md:gap-6 md:py-20">
        <h1 class="text-primary-lightest"><?= t('t.index.hero_title') ?></h1>
      </div>
      <div class="relative z-5 grid h-full content-center md:py-10.5 md:pl-7">
        <div
          class="bg-primary absolute top-0 left-1/2 h-full w-screen max-md:-translate-x-1/2 max-md:rounded-t-[40px] md:left-0 md:rounded-l-[60px]"
        ></div>
        <div class="relative grid gap-5 py-10.5 md:gap-6 md:pl-8">
          <p class="text-primary-lightest h3 max-md:hidden"><?= t('t.index.hero_text') ?></p>
          <p class="text-primary-lightest text-big md:hidden"><?= t('t.index.hero_text') ?></p>
          <?php include 'components/forms/main.php' ?>
        </div>
      </div>
    </div>
  </div>
</div>
