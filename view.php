<?php
include('config.php');
$view_id=$_GET['view_id'];
$details=mysqli_fetch_array(mysqli_query($conn,"select * from student where student_id=$view_id"));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Student</title>
</head>
<body>
<table width="900" border="1" align="center">
	   <tr>
	   	   <td align="center" colspan="2"><h1>View Student</h1></td>
	   </tr>
	   <tr>
	   	   <td>Name</td>
	   	   <td><?=$details['username']?></td>
	   </tr>
	   <tr>
	   	   <td>Email ID</td>
	   	   <td><?=$details['email_id']?></td>
	   </tr>
	   <tr>
	   	   <td>Phone Number</td>
	   	   <td><?=$details['phone_number']?></td>
	   </tr>
	   <tr>
	   	   <td>Status</td>
	   	   <td><?=($details['is_active']==1 ? 'Active' : 'Deactive')?></td>
	   </tr>
	   <tr>
	   	   <td>Date</td>
	   	   <td><?=date('d-m-Y',strtotime($details['tstp']))?></td>
	   </tr>

	   <tr>
			<td colspan="9" align="center"><a href="<?=BASE_URL?>">Go Back</a></td>
		</tr>
</table>


</body>
</html>