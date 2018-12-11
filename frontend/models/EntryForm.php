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
	//public $reCaptcha;

	public static function tableName() {
		return 'posts';
	}




   
	public function rules()
	{	
		return [
			['name', 'string', 'min' => 3],
			['sname', 'string', 'min' => 3],
			['name', 'match', 'pattern' => '/^[А-яёЁA-z]+$/', 'message' => 'В имени только буквы!'], 
			['sname', 'match', 'pattern' => '/^[а-яА-ЯёЁa-zA-Z]+$/', 'message' => 'В фамилии только буквы!'], 	
			[['name','sname','phone','email','textarea'], 'required'],
			['email', 'email'],
			['text_id', 'safe' ],
			/*[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => 'your secret key', 'uncheckedMessage' => 'Please confirm that you are not a bot.'],  
			*/
		];
	}
}