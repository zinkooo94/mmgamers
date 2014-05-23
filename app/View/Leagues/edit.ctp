<div class="leagues form">
<?php echo $this->Form->create('League',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit League'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('logo',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('League.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('League.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
