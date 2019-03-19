<?php

require 'DatabaseConnection.php' ;
$id = $_GET['id'] 
$query = "SELECT * from user WHERE id = :id" ;
$statement = $connect->prepare($query);
$statement->execute([':id' => $id]);
$view_id = $statement->fetch(PDO::FETCH_OBJ);



<?php require 'header.php';?>

<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h3>E-NIMR</h3>
		</div>
		<div class="card-body" style="padding-top: 10px">
			<?php if(!empty($message));?>

			<div class="alert alert-success">
				<?= $message ; ?>
			</div>
		

		
			<form class="form-horizontal" method="POST">
				<div class="form-group input-group">
					<span class="input-group-addon" style="padding: 10px">
						<span class="gryphicon mdi mdi-account"></span>
					</span>

					<input type="text" name="firstname" class="form-control" placeholder="Firstname..">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon" style="padding: 10px">
						<span class="gryphicon mdi mdi-account"></span>
					</span>

					<input type="text" name="lastname" class="form-control" placeholder="Lastname...">
					</div>


					<div class="form-group input-group">
					<span class="input-group-addon" style="padding: 10px">
						<span class="gryphicon mdi mdi-account"></span>
					</span>

					<input type="text" name="phone" class="form-control" placeholder="Enter phone number...">
					</div>

					
					<div class="form-group input-group">
					<span class="input-group-addon" style="padding: 10px">
						<span class="gryphicon mdi mdi-account"></span>
					</span>

					<input type="email" name="email" class="form-control" placeholder="Enter Email...">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="padding: 10px">
							<span class="gryphicon mdi mdi-lock"></span>
						</span>
						
						<input type="password" name="password" class="form-control" placeholder="Enter password...">
					</div>

					

					<div class="form-group">
							<button type="submit" class="btn btn-info" name="submit">Create User</button>
						</div>
					</div>
				</form>
			</form>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>