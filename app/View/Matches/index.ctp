<div class="matches index">
	<h2><?php echo __('Matches'); ?></h2>




	<table cellpadding="0" cellspacing="0">
<!-- 	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('play_date'); ?></th>
			<th><?php echo $this->Paginator->sort('play_time'); ?></th>
			<th><?php echo $this->Paginator->sort('play_field'); ?></th>
			<th><?php echo $this->Paginator->sort('team_a'); ?></th>
			<th><?php echo $this->Paginator->sort('team_b'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('body'); ?></th> -->
<!-- 			<th><?php echo $this->Paginator->sort('content_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('league_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th> -->
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('team_a'); ?></th>
				<th> </th>
				<th><?php echo $this->Paginator->sort('team_b'); ?></th>
				<th>League</th>
				<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($matches as $match): ?>
		<tr>
			<td>
				<?php echo h($match['Match']['id']); ?>&nbsp;
			</td>
			<td>
				<?php echo $this->Html->Image($match['TeamA']['logo'], array('controller' => 'teams','width'=>'30px','align'=>'left', 'action' => 'view', $match['TeamB']['id'])); ?>
				<?php echo $this->Html->link($match['TeamA']['title'], array('controller' => 'teams','width'=>'30px', 'action' => 'view', $match['TeamA']['id'])); ?>
			</td>
			<td>
				<b> VS.</b>
			</td>
			<td>
				<?php echo $this->Html->link($match['TeamB']['title'], array('controller' => 'teams', 'action' => 'view', $match['TeamB']['id'])); ?>	
				<?php echo $this->Html->Image($match['TeamB']['logo'], array('controller' => 'teams','width'=>'30px','action' => 'view', $match['TeamB']['id'])); ?>	
			</td>
			<td>
				<?php echo $this->HTML->image($match['League']['logo'],array('width'=>'50px`')); ?>
				<?php // echo $this->Html->link($match['League']['title'], array('controller' => 'leagues', 'action' => 'view', $match['League']['id']));?><br>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $match['Match']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $match['Match']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $match['Match']['id']), null, __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="5">
				<div class="row">
					<div class="col-md-6">
						<b>Date :</b> <?php echo h($match['Match']['play_date']); ?><br>
						<b>Time :</b><?php echo h($match['Match']['play_time']); ?><br>
						<b>Place :</b><?php echo h($match['Match']['play_field']); ?><br>
						<b>Access :</b><?php echo $this->Html->link($match['ContentType']['title'], array('controller' => 'leagues', 'action' => 'view', $match['ContentType']['id']));?><br>
					</div>
					<div class="col-md-6">
						<!-- <b>League :</b> -->
						
					</div>

				</div>
			</td>
		</tr>
<!-- 	<tr>

		<td><?php echo h($match['Match']['id']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['title']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['play_date']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['play_time']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['play_field']); ?>&nbsp;</td>
		<td>
				<?php echo $this->Html->Image($match['TeamA']['logo'], array('controller' => 'teams','width'=>'30px','align'=>'left', 'action' => 'view', $match['TeamB']['id'])); ?>
			<?php echo $this->Html->link($match['TeamA']['title'], array('controller' => 'teams','width'=>'30px', 'action' => 'view', $match['TeamA']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->Image($match['TeamB']['logo'], array('controller' => 'teams','width'=>'30px','align'=>'left', 'action' => 'view', $match['TeamB']['id'])); ?>
			<?php echo $this->Html->link($match['TeamB']['title'], array('controller' => 'teams', 'action' => 'view', $match['TeamB']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($match['ContentType']['title'], array('controller' => 'content_types', 'action' => 'view', $match['ContentType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($match['League']['title'], array('controller' => 'leagues', 'action' => 'view', $match['League']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $match['Match']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $match['Match']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $match['Match']['id']), null, __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?>
		</td>
	</tr> -->

<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team A'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
