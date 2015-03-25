
<html>
<head>
	<title>Dashboard Orders</title>
	 <link rel="stylesheet" href="/assets/css/normalize.css">
     <link rel="stylesheet" href="/assets/css/skeleton.css">
     <style type="text/css">
    .header {
     	height: 50px;
     	width: 100%;
     }
     .search {
     	margin-top: 10px;
     }
     .show-all {
     	float: right;
     }
     #red {
     	background-color: maroon;
     }
     #box {
     	background-color: lightgrey;
     	height: 450px;
     	width: 100%;
     	border: 1px solid silver;
     	overflow: auto;
     	box-shadow: 5px 5px 3px grey;
     }
     	#box td {
     		text-align: center;
     	}
     #silver {
     	background-color: silver;
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
     		text-decoration: none;
     	}
     </style>

</head>
<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<h5> Orders </h5>
		<a href="/main/products/"><h6 > Products </h6></a>
		<a href="/main/index/"><h4> Log Off </h4></a>
	</div>

<div class="container">

	<div class="row">
		<input class="search" type="text" name="search" placeholder="search">
		<select class="show-all" value="Show All">
			<option>Show All</option>
			<option>Order in</option>
			<option>process</option>
			<option>Shipped</option>
		</select>
	</div>


	<div class="twelve columns" id="box">
		<table class="twleve columns">
			<thead>
				<tr>
					<td>Order ID</td>
					<td>Name</td>
					<td>Date</td>
					<td>Billing Address</td>
					<td>Total</td>
					<td>Status</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($orders as $order) 
					{ ?> 
				<tr>
					<td><a href="/main/show_orders/<?= $order['id'] ?>"> <?= $order['id'] ?></a></td>
					<td><?= $order['shipping_first_name'] ?></td>
					<td><?= $order['updated_at'] ?></td>
					<td><?= $order['billing_address'] ?></td>
					<td>
						<!-- total -->
						<?php
						foreach ($total as $num) {
							if($order['id'] == $num['order_id']){
								echo $num['totalAmt'];
							}
						}
						?>
					</td>
					<td>
					<select>
						<option>Shipped</option>
						<option>Order in process</option>
						<option>Cancelled</option>
					</select>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>

	</div>


</div>





</body>
</html>