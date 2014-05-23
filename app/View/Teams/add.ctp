<div class="teams form">
<?php echo $this->Form->create('Team',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Team'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('logo',array('type'=>'file'));
		echo $this->Form->input('country_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
