<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "extra_page_content".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $sub_title
 * @property string|null $description
 * @property string|null $image
 * @property string|null $button_title
 * @property string|null $button_url
 * @property int|null $show_button
 * @property int|null $use_for
 * @property int|null $status
 */
class ExtraPageContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'extra_page_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['show_button', 'use_for', 'status'], 'integer'],
            [['title', 'sub_title', 'image', 'button_title', 'button_url'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'image' => 'Image',
            'button_title' => 'Button Title',
            'button_url' => 'Button Url',
            'show_button' => 'Show Button',
            'use_for' => 'Use For',
            'status' => 'Status',
        ];
    }
}
