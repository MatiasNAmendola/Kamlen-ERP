<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property string $id
 * @property string $order_nubmer
 * @property string $nickname
 * @property string $realname
 * @property string $contact
 * @property string $channel_id
 * @property string $sales
 * @property string $cost
 * @property string $express_cost
 * @property string $express_id
 * @property string $express_number
 * @property string $profit
 * @property integer $status
 * @property string $note
 * @property string $username
 * @property string $create_time
 * @property string $modify_time
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_nubmer, nickname, sales, contact, channel_id, express_id', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('order_nubmer, express_number', 'length', 'max'=>30),
			array('nickname', 'length', 'max'=>50),
			array('realname, username', 'length', 'max'=>20),
			array('channel_id, express_id, create_time, modify_time', 'length', 'max'=>10),
			array('sales, cost, express_cost, profit', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, order_nubmer, nickname, realname, contact, channel_id, sales, cost, express_cost, express_id, express_number, profit, status, note, username, create_time, modify_time', 'safe', 'on'=>'search'),
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
			'order_nubmer' => 'Order Nubmer',
			'nickname' => 'Nickname',
			'realname' => 'Realname',
			'contact' => 'Contact',
			'channel_id' => 'Channel',
			'sales' => 'Sales',
			'cost' => 'Cost',
			'express_cost' => 'Express Cost',
			'express_id' => 'Express',
			'express_number' => 'Express Number',
			'profit' => 'Profit',
			'status' => 'Status',
			'note' => 'Note',
			'username' => 'Username',
			'create_time' => 'Create Time',
			'modify_time' => 'Modify Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('order_nubmer',$this->order_nubmer,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('channel_id',$this->channel_id,true);
		$criteria->compare('sales',$this->sales,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('express_cost',$this->express_cost,true);
		$criteria->compare('express_id',$this->express_id,true);
		$criteria->compare('express_number',$this->express_number,true);
		$criteria->compare('profit',$this->profit,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('modify_time',$this->modify_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave() {
		if ($this->isNewRecord)
			$this->create_time = new CDbExpression(time());
		else
			$this->modify_time = new CDbExpression(time());
	
		return parent::beforeSave();
	}
}