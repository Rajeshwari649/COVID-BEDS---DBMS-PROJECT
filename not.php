<?php
session_start();

	include("connect.php");
	include("func.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        h2
            {
                color:midnightblue;
                text-align:center;
                margin-top: 50px;
            }
         body{
background-image: url("history-of-the-hospital-bed.jpg");
 background-repeat:no-repeat;
  background-size:cover;

}
       .color
                {
                        background-color: white;
                        color:midnightblue;
                        text-decoration: none;
                 }
        button
            {
                margin-left: 1430px;


            }
        .img
        {
            width:30%;
            height:20%;
            margin-left: 500px;
            margin-top: 80px;
        }
        </style>
    </head>
<body>

<button class="button"><a class= "color" href="logout.php">LOGOUT</a></button>
<h1><img class="img" src="CovidBeds2.png"></h1>
<h2>SELECTED BED IS UNAVAILABLE</h2>    
    
</body>


</html>