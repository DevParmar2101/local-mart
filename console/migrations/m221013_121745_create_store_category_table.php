<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%store_category}}`.
 */
class m221013_121745_create_store_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%store_category}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string(255),
            'user_id' => $this->integer(11),
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
        $this->dropTable('{{%store_category}}');
    }
}
