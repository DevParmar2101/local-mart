<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%store_sub_category}}`.
 */
class m221013_130445_create_store_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%store_sub_category}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->integer(11),
            'sub_category' => $this->string(255),
            'user_id' => $this->integer(11),
            'status' => $this->tinyInteger(2),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);

        $this->dropForeignKey('fk-StoreCategory-user_store_store_category','user_store');

        $this->addForeignKey('fk-StoreSubCategory-user_store_store_category','user_store','store_category','store_sub_category','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%store_sub_category}}');
    }
}
