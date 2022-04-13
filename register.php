<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<style>
body 
{
  background-image: url('data:image/jpeg;base64,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' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
<title>Registration Page</title>
<link rel="stylesheet" href="css/stylex.css">
</head>
<!--<body style="background-color:#bdc3c7"> -->
	
	<div id="main-wrapper">
		<center>
			<h2><strong id="regis">Sign Up</strong></h2>
			<img src="image/user_avatar.png" class="avatar"/>
		</center>
	
		<form class="myform" action="register.php"method="post">
		<!--	<label><b>Full Name:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Full Name" required/><br>
			<label><b>Gender:</b></label>
			<input type="radio" class="radiobtns" name="gender" value="male" checked required> Male
			<input type="radio" class="radiobtns" name="gender" value="male" required> Female<br>
			<label><b>Educational Qualification</b></label>
			<select class="qualification" name="qualification">
			  <option value="BScIT">BScIT</option>
			  <option value="BMS">BMS</option>
			  <option value="BE.IT">BE.IT</option>
			  <option value="MCA">MCA</option>
			</select><br> -->

			<div class="inner_container">


 			<label><b id="run">Username:</b></label><br>
			<input name="username" type="text" id="ruser" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b id="rpas">Password:</b></label><br>
			<input name="password" type="password" id="rpass" class="inputvalues" placeholder="Your password" required/><br>
			<label><b id="rcpas">Confirm Password:</b></label><br>
			<input name="cpassword" type="password" id="rcpass" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		
		</div>

		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

			#	$fullname =$_POST['fullname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
			#	$gender = $_POST['gender'];
			#	$qualification = $_POST['qualification'];

				//echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
				//echo '<script type="text/javascript"> alert("'.$fullname.' ---'.$username.' --- '.$password.' --- '.$gender.' --- '.$qualification.'"  ) </script>';

				if($password==$cpassword)
				{
					$query= "select * from userinfotable WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{
						$query= "insert into userinfotable values('','$username','$password')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
						}
					}
					
					
				}
				else{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
				}
				
				
				
				
			}
		?>
	</div>
</body>
</html>