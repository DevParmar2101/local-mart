<?php

use common\models\Settings;
use yii\db\Migration;

/**
 * Class m221021_093305_add_fields_in_settings_table
 */
class m221021_093305_add_fields_in_settings_table extends Migration
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
        echo "m221021_093305_add_fields_in_settings_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221021_093305_add_fields_in_settings_table cannot be reverted.\n";

        return false;
    }
    */
}
