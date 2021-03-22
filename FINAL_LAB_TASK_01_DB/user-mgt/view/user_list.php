<?php
	
	$title = "User List Page";
	include('header.php');
	require_once('../model/userModel.php');

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<?php 
					$users = getAllUser(); 
					foreach ($users as $value) {?>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['username']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td>
					<a href="edit.php?id=<?php echo $value['id']; ?>">EDIT</a> |
					<a href="../controller/delete.php?id=<?php echo $value['id']; ?>">DELETE</a>
				</td>
			
				<?php }?>	
			</tr>
		</table>
			
	</div>

<?php include('footer.php');?>