<?php
use yii\helpers\Html;
?>
<div class="page-sidebar-wrapper">
   <div class="page-sidebar navbar-collapse collapse">
       <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
           <li class="sidebar-toggler-wrapper hide">
               <div class="sidebar-toggler"> </div>
           </li>

           <li class="nav-item start ">
               <?= Html::a('<i class="icon-home"></i><span class="title">Dashboard</span>',Yii::$app->homeUrl,['class'=>'nav-link']);?>
           </li>

           <li class="nav-item start ">
               <?= Html::a('<i class="icon-user"></i><span class="title">Profile</span><span class="selected"></span><span class="arrow open"></span>',['javascript:;'],['class'=>'nav-link nav-toggle']);?>

               <ul class="sub-menu">
                   <li class="nav-item start ">
                       <?= Html::a('<i class="icon-plus"></i> <span class="title">Update Profile </span>',['/user/settings/profile'],['class'=>'nav-link ']);?>

                   </li>
                   <li class="nav-item start ">
                       <?= Html::a('<i class="icon-lock"></i> <span class="title">Change Password</span>',['/user/settings/account']);?>
                   </li>
               </ul>

           </li>

          <li class="nav-item start ">

               <?= Html::a('<i class="icon-user"></i> <span class="title">Users</span><span class="selected"></span><span class="arrow open"></span>',['javascript:;'],['class'=>'nav-link nav-toggle']);?>

              <ul class="sub-menu">
                  <li class="nav-item start ">
                      <?= Html::a('<i class="icon-user"></i> <span class="title">Users </span>',['/user/admin'],['class'=>'nav-link ']);?>

                  </li>
                  <li class="nav-item start ">
                      <?= Html::a('<i class="icon-plus"></i> <span class="title">Create User </span>',['/user/admin/create'],['class'=>'nav-link ']);?>

                  </li>
              </ul>
          </li>

          <li class="nav-item start ">
               <?= Html::a('<i class="icon-settings"></i><span class="title">Settings</span>',['/user/profile'],['class'=>'nav-link']);?>
          </li>

       </ul>
   </div>
   <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
