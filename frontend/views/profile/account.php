<?php

/** @var $model \common\models\User*/
/** @var $form ActiveForm*/

use yii\bootstrap5\ActiveForm;

?>
<!-- account area start -->
<div class="account-dashboard pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <?= $this->render('_partial/_profile_sidebar')?>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade show active" id="account-details">
                        <h3>Account details </h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
                                    <?php $form = ActiveForm::begin(['id' => 'profile-account-form']);?>
                                        <div class="row">
                                            <div class="col-md-6 col-12">

                                            </div>
                                        </div>
                                    <?php ActiveForm::end();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- account area start -->