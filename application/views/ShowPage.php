<html>
<head>
	<title> Product Show Page </title>
	<link rel="stylesheet" href="/assests/css/normalize.css">
    <link rel="stylesheet" href="/assests/css/skeleton.css">
    <style type="text/css">
    .products {
    	height: 100px;
    	width: 100px;
    	display: inline-block;
    	border: 1px solid black;
    	margin-left: 20px;
    	margin-bottom: 20px;
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
    }
    #grey {
    	background-color: whitesmoke;
    	height: 700px;
    }
    #silver{
    	background-color: silver;
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
		<a href=""> Go Back </a>
		<h4>Product Title right here..</h4>
	</div>
	<div class="row">
		<div class="four columns" id="info">
			<div class="image">

			</div>
		</div>
		<div class="eight columns" id="grey">
			<div class="description">
				<p>Description about this product...Description about this product...Description about this product...Description about this product...Description about this product...Description about this product...Description about this product...Description about this product...</p>
			</div>
			<div class="buy">
				<select>
					<option>1 (19.99)</option>
					<option>2 (15.99)</option>
					<option>3 (10.99)</option>
				</select>
				<a href=""><button class="button-primary"> Buy </button></a>
			</div>
		</div>
	</div>	
		<div class="row" id="silver">
			<h5> Similar Items </h5>
			<div class="products">
				<p>1</p>
			</div>
			<div class="products">
				<p>2</p>
			</div>
			<div class="products">
				<p>3</p>
			</div>
			<div class="products">
				<p>4</p>
			</div>


		</div>

	
</div>











</body>

</html>