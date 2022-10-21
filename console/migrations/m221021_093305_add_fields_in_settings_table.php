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
        $this->addColumn(Settings::tableName(),'facebook_link',$this->string(255));
        $this->addColumn(Settings::tableName(),'instagram_link',$this->string(255));
        $this->addColumn(Settings::tableName(),'twitter_link',$this->string(255));
        $this->addColumn(Settings::tableName(),'address',$this->text());
        $this->addColumn(Settings::tableName(),'contact_number',$this->string(15));
        $this->addColumn(Settings::tableName(),'email',$this->string(100));
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
