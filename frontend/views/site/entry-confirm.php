<?php 
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
	<li><label>Имя:</label><?= Html::encode($model->name) ?></li>
	<li><label>Фамилия:</label><?=  Html::encode($model->sname) ?></li>
	<li><label>Телефон:</label><?=  Html::encode($model->phone) ?></li>
	<li><label>Email:</label><?=  Html::encode($model->email) ?></li>
	<li><label>Сообщение:</label><?=  Html::encode($model->textarea) ?></li>
</ul>