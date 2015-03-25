<html>
<head>
	<title>Admin Login Page</title>
	 <link rel="stylesheet" href="/assets/css/normalize.css">
     <link rel="stylesheet" href="/assets/css/skeleton.css">
     <style type="text/css">	
     #red{
     	background-color: maroon;
     }
     #center{
     	margin: 150px auto;
     	margin-left: 30%;
     }
     #silver{
     	background-color: silver;
     }
     </style>
</head>
<body>

<div class="container">
	<div class="row">
	</div>
	<div class="row">
		<div class="one-third column" id="center">
			<h3>Admin Login Page</h3>
			<form action="/main/orders" method="post">
				<label>Email:</label>
				<input class="twelve columns"type="text" name="email">
				<label>Password:</label>
				<input class="twelve columns"type="text" name="password"><br>
				<input class="button-primary" type="submit" value="Login">
			</form>
		</div>
	</div>
</div>




</body>



</html>