<?php

use common\models\Product;
use yii\db\Migration;

/**
 * Class m221103_102153_alter_created_at_field_in_product_table
 */
class m221103_102153_alter_created_at_field_in_product_table extends Migration
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
        echo "m221103_102153_alter_created_at_field_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221103_102153_alter_created_at_field_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
