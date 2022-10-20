<?php

use common\models\BaseActiveRecord;
use common\models\UserStore;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $model array*/
?>
<div class="row">
    <div class="col-md-12 ">
        <!-- Tab panes Start -->
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4>Shop's List</h4>
                <div class="table_page table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>Store Name</th>
                            <th>Contact Number</th>
                            <th>Store Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($model as $item)
                            /** @var $item UserStore*/
                        {?>
                            <tr>
                                <td><?= $item->store_name?></td>
                                <td><?= $item->contact_number?></td>
                                <td><?= (new common\models\StoreSubCategory)->getCategoryName($item->store_category)?></td>
                                <td><?= $item->getSellerStatus($item->status, BaseActiveRecord::ACTIVE)?></td>
                                <td>
                                    <a href="<?= Url::toRoute(['site/view','id' => $item->id])?>" class="view"><i class="fa fa-eye"></i></a>
                                    <a href="<?= Url::toRoute(['site/document','id'=> $item->id])?>" class="view"><i class="fa fa-file-o"></i></a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Tab panes End-->
    </div>
</div>