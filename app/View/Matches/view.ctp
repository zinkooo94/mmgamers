<div class="matches view">
<h2><?php echo __('Match'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($match['Match']['id']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php //echo h($match['Match']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Date'); ?></dt>
		<dd>
			<?php echo h($match['Match']['play_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Time'); ?></dt>
		<dd>
			<?php echo h($match['Match']['play_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Field'); ?></dt>
		<dd>
			<?php echo h($match['Match']['play_field']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['TeamA']['title'], array('controller' => 'teams', 'action' => 'view', $match['TeamA']['id'])); ?>
			<b> Vs . </b>
			<?php echo $this->Html->link($match['TeamB']['title'], array('controller' => 'teams', 'action' => 'view', $match['TeamB']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Position'); ?></dt>
		<dd>
			<?php echo $this->HTML->Image($match['Match']['play_position_image'],array('width'=>'200px')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($match['Match']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['ContentType']['title'], array('controller' => 'content_types', 'action' => 'view', $match['ContentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('League'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['League']['title'], array('controller' => 'leagues', 'action' => 'view', $match['League']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match'), array('action' => 'edit', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Match'), array('action' => 'delete', $match['Match']['id']), null, __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team A'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
