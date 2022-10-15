<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m221015_181739_add_fn_and_ln_in_user_table
 */
class m221015_181739_add_fn_and_ln_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(User::tableName(),'first_name',$this->string(50));
        $this->addColumn(User::tableName(),'last_name',$this->string(50));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221015_181739_add_fn_and_ln_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221015_181739_add_fn_and_ln_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
