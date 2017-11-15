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
    <title><?= Html::encode($this->title) .' | ' . Html::encode( Yii::$app->params['settings']['websitename']); ?></title>
    <?php $this->head(); ?>
    <link href="<?php echo $this->theme->getUrl("/assets/pages/css/login-4.min.css");?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    var $baseUrl = '<?php echo Yii::$app->request->baseUrl; ?>';
    var $themeUrl = '<?php echo $this->theme->getUrl('/'); ?>';
    </script>
</head>
<body class="login">
<?php $this->beginBody() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="logo">
                <a class="brand" href="<?php echo Yii::$app->request->baseUrl; ?>">
                    <img src="<?php echo $this->theme->getUrl('/assets/pages/img/logo-big.png');?>" alt="<?php echo Yii::$app->name .' ' .Yii::$app->version; ?>" />
                </a>
                <div style="text-align:center;font-weight:bold;">
                    <div class="">Login details : admin / admin123</div>
                </div>

            </div>

        </div>
        <div class="col-md-12">
        <?= $content ?>
        </div>

    </div>
</div>
  <!-- END FOOTER -->
<?php $this->endBody() ?>
<script src="<?php echo $this->theme->getUrl('/assets/global/plugins/backstretch/jquery.backstretch.min.js');?>" type="text/javascript"></script>
<script src="<?php echo $this->theme->getUrl('/assets/pages/scripts/coming-soon.min.js');?>" type="text/javascript"></script>
</body>
</html>
<?php $this->endPage() ?>
