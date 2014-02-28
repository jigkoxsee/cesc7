<?php

/**
 * This is the model class for table "cesc_user".
 *
 * The followings are the available columns in table 'cesc_user':
 * @property integer $uid
 * @property string $username
 * @property string $email
 * @property string $regisTime
 * @property string $gender
 * @property string $surname
 * @property string $nickname
 * @property integer $age
 * @property string $birthdate
 * @property string $address
 * @property string $phone_home
 * @property string $phone_mobile
 * @property string $school
 * @property string $branch
 * @property string $gpa
 * @property string $class
 * @property string $region
 * @property string $allergy
 * @property string $allergy_drug
 * @property string $allergy_food
 * @property string $camp
 * @property string $sheet_parent
 * @property string $sheet_rb1
 * @property string $sheet_rb2
 * @property string $sheet_rb3
 * @property string $sheet_rb4
 * @property string $sheet_nw1
 * @property string $sheet_nw2
 * @property string $sheet_nw3
 * @property string $sheet_nw4
 * @property string $regisip
 * @property string $bloodtype
 * @property string $phone_mobile_network
 * @property string $address_province
 * @property string $address_postcode
 * @property string $talent
 * @property string $not_eat
 * @property string $parent_name
 * @property string $parent_relation
 * @property string $parent_phone
 * @property string $school_province
 * @property string $camp1
 * @property string $camp1_uni
 * @property string $camp2
 * @property string $camp2_uni
 * @property string $camp3
 * @property string $camp3_uni
 * @property string $disease
 * @property string $thai_id
 *
 */
class User extends CActiveRecord
{



    // holds the password confirmation word
    public $repeatpassword;

    //will hold the encrypted password for update actions.
    public $initialPassword;
    public $verifyCode;//TODO(ziko) : verify code didnt work

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cesc_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('', 'required'),
            //array('username,email, gender, age, camp, phone_mobile, regisip', 'required'),
            //array('gender', 'numerical', 'integerOnly'=>true,'min'=>'0','max'=>'1'),//TODO(ziko):0=girl,1=boy
            array('gender','length', 'max'=>4),//DONE
            array('age', 'numerical', 'integerOnly'=>true,'min'=>'10','max'=>'25'),// limit age
            //array('class', 'numerical', 'integerOnly'=>true,'min'=>'0','max'=>'4'),//TODO(ziko): 1(3>4), 2(4>5), 3(5>6), 4(6>1)
            array('class','length', 'max'=>50),//DONE
            array('camp','length', 'max'=>7),//DONE
            //array('camp', 'numerical', 'integerOnly'=>true,'min'=>'0','max'=>'1'),//TODO(ziko): 0=robot,1=network
            array('branch, region', 'length', 'max'=>50),

            array('username','length', 'max'=>50),//DONE
            //array('username', 'match', 'pattern'=>'/([a-z0-9_])/'),
            //array('username','unique', 'className' => 'User', 'attributeName' => 'username', 'message'=>'Username นี้ถูกใช้ไปแล้ว'),

            array('email', 'length', 'max'=>150),//DONE
            array('email', 'match', 'pattern'=>'/@.+\./'),
            array('email','unique', 'className' => 'User', 'attributeName' => 'email', 'message'=>'Email นี้ถูกใช้ไปแล้ว'),



//            array('password', 'length','min'=>'4', 'max'=>64),//DONE
            array('school', 'length', 'max'=>150),//DONE
            array('surname', 'length', 'max'=>100),//TODO(ziko):need to add regex for correction data
            array('nickname', 'length', 'max'=>20),
            array('surname,nickname,','match', 'pattern'=>'/\D/'),//TODO(ziko):not correctly

