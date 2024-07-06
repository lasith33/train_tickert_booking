<?php require('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="favicon.ico" type="imge/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="navigation.css">
		<link rel="stylesheet" type="text/css" href="infor.css">
      
 
		
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Ticket Booking  Details
					<a href="userloging.php" class="btn btn-primary float-end">Back</a>
					</h4>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>From</th>
								<th>TO</th>
								<th>Count</th>
								<th>Date</th>
								<th>class</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query ="SELECT * FROM booking";
							$query_run =mysqli_query($con,$query);

							if(mysqli_num_rows($query_run) > 0)
							{
									foreach($query_run as $book)
									{
										?>
										<tr>
											<td><?= $book['id']; ?></td>
											<td><?= $book['name']; ?></td>
											<td><?= $book['from']; ?></td>
											<td><?= $book['to']; ?></td>
											<td><?= $book['count']; ?></td>
											<td><?= $book['date']; ?></td>
											<td><?= $book['class']; ?></td>
											<td>
												<a href="" class="btn btn-danger btn-sm">Delete</a>
												<div class="btn btn-success btn-sm" onclick="openPopup()">View</div>
												<div class="qr" id="popup">
													<form>
													<div class="fix">
														<img src="images\qr.png">
													
													
													<div class="button">
														<button  onclick="closePopup()">cancel</button>
													</div>
													</div>
													</form>
												</div>
											</td>
										</tr>
										<?php
									}
							}
							else
							{
								echo "<h5> norecorderd found </h5>";
							}
							?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</div>
<script>
		let popup = document.getElementById("popup");

		function openPopup(){
			popup.classList.add("open-popup1");
		}
		function closePopup(){
			popup.classList.remove("open-popup1");
		}
	</script>
    
</body>
</html>