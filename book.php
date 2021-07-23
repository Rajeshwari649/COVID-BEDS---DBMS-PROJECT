<?php 
session_start();

	include("connect.php");
	include("func.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$pname = $_POST['patname'];
		$age = $_POST['patage'];
        $gender = $_POST['patgender'];
        $bloodgrp = $_POST['patgrp'];
		$phone = $_POST['patph'];
		$hosp_name= $_POST['hosname'];
        $bedtype = $_POST['btype'];
        
        
		if(!empty($pname) && !empty($age) && !is_numeric($pname) &&  !empty($gender) && !empty($bloodgrp) && !empty($phone) && !empty($hosp_name) && !empty($bedtype))
		{  
			
          session_start();
            Redirect('success.php'); 
			}
			else
            {
                echo "please enter some valid information!";
            }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Covid-beds</title>
	<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
    </head>
<body>

    <link href="transdmin.css" rel="stylesheet" type="text/css" media="screen" />
	<style type="text/css">
        #box{

	    margin-top:0px;
        margin-left: 500px;
        }
        
        #sign
        {
           margin-right: 600px;
        }
        #button{

		margin-left:170px;
        }
        #text
        {
         margin-right: 400px;
          
        }
   
        h1{
text-align: center;
margin-top:50px;
margin-bottom: 30px;
margin-right: 490px;
font-size: 80px;
}
.drop{

width: 300px;
height: 30px;
border-radius: 23px;
background-color:lightblue;
border: 3px solid #c66653 ;

}
label{
	 text-shadow: 1px 1.5px 1px black;

	}
img{
	width: 40%;
	height: 25%;
	margin-left: 80px;
	margin-top: 80px;
	
	}
	</style>
    



	<div id="box">
			<img src="CovidBeds.png">
			
		<form action="success.php" method="post">
		
			<div  class="align" style="font-size: 20px;color: midnightblue; margin-left: 80px; text-shadow:2px 2px 2px black; "><h2 id="sign">BOOK  YOUR BEDS
			</h2></div>

			<label><b>Patient-name: </b></label><input id="text" type="text" placeholder="enter your name" name="patname"><br><br>
			<label><b>Age:   </b> </label><input id="text" type="text"  placeholder="enter your age"name="patage"><br><br>
            <label><b>Gender:  </b></label><select class="drop" name="patgender" >
            <option value="none"></option>
  <option value="female">Female</option>
  <option value="male">Male</option></select><br><br>
			<label><b>Bed-type: </b></label> <select class="drop" name="btype">
   <option value="none"></option>  
  <option value="covid_bed">covid_bed</option>
  <option value="oxy_bed">oxy_bed</option>
  <option value="non_oxy_bed">non_oxy_bed</option>
  <option value="icu_bed">icu_bed</option>
  <option value="venti_bed">venti_bed</option>
</select> <br><br>
			<label><b>Blood group:   </b> </label><select class="drop" name="patgrp" >
            <option value="none"></option>
  <option >O+</option>
  <option >O-</option>
<option >A+</option>
  <option >A-</option> 
  <option >B+</option>
  <option >B-</option> 
  <option >AB+</option>
  <option >AB-</option>
  </select>
  <br><br>
  <label><b>Hospital Name:  </b></label><select class="drop" name="hosname" >
            <option value="none"></option>
  <option >Apollo Hospital, Greams Road</option>
  <option >Apollo Hospitals, Vanagaram</option>
   <option >Appasamy Hospital</option>
    <option >ArunVijaya Hospitals, KK Nagar</option>
     <option >Astra Ortho N Spine Care Hospital</option>
 <option >Aysha Hospital</option>
 <option >Be Well Hospital Anna nagar</option>
  <option >Bhaarath medical college and hospital</option>
   <option >Bharathiraja Hospital & Research Centre Pvt Ltd</option>
    <option >Billroth Hospitals Shenoy Nagar, Chennai TN.</option></select><br><br>
			
            <label><b>Phone:  </b></label><input id="text" type="text"  placeholder="enter your phone number"name="patph"><br><br>
			<input id="button" type="submit" value="BOOK">
		</form>
	</div>
</body>
</html>
 <?php
	require_once('footer.php');
?>        