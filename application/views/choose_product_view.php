<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Choose Product</title>
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
 		<h4 class="text-xl-center display-4 text-danger">Shopping <i class="fa fa-shopping-basket"></i></h4>
 		<hr>
 	</div>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12">
 				<form action="<?= base_url() ?>index.php/shopping1/getProductDetail" method="post">
		 			<div class="form-group">
					  	<label for="sel1" class="text-success">Select list:</label>
					  	<div class="row">
						  	<div class="col-sm-11">
								  <select name="productchoose" class="form-control" id="sel1">
								  	<?php foreach ($arraydata as $value): ?>
									    <option value="<?= $value['id'] ?>"><?= $value['product_name'] ?></option>
									<?php endforeach ?>
								  </select>
						  	</div>
						  	<div class="col-sm-1">
						  		<!-- <a href="" class="btn btn-outline-success">Go <i class="fa fa-chevron-right"></i></a> -->
						  		<button type="submit" class="btn btn-outline-success ajax_Go" id="btnGO">Go <i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>	
 		</div>
 		<div class="text-xl-center">
 			<a href="<?= base_url() ?>index.php/shopping1/viewShoppingCart" class="btn btn-outline-success">View Shopping Cart <i class="fa fa-shopping-cart"></i></a>
 		</div>
 	</div>
</body>
</html>