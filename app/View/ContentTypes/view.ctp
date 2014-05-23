<div class="contentTypes view">
<h2><?php echo __('Content Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content Type'), array('action' => 'edit', $contentType['ContentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content Type'), array('action' => 'delete', $contentType['ContentType']['id']), null, __('Are you sure you want to delete # %s?', $contentType['ContentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
