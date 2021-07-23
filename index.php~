<?php
	require_once('header.php');
	require_once('connect.php');
	$error="";
?>   
	<link href="transdmin.css" rel="stylesheet" type="text/css" media="screen"/>
<style>
.sign{
color:#5494af;
font-size:30px;

margin-left: 550px;
margin-right: 550px;
margin-bottom: 0;
}
label{
	 text-shadow: 1px 1px 1.5px black;

	}
</style>
       
        <div id="containerHolder">
			<div id="container">
                <h2 style="text-shadow: 2px 2px 2px black;" ><b>User Login</b></h2>
                
                <div id="main">
                <form method="post" class="jNice" name="frm1">
					
                    <?php
						if(isset($_POST['save']))
						{
							$uname=$_POST['uname'];
							$pword=$_POST['pword'];
							
							if($uname==""){ 
							$error="<br><span class=error>Please enter a username</span><br><br>"; 
							}
							elseif($pword==""){ 
							$error="<br><span class=error>Please enter the password</span><br><br>";
							 }
							else
							{
								$result=mysqli_query($server,"SELECT * FROM users WHERE uname='$uname' AND pword='$pword'");
								if(mysqli_num_rows($result)==0){
									 $error="<br><span class=error>Invalid Username/Password</span><br><br>"; 
									 }
								else
								{
									$row=mysqli_fetch_array($result);
									session_start();
									$_SESSION['user_id']=$row['user_id'];
$_SESSION['name']=$row['uname'];
									Redirect('dashboard.php'); 
								}
							}
							if($error!=""){
								 echo $error; 
								 }
						}
					?>
                    	<div class="login">
                            <p><label><b>Username:</b></label><input type="text" name="uname" class="text-long"  /></p>
                            <p><label><b>Password:</b></label><input type="password" name="pword" class="text-long" /></p>
                            <input type="submit" value="Log In" name="save"/>
			    <p class="sign" style="margin-top: 35px; color:#c66653; text-shadow: 1px 1px 1.5px black;">Don't have an account?<a href="signup.php" style="color:#5494af;">  Sign up </a></p> 
                        </div>
                    </form>
                        <br /><br />
                </div>
               
 <?php
	require_once('footer.php');
?>               