<?php

use common\models\UserStore;
use yii\db\Migration;

/**
 * Class m221021_042235_add_documents_fields_in_table
 */
class m221021_042235_add_documents_fields_in_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(UserStore::tableName(),'document_one',$this->string(255));
        $this->addColumn(UserStore::tableName(),'document_one_verified',$this->tinyInteger(1));
        $this->addColumn(UserStore::tableName(),'document_one_error_message',$this->string(255));

        $this->addColumn(UserStore::tableName(),'document_two',$this->string(255));
        $this->addColumn(UserStore::tableName(),'document_two_verified',$this->tinyInteger(1));
        $this->addColumn(UserStore::tableName(),'document_two_error_message',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221021_042235_add_documents_fields_in_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221021_042235_add_docuements_fields_in_table cannot be reverted.\n";

        return false;
    }
    */
}
