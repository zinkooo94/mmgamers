<div class="countries form">
<?php echo $this->Form->create('Country',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Country'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('logo',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
