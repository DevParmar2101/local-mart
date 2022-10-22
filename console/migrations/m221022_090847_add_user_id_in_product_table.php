<?php

use common\models\Product;
use yii\db\Migration;

/**
 * Class m221022_090847_add_user_id_in_product_table
 */
class m221022_090847_add_user_id_in_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Product::tableName(),'user_id',$this->integer(11));

        $this->addForeignKey('fk-Product-user_id_User-id',Product::tableName(),'user_id','user','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221022_090847_add_user_id_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221022_090847_add_user_id_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
