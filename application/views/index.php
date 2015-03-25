

<html>
<head>
	<title> E-Commerce </title>
	 <link rel="stylesheet" href="/assets/css/normalize.css">
     <link rel="stylesheet" href="/assets/css/skeleton.css">
     <style type="text/css">
	    body {
	     	margin: 0px auto;
	    }
	    .category {
	    	margin: 20px auto;
	    	margin-left: 10px;
	    }
	    	.category li a {
	    		text-decoration: none !important;
	    		color: black
	    	}
     	.header {
     		height: 50px;
     		width: 100%;
     	}
     	.nav {
     		margin-top: -50px;
     	}
     	.nav li {
     		list-style:none;
     		display: inline;
     		float: right;
     		margin-right: 5%;
     	}
     	.sort {
     		float: right;
     		margin-top: -15px;
     		margin-right: 10px;
     	}
     	.product {
     		display: inline-block;
     		height: 150px;
     		width: 150px;
     		border: 1px solid black;
     		margin-left: 10px;
     		text-align: center;
     	}
	     	.product:hover {
	     		background-color: lightgrey;
	     		box-shadow: 5px 5px 3px silver;
	     	}
	     	.product:

     	.numList {
       		margin-left: 10%;
     		list-style: none;
     		position: absolute;
     		bottom: 0px;
     		
     	}
     		.numList li {
	     		display: inline;
	     		text-align: center;
	     		list-style: none;
	     		padding-left: 10px;
	     		padding-right: 10px;
     		}
     	.text {
     		text-decoration: none;
     	}
     	#search {
     		margin-top: 10px;
     		margin-left: 5px;
     	}
     	#search-button {
     		outline: none;
     		border:none;
     	}
     	#left-box  {
     		background-color: whitesmoke;
     		box-shadow: 4px 4px 2px lightgrey;
     		height: 450px;
     	}
     	#right-box {
     		background-color: whitesmoke;
     		box-shadow: 4px 4px 2px lightgrey;
     		height: 700px;
     	}
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
     	#blue {
     		background-color: lightblue;
     	}
     	#move-right {
     		float: right;
     		margin-right: 5%;
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
		<div class="three columns" id="left-box">

		<form action="#" method="post" id="search">
			<input class="seven columns"type="text" name="search" value="product name..">
			<input class="one column" id="search-button"type="submit" value="" style="background:url(/assets/search.png) no-repeat;" />
		</form>	
			<ul class="category"> <h5>Categories</h5>
				<!-- counts products by type and shows how many in each -->
				<?php 
				$sum = 0;
					foreach ($products as $product) {
						if($product['productscol'] == 1)
						{
							$sum += count($product['productscol']);
						}
					}
					echo '<li> Golf ('.$sum.')</li>';	
				$sum = 0;
					foreach ($products as $product) {
						if($product['productscol'] == 2)
						{
							$sum += count($product['productscol']);
						}
					}
					echo '<li> Lacrosse ('.$sum.')</li>';	

				?>
			</ul>
		</div>

		<div class="nine columns" id="right-box">
			<div class="row">
				<h5> Products (page 1)</h5>
				<ul class="nav">
					<a href=""><li>first</li></a>
					<a href=""><li>prev</li></a>
					<a href=""><li>1</li></a>
					<a href=""><li>next</li></a>
				</ul>
				</div>
				<div class="row">
					<h6 id="move-right">Sorted By</h6>
				</div>
				<div class="row">
					<select class="sort">
						<option>Price</option>
						<option>Most Popular</option>
					</select>
				</div>
				<div class="row">
					<!-- these are products from the database -->
				<?php 
				foreach ($products as $product) {
						echo'<a href="/main/show_single/'.$product['id'].'"><button class="product">'. $product['name']. '</button></a>';
					}
				?>
						<div class="row" id="outside">
							<ul class="numList">
								<a class="text" href=""><li>1 | </li></a>
								<a class="text" href=""><li>2 | </li></a>
								<a class="text" href=""><li>3 | </li></a>
								<a class="text" href=""><li>4 | </li></a>
								<a class="text" href=""><li>5 | </li></a> 
								<a class="text" href=""><li>6 | </li></a>
								<a class="text" href=""><li>7 | </li></a>
								<a class="text" href=""><li>8 | </li></a>
								<a class="text" href=""><li>9 | </li></a>
								<a class="text" href=""><li>10 | </li></a> 
								<a class="text" href=""><li> -> </li></a> 
							</ul>
						</div>
				</div>
		</div>
	</div>
</div>





</body>

</html>