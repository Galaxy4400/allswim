<div class="pb-20 md:pb-10.5">
  <div class="container-base mb-5 flex h-[60px] items-center md:mb-6 md:h-[72px]">
    <?php include 'components/elements/breadcrumbs.php' ?>
  </div>
  <div class="container-narrow grid gap-6 md:gap-8">
    <h1 class="h2"><?= t('t.main.menu_privacy') ?></h1>
    <div class="grid gap-6 md:gap-8">
      <div class="grid gap-1.5 md:gap-2">
        <p class="text-gray-dark">
          <?= t('t.main.last_updated', ['{date}' =>
          date('d/m/Y')]) ?>
        </p>
        <p>
          <?= t('t.policy.privacy_1', ['{site}' => '<a
            class="link-primary"
            href="' . $protocolType . '://' . $_SERVER['HTTP_HOST'] . '"
            >'. $protocolType . '://' . $_SERVER['HTTP_HOST'] .'</a
          >']) ?>
        </p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="text-big disc font-semibold"><?= t('t.policy.privacy_2') ?></p>
        <p>
          <?= t('t.policy.privacy_3', ['{email}' => '<a class="link-primary" href="mailto:' . getEmail() . '"
            >'. getEmail() .'</a
          >']) ?>
        </p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="text-big disc font-semibold"><?= t('t.policy.privacy_4') ?></p>
        <p><?= t('t.policy.privacy_5') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="text-big disc font-semibold"><?= t('t.policy.privacy_6') ?></p>
        <p><?= t('t.policy.privacy_7') ?></p>
      </div>

      <div class="grid gap-2 md:gap-4">
        <p class="text-big disc font-semibold"><?= t('t.policy.privacy_8') ?></p>
        <p><?= t('t.policy.privacy_9') ?></p>
      </div>

      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>1.</span>
          <?= t('t.policy.privacy_10') ?>
        </h2>
        <p><?= t('t.policy.privacy_11') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>2.</span>
          <?= t('t.policy.privacy_12') ?>
        </h2>
        <p><?= t('t.policy.privacy_13') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>3.</span>
          <?= t('t.policy.privacy_14') ?>
        </h2>
        <p><?= t('t.policy.privacy_15') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>4.</span>
          <?= t('t.policy.privacy_16') ?>
        </h2>
        <p><?= t('t.policy.privacy_17') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>5.</span>
          <?= t('t.policy.privacy_18') ?>
        </h2>
        <div>
          <p><?= t('t.policy.privacy_19') ?></p>
          <ul class="list">
            <li><?= t('t.policy.privacy_20') ?></li>
            <li><?= t('t.policy.privacy_21') ?></li>
            <li><?= t('t.policy.privacy_22') ?></li>
          </ul>
          <p><?= t('t.policy.privacy_23') ?></p>
        </div>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3"><?= t('t.policy.scope') ?>, <?= t('t.policy.legal_basis') ?></h2>
        <div class="grid gap-3 md:gap-4">
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>1.</span>
              <?= t('t.policy.privacy_24') ?>
            </p>
            <p><?= t('t.policy.privacy_25') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>2.</span>
              <?= t('t.policy.privacy_26') ?>
            </p>
            <p><?= t('t.policy.privacy_27') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>3.</span>
              <?= t('t.policy.privacy_28') ?>
            </p>
            <p><?= t('t.policy.privacy_29') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>4.</span>
              <?= t('t.policy.privacy_30') ?>
            </p>
            <p><?= t('t.policy.privacy_31') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>5.</span>
              <?= t('t.policy.privacy_32') ?>
            </p>
            <p><?= t('t.policy.privacy_33') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>6.</span>
              <?= t('t.policy.privacy_34') ?>
            </p>
            <p><?= t('t.policy.privacy_35') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>7.</span>
              <?= t('t.policy.privacy_36') ?>
            </p>
            <p><?= t('t.policy.privacy_37') ?></p>
          </div>
          <div class="grid gap-1.5 md:gap-2">
            <p class="flex gap-1">
              <span>8.</span>
              <?= t('t.policy.privacy_38') ?>
            </p>
            <p><?= t('t.policy.privacy_39') ?></p>
          </div>
        </div>
      </div>

      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>6.</span>
          <?= t('t.policy.privacy_40') ?>
        </h2>
        <p><?= t('t.policy.privacy_41') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>7.</span>
          <?= t('t.policy.privacy_42') ?>
        </h2>
        <p><?= t('t.policy.privacy_43') ?></p>
      </div>
      <div class="grid gap-2">
        <h2 class="h3 flex gap-2"><?= t('t.policy.privacy_44') ?></h2>
        <p><?= t('t.policy.privacy_45') ?></p>
      </div>

      <div class="grid gap-3 md:gap-4">
        <div class="grid gap-1.5 md:gap-2">
          <p class="text-big flex gap-1 font-semibold">
            <span>1.</span>
            <?= t('t.policy.privacy_46') ?>
          </p>
          <p><?= t('t.policy.privacy_47') ?></p>
          <p><?= t('t.policy.privacy_48') ?></p>
        </div>
        <div class="grid gap-1.5 md:gap-2">
          <p class="text-big flex gap-1 font-semibold">
            <span>2.</span>
            <?= t('t.policy.privacy_49') ?>
          </p>
          <p><?= t('t.policy.privacy_50') ?></p>
          <p><?= t('t.policy.privacy_51') ?></p>
        </div>
        <div class="grid gap-1.5 md:gap-2">
          <p class="text-big flex gap-1 font-semibold">
            <span>3.</span>
            <?= t('t.policy.privacy_52') ?>
          </p>
          <p><?= t('t.policy.privacy_53') ?></p>
          <p><?= t('t.policy.privacy_54') ?></p>
        </div>
      </div>

      <div class="grid gap-2 md:gap-4">
        <div>
          <p><?= t('t.policy.privacy_55') ?></p>
          <ul class="list">
            <li>Firefox</li>
            <li>Microsoft Edge</li>
            <li>Google Chrome</li>
            <li>Safari</li>
          </ul>
          <p><?= t('t.policy.privacy_56') ?></p>
        </div>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3"><?= t('t.policy.privacy_57') ?></h2>
        <h2 class="h3 flex gap-2">
          <span>8.</span>
          <?= t('t.policy.privacy_58') ?>
        </h2>
        <p><?= t('t.policy.privacy_59') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>9.</span>
          <?= t('t.policy.privacy_60') ?>
        </h2>
        <div>
          <p><?= t('t.policy.privacy_61') ?></p>
          <ul class="list">
            <li><?= t('t.policy.privacy_62') ?></li>
            <li><?= t('t.policy.privacy_63') ?></li>
            <li><?= t('t.policy.privacy_64') ?></li>
          </ul>
          <p>
            <?= t('t.policy.privacy_65', ['{email}' => '<a class="link-primary" href="mailto:' . getEmail() . '"
              >'. getEmail() .'</a
            >']) ?>
          </p>
        </div>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>10.</span>
          <?= t('t.policy.privacy_66') ?>
        </h2>
        <p><?= t('t.policy.privacy_67') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>11.</span>
          <?= t('t.policy.privacy_68') ?>
        </h2>
        <p><?= t('t.policy.privacy_69') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>12.</span>
          <?= t('t.policy.privacy_70') ?>
        </h2>
        <p><?= t('t.policy.privacy_71') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="h3 flex gap-2">
          <span>13.</span>
          <?= t('t.policy.privacy_72') ?>
        </h2>
        <p><?= t('t.policy.privacy_73') ?></p>
      </div>
    </div>
    <a class="btn btn-primary-light md:justify-self-start" href="<?= url('terms') ?>"><?= t('t.main.to_terms') ?></a>
  </div>
</div>
