<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Error';
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
        <h3 class="page-title"><?= Html::encode($this->title) ?></h3>
        <div class="row">
            <div class="col-md-12 page-404">
                <div class="number font-green"> 404 </div>
                <div class="details">
                    <h3>Oops! </h3>
                    <?= nl2br(Html::encode($message)) ?>
                    <br/><br/>
                    <a href="<?php echo Yii::$app->request->baseUrl; ?>"> Return home </a> or try the search bar below. </p>
                </div>
            </div>
        </div>

    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
