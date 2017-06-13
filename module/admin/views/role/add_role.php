<div class="col-xs-12 col-md-6 col-md-offset-3">
<h1 class="text-center">Добавление роли</h1>
    <?
$form = \yii\widgets\ActiveForm::begin(['class' => 'form-inline']);
?>

<?=$form->field($role,'label_role')->textInput(['autofocus' => true])?>
<div><button type="submit" class="btn btn-success">Добавить роль</button></div>
<? \yii\widgets\ActiveForm::end()?>
</div>
