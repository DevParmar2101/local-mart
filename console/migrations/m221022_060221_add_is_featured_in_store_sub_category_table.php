<?php

use common\models\StoreSubCategory;
use yii\db\Migration;

/**
 * Class m221022_060221_add_is_featured_in_store_sub_category_table
 */
class m221022_060221_add_is_featured_in_store_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(StoreSubCategory::tableName(),'is_featured',$this->tinyInteger(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221022_060221_add_is_featured_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221022_060221_add_is_featured_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }
    */
}
