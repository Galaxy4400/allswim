<form
  name="form"
  method="post"
  class="group rounded-custom-sm relative bg-white p-4 md:px-6 md:py-8"
  action="./"
  data-form
>
  <input type="hidden" name="signin-form" value="1" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-6">
    <h1 class="h2"><?= t('t.pages.login_title') ?></h1>
    <div class="grid gap-2 md:gap-3.5">
      <input
        class="input"
        type="text"
        name="first_name"
        placeholder="<?= t('t.forms.first_name_label') ?>"
        required
        data-regexp="^[^\d]+$"
        data-should-validate
      />
      <input
        class="input input-white"
        type="password"
        name="password"
        placeholder="<?= t('t.forms.password_label') ?>"
        required
        data-should-validate
      />
      <a class="link justify-self-end" href="<?= url('forgot') ?>"><?= t('t.forms.forgot') ?></a>
    </div>
    <div>
      <button
        class="btn btn-gradient flex w-full items-center gap-2.5 group-data-novalid:cursor-default group-data-novalid:bg-gray-300"
        type="submit"
      >
        <?= t('t.main.signin') ?>
      </button>
    </div>

    <div class="form-message" data-form-message>
      <p class="h3" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p>
      <?= t('t.forms.no_account') ?>
      <a class="link" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
    </p>
  </div>
</form>
