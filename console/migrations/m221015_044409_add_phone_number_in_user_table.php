<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m221015_044409_add_phone_number_in_user_table
 */
class m221015_044409_add_phone_number_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(User::tableName(),'contact_number',$this->string(15));
        $this->addColumn(User::tableName(),'otp',$this->string(10));
        $this->addColumn(User::tableName(),'otp_expire',$this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221015_044409_add_phone_number_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221015_044409_add_phone_number_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
