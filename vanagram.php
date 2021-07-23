<?php
session_start();
require_once('connect.php');
if(!isset($_SESSION['user_id'])){ Redirect('index.php'); }
?>
<title>Covid-Beds</title>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
	<img src="CovidBeds.png" style="width: 10%; height:10%; margin-left:10px; margin-top:0;">
	<button class="button"><a class="go" href="logout.php">LOGOUT</a></button>
<link href="bed.css" rel="stylesheet" type="text/css" media="screen"/>
<h1>APOLLO HOSPITAL VANAGARAM</h1>

<h3><label class="add">ADDRESS- :</label>Plot No, 64, Vanagaram-Ambattur Rd, Ayanambakkam, Ambattur Industrial Estate, Chennai, Tamil Nadu 600095</h3>
<h2>BED AVAILABILITY</h2>

	
<table class="center">
                  <?php
				  	$result=mysqli_query($server,"SELECT total from beds where hosp_id=2 and  bed_type='covid_bed'");
					$row1=mysqli_fetch_row($result);
					
					$result1=mysqli_query($server,"SELECT occupied from beds where hosp_id=2 and  bed_type='covid_bed'");
					$row2=mysqli_fetch_row($result1);

					$result2=mysqli_query($server,"SELECT vacant from beds where hosp_id=2 and  bed_type='covid_bed'");
					$row3=mysqli_fetch_row($result2);

					$result3=mysqli_query($server,"SELECT total from beds where hosp_id=2 and  bed_type='oxy_bed'");
					$row4=mysqli_fetch_row($result3);
					
					$result4=mysqli_query($server,"SELECT occupied from beds where hosp_id=2 and  bed_type='oxy_bed'");
					$row5=mysqli_fetch_row($result4);

					$result5=mysqli_query($server,"SELECT vacant from beds where hosp_id=2 and  bed_type='oxy_bed'");
					$row6=mysqli_fetch_row($result5);
					
							$result6=mysqli_query($server,"SELECT total from beds where hosp_id=2 and  bed_type='non_oxy_bed'");
					$row7=mysqli_fetch_row($result6);
					
					$result7=mysqli_query($server,"SELECT occupied from beds where hosp_id=2 and  bed_type='non_oxy_bed'");
					$row8=mysqli_fetch_row($result7);

					$result8=mysqli_query($server,"SELECT vacant from beds where hosp_id=2 and  bed_type='non_oxy_bed'");
					$row9=mysqli_fetch_row($result8);

							$result9=mysqli_query($server,"SELECT total from beds where hosp_id=2 and  bed_type='icu_bed'");
					$row10=mysqli_fetch_row($result9);
					
					$result10=mysqli_query($server,"SELECT occupied from beds where hosp_id=2 and  bed_type='icu_bed'");
					$row11=mysqli_fetch_row($result10);

					$result11=mysqli_query($server,"SELECT vacant from beds where hosp_id=2 and  bed_type='icu_bed'");
					$row12=mysqli_fetch_row($result11);
	
							$result12=mysqli_query($server,"SELECT total from beds where hosp_id=2 and  bed_type='venti_bed'");
					$row13=mysqli_fetch_row($result12);
					
					$result13=mysqli_query($server,"SELECT occupied from beds where hosp_id=2 and  bed_type='venti_bed'");
					$row14=mysqli_fetch_row($result13);

					$result14=mysqli_query($server,"SELECT vacant from beds where hosp_id=2 and  bed_type='venti_bed'");
					$row15=mysqli_fetch_row($result14);

							echo"<tr>
    							<td align=center valign=middle><b>BED TYPE</b></td>
    							<td align=center valign=middle><b>TOTAL</b></td>
							<td align=center valign=middle><b>OCCUPIED</b></td>
    							<td align=center valign=middle><b>VACANT</b></td>
  							</tr>
  							<tr>
							<td align=center valign=middle>COVID-BED</td>
    							<td align=center valign=middle>$row1[0]</td>
    							<td align=center valign=middle>$row2[0]</td>
							<td align=center valign=middle>$row3[0]</td>
							</tr><br>
							<tr>
							<td align=center valign=middle>OXYGEN-BED</td>
    							<td align=center valign=middle>$row4[0]</td>
    							<td align=center valign=middle>$row5[0]</td>
							<td align=center valign=middle>$row6[0]</td>
							</tr>
						<tr>
							<td align=center valign=middle>NON-OXYGEN-BED</td>
    							<td align=center valign=middle>$row7[0]</td>
    							<td align=center valign=middle>$row8[0]</td>
							<td align=center valign=middle>$row9[0]</td>
						<tr>
							<td align=center valign=middle>ICU-BED</td>
    							<td align=center valign=middle>$row10[0]</td>
    							<td align=center valign=middle>$row11[0]</td>
							<td align=center valign=middle>$row12[0]</td>
						<tr>
							<td align=center valign=middle>VENTILATOR-BED</td>
    							<td align=center valign=middle>$row13[0]</td>
    							<td align=center valign=middle>$row14[0]</td>
							<td align=center valign=middle>$row15[0]</td>

							</tr>";
		?>
 </table>
</div>
<?php
	require_once('footer.php');
?>