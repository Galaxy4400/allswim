<div class="group form-message" data-form-message role="alert">
  <div
    class="bg-primary-lightest flex gap-5 rounded-[20px] px-6 py-8 shadow-xl max-md:flex-col md:items-center md:gap-6 md:rounded-[30px] md:px-8 md:py-11.5"
  >
    <div
      class="bg-primary inline-flex h-20 w-20 shrink-0 items-center justify-center rounded-full group-data-error:bg-red-700 md:h-[120px] md:w-[120px]"
    >
      <span class="text-primary-lightest hidden w-10.5 group-data-success:inline md:w-16">
        <?php include 'components/icons/success.php' ?>
      </span>
      <span class="text-primary-lightest hidden w-10.5 group-data-error:inline md:w-16">
        <?php include 'components/icons/error.php' ?>
      </span>
    </div>
    <div class="grid grow gap-3 md:gap-4">
      <p class="h2" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>
  </div>
</div>
