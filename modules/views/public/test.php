<?php
    use yii\helpers\Html;
    ?>
<?= Html::beginForm('','post')
?>
<?php Html::activeInput('text',$model,'username',['class'=>'form'])?>
<?= Html::endForm()?>
