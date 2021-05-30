<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Voting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="voting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'candidate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'studnumber')->textInput() ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'why')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
