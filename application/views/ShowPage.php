


<html>
<head>
	<title> Product Show Page </title>
	<link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
    <style type="text/css">
    .products {
    	height: 150px;
    	width: 150px;
    	display: inline-block;
    	border: 1px solid black;
    	margin-left: 20px;
    	margin-bottom: 20px;
    }
    .products:hover {
    	background-color: lightgrey;
    	box-shadow: 5px 5px 3px silver;
    }
    .description {
    	margin: 20px auto;
    }
    .buy {
    	float: right;
    }
    .image{
    	height: 250px;
    	width: 250px;
    	border: 1px solid black;
    	margin: 20px auto;
    }
    .small-box {
    	padding-left: 10px;
    	padding-top: 20px;
    }
    .button-primary:hover {
    	box-shadow: 3px 3px 1px lightblue;
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
    #info{
    	background-color: whitesmoke;
    	height: 300px;
    	box-shadow: 5px 5px 3px silver;
    }
    #grey {
    	background-color: whitesmoke;
    	height: 700px;
    	box-shadow: 5px 5px 3px silver;
    }
    #small-box{
    	background-color: silver;
    	height: 50px;
    	width: 50px;
    	border: 1px solid black;
    	display: inline-block;
    }
    </style>

</head>


<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<h4> Shopping cart (<?= $product['id'] ?>) </h4>
	</div>
<div class="container">
	<div class="row">
		<a href="/main/index/"><button class="button-primary"> Go Back </button></a>
		<h4><?= $product['name']; ?></h4>
	</div>
	<div class="row">
		<div class="four columns" id="info">
			<div class="image">

			</div>
			<div class="small-box">
				<div id="small-box">1</div>
				<div id="small-box">2</div>
				<div id="small-box">3</div>
				<div id="small-box">4</div>
				<div id="small-box">5</div>
			</div>
		</div>
		<div class="eight columns" id="grey">
			<div class="description">
			<?= $product['description']; ?>
			</div>
			<form class="buy" action="/carts/add_item/" method="post">
				<select name="quantity">
					<option value="1">1 (<?= $product['price'] ?>)</option>
					<option value="2">2 (<?= $product['price']*2 ?>)</option>
					<option value="3">3 (<?= $product['price']*3  ?>)</option>
				</select>
				<input type="hidden" name="id" value="<?= $product['id'] ?>">
				<input type="submit" value="Buy">
			</form>
		</div>
	</div>	
		<div class="row">
			<h5> Similar Items </h5>
	<?php 
		$data = $this->Product->get_all();
		foreach ($data as $value) 
		{
			if($value['productscol'] == $product['productscol'])
			{
				echo'<a href="/main/show_single/'.$value['id'].'"><button class="products">'.$value['name'].'</button></a>';
			}
		}
	 ?>

		</div>

	
</div>











</body>

</html>