<nav class="mobile-menu" data-mobile-menu>
  <div class="md:hidden"><?php include 'components/elements/lang-selector.php' ?></div>
  <ul class="flex flex-col flex-wrap items-center justify-center gap-y-5">
    <li>
      <a class="text-primary-lightest hover:text-secondary-light text-lg" href="<?= url('', '', '#product') ?>">
        <?= t('t.main.menu_product') ?>
      </a>
    </li>
    <li>
      <a class="text-primary-lightest hover:text-secondary-light text-lg" href="<?= url('', '', '#benefits') ?>">
        <?= t('t.main.menu_benefits') ?>
      </a>
    </li>
    <li>
      <a class="text-primary-lightest hover:text-secondary-light text-lg" href="<?= url('', '', '#start') ?>">
        <?= t('t.main.menu_start') ?>
      </a>
    </li>
    <li>
      <a class="text-primary-lightest hover:text-secondary-light text-lg" href="<?= url('', '', '#reviews') ?>">
        <?= t('t.main.menu_reviews') ?>
      </a>
    </li>
    <li>
      <a class="text-primary-lightest hover:text-secondary-light text-lg" href="<?= url('', '', '#faq') ?>">
        <?= t('t.main.menu_faq') ?>
      </a>
    </li>
  </ul>
  <a class="btn btn-secondary w-full" href="<?= url('', '', '#') ?>"><?= t('t.main.signup') ?></a>
</nav>
