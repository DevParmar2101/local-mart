<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%extraPage_content}}`.
 */
class m221007_122836_create_extraPage_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%extra_page_content}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'sub_title' => $this->string(255),
            'description' => $this->text(),
            'image' => $this->string(255),
            'button_title' => $this->string(255),
            'button_url' => $this->string(255),
            'show_button' => $this->tinyInteger(2),
            'use_for' => $this->tinyInteger(2),
            'status' => $this->tinyInteger(2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%extraPage_content}}');
    }
}
