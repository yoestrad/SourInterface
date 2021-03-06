<!
Leaf Green: #436361
Light Grey: #A7AEB1
Light Blue Background: #dfedf0
>

<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="utf-8">

	<title>Head Start Login</title>
	<meta name="description" content="Head Start">
	<meta name="author" content="Sour Patch Kids 117">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chivo" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chivo" />
	<link rel="stylesheet" href="css/style4.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->

<style type="text/css">
		body {background-color: #dfedf0;
		background: url("images/crayons.jpeg") no-repeat center fixed; 
    		background-size: cover;
		font-family: "Chivo";
		color: #436361;
		}

		h3 {color : white;}
		p {text-indent: 2em;}
		.container{
			background-color: white;
			background: url("images/white.png") no-repeat center fixed; 
    			background-size: cover;
		}
		.footer{background-color: white;
			color: #436361;
		}

		hr.style8 {
			border-top: 3px double #8c8b8b;
			border-color: #436361;
			}

		.jumbotron{
			background-color: white;
			background-image: url("images/HS-Logo-Custom.png");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			/*-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; */
			background: contain;
			width : 100%;
			height : 900;
			margin-top: 20px;

			}

		.button {
   			 background-color: #436361; 
			 -webkit-transition-duration: 0.4s; /* Safari */
             		 transition-duration: 0.2s;
   			 border: none;
   			 color: white;
    			 padding: 12px 28px;
   			 text-align: center;
			 border-radius: 4px;
  			 text-decoration: none;
   			 display: inline-block;
   			 font-size: 16px;
			 font-weight: bold;
			}

		.button:hover {
			 text-decoration: none;
   			 color: white;
			 font-weight: bold;
			}
		
	</style>



</head>
<body>
	<div class = "container">
		<div class="jumbotron container-fluid">
		<h3>..</h3>
		<h3>..</h3>
		<h3>..</h3>
		</div>
	</div>

	<div class = "container">
	<hr class = "style8">
	</div>


	<div class="container">
	<h2>About Head Start</h2>
	<p>Head Start is a comprehensive child development program designed to meet the educational, emotional, social, health, and nutritional needs of children and families.
		 The program encompasses much more than what is generally thought of as a preschool program. The overall goal of Head Start is to bring about a greater degree of 
		"social competence" to children and their families. Social competence refers to the everyday effectiveness in dealing with both present environment and later responsibilities 
		in school and life. Children and families leave Head Start more confident in their own abilities and ready to succeed. 
	</p>
	<p>Additional services include child health, saftey, nutrition, and mental health support.</p>
		<a class="button" href= "http://www.ochsinc.org/" target = "_blank" role="button">Learn more</a>
	</div>

	<div class = "container">
	<hr class = "style8">
	</div>


	<div class="container">
	  <h2>Login</h2>
	  <p>To view your child's registration status please enter your child's ID number and birthdate below.</p>
	  <p>If you are unsure of your children's ID number please check the email input in the registration form for a confirmation email which states the child specific ID.</p>
		<br>

	  <form class="form-inline" action="action_page2.php">

	      <label for="cid">Child ID:</label>
	      <input type="text" class="form-control" id="cid" placeholder="Enter Child ID" name="cid">

	      <label for="pcd">Birthdate:</label>
	      <input type="password" class="form-control" id="pcd" placeholder="MMDDYYYY" name="pcd">

	    <button type="submit" class="btn btn-default"> Submit </button>
	  </form>
	<br>
	<p> Please note that for families with more than one child each child's status must be checked individually.</p>
	 <p>If you have not completed an online or in-person registration form please do so using the following link or visit an OC Head Start office for more information.</p>
	  <a class="button" href= "http://www.ochsinc.org/" target = "_blank" role="button">Register</a>

		</br></br></br>
	<script src="js/scripts.js"></script>

	<div class = "container">
	<hr class = "style8">
	</div>


      <div class = "footer">
        
	<summary>
      		  Main Office</br>	
        	  2501 S. Pullman Street, Suite 100</br>
		  Santa Ana, CA 92705</br>
		  Phone: (714) 241-8920</br>
		  Fax: (949) 596-8291</br>
	&copy; Copyright 2008-2018 by Orange County, Head Start Inc.</summary>
      
	</footer>
	</div>

</body>
</html>
