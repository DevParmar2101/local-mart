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
 * @property string|null $child_image
 * @property string|null $button_title
 * @property string|null $button_url
 * @property int|null $show_button
 * @property int|null $use_for
 * @property int|null $status
 */
class ExtraPageContent extends BaseActiveRecord
{
    const HOMEPAGE_BANNER = 1;
    const OTHER = 10;

    const NO = 0;
    const YES = 1;

    const HOMEPAGE_BANNER_CONTENT = 'Homepage Banner';
    const OTHER_PAGE_CONTENT = 'Other page content';

    const NO_TEXT = 'No';
    const YES_TEXT = 'Yes';
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
            [['title','sub_title','use_for','status'],'required'],
            [['description'], 'string'],
            [['show_button', 'use_for', 'status'], 'integer'],
            [['title', 'sub_title', 'image', 'child_image', 'button_title', 'button_url'], 'string', 'max' => 255],
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
            'image' => 'Image One',
            'button_title' => 'Button Title',
            'button_url' => 'Button Url',
            'show_button' => 'Show Button',
            'use_for' => 'Use For',
            'status' => 'Status',
            'child_image' => 'Image Two'
        ];
    }

    /**
     * @param $use_for
     * @return string|string[]
     */
    public function getUseFor($use_for = null)
    {
        $array = [
            self::HOMEPAGE_BANNER => self::HOMEPAGE_BANNER_CONTENT,
            self::OTHER => self::OTHER_PAGE_CONTENT,
        ];
        if (!is_null($use_for)) {
            return $array[$use_for];
        }
        return $array;
    }

    public function getButton($button = null)
    {
        $array = [
            self::NO => self::NO_TEXT,
            self::YES => self::YES_TEXT,
        ];
        if (!is_null($button)) {
            return $array[$button];
        }
        return $array;
    }
}
