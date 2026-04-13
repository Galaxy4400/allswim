<div class="bg-primary relative">
  <div class="absolute inset-0 flex justify-center">
    <div class="container-whide relative w-screen">
      <div
        class="pointer-events-none absolute top-[-25px] left-[60%] z-3 w-20 -translate-x-1/2 rotate-10 md:top-[-15px] md:left-[8%] md:w-[150px]"
      >
        <?= pictureSet("", 'tether-f.png', null, "md:150px,80px") ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[380px] left-[30%] z-3 w-[150px] -translate-x-1/2 -rotate-10 md:top-[21px] md:left-[46%] md:w-[250px]"
      >
        <?= pictureSet("", 'bnb-r.png', null, "md:250px,150px") ?>
      </div>
      <div
        class="pointer-events-none absolute bottom-[-59px] left-[70%] z-7 w-[110px] -translate-x-1/2 md:bottom-[-95px] md:left-[89%] md:w-[200px]"
      >
        <?= pictureSet("", 'xrp-l.png', null, "md:200px,120px") ?>
      </div>
    </div>
  </div>
  <div class="container-base">
    <div class="grid min-h-[674px] items-center gap-20 max-md:pt-10.5 md:min-h-[582px] md:grid-cols-2 md:gap-8">
      <div class="relative z-10 grid gap-8 md:gap-[60px]">
        <h2 class="text-primary-lightest"><?= t('t.index.lead_title') ?></h2>
        <div class="text-primary-lightest grid gap-6 md:gap-8">
          <p><?= t('t.index.lead_text_1') ?></p>
          <p><?= t('t.index.lead_text_2') ?></p>
        </div>
      </div>
      <div class="relative z-5 grid h-full content-center md:py-10.5 md:pl-7">
        <div
          class="bg-dark absolute top-0 left-1/2 h-full w-screen max-md:-translate-x-1/2 max-md:rounded-t-[40px] md:left-0 md:rounded-l-[60px]"
        ></div>
        <div class="relative grid gap-5 py-10.5 md:gap-6 md:pl-8">
          <p class="text-primary-lightest h3"><?= t('t.index.lead_label') ?></p>
          <?php include 'components/forms/main.php' ?>
        </div>
      </div>
    </div>
  </div>
</div>
