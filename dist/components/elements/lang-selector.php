<div class="relative" data-connect-parent>
  <button class="lang-icon group" data-connector="lang-menu">
    <span class="inline-flex aspect-25/20 min-w-[25px] items-center justify-center">
      <span class="overflow-hidden rounded-sm">
        <img
          src="/assets/img/no-flag.svg"
          data-src="<?= flagUrl($currentLang) ?>"
          alt="<?= $currentLang ?>-flag"
          width="25"
          height="25"
          data-flag-img
        />
      </span>
    </span>
    <span class="uppercase"><?= $currentLang ?></span>
    <span class="min-w-3.5 transition-transform duration-300 group-data-active:rotate-180">
      <?php include 'components/icons/select-arrow.php' ?>
    </span>
  </button>
  <nav class="lang-menu" data-connect="lang-menu">
    <ul class="py-2">
      <?php foreach ($supportedLanguages as $listLang) { ?>
      <li>
        <a
          class="<?php if ($currentLang === $listLang) { ?>bg-primary-lighter<?php } ?> hover:bg-primary-lighter data-active:bg-primary-lighter inline-flex w-full cursor-pointer items-center gap-2 px-3 py-2 transition-colors hover:text-black"
          href="<?= getLocalizedUrl($listLang) ?>"
        >
          <div class="overflow-hidden rounded-sm">
            <img
              src="/assets/img/no-flag.svg"
              data-src="<?= flagUrl($listLang) ?>"
              alt="<?= $listLang ?>-flag"
              width="25"
              height="25"
              data-flag-img
            />
          </div>
          <span class="uppercase"><?= $listLang ?></span>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
