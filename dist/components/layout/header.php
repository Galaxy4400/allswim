<header class="bg-dark fixed top-0 left-0 z-50 w-full">
  <div class="container-base">
    <div class="flex min-h-[60px] items-center justify-between gap-8 md:min-h-[70px]">
      <a
        class="font-special hover:text-secondary-light text-primary-lightest max-w-60 text-xl leading-none uppercase"
        href="<?= url() ?>"
      >
        <?= $offer_name ?>
      </a>
      <?php include 'components/elements/header-menu.php' ?>
      <div class="flex shrink-0 items-center gap-4 max-md:hidden">
        <?php include 'components/elements/lang-selector.php' ?>
        <a class="btn btn-small btn-primary-light" href="<?= url('', '', '#') ?>"><?= t('t.main.signup') ?></a>
      </div>
      <button class="menu-icon" data-menu-icon aria-label="<?= t('t.aria.open_menu') ?>">
        <?php include 'components/icons/menu-icon.php' ?>
      </button>
    </div>
  </div>
  <?php include 'components/elements/mobile-menu.php' ?>
</header>
