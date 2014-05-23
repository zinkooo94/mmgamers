<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<?php echo $this->HTML->image($book['Book']['book_cover'],array('width'=>'200px'));?>
	<dl>
<!-- 		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($book['Book']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($book['Book']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($book['Book']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
