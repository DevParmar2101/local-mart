<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_store}}`.
 */
class m221013_121746_create_user_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_store}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255),
            'last_name' => $this->string(255),
            'contact_number' => $this->string(15),
            'is_number_verified' => $this->tinyInteger(2),
            'user_id' => $this->integer(11),
            'store_name' => $this->string(255),
            'state' => $this->integer(11),
            'city' => $this->integer(11),
            'address' => $this->text(),
            'zip_code' => $this->integer(10),
            'status' => $this->tinyInteger(2),
            'store_category' => $this->integer(11),
            'purchase_type' => $this->tinyInteger(2),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
        $this->addForeignKey('fk-UserId-user_store_user_id','user_store','user_id','user','id');
        $this->addForeignKey('fk-StoreCategory-user_store_store_category','user_store','store_category','store_category','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_store}}');
    }
}
