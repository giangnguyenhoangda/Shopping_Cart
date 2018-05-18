<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body >
 	<div class="container">
 		<h4 class="text-xl-center display-4 text-danger">Shopping <i class="fa fa-shopping-basket"></i></h4>
 		<hr>
 	</div>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12">
	 			<div class="form-group">
				  <label for="sel1" class="text-success">Select list:</label>
				  <div class="row">
					  	<div class="col-sm-11">
							  <select class="form-control" id="sel1">
							  	<?php foreach ($arraydata as $value): ?>
								    <option value="<?= $value['id'] ?>"><?= $value['product_name'] ?></option>
								<?php endforeach ?>
							  </select>
					  	</div>
					  	<div class="col-sm-1">
					  		<!-- <a href="" class="btn btn-outline-success">Go <i class="fa fa-chevron-right"></i></a> -->
					  		<button class="btn btn-outline-success ajax_Go" id="btnGO">Go <i class="fa fa-chevron-right"></i></button>
					  	</div>
				  </div>
				</div>
			</div>	
 		</div>
 		<div class="row">
 			<div class="col-sm-12">
	 			<p class="text-primary">Product Details</p>
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
		 							<p>Access 2003</p>
		 							<p><a href=""><u>Microsoft Corp.</u></a></p>
		 							<p>0000</p>
		 							<p>Windows</p>
		 					</div>
		 				</div>
	 				</div>
	 				<div class="col-sm-4" style="border-left: 1px solid rgb(220, 220, 220)">
	 					<br>
	 					<div class="text-xl-center">
	 						<img src="<?= base_url() ?>filelogo/32f2a6c4-4d3e-4d0f-ad98-900acc46fb66.png">
	 						<p></p>
	 						<p><a href=""><u>View Product Description</u></a></p>
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
 			<a href="" class="btn btn-outline-success pull-right">Add To Cart</a>
 			<br>
 			<br>
 			<div class="text-xl-center">
 			<a href="<?= base_url() ?>index.php/shopping/viewShoppingCart" class="btn btn-outline-info">View Shopping Cart</a>
 			</div>
 		</div>
 	</div> <!-- end div container -->


	<script >
		$('.ajax_Go').click(function(event) {
			/* Act on the event */
			$.ajax({
			url: 'shopping/getProductDetailByID',
			type: 'POST',
			dataType: 'json',
			data: {
				id: $('#sel1').val()
			},
		})
		.done(function() {
			console.log();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function($data) {
			console.log("complete");
			console.log($data);
		});
		});
		
	</script>
</body>
</html>