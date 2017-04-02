<?php 
	$page_title = 'Todo';
	require_once 'header.php';
 ?>
 <?php 
 	require_once 'includes/connect.php';
 	$itemsQuery = $conn->prepare("SELECT * FROM items ORDER BY created");
 	$itemsQuery->execute();
  ?>
 	<div class="app container">
 		<div class=" form container">
 			<div class="row">
	 			<div class="col-md-6">
		 			<form method="post" action="add.php">
		 				<div class="form-group">
		 					<input type="text" class="form-control" name="task" placeholder=" Activity">
		 				</div>
		 				<button type="submit" class="btn btn-default pull-right" name="submit"><i class="glyphicon glyphicon-plus"></i> Submit</button>
		 			</form>			
	 			</div>
	 		</div>	
 		</div>
 		<br>
 		<br>
 		<hr>
 		<div class="todoitems container">
 			<?php $itemsQuery->rowCount();
 				$items = $itemsQuery->rowCount() ? $itemsQuery : [];
 			 ?>
 			<?php if(!empty($items)): ?>
 				<ul class="list-group">
 					<?php foreach ($items as $item): ?>
 						<li class="list-group-item"><?php echo $item['name']; ?> (<?php echo date($item['created']);?>) <a href="remove.php?id=<?php echo $id = $item['id']; ?>"><span class="pull-right glyphicon glyphicon-remove"></span></a></li>
 					<?php endforeach?>
 				</ul>
 			<?php else:?>
 				<p class="lead">You have no items yet!</p>
 			<?php  endif;?>
 		</div>						
 	</div>
 <?php 
 	require_once 'footer.php';
  ?>