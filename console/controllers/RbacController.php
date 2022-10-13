<?php
namespace console\controllers;

use common\models\Role;
use yii\base\Exception;
use yii\web\Controller;

class RbacController extends Controller
{
    /**
     * @return void
     * @throws Exception
     */
    public function actionInit()
    {
        $auth = \Yii::$app->authManager;
        $auth->removeAll();

        $roles = Role::TYPE_ROLE;

        $parents  = [
            'admin' => 'super_admin',
            'user' => 'admin'
        ];

        foreach ($roles as $key => $role_name){
            $role_object = $auth->createRole($key);
            $role_object->description = $role_name;
            $auth->add($role_object);
        }

        foreach ($parents as $child => $parent){
            $child = $auth->getRole($child);
            $parent = $auth->getRole($parent);
            $auth->addChild($parent, $child);
        }

    }
}