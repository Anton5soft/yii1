<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'rubric-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>
    <div class="row">
        <?php echo $form->labelEx($model,'rubric'); ?>
        <?php echo $form->checkBoxList($model, 'rubric', array(
            'new'=>'Зима',
            'test'=>'Весна',
            'new'=>'Зима',
            'test'=>'Весна',
            'new1'=>'Зимаa',
            'test2'=>'Веснаa',
        )); ?>
    </div>
<?php $this->endWidget(); ?>