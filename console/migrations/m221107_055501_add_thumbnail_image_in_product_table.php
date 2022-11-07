<?php

use common\models\Product;
use yii\db\Migration;

/**
 * Class m221107_055501_add_thumbnail_image_in_product_table
 */
class m221107_055501_add_thumbnail_image_in_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Product::tableName(),'thumbnail_image',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221107_055501_add_thumbnail_image_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221107_055501_add_thumbnail_image_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
