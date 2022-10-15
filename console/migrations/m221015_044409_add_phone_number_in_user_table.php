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
