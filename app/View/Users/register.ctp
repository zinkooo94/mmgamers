<?php echo $this->Form->create('User');?>
	<?php echo $this->Form->input('username');?>
	<?php echo $this->Form->input('password');?>
	<?php echo $this->Form->input('email');?>
	<?php echo $this->Form->input('role',array('type'=>'hidden','value'=>'user'));?>

<?php echo $this->Form->end('Register');?>