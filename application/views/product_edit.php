<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<form action="<?= base_url() ?>index.php/shopping1/saveProduct" method="post">
		<?php foreach ($product as $value): ?>
		<div class="text-xl-center">
			<input type="hidden" name="productid" value="<?= $value['id'] ?>">
			<img src="<?= $value['logo'] ?>">
			<hr>
		</div>
		
			<div class="row">
				<div class="col-sm-12">
					<table class="table-bordered " style="width: 100%">
						<thead>
							<tr >
								<th style="width: 50%">Product Name</th>
								<th style="width: 20%">Publisher</th>
								<th style="width: 10%">SKU</th>
								<th style="width: 10%">Amount</th>
								<th style="width: 10%">Price</th>
							</tr>
						</thead>
						<tbody>
							
								<tr>
									<td><?= $value['product_name'] ?></td>
									<td><?= $value['publisher'] ?></td>
									<td><?= $value['sku'] ?></td>
									<td><input type="number" name="s" value="<?= $value['s'] ?>"></td>
									<td>Free!</td>
								</tr>
							
						</tbody>
					</table>
				</div>
			</div>
			<?php endforeach ?>
			<div>
				<br>
				<button type="submit" class="btn btn-outline-success pull-right">Save <i class="fa fa-check"></i></button>
				<a href="<?= base_url() ?>index.php/shopping1/viewShoppingCart" class="btn btn-outline-success pull-right">Back <i class="fa fa-undo"></i></a>
			</div>
		</form>
	</div>
</body>
</html>