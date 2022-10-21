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
            'user_id' => $this->integer(11),
            'product_id' => $this->integer(11),
        ]);

        $this->addForeignKey('fk-User_id-User','user_favourite','user_id', \common\models\User::tableName(),'id');

        $this->addForeignKey('fk-Product_id-UserFavourite','user_favourite','product_id', 'product','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_favourite}}');
    }
}
