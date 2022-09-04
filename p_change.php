<h1 style="text-align:center">RESET YOUR PASSWORD</h1>
<style>
h1{
color: red;

}
#td{
    border : 1px solid black;
    border-collapse: collapse;

}
</style>
<form  action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td style="color:blue;">Old Password :</td>
<td ><input type="password" name="opwd" id="opwd"></td>
</tr>
<tr height="50">
<td style="color:blue;">New Password :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td style="color:blue;">Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="studentloginform.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" value="Change Password" /></td>
</tr>
</tr>
 </table>
 <?php
session_start();

$connection = mysqli_connect("localhost","root","","studentmanagementsystem");
	//$db = mysqli_select_db($connection,"studentmanagementsystem");
if (count($_POST) > 0) {
    $result = mysqli_query($connection, "SELECT *from login_s WHERE Username='" . $_SESSION["Username"] . "'");
    $row = mysqli_fetch_array($result);
   
    
    if ($_POST['opwd'] == $row["Password"]) {
      
        //$connection = mysqli_connect("localhost","root","","studentmanagementsystem");
        $password = $_POST['npwd'];
        $uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\_#w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo "<script>
		alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')
		window.location.href='s_dashboard.php'
		</script>";
    }
else{
        echo "Strong passsword";
        mysqli_query($connection, "UPDATE login_s set Password='" . $_POST["npwd"] . "' WHERE Username='" . $_SESSION["Username"] . "'");
         $message = "Password Changed";
    } 
}
    else
    
        echo "Current Password is not correct";
    
}
?>
</form>
