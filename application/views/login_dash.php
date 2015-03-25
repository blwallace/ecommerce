
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

    form p, form td {
    	margin: 0px;
    }
	td {
    	margin: 0px;
    	height: 25px;
    	padding:0px;
    }    
    </style>

</head>


<body>

	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
	</div>
<div class="container">

	<div class="row">
		<div class="eight columns" id="grey">
			<h2>Login</h2>
				<table>
				<form action='/users/login' method='post'>
					<tr>
					<td>Login:</td>
					<td> <input type='text' name='email'></td>
					</tr>
					<tr>
					<td>Password:</td>
					<td> <input type='password' name='password'></td>
					</tr>
					</table>
					<input type='submit'>
					<input type='hidden' name='action' value='login'>
				</form>
				
				<h3>Register</h3>

				<form action='/users/register' method='post'>
					<table>
						<tr><td>First Name:</td><td> <input type="text" name="first_name"></td></tr>
						<tr><td>Last Name:</td><td> <input type="text" name="last_name"></td></tr>		
						<tr><td>Email:</td><td> <input type="text" name="email"></td></tr>
						<tr><td>Password:</td><td> <input type="password" name="password"></td></tr>
						<tr><td>Confirm Password:</td><td> <input type="password" name="confirm"></td></tr>
					</table>
					<input type="submit" name="action" value="Register">
				</form>	
		</div>
	</div>
	
</div>


</body>

</html>