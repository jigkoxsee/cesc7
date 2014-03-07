<?php

/**
 * This is the model class for table "cesc_upload".
 *
 * The followings are the available columns in table 'cesc_upload':
 * @property integer $id
 * @property string $file
 * @property string $description
 * @property string $create_time
 * @property string $create_username
 * @property string $update_time
 */
class Photo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cesc_upload';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('create_username', 'numerical', 'integerOnly'=>true),
			//array('file', 'length', 'max'=>128),
			array('file', 'file', 'types'=>'jpg, gif, png', 'maxSize' => 1048576, 'wrongType'=>'Only jpg, gif, png allowed.'),
			array('description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, file, description, create_time, create_username, update_time', 'safe', 'on'=>'search'),
			array('update_time','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert, update'),
			array('create_time','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			);
	}


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'File',
			'description' => 'Description',
			'create_time' => 'Create Time',
			'create_username' => 'Create Username',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_username',$this->create_username,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Photo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
