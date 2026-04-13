<div class="py-14 md:py-20" id="reviews">
  <div class="container-base grid gap-8 md:gap-[60px]">
    <div class="grid gap-3 text-center md:gap-4">
      <h2><?= t('t.index.stories_title') ?></h2>
      <p class="text-big"><?= t('t.index.stories_text') ?></p>
    </div>
    <div class="relative grid gap-2 md:px-[100px]">
      <div class="grid gap-1.5 overflow-hidden" data-slider="stories-scale">
        <div class="-ml-6 flex md:ml-0">
          <?php foreach (getReviewsVideoIds() as $videoId) { ?>
          <div class="basis-full pl-6 md:basis-1/2 md:pl-0 lg:basis-1/3">
            <div class="rounded-custom relative aspect-5/9 overflow-hidden">
              <div class="absolute inset-0 flex items-center justify-center">
                <?php include 'components/icons/loader.php' ?>
              </div>
              <iframe
                class="absolute inset-0 h-full w-full"
                data-src="https://player.vimeo.com/video/<?= $videoId ?>?dnt=1&amp;title=0&amp;badge=0&amp;autopause=1"
                frameborder="0"
                referrerpolicy="strict-origin-when-cross-origin"
                title="<?= $offer_name ?>"
                data-lazy
              ></iframe>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div
        class="pointer-events-none flex w-full justify-between gap-8 md:absolute md:top-1/2 md:left-0 md:-translate-y-1/2"
      >
        <button class="arrow-btn mirror-x" data-prev="stories-scale" aria-label="<?= t('t.aria.prev_slide') ?>">
          <?php include 'components/icons/arrow-slider.php' ?>
        </button>
        <button class="arrow-btn" data-next="stories-scale" aria-label="<?= t('t.aria.next_slide') ?>">
          <?php include 'components/icons/arrow-slider.php' ?>
        </button>
      </div>
    </div>
  </div>
</div>
