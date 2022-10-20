<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_user_store_documents}}`.
 */
class m221020_055206_create_new_user_store_documents_table extends Migration
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
        $this->dropTable('{{%new_user_store_documents}}');
    }
}
