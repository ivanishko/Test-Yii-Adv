<?php 
namespace frontend\models;
use yii\db\ActiveRecord;

use yii\base\Model;

class EntryForm extends ActiveRecord
{
	//public $name;
	//public $sname;
	//public $phone;
	//public $email;
	//public $textarea;
	//public $text_id;
	public $reCaptcha;

	public static function tableName() {
		return 'posts';
	}




   
	public function rules()
	{	
		return [
			['name', 'string', 'min' => 3],
			['sname', 'string', 'min' => 3],
			['name', 'match', 'pattern' => '/^[а-яА-ЯЁёA-Za-z]+$/u', 'message' => 'В имени только буквы!'], 
			['sname', 'match', 'pattern' => '/^[а-яА-ЯЁёA-Za-z]+$/u', 'message' => 'В фамилии только буквы!'], 	
			[['name','sname','phone','email','textarea'], 'required'],
			['email', 'email'],
			['text_id', 'safe' ],
			[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LexEIEUAAAAAIKQA2nCoeHQ0d4segRpAnANpIBo', 'uncheckedMessage' => 'Please confirm that you are not a bot.']
			
		];
	}
}