<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-repeat: no-repeat;
  background-image:url("login bgi.jpg") ;
  background-size: 100% 150%;
  background-color:pink;
} 
input:hover{
opacity:0.5;
} 
button {   
       background-color:black;   
       width: 100%;  
       length : 75%;
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        /*border: 3px solid #f1f1f1; */
        
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {
  padding: 60px 40px;
        margin-top : 110px;
       top:30px;
	margin-left : 15%;
	margin-right : 15%;
        
        align:'centre';
        background-color: transparent;
        /*background : rgba(186, 184, 173, 0.3); */
    }   
</style>   
</head>    
<body>    
    <center> <h1> Student Login Form </h1> </center>   
    <form action="" method="post"> 

        <div class="container">   
            <label><b>Username</b></label>   
            <input type="text" placeholder="Enter Username" name="Username">  
            <label><b>Password</b></label>   
            <input type="password" placeholder="Enter Password" name="Password">  
            <button type="submit" name="Login">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn" onclick="window.location.href='Home1.html'"> Cancel</button>   
               
        </div>   
    </form> 
    <?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = '';
    $dbname = "studentmanagementsystem";
    if(isset($_POST["Login"])){
    $conn = mysqli_connect($server,$username,$password,$dbname);   
    $query = "select * from login_s where Username = '$_POST[Username]'";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run)){
          if($row['Username'] == $_POST['Username']){
            if($row['Password'] == $_POST['Password']){
              $_SESSION['Username'] = $row['Username'];
              
              header("Location:s_dashboard.php");
            }
            else{
              echo"Incorrect Password";
            }
          }
         
          
        }
        
    }
    
        ?>     
</body>     
</html>  