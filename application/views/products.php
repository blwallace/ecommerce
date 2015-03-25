

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
     .button-primary{
     	box-shadow: 5px 5px 2px lightblue;
     }
     #show-all {
     	float: right;
     }     
     #search {
     	margin-top: 10px;
     }
     #red {
     	background-color: maroon;
     }
     #box {
     	background-color: lightgrey;
     	height: 450px;
     	width: 100%;
     	border: 1px solid silver;
     	box-shadow: 5px 5px 3px grey;
     	overflow: auto;
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
     	}
     </style>

</head>
<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<a href="/main/orders/"><h5> Orders </h5></a>
		<h6> Products </h6>
		<a href="/main/index/"><h4> Log Off </h4></a>
	</div>

<div class="container">

	<div class="row">
		<input class="four columns" id="search" type="text" name="search" placeholder="search">
		<a href="/main/new_product"><button class="button-primary" id="show-all"> Add New Product </button></a>
	</div>


	<div class="twelve columns" id="box">
		<table class="twleve columns">
			<thead>
				<tr>
					<td>Picture</td>
					<td>ID</td>
					<td>Name</td>
					<td>Inventory Count</td>
					<td>Quantity Sold</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php 	
					foreach ($products as $product) { ?> 
				<tr>
					<td> picture </td>
					<td><?= $product['id'] ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['inv_count'] ?></td>
					<td><?= $product['quantity'] ?></td>
					<td><a href="/main/edit_product/<?= $product['id'] ?>">edit</a> | <a href="">delete</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

	</div>


</div>





</body>
</html>