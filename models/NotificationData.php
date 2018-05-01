<?php

namespace kouosl\notification\models;

use Yii;

/**
 * This is the model class for table "notification_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $notification_id
 *
 * @property Notification $notification
 */
class NotificationData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'notification_id'], 'required'],
            [['notification_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['notification_id'], 'exist', 'skipOnError' => true, 'targetClass' => Notification::className(), 'targetAttribute' => ['notification_id' => 'id']],
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
            'notification_id' => 'Notification ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotification()
    {
        return $this->hasOne(Notification::className(), ['id' => 'notification_id']);
    }
}
