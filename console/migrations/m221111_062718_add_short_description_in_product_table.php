<?php

use common\models\Product;
use yii\db\Migration;

/**
 * Class m221111_062718_add_short_description_in_product_table
 */
class m221111_062718_add_short_description_in_product_table extends Migration
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
        echo "m221111_062718_add_short_description_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221111_062718_add_short_description_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
