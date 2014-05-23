<div class="matches form">
<?php echo $this->Form->create('Match',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Match'); ?></legend>
	<?php
		//echo $this->Form->input('id');
		echo $this->Form->input('play_date');
		echo $this->Form->input('play_time');
		echo $this->Form->input('play_field');
		echo $this->Form->input('team_a');
		echo $this->Form->input('team_b');
		//echo $this->HTML->image('play_position_image',array('width'=>'100px'));
		echo $this->Form->input('play_position_image',array('type'=>'file'));
		echo $this->Form->input('body');
		echo $this->Form->input('content_type_id');
		echo $this->Form->input('league_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Match.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Match.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team A'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
