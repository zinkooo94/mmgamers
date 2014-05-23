<?php
	$no=1;
	if(!$this->Session->read('shopping_cart'))
	{
		echo '<div class="alert alert-success">'.'Please add items to shopping cart'.'</div>';
	}
	else
	{
		foreach($cart as $key => $Book)
		{ ?>
			
			<div class="row">
				<div class="col-md-1"><?php echo $no;?></div>
				<div class="col-md-4"><?php echo $Book['Book']['title']; ?></div>
				<div class="col-md-2"><?php echo $Book['Book']['price'];?></div>
				<div class="col-md-1">1</div>
				<div class="col-md-1"><?php echo $Book['Book']['price']*1;?></div>

				<div class="col-md-3"><?php echo $this->HTML->link('Delete From Cart', '/books/delete_from_cart/'.$key, array('class'=>'btn btn-danger')); ?></div>
			</div>
			<?php $no++;?>
			<br>

			<?php
		}

	}



	echo $this->HTML->link('Empty Shopping Cart','/books/empty_cart',array('class'=>'btn btn-info'));

	?>

	<style>

	div {
		/*border:1px solid green;*/
	}
	</style>