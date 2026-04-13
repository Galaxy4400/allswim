<div class="pb-20 md:pb-10.5">
  <div class="container-base mb-5 flex h-[60px] items-center md:mb-6 md:h-[72px]">
    <?php include 'components/elements/breadcrumbs.php' ?>
  </div>
  <div class="container-narrow grid gap-6 md:gap-8">
    <h1 class="h2"><?= t('t.main.menu_terms') ?></h1>
    <div class="grid gap-6 md:gap-8">
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>1.</span>
          <?= t('t.policy.conditions_1') ?>
        </h2>
        <p>
          <?= t('t.policy.conditions_2', ['{site}' => '<a
            class="link-primary"
            href="' . $protocolType . '://' . $_SERVER['HTTP_HOST'] . '"
            >'. $protocolType . '://' . $_SERVER['HTTP_HOST'] .'</a
          >', '{email}' => '<a class="link-primary" href="mailto:' . getEmail() . '">'. getEmail() .'</a>']) ?>
        </p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>2.</span>
          <?= t('t.policy.conditions_3') ?>
        </h2>
        <p><?= t('t.policy.conditions_4') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>3.</span>
          <?= t('t.policy.conditions_5') ?>
        </h2>
        <p><?= t('t.policy.conditions_6') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>4.</span>
          <?= t('t.policy.conditions_7') ?>
        </h2>
        <p><?= t('t.policy.conditions_8') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>5.</span>
          <?= t('t.policy.conditions_9') ?>
        </h2>
        <p><?= t('t.policy.conditions_10') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>6.</span>
          <?= t('t.policy.conditions_11') ?>
        </h2>
        <p><?= t('t.policy.conditions_12') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>7.</span>
          <?= t('t.policy.conditions_13') ?>
        </h2>
        <p><?= t('t.policy.conditions_14') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>8.</span>
          <?= t('t.policy.conditions_15') ?>
        </h2>
        <p><?= t('t.policy.conditions_16') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>9.</span>
          <?= t('t.policy.conditions_17') ?>
        </h2>
        <p><?= t('t.policy.conditions_18') ?></p>
      </div>
    </div>
    <a class="btn btn-primary-light md:justify-self-start" href="<?= url('privacy') ?>">
      <?= t('t.main.to_privacy') ?>
    </a>
  </div>
</div>
