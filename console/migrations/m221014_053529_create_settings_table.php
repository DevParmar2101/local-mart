<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%settings}}`.
 */
class m221014_053529_create_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'app_name' =>               $this->string(50),
            'email_host' =>             $this->string(100),
            'email_username' =>         $this->string(100),
            'email_password' =>         $this->string(225),
            'email_port' =>             $this->string(10),
            'email_encryption' =>       $this->string(10),
            'twilio_account_sid' =>     $this->string(255),
            'twilio_auth_token' =>      $this->string(255),
            'twilio_service_sid' =>     $this->string(255),
            'twilio_phone_number' =>    $this->string(15),
            'logo_dark' =>              $this->string(255),
            'logo_light' =>             $this->string(255),
            'logo_transparent' =>       $this->string(255),
            'favicon' =>                $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%settings}}');
    }
}
