<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;


/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'themes/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'themes/assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'themes/assets/global/plugins/uniform/css/uniform.default.css',
        'themes/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'themes/assets/global/css/components-md.min.css',
        'themes/assets/global/css/plugins-md.min.css',
        'themes/assets/layouts/layout/css/layout.min.css',
        'themes/assets/layouts/layout/css/themes/default.min.css',
        'themes/assets/layouts/layout/css/custom.min.css',
        'themes/assets/pages/css/error.min.css',
        'themes/assets/global/plugins/bootstraptoastr/toastr.min.css',
        'themes/assets/main.css',

    ];
    public $js = [
        ['themes/assets/global/plugins/jquery.min.js','position' => View::POS_HEAD],
        ['themes/assets/global/plugins/bootstrap/js/bootstrap.min.js','position' => \yii\web\View::POS_HEAD],
        ['themes/assets/global/plugins/js.cookie.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery.blockui.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/uniform/jquery.uniform.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','position' => \yii\web\View::POS_END],

        ['themes/assets/global/plugins/moment.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/morris/morris.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/morris/raphael-min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/counterup/jquery.waypoints.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/counterup/jquery.counterup.min.js','position' => \yii\web\View::POS_END],


        ['themes/assets/global/plugins/amcharts/amcharts/amcharts.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amcharts/serial.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amcharts/pie.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amcharts/radar.js','position' => \yii\web\View::POS_END],
        ['themes//assets/global/plugins/amcharts/amcharts/themes/light.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amcharts/themes/patterns.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amcharts/themes/chalk.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/amcharts/ammap/ammap.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/amcharts/amstockcharts/amstock.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/fullcalendar/fullcalendar.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/flot/jquery.flot.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/flot/jquery.flot.resize.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/flot/jquery.flot.categories.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery.sparkline.min.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js','position' => \yii\web\View::POS_END],
        // ['themes/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js','position' => \yii\web\View::POS_END],

        // notification
        ['themes/assets/global/plugins/bootstraptoastr/toastr.min.js','position' => \yii\web\View::POS_END],

        // form-wizard
        ['themes/assets/global/plugins/select2/js/select2.full.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery-validation/js/jquery.validate.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/jquery-validation/js/additional-methods.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/pages/scripts/form-wizard.min.js','position' => \yii\web\View::POS_END],


        //
        ['themes/assets/global/scripts/app.min.js','position' => \yii\web\View::POS_END],

        ['themes/assets/layouts/layout/scripts/layout.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/layouts/layout/scripts/demo.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/layouts/global/scripts/quick-sidebar.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/pages/scripts/dashboard.min.js','position' => \yii\web\View::POS_END],
        ['themes/assets/main.js','position' => \yii\web\View::POS_END],

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
