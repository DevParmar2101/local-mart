<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\web\UploadedFile;

class BaseActiveRecord extends ActiveRecord
{
    const INACTIVE = 0;
    const ACTIVE = 1;

    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ACTIVE = 'Active';

    /**
     * @param $status
     * @return string|string[]
     */
    public function getStatus($status = null)
    {
        $array = [
            self::ACTIVE => self::STATUS_ACTIVE,
            self::INACTIVE => self::STATUS_INACTIVE,
        ];
        if (!is_null($status)) {
            return $array[$status];
        }
        return $array;
    }

    /**
     * @param $image UploadedFile
     *
     * @return string
     * @throws \yii\base\Exception
     */
    public function getImageName(UploadedFile $image): string
    {
        return Inflector::slug($image->baseName).\Yii::$app->security->generateRandomString(16).'.'.$image->extension;
    }
    /**
     * @param $name
     * @return false|string
     */
    public static function getPath($name=null){
        $path = \Yii::getAlias('@backend/web/'.self::getPathPrefix());
        if($name){
            return $path.$name;
        }
        return $path;
    }

    /**
     * @param $name
     * @return string
     */
    public static function getPathPrefix($name=null): string
    {
        $path = '/uploads/'.Inflector::camel2id(StringHelper::basename(get_called_class()), '_').'/';
        if($name){
            return $path.$name;
        }
        return $path;
    }

    /**
     * @param $name
     * @param string $alt
     * @param string $class
     * @param $data_speed
     * @return string|void
     */
    public function getImage($name, string $alt='', string $class='',$data_speed = null){
        if($this->{$name}){
            return Html::img($this->getImageUrl($name),
                ['class' => $class,'alt' =>$alt,'data-speed' => $data_speed]);
        }
    }

    /**
     * @param $name
     * @return string|void
     */
    public function getImageUrl($name){
        if($this->{$name}){
            return \Yii::$app->urlManagerAdmin->createAbsoluteUrl(self::getPathPrefix($this->{$name}));
        }
    }
}