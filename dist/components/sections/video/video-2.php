<div class="py-14 md:py-20">
  <div class="container-narrow grid gap-6 md:gap-8">
    <div class="grid gap-3 text-center md:gap-4">
      <h2><?= t('t.index.video_title') ?></h2>
      <p class="text-big"><?= t('t.index.video_text') ?></p>
    </div>
    <div class="rounded-custom relative overflow-hidden bg-black lg:col-span-2">
      <div class="absolute inset-0 flex items-center justify-center">
        <?php include 'components/icons/loader.php' ?>
      </div>
      <iframe
        class="relative aspect-video"
        data-src="https://player.vimeo.com/video/<?= getMainVideoId() ?>?dnt=1&amp;badge=0&amp;autopause=1"
        frameborder="0"
        referrerpolicy="strict-origin-when-cross-origin"
        title="<?= $offer_name ?>"
        data-lazy
      ></iframe>
    </div>
  </div>
</div>
