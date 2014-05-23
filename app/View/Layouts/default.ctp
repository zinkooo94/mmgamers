<?php

	$cakeDescription = __d('cake_dev', 'MMGAmers.com');
?>

<!-- <meta charset="UTF-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->script('ckeditor/ckeditor');?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('bootstrap');


		echo $this->Html->css('jquery-ui');

		
		echo $this->Html->script('jquery-1.10.2');
		echo $this->Html->script('jquery.dataTables');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('jquery-ui-timepicker-addon');
		echo $this->Html->script('jquery-ui-1.10.3.custom.js');
		echo $this->Html->script('jquery-ui-1.10.3.custom.min.js');
		echo $this->Html->script('jquery.jeditable.mini.js');
		
				// jquery 2select
		echo $this->Html->script('select2');
	?>
</head>
<body>
	<div id="container-fluid">
	<span class="glyphicon glyphicon-shopping"></span>
		<div id="menu" >
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<a class="navbar-brand" href="<?php echo $this->Html->url('/articles/home'); ?>">
				<?php echo $cakeDescription;?>
			</a>
			<ul class="nav navbar-nav">
			  <!-- <li ><?php echo $this->HTML->link('Home','/articles/index');?></li> -->
				  <li><?php echo $this->HTML->link('Articles','/articles');?></li>
				  <li><?php echo $this->HTML->link('Users','/users');?></li>
			   <li><?php //echo $this->HTML->link('LogIn','/users/login');?></li>
			  <li><?php //echo $this->HTML->link('Logout','/users/logout');?></li>
			</ul>
			<ul class="navbar-form form-inline navbar-right" style="background:#fff;">
				<?php 
					if(AuthComponent::user('username'))
					{
						$user_name=AuthComponent::user('username');
						echo $this->Html->link(" Welcome ".$user_name."- Log Out", array('controller' => 'users','action'=> 'logout'));
					}
					else
					{
						echo $this->Html->link("Welcome guest, Log in?", array('controller' => 'users','action'=> 'login'));
					}

				?>
			</ul>
		</nav>
	</div>
		<span class="remove"></span>
		
		<div class="row">
			<div class="col-md-3">

			</div>	
			<div class="col-md-9">

				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>


		</div>


		<div id="footer">
		<footer>
		<hr>
<!-- 			<?php echo $this->Html->link(
					'Developed by : Myanmar Web Solution',
					'http://www.myanmarwebsolutions.com',
					array('target' => '_blank', 'escape' => false)
				);
			?> -->
			</footer>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=616729118395849&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>

<style>

/*	.nav
	{
		background-color: orange;
	}*/
	
	div
	{
		border:1px solid black;
		}
</style>

<script>

	ckeditor.replaceAll('data[Match][body]');
</script
