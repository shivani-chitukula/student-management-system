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
     $query = "INSERT INTO login_s(Username,Password) VALUES('$Username','$Password')";
    
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

  
?>