<div class="bg-dark relative flex grow items-center justify-center py-8 md:py-10">
  <div class="absolute inset-0 overflow-hidden">
    <div
      class="bg-primary absolute top-[75%] left-[10%] h-[180px] w-[180px] -translate-1/2 rounded-full blur-[75px] md:top-[60%] md:left-[40%] md:h-[500px] md:w-[500px] md:blur-[150px]"
    ></div>
    <div
      class="bg-primary absolute top-[15%] left-[90%] h-40 w-40 -translate-1/2 rounded-full blur-[75px] md:top-0 md:h-[400px] md:w-[400px] md:blur-[150px]"
    ></div>
  </div>
  <div class="container-base relative grid w-full justify-items-center gap-8 text-center text-white">
    <div class="w-full max-w-[584px]"><?php include 'components/icons/404.php' ?></div>
    <p class="text-big"><?= t('t.main.404_label') ?></p>
    <a class="btn btn-secondary" href="<?= url() ?>"><?= t('t.main.tohome') ?></a>
  </div>
</div>
