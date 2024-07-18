<?php 
if(!isset($_SESSION['adminLoggedin'])) 
{ 
	session_start();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		header.jumbotron {
    background: #dfdfdf;
    color:#303841 ;
    text-align: center;
    padding: 2rem 1rem;
    
}
.container{
            margin-top: 10%;
            border:24px  ;
            background-color: #E0A75E;
            border-radius: 24px;
                text-align: center;
                justify-content: right;
                
	       }

		input{
			padding:5px;
			border-radius: 5px;
			margin:10px;
			width: 200px;
		}
		form{
			border: 5px  ;
			padding:15px;
			border-radius: 10px;
		}
		form:hover {
    background: #f4f3f3;
    cursor: pointer;
    
}
		h2{
			color: #303841;
			
		}
		
	</style>
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
	 <header class="jumbotron text-center">
        <h1>Student Voting System </h1>
    </header>
    <center>

	<div class="container">
		<h2>Login to Admin Panel</h2>
		<form target="" method="post">
			<input type="text" name="username" placeholder="Username" value="">
			<br>
			<input type="password" name="pass" placeholder="Password" value="">
			<br>
			<input type="submit" name="loginbtn" value="Login">
		</form>

	</div>
</center>


<p><a href="index.php">Go to Home</a></p>
</body>
</html>

<?php 
if(isset($_POST['loginbtn'])){
	if($_POST['username']=="admin" & $_POST['pass']=='admin'){
		echo "login Successful";
		echo "<script>alert('login Successful')</script>";
		$_SESSION['adminLoggedin']="ok";
		header("location: result.php");
	}else{
		echo "<script>alert('Invalid Credentials.')</script>";
	}
}
 ?>