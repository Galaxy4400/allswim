<form
  name="form"
  method="post"
  class="group rounded-custom relative -m-2 overflow-hidden p-2"
  action="/send<?= isset($_GET['test']) ? '?test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="m<?= ++$main_form_counter ?>" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-5 md:gap-6">
    <div class="grid gap-2 md:gap-3 group-data-is/long:md:grid-cols-2">
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
    <div class="grid justify-items-center gap-2 md:gap-3">
      <button
        class="btn btn-secondary w-full group-data-novalid:cursor-default group-data-novalid:border-gray-300 group-data-novalid:bg-gray-300 group-data-is/long:md:w-1/2"
        type="submit"
      >
        <?= t('t.main.signup') ?>
      </button>

      <p class="text-small text-white group-data-is/long:text-center max-md:text-center">
        <?= t('t.forms.form_footer', [ '{privacy_link}' => url('privacy'), '{terms_link}' => url('terms') ])?>
      </p>
    </div>
  </div>
</form>
