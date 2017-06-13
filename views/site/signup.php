

<?php
use yii\widgets\ActiveForm;

?>
<div class="col-xs-12 col-md-6 col-md-offset-3">
    <div class="col-xs-12 text-center">
        <h1>Регистрация</h1>
    </div>
    <?php if(isset($success)): ?>
    <div class="col-xs-12">
        <label for="" class="label label-success">Роль успешно создана</label>
    </div>
    <? endif;?>
<?$form = ActiveForm::begin(['class' => 'form-horizontal'])?>
<?=$form->field($user,'email')->textInput()?>
<?=$form->field($user, 'login')->textInput()?>
<?=$form->field($user,'password')->passwordInput()?>
<div><button type="submit" class="btn btn-success">Регистрация</button></div>

<?
$form = ActiveForm::end();
?>
</div>