<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Theme;
$this->title = ' Login ';

$this->params['breadcrumbs'][] =  $this->title;
?>

<div class="logo">
  <a class="brand" href="javascript:void(0);">
      <img src="<?php echo $this->theme->getUrl('/assets/pages/img/logo-big.png');?>" alt="<?php echo Yii::$app->name .' ' .Yii::$app->version; ?>" />
  </a>
</div>

<div class="content">
  <!-- BEGIN LOGIN FORM -->
    <?php
    $form = ActiveForm::begin([
        'id' => 'login-form',
        'class'=>'login-form',
        'validateOnSubmit' => true,

    ]);
    ?>

       <h3 class="form-title">Login to your account</h3>
      <div class="alert alert-danger display-hide">
          <button class="close" data-close="alert"></button>
          <span> Enter any username and password. </span>
      </div>
      <?= $form->field($model, 'username',['template' => "<div class='input-icon'><i class='fa fa-user'></i>{input}\n{error}</div>"])->textInput(['class'=>'form-control','autofocus' => true,'placeholder'=>'Enter your username or e-Mail'])->label(false); ?>
      <?= $form->field($model, 'password',['template' => "<div class='input-icon'><i class='fa fa-lock'></i>{input}\n{error}</div>"])->passwordInput(['class'=>'form-control','placeholder'=>'Enter your password'])->label(false); ?>

      <div class="form-actions">
          <label class="checkbox">
              <input type="checkbox" name="LoginForm[rememberMe]" value="1" /> Remember me </label>
              <?= Html::submitButton('Login', ['class' => 'btn green pull-right','name' => 'login1-button']) ?>
      </div>

      <div class="forget-password">
          <h4>Forgot your password ?</h4>
          <p> no worries, click
              <a href="javascript:;" id="forget-password"> here </a> to reset your password. </p>
      </div>


  <?php $form = ActiveForm::end(); ?>
    <!-- END LOGIN FORM -->

</div>
