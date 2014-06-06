<?php
/* @var $this RubricController */
/* @var $model Rubric */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rubric-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,$inputs->new); ?>
		<?php echo $form->textField($model,$inputs->new,array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,$inputs->new); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'back'); ?>
		<?php echo $form->textField($model,'back',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'back'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create'); ?>
		<?php echo $form->textField($model,'create',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->