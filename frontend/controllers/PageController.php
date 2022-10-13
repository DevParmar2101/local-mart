<?php

namespace frontend\controllers;

use common\models\PageContent;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\helpers\ArrayHelper;

class PageController extends Controller
{

    /**
     * @throws NotFoundHttpException
     * @var $model PageContent
     */
    public function actionIndex($slug)
    {
        $model = $this->findModel($slug);
        return $this->render('index',[
            'model' => $model
        ]);
    }

    /**
     * @param $slug
     * @return PageContent|null
     * @throws NotFoundHttpException
     */
    protected function findModel($slug)
    {
        if (($page = PageContent::findOne(['slug' => $slug])) !==null) {
            return $page;
        }else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}