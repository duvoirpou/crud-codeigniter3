<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- boostrap 5.0
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<title>Document</title>
</head>

<body>
	<div class="jumbotron">
		<h1 class="display-3 text-center">CRUD CI APP</h1>
	</div>

	<div class="container mt-5 mb-5">
		<h1 class="text-center">Edit Product</h1>
		<a href="<?php echo base_url(); ?>crud" class="btn btn-primary mb-3 mt-3">Retour</a>
		<form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id; ?>" method="POST">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="" value="<?php echo $singleProduct->name ?>">

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="price">Price</label>
						<input type="text" name="price" id="price" class="form-control" placeholder="" value="<?php echo $singleProduct->price ?>">

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="category">category</label>
						<input type="text" name="category" id="category" class="form-control" placeholder="" value="<?php echo $singleProduct->category ?>">

					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col">
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" class="form-control" id="description" cols="30" rows="5"><?php echo $singleProduct->description ?></textarea>
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success" name="edit" value="Update">
		</form>
	</div>
	<!-- <pre>
		<?php
		//print_r($singleProduct);
		?>
	</pre>-->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>
