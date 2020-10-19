<?php

namespace app\modules\community\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "News".
 *
 * @property int $Id
 * @property string|null $Title Заголовок
 * @property string $Body Сообщение
 * @property string|null $RegTime Время опубликования
 */
class TblNews extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Body'], 'required'],
            [['RegTime'], 'safe'],
            [['Title'], 'string', 'max' => 50],
            [['Body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'Ид записи',
            'Title' => 'Заголовок',
            'Body' => 'Сообщение',
            'RegTime' => 'Время создания',
        ];
    }
}
