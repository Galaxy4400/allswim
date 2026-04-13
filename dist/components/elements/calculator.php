<div class="grid items-start gap-4 md:grid-cols-2 md:gap-8">
  <div class="grid gap-2">
    <div class="grid gap-1">
      <p class="text-sm md:text-lg"><?= t('t.main.calculator_input_title') ?></p>
      <div class="text-primary relative font-bold">
        <input
          class="input border-primary no-arrows border pr-10 font-semibold"
          id="value"
          value="<?= t('v.startAmount') ?>"
          type="number"
          min="<?= t('v.minAmount') ?>"
          max="<?= t('v.maxAmount') ?>"
          data-min="<?= t('v.minAmount') ?>"
          data-max="<?= t('v.maxAmount') ?>"
          aria-label="<?= t('t.aria.enter_ammount') ?>"
        />
        <span class="text-big absolute top-1/2 right-5 -translate-y-1/2" id="symbol">$</span>
      </div>
    </div>
    <div>
      <p class="text-sm md:text-lg"><span id="days">50</span> <?= t('t.main.calculator_days') ?></p>
      <input
        class="range"
        id="range"
        type="range"
        value="50"
        min="1"
        max="<?= t('v.maxDays') ?>"
        aria-label="<?= t('t.aria.chose_days') ?>"
      />
    </div>
  </div>
  <div>
    <div class="rounded-custom grid w-full gap-3 justify-self-center p-3 text-center md:gap-6 md:p-6">
      <p class="text-big text-white"><?= t('t.main.calculator_result_title') ?></p>
      <div class="h2 text-white">
        <span id="ammount" data-rate="<?= t('v.rate') ?>"> <?= t('v.startAmount') ?> </span>
      </div>
    </div>
  </div>
</div>
