<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excerpt'); ?>
		<?php echo $form->textArea($model,'excerpt',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'excerpt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status', $model->getStatusOptions()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div>
		<?php //echo $form->labelEx($model, 'tag'); ?>
		<?php //echo $form->checkBoxList($model,'taxonomy',Taxonomy::model()->listTerms('tag'));?>
		<?php //echo $form->error($model, 'tag');?>
	</div>
	<div>
		<?php echo $form->labelEx($model, 'category'); ?>
		<?php echo $form->checkBoxList($model, 'categories',Taxonomy::model()->listTerms('category'),array('empty'=>'none')); ?>
		<?php echo $form->error($model, 'taxonomy'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'attribute'=>'taxonomy',
					'model'=>'Taxonomy',
					'name'=>'tags',
					'source'=>$this->createUrl('post/suggestTags'),
					'htmlOptions'=>array('size'=>50),		
		));


		/* $this->widget('CAutoComplete', array(
			'model'=>'Taxonomy',
			'attribute'=>'tags',
			'url'=>('suggestTags'),
			'options'=>array(
					'minLength'=>'2'
				 ),
			'name'=>'tags',
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); */
		
		?>
		<?php echo $form->error($model, 'tags'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_keys'); ?>
		<?php echo $form->textArea($model,'meta_keys',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_keys'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_robots'); ?>
		<?php echo $form->textField($model,'meta_robots',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'meta_robots'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
