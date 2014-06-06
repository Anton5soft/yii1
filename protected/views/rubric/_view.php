<?php
/* @var $this RubricController */
/* @var $data Rubric */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new')); ?>:</b>
	<?php echo CHtml::encode($data->new); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('back')); ?>:</b>
	<?php echo CHtml::encode($data->back); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create')); ?>:</b>
	<?php echo CHtml::encode($data->create); ?>
	<br />


</div>