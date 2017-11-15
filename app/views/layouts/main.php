<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\base\Controller;
use yii\base\Theme;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="favicon.ico" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) .' | ' .  Html::encode(Yii::$app->params['settings']['websitename']); ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
    var $baseUrl = '<?php echo Yii::$app->request->baseUrl; ?>';
    var $themeUrl = '<?php echo $this->theme->getUrl('/'); ?>';
    var $token = '<?= Yii::$app->request->csrfToken; ?>';
    </script>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md page-footer-fixed">
<?php $this->beginBody() ?>
<?=Yii::$app->controller->renderPartial('//common/top_menu');?>
<div class="page-container">
  <?=Yii::$app->controller->renderPartial('//common/left_menu');?>
  <?= $content ?>
  <?=Yii::$app->controller->renderPartial('//common/right_sidebar');?>
  <!-- BEGIN FOOTER -->
  <div class="page-footer">
      <div class="page-footer-inner">
        <?= date('Y') ?> &copy; <?= Yii::$app->params['settings']['copyright'];?>
      </div>
      <div class="scroll-to-top">
          <i class="icon-arrow-up"></i>
      </div>
  </div>
  <!-- END FOOTER -->
</div>
<?php $this->endBody() ?>
<script type="text/javascript">
toastr.options = {
   "closeButton": true,
   "debug": false,
   "positionClass": "toast-top-right",
   "showDuration": "2000",
   "hideDuration": "1000",
   "timeOut": "5000",
   "extendedTimeOut": "1000",
   "showEasing": "swing",
   "hideEasing": "linear",
   "showMethod": "fadeIn",
   "hideMethod": "fadeOut"
 };
<?php
if(!empty(Yii::$app->session->getAllFlashes())){
  foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
    echo 'toastr["'.$key.'"]("'.$message.'");';
  }
}
?>
</script>
</body>
</html>
<?php $this->endPage() ?>
