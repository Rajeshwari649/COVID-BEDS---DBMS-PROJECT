
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
             tr:nth-child(odd)
{
    background-color: powderblue;
}
table
{
    margin-left:620px;
    width:20%;
    height:20%;
}
table,tr,td
{
    
     border: 3px solid #5494af;
    border-collapse: collapse;
    font-size: 25px;
    
}
tr:nth-child(even)
{
    background-color: aliceblue;
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
<h2>Patient <?php echo $_POST['patname'];?>'s bed has been booked succesfully</h2> 
<table>

<?php 
            
session_start();

	include("connect.php");
	include("func.php");

    $pat_id=random_num(2);
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$pname = $_POST['patname'];
		$age = $_POST['patage'];
        $gender = $_POST['patgender'];
        $bloodgrp = $_POST['patgrp'];
		$phone = $_POST['patph'];
		$hosp_name= $_POST['hosname'];
        $bedtype = $_POST['btype'];
        $query5= "select beds.vacant from beds join hospital on hospital.hosp_id = beds.hosp_id 
        where hospital.hosp_name ='$hosp_name' and beds.bed_type='$bedtype' group by beds.vacant";
		$result=mysqli_query($server,$query5);        
        $row = mysqli_fetch_row($result);
        
		 	if(!empty($pname) && !empty($age) && !is_numeric($pname) &&  !empty($gender) && !empty($bloodgrp) && !empty($phone) && !empty($hosp_name) && !empty($bedtype))
		{  
			if($row[0]!=0)
		{
			$query1 = mysqli_query($server, "insert into patients (pat_id,name,age,sex,blood_group,phone,hosp_name,bedtype) values ('$pat_id','$pname','$age','$gender','$bloodgrp','$phone','$hosp_name','$bedtype')");
			$query2	=  mysqli_query($server,"select hospital.hosp_id from hospital inner  join patients on hospital.hosp_name=patients.hosp_name   where hospital.hosp_name='$hosp_name' GROUP by hospital.hosp_id");		
			$row1=mysqli_fetch_row($query2);			
			$query3 =  mysqli_query($server,"update beds set occupied = occupied + 1 where hosp_id = $row1[0] and bed_type ='$bedtype'");
			$query4 = mysqli_query($server,"update beds set vacant = vacant - 1 where hosp_id = $row1[0] and bed_type ='$bedtype'");
          
			}
			else 
			{
				session_start();
				Redirect('not.php');
				}
				}
			else
            {
            	 Redirect('book.php');
                echo "please enter some valid information!";
            }
				    echo"<tr>
    							<td align=center valign=middle><b>PATIENT ID</b></td>
    						</tr>
  							<tr>
    							<td align=center valign=middle>$pat_id</td> 				
                            
							
                        </tr>
                            ";
    }
    ?> 
           </table>
    
</body>
</html>