<div class="contentTypes form">
<?php echo $this->Form->create('ContentType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Content Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContentType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContentType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
