<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\StoreSubCategory $model */
/** @var \yii\bootstrap5\ActiveForm $form */
?>

<div class="card border-top border-0 border-4 border-white">
    <div class="card-body p-5">
        <div class="card-title d-flex align-items-center">
            <div>
                <i class='bx bx-edit-alt me-1 font-22 text-white'></i>
            </div>
            <h5 class="mb-0 text-white"><?= Html::encode($this->title)?></h5>
        </div>
        <hr>
    <?php $form = ActiveForm::begin(['id' => 'store-sub-category-form']); ?>

    <?= $form->field($model, 'category_name')->textInput() ?>

    <?= $form->field($model, 'sub_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>

