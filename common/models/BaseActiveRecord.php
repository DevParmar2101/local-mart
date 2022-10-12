<?php
namespace common\models;

use yii\db\ActiveRecord;

class BaseActiveRecord extends ActiveRecord
{
    const INACTIVE = 0;
    const ACTIVE = 1;

    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ACTIVE = 'Active';

    public function getStatus($status = null)
    {
        $array = [
            self::INACTIVE => self::STATUS_INACTIVE,
            self::ACTIVE => self::STATUS_ACTIVE,
        ];
        if (is_null($status)) {
            return $array[$status];
        }
        return $array;
    }
}