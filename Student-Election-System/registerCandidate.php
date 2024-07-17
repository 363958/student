<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
               background-color: #f4f3f3;
			
            }
            header.jumbotron{
    background: #dfdfdf;
    color:#303841 ;
    text-align: center;
    padding: 2rem 1rem;

            }
            input{
                width: 250px;
                padding: 10px;
                margin: 5px;
                border-radius: 10px;
            }
            hr{
                align: center;
                width: 500px;
            }
            
            h3{
            color: #b1bed5;
            text-align: center;
        }
        .container{
            margin-top: -25%;
            border:24px  ;
            background-color: #f4f3f3;
            border-radius: 24px;
                text-align: center;
        }

        form{
            border: 5px  ;
            padding:15px;
            border-radius: 10px;
        }
        form:hover {
    background: #bfd8d5;
    cursor: pointer;
    
}
        </style>

        
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <center>
  <header class="jumbotron text-center">
        <h1>Online Voting System </h1>
       
    </header>
    		<h3>  Candidate Registration Portal </h3>
            <div class="parent">
                <div class="container">
        <h3>New Candidate's Details</h3>
        <form action="registerCandidateScript.php" method="post">
			
            <input type="text" placeholder="Name" name="name" >
            <br>
            <input type="email" placeholder="Student ID" name="email">
            <br>
            <input type="text" placeholder="Contact" name="contact">
            <br>
            <input  class="btn btn-primary" type="submit" name="submit" value="Register">
        
        </form>
                             <h3> <a href="index.php">Go to HOME</a></h3>

    </div>
        </div>

        
    </center>
        <?php
            
        ?>
    </body>
</html>
