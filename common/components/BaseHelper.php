<?php

namespace common\components;

use yii\helpers\BaseArrayHelper;

class BaseHelper extends BaseArrayHelper
{

    /**
     * @param $controller
     * @param $action
     * @param $module
     * @return bool
     */
    public function validateAction($controller, $action=null, $module=null): bool
    {

    }
}