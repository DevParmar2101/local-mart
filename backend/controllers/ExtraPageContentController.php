<?php

namespace backend\controllers;

use common\models\ExtraPageContent;
use common\models\ExtraPageContentSearch;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ExtraPageContentController implements the CRUD actions for ExtraPageContent model.
 */
class ExtraPageContentController extends Controller
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
     * Lists all ExtraPageContent models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ExtraPageContentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ExtraPageContent model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ExtraPageContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ExtraPageContent();
        $path = __DIR__ . '/../../backend/web/uploads/extra-page-content';
        if(!is_dir($path)){
            FileHelper::createDirectory($path, $mode = 0777, $recursive = true);
        }
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model,'image');
                if ($image) {
                    $model->image = \Yii::$app->security->generateRandomString(12).'.'.$image->extension;
                }
                if ($model->save()) {
                    $image->saveAs(\Yii::getAlias($path.$model->image));
                    \Yii::$app->session->setFlash('success','Content created successfully !');
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ExtraPageContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $path = __DIR__ . '/../../backend/web/uploads/extra-page-content';
        if(!is_dir($path)){
            FileHelper::createDirectory($path, $mode = 0777, $recursive = true);
        }
        $old_image = null;
        if ($model->image) {
            $old_image = $model->image;
        }
        if ($this->request->isPost && $model->load($this->request->post())) {
            $image = UploadedFile::getInstance($model,'image');

            if ($image) {
                $model->image = \Yii::$app->security->generateRandomString(12).'.'.$image->extension;
            }else{
                $model->image = $old_image;
            }
            if ($model->save()) {
                if ($image) {
                    $image->saveAs(\Yii::getAlias($path.$model->image));
                }
                \Yii::$app->session->getFlash('success','Content updated successfully !');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ExtraPageContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ExtraPageContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ExtraPageContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ExtraPageContent::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
