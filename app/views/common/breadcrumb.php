<?php
use yii\widgets\Breadcrumbs;
echo  Breadcrumbs::widget([
    'itemTemplate' => "<li>{link}</li>\n",
    'links' =>isset($breadcrumb['breadcrumbs']) ? $breadcrumb['breadcrumbs'] : [],
    'class'=>'page-breadcrumb'
  ]);
?>
 
