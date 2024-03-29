<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $model array*/

$this->title = 'Product Index';
?>
<div class="row">
    <div class="col-md-12">
        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade show active">
                <h4 class="seller-form-title text-center">
                        <a class="btn btn-primary" href="<?= Url::toRoute(['product/create'])?>">Create Product</a>
                </h4>
                <h4>Product List</h4>

                <div class="table_page table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>Thumbnail Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($model as $item)
                            /** @var $item Product*/
                        {?>
                            <tr>
                                <td><?= $item->getImage('thumbnail_image','No Image Found','thumbnail-image-gridview')?></td>
                                <td><?= $item->product_name?></td>
                                <td><?= $item->storeCategory->category_name?></td>
                                <td><?= $item->storeSubCategory->sub_category?></td>
                                <td><?= Yii::$app->formatter->asCurrency($item->product_price)?></td>
                                <td><?= $item->quantity?></td>
                                <td><?= $item->getProductStatus($item->status,$item::GRID_VIEW)?></td>
                                <td>
                                    <a href="<?= Url::toRoute(['product/edit','id' => $item->uuid])?>" class="view"><i class="fa fa-edit"></i></a>
                                    <a href="<?= Url::toRoute(['product/image','id'=> $item->uuid])?>" class="view"><i class="fa fa-picture-o"></i></a>
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/product/'.$item->uuid])?>" class="view"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>