<?php

use common\models\StoreSubCategory;
use yii\db\Migration;

/**
 * Class m221022_031116_add_image_in_sub_category_table
 */
class m221022_031116_add_image_in_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(StoreSubCategory::tableName(),'image',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221022_031116_add_image_in_sub_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221022_031116_add_image_in_sub_category_table cannot be reverted.\n";

        return false;
    }
    */
}
