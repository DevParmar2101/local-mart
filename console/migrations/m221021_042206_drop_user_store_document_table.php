<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%user_store_document}}`.
 */
class m221021_042206_drop_user_store_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%user_store_document}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%user_store_document}}', [
            'id' => $this->primaryKey(),
        ]);
    }
}
