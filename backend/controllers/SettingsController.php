<?php

namespace backend\controllers;

use common\models\Settings;
use common\models\SettingsSearch;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SettingsController implements the CRUD actions for Settings model.
 */
class SettingsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionIndex()
    {
        $model = Settings::findOne(['id' => 1]);
        if (!$model){
            $model = new Settings();
        }
        $path = Settings::getPath();
        if (!is_dir($path)) {
            FileHelper::createDirectory($path,$mode = 0777, $recursive = true);
        }
        $old_logo_dark = null;
        $old_logo_light = null;
        $old_logo_transparent = null;
        $old_favicon = null;

        if ($model->logo_dark) {
            $old_logo_dark = $model->logo_dark;
        }

        if ($model->logo_light) {
            $old_logo_light = $model->logo_light;
        }

        if ($model->logo_transparent) {
            $old_logo_transparent = $model->logo_transparent;
        }

        if ($model->favicon) {
            $old_favicon = $model->favicon;
        }

        if ($this->request->isPost && $model->load($this->request->post())) {
            $logo_dark = UploadedFile::getInstance($model,'logo_dark');
            $logo_light = UploadedFile::getInstance($model,'logo_light');
            $logo_transparent = UploadedFile::getInstance($model,'logo_transparent');
            $favicon = UploadedFile::getInstance($model,'favicon');

            if ($logo_dark) {
                $model->logo_dark = $model->getImageName($logo_dark);
            }else{
                $model->logo_dark = $old_logo_dark;
            }

            if ($logo_light) {
                $model->logo_light = $model->getImageName($logo_light);
            }else{
                $model->logo_light = $old_logo_light;
            }

            if ($logo_transparent) {
                $model->logo_transparent = $model->getImageName($logo_transparent);
            }else{
                $model->logo_transparent = $old_logo_transparent;
            }

            if ($favicon) {
                $model->favicon = $model->getImageName($favicon);
            }else{
                $model->favicon = $old_favicon;
            }

            if ($model->save()){
                if ($logo_dark) {
                    $logo_dark->saveAs(Settings::getPath($model->logo_dark));
                }

                if ($logo_light) {
                    $logo_light->saveAs(Settings::getPath($model->logo_light));
                }

                if ($logo_transparent) {
                    $logo_transparent->saveAs(Settings::getPath($model->logo_transparent));
                }

                if ($favicon) {
                    $favicon->saveAs(Settings::getPath($model->favicon));
                }

                \Yii::$app->session->getFlash('success','Content updated successfully !');
                return $this->redirect(['index']);
            }
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }

    /**
     * Finds the Settings model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Settings the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Settings::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