            array('bloodtype,phone_mobile_network,address_province,address_postcode,talent,not_eat,parent_name,parent_relation,
            parent_phone,school_province,camp1,camp1_uni,camp2,camp2_uni,camp3,camp3_uni,disease', 'length', 'max'=>200),


            array('address, branch,allergy, allergy_drug, allergy_food', 'length', 'max'=>300),//DONE

            array('thai_id', 'length', 'max'=>17),

            array('gpa', 'length', 'max'=>4),//TODO(ziko):not correctly
            array('gpa','match', 'pattern'=>'/^(0|1|2|3|4)/'),
            //array('gpa','match', 'pattern'=>'/\./'),

            array('phone_home, phone_mobile,parent_phone','match', 'pattern'=>'/^([0-9])/'),//DONE //NOTE:: for number only
            array('phone_mobile','match', 'pattern'=>'/^0+(8|9)/'),
            array('phone_home, phone_mobile', 'length','min'=>'9', 'max'=>10),

            array('birthdate','match', 'pattern'=>'/^(1|2)+...+\-+..+\-../'),//DONE
            array('birthdate', 'length','min'=>'10', 'max'=>10),

//          array('repeatpassword', 'compare', 'compareAttribute'=>'password', 'message'=>"รหัสผ่านไม่ตรงกัน"),//DONE

//            array('verifyCode', 'captcha', 'allowEmpty'=>!Yii::app()->user->isGuest),//DONE


            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            //array('uid, username, password, email, regisTime, gender, surname, nickname, age, birthdate, address, phone_home, phone_mobile, school, branch, gpa, class, region, allergy, allergy_drug, allergy_food, camp', 'safe', 'on'=>'search'),
            array('gpa,regisip,address, branch,allergy, allergy_drug, allergy_food, sheet_parent, sheet_rb1, sheet_rb2, sheet_rb3, sheet_rb4, sheet_nw1,
            sheet_nw2,sheet_nw3, sheet_nw4, bloodtype,phone_mobile_network,address_province,address_postcode,talent,not_eat,parent_name,parent_relation,
            parent_phone,school_province,camp1,camp1_uni,camp2,camp2_uni,camp3,camp3_uni,disease,thai_id', 'safe','on'=>'edit'),

			array('uid, username, password, email, regisTime, gender, surname, nickname, age, birthdate, address, phone_home, phone_mobile, school, branch, gpa,
			class, region, allergy, allergy_drug, allergy_food, camp, sheet_parent, sheet_rb1, sheet_rb2, sheet_rb3, sheet_rb4, sheet_nw1, sheet_nw2, ' .
            'sheet_nw3, sheet_nw4', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'username' => 'Facebook ID',
			'password' => 'Password',
			'email' => 'Email',
			'regisTime' => 'เวลาลงทะเบียน',
			'gender' => 'เพศ',
			'surname' => 'ชื่อ นามสกุล',
			'nickname' => 'ชื่อเล่น',
			'age' => 'อายุ',
			'birthdate' => 'วันเกิด',
			'address' => 'ที่อยู่',
			'phone_home' => 'เบอร์โทรศัพท์บ้าน',
			'phone_mobile' => 'เบอร์โทรศัพท์มือถือ',
			'school' => 'โรงเรียน',
			'branch' => 'สายวิชา',
			'gpa' => 'เกรดเฉลี่ย',
			'class' => 'ชั้น',
			'region' => 'ศาสนา',
			'allergy' => 'สิ่งที่แพ้',
			'allergy_drug' => 'ยาที่แพ้',
			'allergy_food' => 'อาหารที่แพ้',
			'camp' => 'ค่ายย่อย',
			'sheet_parent' => 'ใบขออนุญาติผู้ปกครอง',
			'sheet_rb1' => 'คำถามโรบอท 1',
			'sheet_rb2' => 'คำถามโรบอท 2',
			'sheet_rb3' => 'คำถามโรบอท 3',
			'sheet_rb4' => 'คำถามโรบอท 4',
			'sheet_nw1' => 'คำถามเน็ตเวิร์ก 1',
			'sheet_nw2' => 'คำถามเน็ตเวิร์ก 2',
			'sheet_nw3' => 'คำถามเน็ตเวิร์ก 3',
			'sheet_nw4' => 'คำถามเน็ตเวิร์ก 4',
            'verifyCode'=>'รหัสยืนยัน',
            'regisip'=>'Register IP',
            'bloodtype'=>'กรุ๊ปเลือด',
            'phone_mobile_network'=>'เครื่อข่ายโทรศัพท์มือถือ',
            'address_province'=>'จังหวัด',
            'address_postcode'=>'รหัสไปรษณีย์',
            'talent'=>'ความสามารถพิเศษ',
            'not_eat'=>'ไม่รับประทาน',
            'parent_name'=>'ชื่อ นามสกุล ผู้ปกครอง',
            'parent_relation'=>'ความเกี่ยวข้อง',
            'parent_phone'=>'เบอร์โทรศัพท์',
            'school_province'=>'จังหวัด',
            'camp1'=>'1.ค่าย',
            'camp1_uni'=>'1.ค่ายของ ม.',
            'camp2'=>'2.ค่าย',
            'camp2_uni'=>'2.ค่ายของ ม.',
            'camp3'=>'3.ค่าย',
            'camp3_uni'=>'3.ค่ายของ ม.',
            'disease'=>'โรคประจำตัว',
            'thai_id'=>'เลขประจำตัวประชาชน'
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

		//$criteria->compare('uid',$this->uid);
		$criteria->compare('username',$this->username,true);
		//$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);

		$criteria->compare('regisTime',$this->regisTime,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone_home',$this->phone_home,true);
		$criteria->compare('phone_mobile',$this->phone_mobile,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('gpa',$this->gpa,true);
		$criteria->compare('class',$this->class);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('allergy',$this->allergy,true);
		$criteria->compare('allergy_drug',$this->allergy_drug,true);
		$criteria->compare('allergy_food',$this->allergy_food,true);
		$criteria->compare('camp',$this->camp);
		/*$criteria->compare('sheet_parent',$this->sheet_parent,true);
		$criteria->compare('sheet_rb1',$this->sheet_rb1,true);
		$criteria->compare('sheet_rb2',$this->sheet_rb2,true);
		$criteria->compare('sheet_rb3',$this->sheet_rb3,true);
		$criteria->compare('sheet_rb4',$this->sheet_rb4,true);
		$criteria->compare('sheet_nw1',$this->sheet_nw1,true);
		$criteria->compare('sheet_nw2',$this->sheet_nw2,true);
		$criteria->compare('sheet_nw3',$this->sheet_nw3,true);
		$criteria->compare('sheet_nw4',$this->sheet_nw4,true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    //ziko: for Authentication User
    public function validatePassword($password)
    {
        /*echo "<script> console.log('".$this->username."');</script>";// @ziko : for testing
        echo "<script> console.log('".$this->password."');</script>";
        echo "<script> console.log('".$this->hashPassword($password,$this->username)."');</script>";*/
        //return $this->hashPassword($password,$this->username)===$this->password;
        return $password===$this->password;
    }

    public function hashPassword($password,$username)
    {
        return sha1($username.$password);
    }

}
