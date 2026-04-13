<div class="py-14 md:py-20">
  <div class="container-base grid gap-8 md:gap-6">
    <div
      class="bg-gray-lighter rounded-custom grid items-start gap-5 px-4 py-5 md:grid-cols-3 md:gap-8 md:px-5 md:py-6"
    >
      <?= pictureSet("rounded-custom overflow-hidden", 'persone.jpg', null, "md:380px,100vw") ?>
      <div class="grid gap-5 md:col-span-2 md:gap-6 xl:px-8 xl:py-6">
        <div class="grid gap-1.5 md:gap-2">
          <p class="h3"><?= t('t.index.review_title') ?></p>
          <p class="text-gray-dark"><?= t('t.index.review_text') ?></p>
        </div>
        <p><?= t('t.index.review_label') ?></p>
      </div>
    </div>
  </div>
</div>
