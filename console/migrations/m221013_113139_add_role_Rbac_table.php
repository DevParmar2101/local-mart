<?php

use yii\db\Migration;

/**
 * Class m221013_113139_add_role_Rbac_table
 */
class m221013_113139_add_role_Rbac_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $super_admin = $auth->createRole('super_admin');
        $admin = $auth->createRole('admin');
        $user = $auth->createRole('user');
        $seller = $auth->createRole('seller');

        $auth->add($super_admin);
        $auth->add($admin);
        $auth->add($user);
        $auth->add($seller);

        $auth->addChild($super_admin, $admin);
        $auth->addChild($super_admin, $user);
        $auth->addChild($super_admin, $seller);

        $auth->addChild($admin, $user);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_113139_add_role_Rbac_table cannot be reverted.\n";

        return false;
    }
    */
}
