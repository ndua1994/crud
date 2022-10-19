<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Student</title>
</head>
<body>



	<table width="800" align="center" border="1">
		   <tr>
		   	   <td colspan="9" align="center"><h1>Manage Students</h1></td>
		   </tr>
		   <tr>
		   	   <th>S.No</th>
		   	   <th>Name</th>
		   	   <th>Email ID</th>
		   	   <th>Phone Number</th>
		   	   <th>Status</th>
		   	   <th>Date</th>
		   	   <th>View</th>
		   	   <th>Edit</th>
		   	   <th>Delete</th>
		   </tr>
		   <?php
		   $i=1;
		   $query=mysqli_query($conn,"select * from student order by student_id desc");
		   while($row=mysqli_fetch_array($query))
		   {
		   ?>
		   <tr>
				<td><?=$i?></td>
				<td><?=$row['username']?></td>
				<td><?=$row['email_id']?></td>
				<td><?=$row['phone_number']?></td>
				<td><?=($row['is_active']==1 ? 'Active' : 'Deactive')?></td>
				<td><?=date('d-m-Y',strtotime($row['tstp']))?></td>
				<td><a href="<?=BASE_URL?>view.php?view_id=<?=$row['student_id']?>">View</a></td>
				<td><a href="#">Edit</a></td>
				<td><a href="#">Delete</a></td>
		   </tr>
		<?php $i++;}?>
		<tr>
			<td colspan="9" align="center"><a href="<?=BASE_URL?>add.php">Add Student</a></td>
		</tr>
	</table>


	

</body>
</html>