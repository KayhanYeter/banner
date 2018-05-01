<?php

namespace kouosl\banner\models;

use Yii;

/**
 * This is the model class for table "banner_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $banner_id
 *
 * @property Banner $banner
 */
class BannerData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'banner_id'], 'required'],
            [['banner_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['banner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Banner::className(), 'targetAttribute' => ['banner_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'banner_id' => 'Banner ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanner()
    {
        return $this->hasOne(Banner::className(), ['id' => 'banner_id']);
    }
}
