<?php

use common\models\Product;
use yii\db\Migration;

/**
 * Class m221103_111655_add_uuid_data_in_product_table
 */
class m221103_111655_add_uuid_data_in_product_table extends Migration
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
        echo "m221103_111655_add_uuid_data_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221103_111655_add_uuid_data_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
