<div class="books form">
<?php echo $this->Form->create('Book',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('book_cover',array('type'=>'file'));
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('author_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
