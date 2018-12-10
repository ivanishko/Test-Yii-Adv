<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->label('Имя') ?>
	<?= $form->field($model, 'sname')->label('Ваша Фамилия')  ?>
	<?= $form->field($model, 'email')->label('Почта')  ?>
	<?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '7(999)999-99-99',
]) ?>
	<?= $form->field($model,'textarea')->textarea(['minlength'=>10,'style'=>'height:100px']);?>
	



	 <div class="form-group">
	 	<?= Html::submitButton('Отправить',['class' => 'btn btn-primary']) ?>
	 </div>
<?php ActiveForm::end(); ?>