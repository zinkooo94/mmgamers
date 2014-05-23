<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('father_name');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
	</ul>
</div>
