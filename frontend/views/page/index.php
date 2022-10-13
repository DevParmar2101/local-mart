<?php

use common\models\PageContent;

/** @var $model PageContent*/

?>
<div class="container-lg h-100">
    <div class="px-lg-4 py-4 py-sm-5">
        <h1 class="text-center after-border">
            <?= $model->title?>
        </h1>
        <div class="justify-content-center btn-group text-center d-block">
            <h4 class="content-font page-sub-title"><?= $model->sub_title?></h4>
        </div>
        <div class="pt-4">
            <?= $model->content?>
        </div>
    </div>
</div>
