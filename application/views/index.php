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

<?php 
echo $this->session->flashdata('login_error');
echo $this->session->flashdata('registration_error');
 ?>


	<div class="header" id="header">
		<h2> Dojo E-Commerce </h2>
		<h4><a href='/main/login'>Login</a> <a href='/users/logout'>Logout</a>Shopping cart (xxx) </h4>
	</div>
	

