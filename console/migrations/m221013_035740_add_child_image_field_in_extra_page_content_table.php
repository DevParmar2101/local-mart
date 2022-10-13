<?php

use common\models\ExtraPageContent;
use yii\db\Migration;

/**
 * Class m221013_035740_add_child_image_field_in_extra_page_content_table
 */
class m221013_035740_add_child_image_field_in_extra_page_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(ExtraPageContent::tableName(),'child_image',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_035740_add_child_image_field_in_extra_page_content_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_035740_add_child_image_field_in_extra_page_content_table cannot be reverted.\n";

        return false;
    }
    */
}
