<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
    <style type="text/css">
    #header {
     	background-color: black;
     	color: white;
    }
    #header h4 {
     	color: white;
     	float: right;
     	margin-right: 10%;
     	margin-top: -70px;
    }
    #red {
    	background-color: maroon;
    }
    #gold {
    	background-color: gold;
    }
    #silver {
    	background-color: silver;
    	height: 300px;
    	box-shadow: 5px 5px 3px grey;
    }
    #move-right {
    	float: right;
    }
    #cart {
    	background-color: lightgrey;
    }
    .quant-checkout
    {
    	width:60px;
    }
    </style>

</head>

<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<h4> Shopping cart (xxx) </h4>
	</div>

<div class="container">


	<div class="row">  <!-- This is where we modify items to add to the cart -->
		<div class="eleven columns" id="silver">
			<table class="tweleve columns" id="cart">
				<thead>
					<tr>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Description</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
<?php 			foreach($cart as $item) 
					{?>					
					<tr>
						<td><?= $item['name']?></td>
						<td>$<?= $item['price']?></td>
						<td>   
							<form action='carts/modify' method='post'>
							<input type='number' name='quantity' value='<?= $item['quantity']?>' class ='quant-checkout'> 
							<input type='submit' value='Modify'>
							<input type='hidden' name='id' value='<?= $item['id']?>'>
							</form>
						</td>
						<td> <?= $item['description']?> </td>
						<td>$<?php echo $item['price']*$item['quantity']; ?></td>
					</tr>
<?php 
					}?>
				</tbody>
			</table>
				<div class="row" id="move-right">
		<h5>Total: $<?= $total ?> </h5>
		<button class="button-primary"> Contiune Shopping </button>
	</div>
		</div>

	</div>
	<br>

	
<div class="row">
	<div class="five columns">
		<h5>Shipping Information </h5>
		<form action="/carts/pay" method="post"> 
			<label>First Name:</label>
			<input class="tweleve columns" type="text" name="shipping_first_name">
			<label>Last Name:</label>
			<input class="tweleve columns" type="text" name="shipping_last_name">
			<label>Address:</label>
			<input class="tweleve columns" type="text" name="shipping_address">
			<label>Address 2:</label>
			<input class="tweleve columns" type="text" name="shipping_address2">
			<label>City:</label>
			<input class="tweleve columns" type="text" name="shipping_city">
			<label>State:</label>
			<input class="tweleve columns" type="text" name="shipping_state">
			<label>Zipcode:</label>
			<input class="tweleve columns" type="text" name="shipping_zip">
	</div>
</div>
<div class="row">
	<div class="five columns">
		<h2>Billing Information </h2>
			<label>First Name:</label>
			<input class="tweleve columns" type="text" name="billing_first_name">
			<label>Last Name:</label>
			<input class="tweleve columns" type="text" name="billing_last_name">
			<label>Address:</label>
			<input class="tweleve columns" type="text" name="billing_address">
			<label>Address 2:</label>
			<input class="tweleve columns" type="text" name="billing_address2">
			<label>City:</label>
			<input class="tweleve columns" type="text" name="billing_city">
			<label>State:</label>
			<input class="tweleve columns" type="text" name="billing_state">
			<label>Zipcode:</label>
			<input class="tweleve columns" type="text" name="billing_zip">

			<label>Card:</label>
			<input class="ten columns"type="text" name="card">
			<label>Security Code:</label>
			<input class="ten columns"type="text" name="security">
			<label>Expiration Date</label>
			<input class="ten columns"type="date" name="expiration">
			<input class="button-primary" type="submit" value="Pay">
		</form>
	</div>
</div>

</div>

</body>

</html>



