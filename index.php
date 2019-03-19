
<?php

require 'DatabaseConnection.php';
$sql = "SELECT id, firstname, lastname, phone, email from user" ;
$statement  = $connect->prepare($sql);
$statement->execute();
$results_of_data = $statement->fetchAll(PDO::FETCH_OBJ);

;?>
<?php require'header.php'; ?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>E-NIMR EMPLOYEE</h2>
		</div>
		<div class="card-body">
			<table class="table table-borderd">
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				<?php foreach($results_of_data as $employee): ?>
					<tr>
						<td><?php echo $employee->id; ?></td>
            			<td><?php echo $employee->firstname; ?></td>
            			<td><?php echo $employee->lastname; ?></td>
          				<td><?php echo $employee->phone; ?></td>
            			<td><?php echo $employee->email; ?></td>
            			<td>
            				<a href="edit.php?id=<?= $employee->id;?>" class="btn btn-info">Edit</a>
            				<a onclick="return confirm('Are you sure you want to delete yhis entry??')" href="delete.php?id=<?= $employee->id ;?>" class="btn btn-danger">Delete</a>
            			</td>
            		</tr>
            	<?php endforeach; ?>

        </table>  
      </div>
    </div>
  </div>
<?php require 'Footer.php' ; ?>