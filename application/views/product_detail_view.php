<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Detail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<form method="post" action="<?= base_url() ?>index.php/shopping1/addProduct">
		<div class="row">
	 			<div class="col-sm-12">
		 			<h3 class="text-primary">Product Details</h3>
		 			<hr>
		 			
		 			<div class="col-sm-12">
		 			<div style="border: 1px solid rgb(220, 220, 220)" class="row">
		 				<div class="col-sm-8">
		 					<br>
		 					<div class="row">
		 						<div class="col-sm-4 text-xl-right">
			 							<p>Product Name</p>
			 							<p>Publisher</p>
			 							<p>SKU</p>
			 							<p>Platform</p>
			 					</div>
			 					<div class="col-sm-8">
			 						<?php foreach ($arraydata as $value): ?>
			 							<p><?= $value['product_name'] ?></p>
			 							<p><a href=""><u><?= $value['publisher'] ?></u></a></p>
			 							<p><?= $value['sku'] ?></p>
			 							<p><?= $value['platform'] ?></p>
			 						<?php endforeach ?>
			 					</div>
			 				</div>
		 				</div>
		 				<div class="col-sm-4" style="border-left: 1px solid rgb(220, 220, 220)">
		 					<br>
		 					<div class="text-xl-center">
		 						<?php foreach ($arraydata as $value): ?>
		 							<input type="hidden" name="productid" value="<?= $value['id'] ?>">
		 							<img src="<?= $value['logo'] ?>">
		 						<?php endforeach ?>
		 						<p></p>
		 						<p><a href=""><u>View Product Description</u></a></p>
		 					</div>
		 				</div>
		 			</div>
		 			</div>
		 			
		 		</div>
	 		</div> <!-- end div row -->
	 		<div class="col-sm-12">
				<br>
	 			<table class="table-bordered" style="width: 100%">
	 				<thead>
	 					<tr>
		 					<th style="width: 10%" class="text-xl-center text-danger">*</th>
		 					<th style="width: 20%">Deliverable</th>
		 					<th style="width: 60%">Description</th>
		 					<th style="width: 10%">Price</th>
	 					</tr>
	 				</thead>
	 				<tbody>
	 					<tr>
	 						<td class="text-xl-center">*</td>
	 						<td>Download</td>
	 						<td>Choose this option if you wish to download the software over the Internet.</td>
	 						<td>Free!</td>
	 					</tr>
	 				</tbody>
	 			</table>
	 			<br>
	 			<div >
	 				<a href="<?= base_url() ?>index.php/shopping1" class="btn btn-outline-success"><i class="fa fa-chevron-left"></i> Back</a>
	 				<button  type="submit" class="btn btn-outline-success pull-right">Add To Cart <i class="fa fa-cart-plus"></i></button>
	 			</div>
	 			<br>
	 			<br>
	 			<div class="text-xl-center">

	 			<a href="<?= base_url() ?>index.php/shopping1/viewShoppingCart" class="btn btn-outline-info">View Shopping Cart <i class="fa fa-shopping-cart"></i></a>
	 			</div>
	 		</div>
	 	</div>
	 </form>
 	</div>
</body>
</html>