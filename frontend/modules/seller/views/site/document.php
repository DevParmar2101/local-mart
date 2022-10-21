<?php

use common\widgets\DynamicFormWidget;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Document Form';
/** @var $form ActiveForm*/

?>

<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <?php $form = ActiveForm::begin(['id' => 'dynamic-form']);?>
                    <?php DynamicFormWidget::begin([
                            'widgetContainer' => 'dynamicform_wrapper',
                            'widgetBody' => '.container-items',
                            'widgetItem' => '.item',
                            'limit' => 4,
                            'min' => 0,
                            'insertButton' => '.add-item',
                            'deleteButton' => '.remove-item',
                            'model' => $modelsAddress[0],
                            'formId' => 'dynamic-form',
                            'formFields' => [
                                    'document_name',
                                    'document',
                            ],
                ])?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <i class="glyphicon glyphicon-envelope"></i> Addresses
                            <button type="button" class="add-item btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="container-items">
                            <?php foreach ($modelsAddress as $i => $modelAddress): ?>
                                <div class="item panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title pull-left">Address</h3>
                                        <div class="pull-right">
                                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                            if (! $modelAddress->isNewRecord) {
                                                echo \yii\helpers\Html::activeHiddenInput($modelAddress,"[{$i}]id");
                                            }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <?= $form->field($modelAddress,"[{$i}]document_name")->textInput()?>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <?= $form->field($modelAddress,"[{$i}]document")->textInput()?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <?php DynamicFormWidget::end(); ?>
                <div class="form-group">
                    <?= Html::submitButton($modelAddress->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end();?>
            </div>
        </div>
    </div>
</div>
<?php
$js =<<<JS
$(".dynamicform_wrapper").on("beforeInsert", function(e, item) {
    console.log("beforeInsert");
});

$(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    console.log("afterInsert");
});

$(".dynamicform_wrapper").on("beforeDelete", function(e, item) {
    if (! confirm("Are you sure you want to delete this item?")) {
        return false;
    }
    return true;
});

$(".dynamicform_wrapper").on("afterDelete", function(e) {
    console.log("Deleted item!");
});

$(".dynamicform_wrapper").on("limitReached", function(e, item) {
    alert("Limit reached");
});
JS;
$this->registerJs($js);
?>