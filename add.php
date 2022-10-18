<?php
include('config.php');
if(isset($_POST['student_submit']))
{
	$username=$_POST['username'];
	$email_id=$_POST['email_id'];
	$phone_number=$_POST['phone_number'];

	if(empty($username))
	{
		$err[]='Username is required';
	}

	if(empty($email_id))
	{
		$err[]='Email ID is required';
	}

	if(!filter_var($email_id,FILTER_VALIDATE_EMAIL) && !empty($email_id))
	{
		$err[]='Enter a valid Email ID';
	}

	if(empty($phone_number))
	{
		$err[]='Phone Number is required';
	}

	if(!is_numeric($phone_number) && !empty($phone_number))
	{
		$err[]='Phone Number must be a numeric value';
	}


	if(count($err)==0)
	{

		$query=mysqli_query($conn,"insert into student
			                                          SET username='$username',
			                                              email_id='$email_id',
			                                              phone_number='$phone_number',
			                                              is_active='1'
			                                              ");

		if($query)
		{
			header('Location:'.BASE_URL.'');
		}
	}


}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
</head>
<body>

<?php
if(count($err)>0)
{
	foreach($err as $error)
	{
		echo $error.'<br>';
	}

}
?>
<form action="" method="post">
<table width="500" border="1" align="center">
	   <tr>
	   	   <td align="center" colspan="2"><h1>Add Student</h1></td>
	   </tr>
	   <tr>
	   	   <td>Name</td>
	   	   <td><input type="text" name="username" placeholder="Username" value="<?=$username?>"></td>
	   </tr>
	   <tr>
	   	   <td>Email ID</td>
	   	   <td><input type="text" name="email_id" placeholder="Email ID" value="<?=$email_id?>"></td>
	   </tr>
	   <tr>
	   	   <td>Phone Number</td>
	   	   <td><input type="text" name="phone_number" placeholder="Phone Number" value="<?=$phone_number?>"></td>
	   </tr>
	   <tr>
	   	   <td colspan="2" align="center"><input type="submit" name="student_submit" value="Add Student"></td>
	   </tr>
</table>

	</form>

</body>
</html>