<?php

use common\models\StoreSubCategory;
use yii\db\Migration;
use yii\helpers\Inflector;

/**
 * Class m221103_063322_add_data_in_slug_field_in_store_sub_category_table
 */
class m221103_063322_add_data_in_slug_field_in_store_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $model = StoreSubCategory::find()->where(['slug' => null])->all();
        foreach ($model as $item) {
            /* @var $item StoreSubCategory*/
            $item->slug = Inflector::slug($item->sub_category);
            $item->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221103_063322_add_data_in_slug_field_in_store_sub_category_table cannot be reverted.\n";

        return false;
    }
}
