<?php

use common\models\States;
use yii\db\Migration;

/**
 * Class m221020_043521_add_status_in_states_table
 */
class m221020_043521_add_status_in_states_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(States::tableName(),'status',$this->tinyInteger(1)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221020_043521_add_status_in_states_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221020_043521_add_status_in_states_table cannot be reverted.\n";

        return false;
    }
    */
}
