<?php
$server = "localhost";
$username = "root";
$password = '';
$dbname = "studentmanagementsystem";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST["Login"]))
{
 
  if((!empty($_POST['Username'])) && (!empty($_POST['Password'])) )
  {
     $Username = $_POST['Username'];
     $Password = $_POST['Password'];
     $query = "INSERT INTO login_a(Username,Password) VALUES('$Username','$Password')";
    
       $run = mysqli_query($conn,$query) or die(mysqli_error($conn)); 

       if($run){
        
        echo " Inserted succesfully.";

       }
       else{

        echo "insertion failed.";
       }

    }
  
    else{
      echo "all fields required.";
    }
  }

$query = "select * from login_a where Username = '$_POST[Username]'";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_run)){
  if($row['Username'] == $_POST['Username']){
    if($row['Password'] == $_POST['Password']){
      echo"Login successful";
    }
    else{
      echo"Wrong Password";
    }
  }
  else{
    echo "wrong email id";
  }
}
?>