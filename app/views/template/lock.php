<?php
// use yii\base\Theme;
use app\assets\AppAsset;


/* @var $this yii\web\View */
$this->title = 'Lock';
// $this->params['breadcrumbs'][] = ['label' => 'Home Page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <?=Yii::$app->controller->renderPartial('//common/breadcrumb',['breadcrumb'=>$this->params]);?>
        </div>
        <h3 class="page-title">Lock</h3>

        <div class="clearfix"></div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
