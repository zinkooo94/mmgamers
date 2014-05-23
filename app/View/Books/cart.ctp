<?php
/* display message saved in session if any */
echo $this->Session->flash();
?>

<h2>Cart</h2>
<table>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php $totalPrice = 0; ?>
    <?php foreach ($cart as $key => $Book): ?>
    <tr>
        <td>    
      <?php 
        if ($Book['Book']['book_cover']) 
        {
          echo $this->Html->image($Book['Book']['book_cover'],array('width'=>'200'));
        }
       ?>
    </td>
        <td>
            <?php 
              //link to Book page
              echo $this->Html->link($Book['Book']['title'], array('action'=> 'view', $Book['Book']['id'])); 
            ?>
        </td>
        <td>
            <?php 
              //show Book price
              echo $Book['Book']['price']; 
            ?>
        </td>
        <td>
            <?php 
              //remove Book from a cart
              echo $this->Html->link('delete', array('action' => 'cart_delete',$key)); 
            ?>
        </td>
    </tr>
    <?php 
    //calculate total price of all Books in a cart
    $totalPrice = $totalPrice + $Book['Book']['price']; 
    ?>
<?php endforeach; ?>
    <tr>
        <th>Total Price: </th>
        <th><?php 
          //show total price
           echo $totalPrice; 
           ?>
        </th>
        <th>
          <?php
            //delete all elements from a cart
            echo $this->Html->link('empty', array('action'=>'empty_cart'));
          ?>
        </th>
    </tr>
</table>

<div>
    <?php 
      //link to Books page
      echo $this->Html->link('Books', array('action' => 'index')); 
    ?>
</div>