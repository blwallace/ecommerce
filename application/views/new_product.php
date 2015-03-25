<html>
<head>
	<title>Add New Product</title>
	 <link rel="stylesheet" href="/assets/css/normalize.css">
     <link rel="stylesheet" href="/assets/css/skeleton.css">
     <style type="text/css">
     #move-right {
     	margin-left: 25%;
     }
     #move-right2 {
     	margin-left: 65%;
     }
     #move-up {
     	margin-top: -78px;
     	margin-left: 10%;
     }
     .red {
     	background-color: red;
     	color: white;
     	box-shadow: 5px 5px 3px grey;
     }
     .green {
     	background-color: lightgreen;
     	color: white;
     	box-shadow: 5px 5px 3px grey;
     	margin-left: 5px;
     }
     .button-primary {
     	box-shadow: 5px 5px 3px grey;
     	margin-left: 5px;
     }
     </style>

</head>
<body>

<div class="container">
	<div class="row" id="move-right">
		<h2> Create a new product  </h2>
	</div>
		<div class="row">
			<div class="six columns" id="move-right">
				<form action="/main/add" method="post">
					<label>Name:</label>
					<input class="twelve column" type="text" name="name" placeholder="product name..">
					<label>Description:</label>
					<textarea class="twelve column" name="description" placeholder="product description.."></textarea>
					<label>Categories</label>
					<select name="productscol">
						<option value="1">Golf</option>
						<option value="2">Lacrosse</option>
					</select>
					<label>Add a New Category</label>
					<input class="twelve column" type="text" name="new_label" placeholder="new category here.."><br>
					<label>Choose an Image</label>
					<input class="twelve column" type="file" name="image"><br><br>
					<input class="button-primary" id="move-right2" type="submit" value="create">
				</form>	
				<div id="move-up">
					<a href="/main/products/"><button class="red"> Cancel </button></a>
					<a href="/main/products/"><button class="green"> Preview </button></a>
				</div>
			</div>
		</div>
</div>	

</body>
</html>