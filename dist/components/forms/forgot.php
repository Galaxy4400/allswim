<form
  name="form"
  method="post"
  class="group rounded-custom-sm relative bg-white p-4 md:px-6 md:py-8"
  action="./"
  data-form
>
  <input type="hidden" name="forgot-form" value="1" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-6">
    <div class="grid gap-2 md:gap-4">
      <h1 class="h2"><?= t('t.pages.forgot_title') ?></h1>
      <p><?= t('t.forms.no_worry') ?></p>
    </div>
    <div class="grid gap-2 md:gap-3.5">
      <input
        class="input input-white"
        type="email"
        name="email"
        placeholder="<?= t('t.forms.email_label') ?>"
        required
        data-should-validate
      />
    </div>
    <div>
      <button
        class="btn btn-gradient flex w-full items-center gap-2.5 group-data-novalid:cursor-default group-data-novalid:bg-gray-300"
        type="submit"
      >
        <?= t('t.main.send') ?>
      </button>
    </div>

    <div class="form-message" data-form-message>
      <p class="h3" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p>
      <?= t('t.forms.remember') ?>
      <a class="link" href="<?= url('sign-in') ?>"><?= t('t.main.signin') ?></a>
    </p>
  </div>
</form>
