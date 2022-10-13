<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page_content}}`.
 */
class m221013_071903_create_page_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page_content}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'sub_title' => $this->string(255),
            'content' => $this->text(),
            'use_for' => $this->tinyInteger(2),
            'order_by' => $this->integer(11),
            'status' => $this->tinyInteger(2),
            'user_id' => $this->integer(11),
        ]);
        $this->addForeignKey('fk-UserId-Page_content_user_id','page_content','user_id','user','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%page_content}}');
    }
}
