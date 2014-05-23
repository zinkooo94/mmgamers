<div class="leagues view">
<h2><?php echo __('League'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($league['League']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($league['League']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo $this->HTML->image($league['League']['logo'],array('width'=>'50px')); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit League'), array('action' => 'edit', $league['League']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete League'), array('action' => 'delete', $league['League']['id']), null, __('Are you sure you want to delete # %s?', $league['League']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Matches'); ?></h3>
	<?php if (!empty($league['Match'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Play Date'); ?></th>
		<th><?php echo __('Play Time'); ?></th>
		<th><?php echo __('Play Field'); ?></th>
		<th><?php echo __('Team A'); ?></th>
		<th><?php echo __('Team B'); ?></th>
		<th><?php echo __('Content Type Id'); ?></th>
		<th><?php echo __('League Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($league['Match'] as $match): ?>
		<tr>
			<td><?php echo $match['id']; ?></td>
			<td><?php echo $match['title']; ?></td>
			<td><?php echo $match['play_date']; ?></td>
			<td><?php echo $match['play_time']; ?></td>
			<td><?php echo $match['play_field']; ?></td>
			<td><?php echo $match['team_a']; ?></td>
			<td><?php echo $match['team_b']; ?></td>
			<td><?php echo $match['content_type_id']; ?></td>
			<td><?php echo $match['league_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'matches', 'action' => 'view', $match['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'matches', 'action' => 'edit', $match['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'matches', 'action' => 'delete', $match['id']), null, __('Are you sure you want to delete # %s?', $match['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
