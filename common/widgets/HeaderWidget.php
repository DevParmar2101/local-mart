<?php

namespace common\widgets;

use common\models\BaseActiveRecord;
use common\models\PageContent;
use yii\base\Widget;

class HeaderWidget extends Widget
{
    public function run()
    {
        $pages = PageContent::find()
            ->where(['status' => BaseActiveRecord::ACTIVE])
            ->andWhere(['use_for' => PageContent::HEADER_TYPE])
            ->orWhere(['use_for' => PageContent::BOTH_TYPE])
            ->all();

        return $this->render('header',[
            'pages' => $pages
        ]);
    }
}