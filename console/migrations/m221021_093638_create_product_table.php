<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m221021_093638_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'store_id' => $this->integer(),
            'product_name' => $this->string(255),
            'category' => $this->integer(11),
            'sub_category' => $this->integer(11),
            'product_price' => $this->float(10.15),
            'discount' => $this->float(10.15),
            'quantity' => $this->integer(11),
            'information' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'description' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'warranty_period' => $this->string(255),
            'available_for' => $this->tinyInteger(2),
            'status' => $this->tinyInteger(2),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
