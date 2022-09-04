<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into students values($_POST[rollno],'$_POST[name]',$_POST[dob],'$_POST[gender]','$_POST[email]','$_POST[dept]',$_POST[section],$_POST[phno])";
$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>