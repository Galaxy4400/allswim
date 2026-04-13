<form
  name="form"
  method="post"
  class="group rounded-custom-sm relative bg-white p-4 md:px-6 md:py-8"
  action="/send<?= isset($_GET['test']) ? '?test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="su" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-6">
    <h1 class="h2"><?= t('t.pages.register_title') ?></h1>
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
        class="input"
        type="text"
        name="last_name"
        placeholder="<?= t('t.forms.last_name_label') ?>"
        required
        data-regexp="^[^\d]+$"
        data-should-validate
      />
      <input
        class="input"
        type="email"
        name="email"
        placeholder="<?= t('t.forms.email_label') ?>"
        required
        data-should-validate
      />
      <input
        class="input"
        type="tel"
        name="phone"
        placeholder="<?= t('t.forms.phone_label') ?>"
        data-phone
        required
        data-should-validate
      />
    </div>
    <div class="">
      <label class="inline-flex items-center gap-2">
        <input class="checkbox peer" type="checkbox" name="aggreement" value="1" required data-should-validate />
        <span class="text-small">
          <?= t('t.forms.aggree', [ '{privacy_link}' => url('privacy'), '{terms_link}' => url('conditions') ])?>
        </span>
      </label>
    </div>
    <div class="grid gap-3">
      <button
        class="btn btn-gradient w-full group-data-novalid:cursor-default group-data-novalid:bg-gray-300"
        type="submit"
      >
        <?= t('t.main.signup_now') ?>
      </button>

      <div class="form-message" data-form-message role="alert">
        <p class="h3" data-form-message-title></p>
        <div data-form-message-content></div>
      </div>

      <p>
        <?= t('t.forms.have_account') ?>
        <a class="link" href="<?= url('sign-in') ?>"><?= t('t.main.signin') ?></a>
      </p>
    </div>
  </div>
</form>
