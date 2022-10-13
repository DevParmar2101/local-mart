<?php

namespace backend\controllers;

use common\models\ExtraPageContent;
use common\models\ExtraPageContentSearch;
use yii\base\Exception;
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
     * @throws Exception
     */
    public function actionCreate()
    {
        $model = new ExtraPageContent();
        $path = ExtraPageContent::getPath();
        if(!is_dir($path)){
            FileHelper::createDirectory($path, $mode = 0777, $recursive = true);
        }
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $image = UploadedFile::getInstance($model,'image');
                $child_image = UploadedFile::getInstance($model,'child_image');

                if ($image) {
                    $model->image = $model->getImageName($image);
                }

                if ($child_image) {
                    $model->child_image = $model->getImageName($child_image);
                }

                if ($model->save()) {

                    if ($image){
                        $image->saveAs(ExtraPageContent::getPath($model->image));
                    }

                    if ($child_image){
                        $child_image->saveAs(ExtraPageContent::getPath($model->child_image));
                    }
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
        $path = ExtraPageContent::getPath();
        if(!is_dir($path)){
            FileHelper::createDirectory($path, $mode = 0777, $recursive = true);
        }
        $old_image = null;
        $old_child_image = null;

        if ($model->image) {
            $old_image = $model->image;
        }

        if ($model->child_image) {
            $old_child_image = $model->child_image;
        }

        if ($this->request->isPost && $model->load($this->request->post())) {
            $image = UploadedFile::getInstance($model,'image');
            $child_image = UploadedFile::getInstance($model,'child_image');
            if ($image) {
                $model->image = $model->getImageName($image);
            }else{
                $model->image = $old_image;
            }

            if ($child_image) {
                $model->child_image = $model->getImageName($child_image);
            }else{
                $model->child_image = $old_child_image;
            }

            if ($model->save()) {
                if ($image) {
                    $image->saveAs(ExtraPageContent::getPath($model->image));
                }

                if ($child_image) {
                    $child_image->saveAs(ExtraPageContent::getPath($model->child_image));
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
