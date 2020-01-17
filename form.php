<?php
include'connection.php';


if (isset($_POST['submit'])) 
{
	
	$email=$_POST['email'];
    $mobile=$_POST['mobno'];
	$username=$_POST['username'];
	$password=$_POST['password'];
    


	 mysqli_query($con,"INSERT INTO `login_table`(`username`, `password`) VALUES ('$username','$password')");

	 $login_id=mysqli_insert_id($con);


	 
	 mysqli_query($con,"INSERT INTO `registration_table`(`username`, `phone`, `email`,  `password`) VALUES ('$username','$mobile','$email','$password')");
                                                                                                                                                                                                                                                                                                                                                              
}


?>






<html>
<head>
<title>form</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	Username:<input type="text" id="username" name="username" >
<span id="unameerror" style="color: red"></span><br><br>
Email:<input type="text" id="email" name="email">
<span id="emailerror" style="color: red"></span><br><br>
mob no:<input type="text" id="mobno" name="mobno">
<span id="mobnoerror" style="color: red"></span><br><br>
Password:<input type="password" id="password" name="password">
<span id="passworderror" style="color: red"></span><br><br>
<input type="submit" value="submit" id="submit" name="submit" onclick="return valid();" >
</form>
</body>
</html>






<script type="text/javascript">
	function valid()
	{
		
		var username=document.getElementById('username').value;
		var email=document.getElementById('email').value;
		var mobno=document.getElementById('mobno').value;
		var password=document.getElementById('password').value;



if (email==""||email.indexOf('@')==-1||email.indexOf('.')==-1)
{
  document.getElementById('emailerror').innerHTML="Email required";
  return false;
}
if (mobno==""||isNaN(mobno)||mobno.length>10)
{
  document.getElementById('mobnoerror').innerHTML="incorrect number";
  return false;
}


if (username=="")
{
  document.getElementById('unameerror').innerHTML="username required";
  return false;
}
if (password=="")
{
  document.getElementById('passworderror').innerHTML="password required";
  return false;
}


	}
</script>

