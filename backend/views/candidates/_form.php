<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Candidates */
/* @var $form yii\widgets\ActiveForm */
$work = \common\models\Category::find()->all();
$group =\common\models\Groups::find()->all();
?>

<div class="candidates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_groups')->dropDownList(ArrayHelper::map($group, 'id', 'name'), ['prompt' => 'Виберіть групу:']) ?>

    <?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map($work, 'id', 'name'), ['prompt' => 'Виберіть спеціальність:']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
