<?php
	session_start();
	require_once('connect.php'); 
    require_once('func.php');
	if(!isset($_SESSION['user_id'])){ Redirect('index.php'); }
    $user_data=check_login($server);
?>
<title>Covid-Beds</title>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<style>

     a{
text-decoration: none;
}
.button1{
margin-left: 637px;
font-size:20px;
margin-top: 8px;
margin-right: 2px;
}
.button2{
	margin-top: 10px;
margin-left: 580px;
font-size:20px;
}

</style>
<link href="dash.css" rel="stylesheet" type="text/css" media="screen"/>
	<div style="width: 100%;">
	<div style="width: 50%; height: 100px; float: left;">
 	<img src="CovidBeds.png" style="width: 30%; height:70%; margin-left:10px; margin-top:0; margin-bottom: 0;">
 	<h2 class="sideNav"style="margin-top: 5px;">Welcome,<?php echo $_SESSION['name']; ?></h2>
 	</div>
 	<div style="margin-left: 50%; height: 100px;">
 	<button class="button2" ><a class="go" href="book.php">BOOK MY BED</a></button>
   <button class="button1"><a class="go" href="logout.php">LOGOUT</a></button>
	</div></div>
                <h3 >LIST OF  HOSPITALS </h3>
                	
                <div id="main">		
               	  <table class="center">
                  <?php
				  	$result=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='1'");
					$row1=mysqli_fetch_row($result);
					
					$result1=mysqli_query($server,"SELECT hosp_name FROM hospital WHERE hosp_id='1'");
					$str1=mysqli_fetch_row($result1);
					
					$resultt1=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no1=mysqli_fetch_row($resultt1);
					
					$result2=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='2'");
					$row2=mysqli_fetch_row($result2);
					
					$result3=mysqli_query($server,"SELECT hosp_name FROM hospital WHERE hosp_id='2'");
					$str2=mysqli_fetch_row($result3);
					
					
					$resultt2=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no2=mysqli_fetch_row($resultt2);

					$result4=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='3'");
					$row3=mysqli_fetch_row($result4);
					
					$result5=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='3'");
					$str3=mysqli_fetch_row($result5);

					
					$resultt3=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no3=mysqli_fetch_row($resultt3);

					$result6=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='4'");
					$row4=mysqli_fetch_row($result6);
					
					$result7=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='4'");
					$str4=mysqli_fetch_row($result7);
					
					
					$resultt4=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no4=mysqli_fetch_row($resultt4);

					$result8=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='5'");
					$row5=mysqli_fetch_row($result8);
					
					$result9=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='5'");
					$str5=mysqli_fetch_row($result9);

					
					$resultt5=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no5=mysqli_fetch_row($resultt5);

					$result10=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='6'");
					$row6=mysqli_fetch_row($result10);
					
					$result11=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='6'");
					$str6=mysqli_fetch_row($result11);

					
					$resultt6=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no6=mysqli_fetch_row($resultt6);

					$result12=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='7'");
					$row7=mysqli_fetch_row($result12);
					
					$result13=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='7'");
					$str7=mysqli_fetch_row($result13);
					
					$resultt7=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no7=mysqli_fetch_row($resultt7);

					$result14=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='8'");
					$row8=mysqli_fetch_row($result14);
					
					$result15=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='8'");
					$str8=mysqli_fetch_row($result15);
					
					$resultt8=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no8=mysqli_fetch_row($resultt8);

					$result16=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='9'");
					$row9=mysqli_fetch_row($result16);
					
					$result17=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='9'");
					$str9=mysqli_fetch_row($result17);
					
					$resultt9=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no9=mysqli_fetch_row($resultt9);

					$result18=mysqli_query($server,"SELECT hosp_id FROM hospital where hosp_id='10'");
					$row10=mysqli_fetch_row($result18);
					
					$result19=mysqli_query($server,"SELECT hosp_name FROM hospital where hosp_id='10'");
					$str10=mysqli_fetch_row($result19);
					
					$resultt10=mysqli_query($server,"SELECT phn_no FROM hospital WHERE hosp_id='1'");
					$no10=mysqli_fetch_row($resultt10);

  							echo"<tr>
    							<td align=center valign=middle><b>S.NO</b></td>
    							<td align=center valign=middle><b>HOSPITAL NAME</b></td>
							<td align=center valign=middle><b>PHONE NO</b></td>
  							</tr>
  							<tr>
    							<td align=center valign=middle>$row1[0]</td>
    							<td align=center valign=middle><a href='apollogreams.php'>$str1[0]</a></td>
							<td align=center valign=middle> $no1[0]</td></tr>
  							<tr>
    							<td align=center valign=middle> $row2[0]</td>
    							<td align=center valign=middle><a href='vanagram.php'>$str2[0]</a></td>
							<td align=center valign=middle> $no2[0]</td></tr>
  							<tr>
   		 					<td align=center valign=middle>$row3[0]</td>
    							<td align=center valign=middle><a href='appasamy.php'> $str3[0]</a></td>
							<td align=center valign=middle> $no3[0]</td></tr>
  							<tr>
   							  <td align=center valign=middle>$row4[0]</td>
    							<td align=center valign=middle><a href='arunvijaya.php'>$str4[0]</a></td>
							<td align=center valign=middle> $no4[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row5[0]</td>
    							<td align=center valign=middle><a href='hosp5.php'> $str5[0]</a></td>
							<td align=center valign=middle> $no5[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row6[0]</td>
    							<td align=center valign=middle> <a href='hosp6.php'>$str6[0]</a></td>
							<td align=center valign=middle> $no6[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row7[0]</td>
    							<td align=center valign=middle><a href='hosp7.php'> $str7[0]</a></td>
							<td align=center valign=middle> $no7[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row8[0]</td>
    							<td align=center valign=middle><a href='hosp8.php'> $str8[0]</a></td>
							<td align=center valign=middle> $no8[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row9[0]</td>
    							<td align=center valign=middle><a href='hosp9.php'> $str9[0]</a></td>
							<td align=center valign=middle> $no9[0]</td></tr>
							<tr>
   		 					<td align=center valign=middle>$row10[0]</td>
    							<td align=center valign=middle><a href='hosp10.php'> $str10[0]</a></td>
							<td align=center valign=middle> $no10[0]</td></tr>";
					?>
				  </table>
                        <br /><br />
                </div>
           
 <?php
	require_once('footer.php');
?>               