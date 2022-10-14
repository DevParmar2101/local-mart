<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $app_name
 * @property string|null $email_host
 * @property string|null $email_username
 * @property string|null $email_password
 * @property string|null $email_port
 * @property string|null $email_encryption
 * @property string|null $twilio_account_sid
 * @property string|null $twilio_auth_token
 * @property string|null $twilio_service_sid
 * @property string|null $twilio_phone_number
 * @property string|null $logo_dark
 * @property string|null $logo_light
 * @property string|null $logo_transparent
 * @property string|null $favicon
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['app_name'], 'string', 'max' => 50],
            [['email_host', 'email_username'], 'string', 'max' => 100],
            [['email_password'], 'string', 'max' => 225],
            [['email_port', 'email_encryption'], 'string', 'max' => 10],
            [['twilio_account_sid', 'twilio_auth_token', 'twilio_service_sid', 'logo_dark', 'logo_light', 'logo_transparent', 'favicon'], 'string', 'max' => 255],
            [['twilio_phone_number'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'app_name' => 'App Name',
            'email_host' => 'Email Host',
            'email_username' => 'Email Username',
            'email_password' => 'Email Password',
            'email_port' => 'Email Port',
            'email_encryption' => 'Email Encryption',
            'twilio_account_sid' => 'Twilio Account Sid',
            'twilio_auth_token' => 'Twilio Auth Token',
            'twilio_service_sid' => 'Twilio Service Sid',
            'twilio_phone_number' => 'Twilio Phone Number',
            'logo_dark' => 'Logo Dark',
            'logo_light' => 'Logo Light',
            'logo_transparent' => 'Logo Transparent',
            'favicon' => 'Favicon',
        ];
    }
}
