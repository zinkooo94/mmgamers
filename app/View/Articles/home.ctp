<div class="articles">

	<?php foreach ($articles as $article): ?>
		<h4>
			<?php echo $this->Html->link($article['Article']['title'],'articles/detail/'.$article['Article']['id']); ?>
		</h4>
		<hr>
		<label>စာေရးသူ</label> :
<?php echo $this->Html->link($article['User']['username'], array('action' => 'view', $article['Article']['id'])); ?>
		<?php echo h($article['Article']['body']); ?>
		<?php echo $this->Html->link(__('View More'),null, array('div'=>false,'class'=>'"btn btn-primary"','action' => 'view', $article['Article']['id'])); ?>
<?php echo $this->Html->link(__('View More'),array('action'=>'view') ,array('class'=>'btn btn-info')); ?>
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
