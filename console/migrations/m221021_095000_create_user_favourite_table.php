<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_favourite}}`.
 */
class m221021_095000_create_user_favourite_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_favourite}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_favourite}}');
    }
}
