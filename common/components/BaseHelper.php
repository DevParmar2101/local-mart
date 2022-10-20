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
        if (\Yii::$app->controller->id === $controller && \Yii::$app->controller->action->id === $action && \Yii::$app->controller->module->id === $module){
            return true;
        }elseif (\Yii::$app->controller->id === $controller && \Yii::$app->controller->module->id === $module){
            return true;
        }elseif (\Yii::$app->controller->id === $controller && \Yii::$app->controller->action->id === $action) {
            return true;
        }
        return false;
    }
}