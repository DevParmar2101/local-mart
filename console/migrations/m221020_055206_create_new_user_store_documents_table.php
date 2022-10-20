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
        $this->createTable('{{%user_store_document}}', [
            'id' => $this->primaryKey(),
            'document_name' => $this->string(255),
            'document' => $this->string(255),
            'status' => $this->tinyInteger(2),
            'error_message' => $this->string(255),
            'document_verified_by' => $this->integer(11),
        ]);
        $this->addForeignKey('fk-DocumentVerifiedBy-User_id','user_store_document','document_verified_by','user','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%new_user_store_documents}}');
    }
}
