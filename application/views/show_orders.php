
<?php 
	// var_dump($billing);
 ?>

<html>
<head>
	<title>Show Orders Page</title>
	 <link rel="stylesheet" href="/assets/css/normalize.css">
     <link rel="stylesheet" href="/assets/css/skeleton.css">
     <style type="text/css">
     .header {
     	height: 50px;
     	width: 100%;
     }
     .total {
     	float: right;
     }
     .status {
     	background-color: lightgreen;
     	border: 1px solid black;
     	margin-top: -100px;
     	text-align: center;
     	font-size: 20px;
     }
     #padding {
     	margin: 0px;
     }
     #orders {
     	background-color: lightgrey;
     	height: 200px;
     	border: 1px solid silver;
     	box-shadow: 5px 5px 3px grey;
     	overflow: auto;
     }
     	#orders td {
     		text-align: center;
     	}
     #info {
     	background-color: whitesmoke;
     	height: auto;
     	border: 1px solid silver;
     	padding: 20px;
     	box-shadow: 5px 5px 3px grey;
     }
     #total {
     	height: 80px;
     	width: 220px;
     	float: right;
     	margin-top: -100px;
     	border: 1px solid silver;
     	padding: 10px;
     	box-shadow: 5px 5px 3px grey;
     }
     #header {
		 background-color: maroon;
		 color: white;
	 }
		 #header h4 {
		 	color: white;
		 	float: right;
		 	margin-right: 10%;
		 	margin-top: -55px;
		 }
		 #header h5 {
		 	color: white;
		 	margin-left: 30%;
		 	margin-top: -65px;
		 	text-decoration: none;
		 	display: inline-block;
		 }
		 #header h6 {
		 	color: white;
		 	margin-left: 40%;
		 	margin-top: -55px;
		 }
     </style>
</head>
<body>
	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<a href="/main/orders/"><h5> Orders </h5></a>
		<a href="/main/products/"><h6> Products </h6></a>
		<a href="/main/home/"><h4> Log Off </h4></a>
	</div>

<div class="container">
	<div class="row">
		<div class="four columns" id="info">
			<h6> Order ID: <?= $id ?></h6>
			<br>
		 <h6>Customer shipping info:</h6>	 
			<p id="padding">Name: <?= $billing['shipping_first_name'] ?></p>
			<p id="padding">Address: <?= $billing['shipping_address'] ?></p>
			<p id="padding">City: <?= $billing['shipping_city'] ?> </p>
			<p id="padding">State: <?= $billing['shipping_state'] ?></p>
			<p id="padding">Zip: <?= $billing['shipping_zip'] ?></p>
			<br>
		<h6> Customer billing info:</h6>
			<p id="padding">Name: <?= $billing['billing_first_name'] ?></p>
			<p id="padding">Address: <?= $billing['billing_address'] ?></p>
			<p id="padding">City: <?= $billing['billing_city'] ?> </p>
			<p id="padding">State: <?= $billing['billing_state'] ?></p>
			<p id="padding">Zip: <?= $billing['billing_zip'] ?></p>

		</div>


		<div class="eight columns" id="orders">
			<table class="twleve columns">
				<thead>
					<tr>
						<td>ID</td>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($show_orders as $show) {
					if($show['order_id'] == $id){  ?>
						<tr>
						<td><?= $show['id'] ?></td>
						<td><?= $show['name'] ?></td>
						<td><?= $show['price']?></td>
						<td><?= $show['quantity']?></td>
						<td><?= $show['price'] * $show['quantity'] ?></td>
					</tr>
				</tbody>
				<?php }} ?>
			</table>
		</div>

	</div>

	<div class="row" id="total">
		<div class="one-half column">
			<p id="padding">Sub-total:</p>
			<p id="padding">Shipping:</p>
			<p id="padding">Total:</p>
		</div>
		<div class="one-half column">
			<?php
				$price = array();
				foreach ($show_orders as $show) {
					if($show['order_id'] == $id){ 
						$price[] = (float)$show['price'] * $show['quantity'];
					 }
				} echo '<p class="total" id="padding"> $'.array_sum($price).'</p>';
	 		?><br>
	 		<p class="total" id="padding"> $1.00 </p><br>
	 		<p class="total" id="padding">$<?=array_sum($price)+1 ?></p>
		</div>

		<div class="status">
			<p>Status: Shipped </p>
		</div>
	</div>

</div>


</body>
</html>