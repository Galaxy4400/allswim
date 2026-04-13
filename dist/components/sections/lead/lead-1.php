<div class="bg-primary relative">
  <div class="absolute inset-0 flex justify-center">
    <div class="container-whide relative w-screen">
      <div
        class="pointer-events-none absolute left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 max-md:top-[-25px] md:bottom-[21px] md:left-[23%] md:w-[150px]"
      >
        <?= pictureSet("", 'tether-f.png', null, "md:150px,80px") ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[405px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[30px] md:left-[47%] md:w-[250px]"
      >
        <?= pictureSet("", 'bnb-r.png', null, "md:250px,150px") ?>
      </div>
      <div
        class="pointer-events-none absolute -bottom-[30px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-50px] md:left-[92%] md:w-[200px]"
      >
        <?= pictureSet("", 'xrp-l.png', null, "md:200px,120px") ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div class="grid min-h-[720px] items-center gap-20 py-10.5 md:min-h-[582px] md:grid-cols-2 md:gap-8 md:py-20">
      <div class="relative z-10 grid gap-8 md:gap-[60px]">
        <h2 class="text-primary-lightest"><?= t('t.index.lead_title') ?></h2>
        <div class="text-primary-lightest grid gap-6 md:gap-8">
          <p><?= t('t.index.lead_text_1') ?></p>
          <p><?= t('t.index.lead_text_2') ?></p>
        </div>
      </div>
      <div class="panel bg-dark relative z-5 grid gap-5 overflow-hidden md:gap-6">
        <p class="text-primary-lightest h3"><?= t('t.index.lead_label') ?></p>
        <?php include 'components/forms/main.php' ?>
      </div>
    </div>
  </div>
</div>
