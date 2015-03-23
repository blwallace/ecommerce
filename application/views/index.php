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
     	}
     	.product {
     		display: inline-block;
     		height: 100px;
     		width: 100px;
     		border: 1px solid black;
     		margin-left: 10px;
     	}
     	.numList {
       		text-align: center;
     		list-style: none;
     		
     	}
     		.numList li {
	     		display: inline;
	     		text-align: center;
	     		list-style: none;
     		}
     	#left-box  {
     		background-color: whitesmoke;
     		height: 450px;
     	}
     	#gold {
     		background-color: whitesmoke;
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

		<form>
			<input type="text" name="search" value="product name..">
			<input class="button-primary"type="submit" value="Search">
		</form>	
			<ul class="category"> Categories
				<li>product1</li>
				<li>product2</li>
				<li>product3</li>
				<li>product4</li>
				<li>product5</li>
			</ul>
		</div>

		<div class="nine columns" id="gold">
			<div class="row">
				<h5> Products 1 (page 1)</h5>
				<ul class="nav">
					<li>first</li> 
					<li>prev</li> 
					<li>1</li> 
					<li>next</li>
				</ul>
				</div>
				<div class="row">
					<select class="sort"> Sorted By
						<option>Price</option>
						<option>Most Popular</option>
					</select>
				</div>
				<div class="row">
						<div class="product">
							<p>1</p>
						</div>
						<div class="product">
							<p>2</p>
						</div>
						<div class="product">
							<p>3</p>
						</div>
						<div class="row" >
							<ul class="numList" id="blue">
								<li>1</li>
								<li>2</li>
								<li>3</li>
								<li>4</li>
								<li>5</li>
							</ul>
						</div>
				</div>
		</div>
	</div>
</div>





</body>

</html>