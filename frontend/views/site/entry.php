<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Entry';
$this->params['breadcrumbs'][] = "Entry";
?>
<h1><?= Html::encode($this->title) ?></h1>


<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>
        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>