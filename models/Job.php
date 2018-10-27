<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_jobs}}".
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $type
 * @property string $requirments
 * @property string $salary_range
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $contact_email
 * @property string $cantact_phone
 * @property int $is_published
 * @property string $create_date
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_jobs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'title', 'description', 'type', 'requirments', 'salary_range', 'city', 'state', 'zip', 'contact_email', 'cantact_phone'], 'required'],
            [['category_id', 'user_id', 'is_published'], 'integer'],
            [['description'], 'string'],
            [['create_date'], 'safe'],
            [['title', 'type', 'requirments', 'salary_range', 'city', 'state', 'zip', 'contact_email', 'cantact_phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'type' => 'Type',
            'requirments' => 'Requirments',
            'salary_range' => 'Salary Range',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'contact_email' => 'Contact Email',
            'cantact_phone' => 'Cantact Phone',
            'is_published' => 'Is Published',
            'create_date' => 'Create Date',
        ];
    }
}
