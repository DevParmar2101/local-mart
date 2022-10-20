<?php

use yii\db\Migration;

/**
 * Class m221020_124328_add_store_id_in_user_store_document_table
 */
class m221020_124328_add_store_id_in_user_store_document_table extends Migration
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
        echo "m221020_124328_add_store_id_in_user_store_document_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221020_124328_add_store_id_in_user_store_document_table cannot be reverted.\n";

        return false;
    }
    */
}
