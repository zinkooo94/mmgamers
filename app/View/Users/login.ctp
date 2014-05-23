<?php echo $this->Form->create('User');?>
	<?php echo $this->Form->input('username');?>
	<?php echo $this->Form->input('password',array('type'=>'password')); ?>

<?php echo $this->Form->end('Login');?>

<?php echo $this->Html->link('Register' ,'/users/register/', array('class'=>'btn btn-primary')); ?>