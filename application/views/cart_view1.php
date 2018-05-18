<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<br>
		<h3 class="text-primary">View Shopping Cart</h3>
		<hr>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<table class="table-bordered" style="width: 100%">
				<thead>
					<tr>
						<th style="width: 20%"></th>
						<th style="width: 50%">Software Title</th>
						<th style="width: 20%">Deliveable</th>
						<th style="width: 10%">Price</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($list as $key =>$value): ?>
						
					<tr>
						<td><div class="text-xl-center">
							<img src="<?= $value['logo'] ?>" class="img-fluid"></div>
						</td>
						<td>
							<p><?= $value['product_name'] ?></p>
							<a href="<?= base_url() ?>index.php/Shopping1/editproduct/<?= $value['id'] ?>" class="btn btn-outline-success">Edit <i class="fa fa-pencil"></i></a>
							<a href="<?= base_url() ?>index.php/Shopping1/removeproduct/<?= $value['id'] ?>" class="btn btn-outline-danger">Remove <i class="fa fa-remove"></i></a>
						</td>
						<td>Download</td>
						<td>Free!</td>
					</tr>

					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div class="col-sm-12">
			<br>
			<a href="<?= base_url() ?>index.php/Shopping1" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
			<a href="<?= base_url() ?>index.php/Shopping1/checkout" class="btn btn-outline-secondary pull-right">Check Out <i class="fa fa-credit-card-alt"></i></a>
		</div>
	</div>
</body>
</html>