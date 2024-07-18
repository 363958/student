    
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style>


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.container{
            margin-top: -10%;
            border:24px  ;
            background-color: #dfdfdf;
            border-radius: 24px;
                text-align: center;
                  }
      h2{
        color: #303841;
      }
    
</style>
<?php 
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
 ?>
    <center>
 <header class="jumbotron text-center">
        <h1>Online Voting System </h1>
       
    </header>

</center>
<p>
<center>
</head>
<body>

<center>

<form action="loginSubmit.php" method="post">

 <div class="parent">
  <div class="container">
    <h2>Voter Login Form</h2>

<input type="text" placeholder="Enter StudentID" name="uname" required>

  <input type="password" placeholder="Username" name="psw" required>
        
	 <p><mark><?php if(isset($_GET['error'])){ echo $_GET['error']; } ?></mark> </p>
    <button type="submit" >Login</button>
   <a href="index.php">New User?
    Register </a>
 </form>
  </div>
  </div>
</center>


