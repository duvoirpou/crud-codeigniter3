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

	<div class="container mt-5">
		<div class="clear-fix">
			<h3 class="text-center" style="float: left">All Products</h3>
			<a href="#" class="btn btn-primary btn-sm" style="float: right" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</a>
		</div>
		<table class="table table-striped table-table-hover">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Description</th>
					<th>Product Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($product_details as $product) { ?>
					<tr>
						<td scope="row"><?php echo $product->name; ?></td>
						<td><?php echo $product->price; ?></td>
						<td><?php echo $product->description; ?></td>
						<td><?php echo $product->category; ?></td>
						<td>
							<a href="#" class="btn btn-success btn-sm">Edit</a>
							<a href="#" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>


	<?php if ($this->session->flashdata('error')) { ?>
		<div class="bg-danger text-white text-center">
			<?php echo $this->session->flashdata('error') ?>
		</div>
	<?php } ?>
	</div>


	<!-- Modal Add Product -->
	<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo base_url(); ?>crud/addProduct" method="POST">
					<div class="modal-header">
						<h5 class="modal-title" id="addProductLabel">Add Product</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="price">Price</label>
									<input type="text" name="price" id="price" class="form-control" placeholder="">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="category">category</label>
									<input type="text" name="category" id="category" class="form-control" placeholder="">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="description">Description</label>
									<textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<input type="submit" class="btn btn-primary" name="insert" value="Add Product">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- <pre>
		<?php
		// print_r($product_details);
		?>
	</pre> -->

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>
