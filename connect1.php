<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_database='hbms';

$con = mysqli_connect($servername, $username, $password);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if(!$con)
{
  echo "Cannot connect to mysql at the moment";
}

$found=mysqli_select_db($con,$db_database);
if(!$found)
{
   echo"Cannot find database at the moment";
}


function Redirect($url) { 
       if(headers_sent()) { 
               echo "<script type='text/javascript'>location.href='$url';</script>"; 
       } else { 
               header("Location: $url"); 
       } 
}  

?>






