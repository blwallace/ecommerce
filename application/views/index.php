

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
	    	.category li a{
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
		<p>		<?php 
			if($this->session->userdata('first_name'))
			{
				echo "Welcome ".$this->session->userdata('first_name');
				echo '<br><a href="/users/logout">Logout</a>';
			}
			else
			{
				echo '<a href="/main/login">Login</a>';
			}
		 ?>	</p>

		<form action="#" method="post" id="search">
			<input class="seven columns"type="text" name="search" placeholder="Product Name">
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
				<h5> Products (page <?php echo ceil($start/12+1) ?>)</h5>
				<ul class="nav">
					<?php if($total - $start > 24){ ?> <a href="/main/index/<?php echo $total - 12 ?>"><li>Last</li></a> <?php } ?>					
					<?php if($total - $start > 12){ ?> <a href="/main/index/<?php echo $start + 12 ?>"><li>Next</li></a> <?php } ?>					
					<?php if($start > 12){ ?> <a href="/main/index/<?php echo $start - 12 ?>"><li>Prev</li></a> <?php } ?>					
					<?php if($start > 0){ ?> <a href="/main/index/0"><li>First</li></a> <?php } ?>
				</ul>
				</div>
				<div class="row">
					<form action='/' method='post' class="sort">
					<input type='submit' value='Order By'>						
					<select name='sort'>
						<option value='price'>Price</option>
						<option value='popular'>Most Popular</option>
					</select>					
				</div>
				<div class="row">
					<!-- these are products from the database -->
				<?php 

				foreach ($products as $product) {
						echo'<a href="/main/show_single/'.$product['id'].'"><button type="button" class="product">'. $product['name']. '</button></a>';
					}
				?>
						<div class="row" id="outside">
							<ul class="numList">
<?php 	
								$ticker = 0;
								$temp = $total;

								while($temp > 0 && $ticker < 10 && $total > 11)
									{echo '<a class="text" href="/main/index/' . ($ticker * 12 ) .'"><li> '.($ticker+1).'</li></a>';
										$temp-=12;
										$ticker++;}
								if($ticker > 10)
									{echo '<a class="text" href="/main/index/' . ($total- 12) .'"><li> Last</li></a>';	}
								 ?>								

							</ul>
						</div>
				</div>
		</div>
	</div>
</div>





</body>

</html>