<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Students */
/* @var $form yii\widgets\ActiveForm */
$group =\common\models\Groups::find()->all();
$work = \common\models\Category::find()->all();
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberstud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_groups')->dropDownList(ArrayHelper::map($group, 'id', 'name'), ['prompt' => 'Виберіть групу:']) ?>

    <?= $form->field($model, 'kurs')->textInput() ?>

    <?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map($work, 'id', 'category'), ['prompt' => 'Виберіть спеціальність:']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
