<div class="bg-dark relative">
  <div class="mirror-x absolute inset-0 overflow-hidden">
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
        class="pointer-events-none absolute top-[-25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[-15px] md:left-[8%] md:w-[150px]"
      >
        <?= pictureSet("", 'tether-f.png', null, "md:150px,80px") ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[405px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[25px] md:left-[47%] md:w-[250px]"
      >
        <?= pictureSet("", 'bnb-r.png', null, "md:250px,150px") ?>
      </div>
      <div
        class="pointer-events-none absolute -bottom-[30px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-70px] md:left-[92%] md:w-[200px]"
      >
        <?= pictureSet("", 'xrp-l.png', null, "md:200px,120px") ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div class="grid items-center gap-20 py-10.5 md:min-h-[655px] md:grid-cols-2 md:gap-8 md:py-20">
      <div class="relative z-10 grid gap-8 md:gap-[60px]">
        <h2 class="text-primary-lightest"><?= t('t.index.lead_title') ?></h2>
        <div class="text-primary-lightest grid gap-6 md:gap-8">
          <p><?= t('t.index.lead_text_1') ?></p>
          <p><?= t('t.index.lead_text_2') ?></p>
        </div>
      </div>
      <div class="glass relative z-5 grid gap-5 overflow-hidden md:gap-6">
        <p class="h3 text-primary-lightest text-center"><?= t('t.index.lead_label') ?></p>
        <?php include 'components/forms/main.php' ?>
      </div>
    </div>
  </div>
</div>
