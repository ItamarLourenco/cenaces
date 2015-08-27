<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
