<!DOCTYPE html>
<html lang="<?= $currentLang ?>" data-theme="<?= $theme ?>">
  <!-- head -->
  <?php include 'components/layout/head.php' ?>

  <body>
    <!-- skeleton -->
    <?php include 'components/layout/skeleton.php' ?>

    <!-- header -->
    <?php include 'components/layout/header.php' ?>

    <!-- main -->
    <main><?php include $pageFileName ?></main>

    <!-- footer -->
    <?php include 'components/layout/footer.php' ?>

    <!-- message -->
    <?php include 'components/elements/response-message.php' ?>

    <!-- cookie -->
    <?php include 'components/elements/cookie-message.php' ?>
  </body>
</html>
