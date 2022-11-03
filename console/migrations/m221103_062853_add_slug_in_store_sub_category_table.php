<?php

use common\models\StoreSubCategory;
use yii\db\Migration;

/**
 * Class m221103_062853_add_slug_in_store_sub_category_table
 */
class m221103_062853_add_slug_in_store_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(StoreSubCategory::tableName(),'slug',$this->string(255)->defaultValue('test'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221103_062853_add_slug_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221103_062853_add_slug_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }
    */
}
