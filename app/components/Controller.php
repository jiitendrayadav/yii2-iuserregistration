<?php


namespace app\components;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;



class Controller extends \yii\web\Controller
{

    /**
     * @event \yii\base\Event an event raised on init a controller.
     */
    const EVENT_INIT = 'init';

    /**
     * @var null|string the name of the sub layout to be applied to this controller's views.
     * This property mainly affects the behavior of [[render()]].
     */
    public $subLayout = null;

    /**
     * @var string title of the rendered page
     */
    public $pageTitle;

    /**
     * @var array page titles
     */
    public $actionTitlesMap = [];

    /**
     * @var boolean append page title
     */
    public $prependActionTitles = true;

   
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->trigger(self::EVENT_INIT);
    }



    /**
     * @throws ForbiddenHttpException
     * @since 1.2
     */
    protected function forbidden()
    {
        throw new \yii\web\ForbiddenHttpException(Yii::t('error', 'You are not allowed to perform this action.'));
    }


    /**
     *
     * @see \yii\web\Controller::beforeAction()
     */
    public function beforeAction($action)
    {
          if (parent::beforeAction($action)) {
            if (array_key_exists($this->action->id, $this->actionTitlesMap)) {
                if ($this->prependActionTitles) {
                    $this->prependPageTitle($this->actionTitlesMap[$this->action->id]);
                } else {
                    $this->appendPageTitle($this->actionTitlesMap[$this->action->id]);
                }
            }
            if (!empty($this->pageTitle)) {
                $this->getView()->pageTitle = $this->pageTitle . ' | ' .Yii::$app->params['settings']['websitename'];
            }else {
              $this->pageTitle = Yii::$app->params['settings']['websitename'];
            }

            return true;
        }

        return false;
    }

    /**
     * Append a page title.
     *
     * @param string $title
     */
    public function appendPageTitle($title)
    {
        $this->pageTitle .= empty($this->pageTitle) ? $title : ' - ' . $title;
    }

    /**
     * Prepend a page title.
     *
     * @param string $title
     */
    public function prependPageTitle($title)
    {
        $this->pageTitle = empty($this->pageTitle) ? $title : $title . ' - ' . $this->pageTitle;
    }

    /**
     * Set the page title.
     *
     * @param string $title
     */
    public function setPageTitle($title)
    {
        $this->pageTitle = $title;
    }

    public function checkLogin(){

        if (!Yii::$app->user->isGuest)
            return false;
        else
            return true;
    }

}
