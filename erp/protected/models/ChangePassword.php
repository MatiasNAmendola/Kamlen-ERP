<?php

class ChangePassword extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $username
	 * @var string $password
	 * @var string $salt
	 * @var string $email
	 * @var string $profile
	 */
	public $repassword;
	public $orpassword;
	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, repassword, orpassword', 'required'),
			array('password, repassword, orpassword', 'length', 'min'=>5, 'max'=>32),
			array('repassword', 'compare', 'compareAttribute'=>'password'),
			array('orpassword','validateOrpassword'),
			array('profile,salt', 'safe'),
		);
	}

	public function validateOrpassword($attribute)
	{
			$user=User::model()->find('LOWER(username)=?',array(strtolower(Yii::app()->user->name)));
			if(!$user->validatePassword($this->orpassword))
				$this->addError($attribute, '原始密码不正确!');
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'username' => '账号',
			'password' => '密码',
			'repassword' => '重复密码',
			'orpassword' => '原始密码',
			'salt' => 'Salt',
			'email' => '邮箱',
			'profile' => '简介',
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->salt)===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	protected function generateSalt()
	{
		return uniqid('',true);
	}

	public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('salt', $this->salt);
        $criteria->compare('email', $this->email);
        $criteria->compare('profile', $this->profile, true);
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }
}