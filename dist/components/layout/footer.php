<footer class="bg-dark relative overflow-hidden py-10 max-md:text-center md:py-20">
  <div
    class="bg-primary absolute top-1/2 left-full h-[564px] w-[93px] -translate-1/2 rounded-[789px] blur-[150px] md:top-full md:left-[60%] md:h-[789px] md:-rotate-90"
  ></div>
  <div class="container-base relative">
    <div class="border-primary-lightest/30 flex items-center justify-between gap-8 border-b pb-6 max-md:flex-col">
      <div class="grid gap-3 md:justify-items-start md:gap-4">
        <a
          class="font-special hover:text-secondary text-primary-lightest max-w-60 text-xl leading-none uppercase"
          href="<?= url() ?>"
        >
          <?= $offer_name ?>
        </a>
        <?php include 'components/elements/lang-selector.php' ?>
      </div>
      <ul class="flex flex-col flex-wrap justify-center gap-x-4 md:flex-row">
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('','', '#product') ?>">
            <?= t('t.main.menu_product') ?>
          </a>
        </li>
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('','', '#benefits') ?>">
            <?= t('t.main.menu_benefits') ?>
          </a>
        </li>
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('','', '#start') ?>">
            <?= t('t.main.menu_start') ?>
          </a>
        </li>
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('','', '#reviews') ?>">
            <?= t('t.main.menu_reviews') ?>
          </a>
        </li>
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('','', '#faq') ?>">
            <?= t('t.main.menu_faq') ?>
          </a>
        </li>
      </ul>
      <a class="hover:text-secondary text-primary-lightest inline-block p-3 break-all" href="mailto:<?= getEmail() ?>">
        <?= getEmail() ?>
      </a>
    </div>
    <div class="flex flex-wrap items-center justify-between gap-6 pt-6 max-md:flex-col-reverse md:gap-8">
      <p class="text-primary-lightest md:order-2">
        <?= t('t.main.footer_copy', ['{year}' =>
        date('Y')]) ?>
      </p>
      <div class="text-gray-lighter text-small grid basis-full gap-1 text-start md:order-1 md:gap-2">
        <p><?= t('t.main.footer_text') ?></p>
      </div>
      <ul class="flex flex-wrap gap-x-4 md:order-3 md:flex-row">
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('privacy') ?>">
            <?= t('t.main.menu_privacy') ?>
          </a>
        </li>
        <li>
          <a class="hover:text-secondary text-primary-lightest inline-block p-3" href="<?= url('terms') ?>">
            <?= t('t.main.menu_terms') ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
