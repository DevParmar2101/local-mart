<?php

use common\models\UserStoreDocument;
use yii\bootstrap5\ActiveForm;

$this->title = 'Document Form';
/** @var $model UserStoreDocument*/
/** @var $form ActiveForm*/

?>

<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <?php $form = ActiveForm::begin(['id' => 'user-store-document-form']);?>

                <?php ActiveForm::end();?>
            </div>
        </div>
    </div>
</div>