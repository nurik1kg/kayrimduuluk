<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statistic".
 *
 * @property integer $id
 * @property integer $helped
 * @property integer $help
 * @property string $date
 */
class Statistic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statistic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['helped', 'help', 'date'], 'required'],
            [['helped', 'help'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'helped' => 'Жардам алынды',
            'help' => 'Жардам алына элек',
            'date' => 'Өзгөртүлгөн датасы',
        ];
    }
}
