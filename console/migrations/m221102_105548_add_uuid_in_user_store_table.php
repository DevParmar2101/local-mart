<?php

use common\models\UserStore;
use yii\db\Migration;

/**
 * Class m221102_105548_add_uuid_in_user_store_table
 */
class m221102_105548_add_uuid_in_user_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(UserStore::tableName(),'uuid',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221102_105548_add_uuid_in_user_store_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221102_105548_add_uuid_in_user_store_table cannot be reverted.\n";

        return false;
    }
    */
}
