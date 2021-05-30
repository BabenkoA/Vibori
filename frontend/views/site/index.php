<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$candidate =\common\models\Candidates::find()->all();
$this->title = 'Голосування';
?>
<h1 class="w3layouts">Голосування </h1>
<div class="clear"></div>
<div class="content-w3ls">
    <div class="form_w3layouts">
        <form action="#" method="post" class="">
            <?= Html::beginForm('', 'post', ['class'=>'agile_form','enctype' => 'multipart/form-data','id'=>'first_form', 'data-form'=>'getClient']) ?>

            <div class="section_class_agileits">
                <select name="candidate" required>
                    <option value="">Вибрати Кандидата</option>
                    <?foreach ($candidate as $cat):?>
                    <option value="<?=$cat['fullname']?>"><?=$cat['fullname']?></option>
                    <? endforeach;?>
                </select>
            </div>
            <div class="agileits-left s2-w3ls">
                <input type="text" name="studnumber" class="username" placeholder="Номер Студентського" required="">
            </div>
            <div class="agileits-left s2-w3ls">
                <input type="text" name="group" class="username" placeholder="Група" required="">
            </div>
            <div class="agileits-left s2-w3ls">
                <input type="text" name="text" class="username" placeholder="Коментар" required="">
            </div>



            <div class="submit-w3l">
                <input type="submit" value="Проголосувати">
            </div>

            <?= Html::endForm() ?>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<h2 class="copyright-agileits">Дипломна робота
    <a href="" target="_blank">студента</a>
</h2>
<div class="clear"></div>

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- date-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1").datepicker();
    });
</script>
<!-- //date -->
<!-- time -->
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
    $('.timepicker').wickedpicker({
        twentyFour: false
    });
</script>
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />