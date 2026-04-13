<form
  name="form"
  method="post"
  class="group rounded-custom relative -m-2 p-2"
  action="/send<?= isset($_GET['test']) ? '?test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="cn" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-6 md:gap-4">
    <div class="grid gap-2">
      <div class="grid gap-2 md:grid-cols-2">
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
      </div>
      <textarea
        class="input min-h-20"
        placeholder="<?= t('t.forms.message_label') ?>"
        name="message"
        required
        data-should-validate
      ></textarea>
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
    <div class="grid gap-2 md:gap-4">
      <button
        class="btn btn-gradient w-full group-data-novalid:cursor-default group-data-novalid:border-gray-300 group-data-novalid:bg-gray-300"
        type="submit"
      >
        <?= t('t.main.send') ?>
      </button>

      <div class="form-message" data-form-message role="alert">
        <p class="h4" data-form-message-title></p>
        <div data-form-message-content></div>
      </div>

      <p class="text-small">
        <?= t('t.forms.form_footer', [ '{privacy_link}' => url('privacy'), '{terms_link}' => url('conditions') ])?>
      </p>
    </div>
  </div>
</form>
