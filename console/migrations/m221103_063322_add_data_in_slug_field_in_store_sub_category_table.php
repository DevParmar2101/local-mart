<?php

use yii\db\Migration;

/**
 * Class m221103_063322_add_data_in_slug_field_in_store_sub_category_table
 */
class m221103_063322_add_data_in_slug_field_in_store_sub_category_table extends Migration
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
        echo "m221103_063322_add_data_in_slug_field_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221103_063322_add_data_in_slug_field_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }
    */
}
