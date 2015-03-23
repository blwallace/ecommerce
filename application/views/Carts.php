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
    </style>

</head>

<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<h4> Shopping cart (xxx) </h4>
	</div>

<div class="container">
	<div class="row">
		<div class="eleven columns" id="silver">
			<table class="tweleve columns" id="cart">
				<thead>
					<tr>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Product 1</td>
						<td>$19.99</td>
						<td> 1 | <a href=""> update </a></td>
						<td> $19.99 </td>
					</tr>
					<tr>
						<td>Product 2</td>
						<td>$15.99</td>
						<td> 2 | <a href=""> update </a></td>
						<td> $29.98 </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="row" id="move-right">
		<p>Total: TOTAL HERE !</p>
		<button class="button-primary"> Contiune Shopping </button>
	</div>
	
<div class="row">
	<div class="five columns">
		<h2>Shipping Information </h2>
		<form action="" method="post"> 
			<label>First Name:</label>
			<input class="tweleve columns" type="text" name="first_name">
			<label>Last Name:</label>
			<input class="tweleve columns" type="text" name="last_name">
			<label>Address:</label>
			<input class="tweleve columns" type="text" name="address">
			<label>Address 2:</label>
			<input class="tweleve columns" type="text" name="address2">
			<label>City:</label>
			<input class="tweleve columns" type="text" name="city">
			<label>State:</label>
			<input class="tweleve columns" type="text" name="state">
			<label>Zipcode:</label>
			<input class="tweleve columns" type="text" name="zip">
		</form>
	</div>
</div>
<div class="row">
	<div class="five columns">
		<h2>Billing Information </h2>
		<form action="" method="post"> 
			<label>First Name:</label>
			<input class="tweleve columns" type="text" name="first_name">
			<label>Last Name:</label>
			<input class="tweleve columns" type="text" name="last_name">
			<label>Address:</label>
			<input class="tweleve columns" type="text" name="address">
			<label>Address 2:</label>
			<input class="tweleve columns" type="text" name="address2">
			<label>City:</label>
			<input class="tweleve columns" type="text" name="city">
			<label>State:</label>
			<input class="tweleve columns" type="text" name="state">
			<label>Zipcode:</label>
			<input class="tweleve columns" type="text" name="zip">

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



