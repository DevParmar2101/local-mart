<?php

use yii\db\Migration;

/**
 * Class m221013_090458_add_slug_in_page_content_table
 */
class m221013_090458_add_slug_in_page_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\common\models\PageContent::tableName(),'slug',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_090458_add_slug_in_page_content_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_090458_add_slug_in_page_content_table cannot be reverted.\n";

        return false;
    }
    */
}
