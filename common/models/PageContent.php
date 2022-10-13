<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page_content".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $sub_title
 * @property string|null $content
 * @property int|null $use_for
 * @property int|null $order_by
 * @property int|null $status
 * @property int|null $user_id
 *
 * @property User $user
 */
class PageContent extends BaseActiveRecord
{
    const HEADER_TYPE = 1;
    const FOOTER_TYPE = 2;
    const BOTH_TYPE = 3;

    const HEADER = 'Header';
    const FOOTER = 'Footer';
    const BOTH = 'Both';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'sub_title', 'use_for', 'status'], 'required'],
            [['content'], 'string'],
            [['use_for', 'order_by', 'status', 'user_id'], 'integer'],
            [['title', 'sub_title'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'content' => 'Content',
            'use_for' => 'Use For',
            'order_by' => 'Order By',
            'status' => 'Status',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * @param $use_for
     * @return string|string[]
     */
    public function getUseFor($use_for = null)
    {
        $array = [
            self::HEADER_TYPE => self::HEADER,
            self::FOOTER_TYPE => self::FOOTER,
            self::BOTH_TYPE => self::BOTH
        ];
        if (!is_null($use_for)){
            return $array[$use_for];
        }
        return $array;
    }
}
