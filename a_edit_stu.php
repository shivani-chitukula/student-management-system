<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "update students set name='$_POST[name]',dept='$_POST[dept]',phno=$_POST[phno],gender='$_POST[gender]',email='$_POST[email]',section=$_POST[section],dob=$_POST[dob] where rollno = $_POST[rollno]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
