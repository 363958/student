<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home | Student Voting System</title>
        <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
        <style>
            h2{
               color: #973131;
               text-align: center;
}
h3{
            color: #973131;
            text-align: center;
        }
header.jumbotron{
    background: #E0A75E;
    color:#973131 ;
    text-align: center;
    padding: 2rem 1rem;

            }
            
        .container{
            margin-top: -10%;
            border:24px  ;
            background-color: #E0A75E;
            border-radius: 24px;
                text-align: center;

        }
           input{
            padding:5px;
            border-radius: 5px;
            margin:10px;
            width: 200px;
                text-align: center;

        }
        form{
            border: 5px  ;
            padding:15px;
            border-radius: 10px;
        }
        form:hover {
    background: #FFF2D7;
    cursor: pointer;
    
}
            
        </style>
        <link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <center>
              <header class="jumbotron text-center">
        <h1>Student Election System </h1>
       
    </header>
<h2> New User Registration</h2>
        <div class="parent">
            <div class="container">
        
        
        <h3>New Record Insertion</h3>
        <form action="registerVoterScript.php" method="post">
			
            <input type="text" placeholder="Name" name="name" >
            <br>
            <input type="text" placeholder="StudentId" name="sid">
            <br>
            <input type="password" placeholder="Password" name="pass">
            <br>
            <input type="text" placeholder="Contact" name="contact">
            <br>
            <input  class="btn btn-primary" type="submit" name="submit" value="Register">
             <p> <a href="index.php">Goto HOME</a></p>
        </form>
        
    </div>
</div>
    </center>
        <?php
            
        ?>
    </body>
</html>
