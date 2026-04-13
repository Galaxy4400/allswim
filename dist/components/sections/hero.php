<div class="bg-dark rounded-custom-xl relative rounded-t-none">
  <div class="rounded-custom-xl absolute inset-0 overflow-hidden rounded-t-none">
    <div
      class="bg-primary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[90%] md:h-[500px] md:w-[500px] md:blur-[150px]"
    ></div>
    <div
      class="bg-primary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"
    ></div>
  </div>
  <div class="absolute inset-0 flex justify-center">
    <div class="container-whide relative w-screen">
      <div
        class="pointer-events-none absolute -top-[25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[50px] md:left-[93%] md:w-[150px]"
      >
        <?= pictureSet("", 'ethereum-f.png', null, "md:150px,80px", [], false) ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[340px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[120px] md:left-[8%] md:w-[250px]"
      >
        <?= pictureSet("", 'bitcoin-r.png', null, "md:250px,150px", [], false) ?>
      </div>
      <div
        class="pointer-events-none absolute -bottom-[30px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:-bottom-[50px] md:left-[78%] md:w-[200px]"
      >
        <?= pictureSet("", 'solana-l.png', null, "md:200px,110px", [], false) ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div
      class="grid min-h-[720px] grid-rows-[1fr_auto] gap-20 py-10.5 md:min-h-[657px] md:content-center md:gap-[60px] md:py-20"
    >
      <div class="relative z-10 grid gap-5 text-center md:gap-6">
        <h1 class="text-primary-lightest"><?= t('t.index.hero_title') ?></h1>
        <p class="text-primary-lightest h3"><?= t('t.index.hero_text') ?></p>
      </div>
      <div class="glass group/long relative z-5 overflow-hidden" data-is>
        <?php include 'components/forms/main.php' ?>
      </div>
    </div>
  </div>
</div>
