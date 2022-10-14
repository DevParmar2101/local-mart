<?php

namespace common\components;

use yii\base\Component;

class GlobalProperty extends Component
{
    /**
     * @var $name string
     */
    public string $name = 'LocalMart';

    /**
     * @var $email_host string
     */
    public string $email_host = '';

    /**
     * @var $email_username string
     */
    public string $email_username = '';

    /**
     * @var $email_password string
     */
    public string $email_password = '';

    /**
     * @var $email_port string
     */
    public string $email_port = '';

    /**
     * @var $twilio_account_sid string
     */
    public string $twilio_account_sid = '';

    /**
     * @var $twilio_auth_token string
     */
    public string $twilio_auth_token = '';

    /**
     * @var $twilio_service_sid string
     */
    public string $twilio_service_sid = '';

    /**
     * @var $twilio_phone_number string
     */
    public string $twilio_phone_number = '';

    /**
     * @var $logo_dark string
     */
    public string $logo_dark = '';

    /**
     * @var $logo_light string
     */
    public string $logo_light = '';

    /**
     * @var $logo_transparent string
     */
    public string $logo_transparent = '';

    /**
     * @var $favicon string
     */
    public string $favicon = '';

}