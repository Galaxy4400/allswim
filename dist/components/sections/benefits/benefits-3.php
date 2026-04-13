<div class="py-14 md:py-20" id="benefits">
  <div class="container-narrow grid gap-8 md:gap-[60px]">
    <h2 class="md:text-center"><?= t('t.index.benefits_title') ?></h2>
    <table>
      <tbody class="grid gap-6 md:gap-8">
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/user-love.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_1') ?></p>
            <p><?= t('t.index.benefits_item_text_1') ?></p>
          </td>
        </tr>
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/official-regulated.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_2') ?></p>
            <p><?= t('t.index.benefits_item_text_2') ?></p>
          </td>
        </tr>
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/low-barrier.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_3') ?></p>
            <p><?= t('t.index.benefits_item_text_3', ['{currency}' => t('v.currencyAmount1')]) ?></p>
          </td>
        </tr>
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/transparent-fees.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_4') ?></p>
            <p><?= t('t.index.benefits_item_text_4') ?></p>
          </td>
        </tr>
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/trading-access.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_5') ?></p>
            <p><?= t('t.index.benefits_item_text_5') ?></p>
          </td>
        </tr>
        <tr class="card-row">
          <td class="icon-wrapper"><?php include 'components/icons/customer-support.php' ?></td>
          <td class="grid gap-1.5 md:gap-2">
            <p class="h3"><?= t('t.index.benefits_item_title_6') ?></p>
            <p><?= t('t.index.benefits_item_text_6') ?></p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
