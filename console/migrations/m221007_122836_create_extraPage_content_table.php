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
        $this->createTable('{{%extraPage_content}}', [
            'id' => $this->primaryKey(),
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
