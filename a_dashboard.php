<!DOCTYPE html>
<html>
        
        <head>
            <title> Admin Dashboard </title>
         <style type = "text/css">
             #header{
                 height:15%;
                 width:100%;
                 top:3%;
                 background-color: black;
                 position: fixed;
                 color: white;
             }
             #left_side{
			height: 65%;
			width: 15%;
			top: 30%;
			position: fixed;
            color: yellow;
            background-color:skyblue;
            border: solid 1px black;
            
             }
             input {
            background-color:white;
            color:black;
            
          
          

         }
         td{
           
           padding:5px 20px;
            
         }
        
         input:hover {   
        opacity: 0.8;   
    } 
    
        #right_side{
			height: 65%;
			width: 80%;
			background-color: peachpuff;
			position: fixed;
			left: 17%;
			top: 30%;
			color:purple ;
			border: solid 3px black;
        }
        #top_span{
			top: 23%;
			width: 80%;
			left: 15%;
            right:17%;
			position: fixed;
            color:Blue;
		}
         </style>
         <?php
         session_start();
         $server = "localhost";
    $username = "root";
    $password = '';
    $dbname = "studentmanagementsystem";
    if(isset($_POST["Login"])){
    $conn = mysqli_connect($server,$username,$password,$dbname);}
    ?>
        </head>
        <body>
            <div id = "header">
                <center><br><strong>STUDENT MANAGEMENT SYSTEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></center><center><br> Username:<?php echo $_SESSION['Username'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name:Admin;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "logout.php">Logout</a></center>
</div>
<span id = "top_span"><marquee>Welcome to Admin Dashboard of Student Management System!!</marquee></span>
<div id = "left_side">
    <form action="" method ="POST">
        <table>
            <tr>
                <td>
                    <input type="submit" name="search_student" value ="Search Student">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="edit_student" value= " Edit Student">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="add_new_student" value ="Add Student">
            
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="delete_student" value= "Delete Student">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="view_all" value ="View all Students">
                </td>
            </tr>
        </table>
   
</form>
</div>
<div id = "right_side"><br><br>
<div id="demo">
    <?php
    if(isset($_POST['search_student'])){
        ?>
        <center>
            <form action="" method="post">
                &nbsp;&nbsp;<b>Enter Roll number:</b>&nbsp;&nbsp;<input type="text" name="rollno">
                <input type ="submit" name="search_by_rollnum_for_search" value="Search"> 
    </form>
    
    </center>
    
    <?php
    }
    
    
    
       
    
        
        if(isset($_POST['search_by_rollnum_for_search'])){
            $conn = mysqli_connect($server,$username,$password,$dbname); 
       
        $query = "select * from sdetails where rollno = '$_POST[rollno]'";
       $query_run = mysqli_query($conn,$query);
      
       while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <table>
            
                          <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['name'];?>" disabled>
								</td>
							</tr>
                            <tr>
                <td>
                    <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll Number:</b>
                </td>
                <td>
                    <input type="text" value="<?php echo $row['rollno'];?>" disabled>
                </td>
            </tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth(D/M/Y):</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['dob']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['gender']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['phno']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['dept']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['section']?>" disabled>
								</td>
							</tr>
            
        </table>
        <?php
    }

}
?>

<?php
    if(isset($_POST['edit_student'])){
        ?>
        <center>
            <form action="" method="post">
                &nbsp;&nbsp;<b>Enter Roll number:</b>&nbsp;&nbsp;<input type="text" name="rollno">
                <input type ="submit" name="search_by_rollnum_for_edit" value="Search"> 
    </form>
    
    </center>
    
    <?php
    }
    if(isset($_POST['search_by_rollnum_for_edit'])){
        $conn = mysqli_connect($server,$username,$password,$dbname); 
   
    $query = "select * from sdetails where rollno = $_POST[rollno]";
   $query_run = mysqli_query($conn,$query);
  
   while($row = mysqli_fetch_assoc($query_run)){
    ?>
    <form action = "a_edit_stu.php" method ="post">
    <table>
        
                      <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b>
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $row['name'];?>" >
                            </td>
                        </tr>
                        <tr>
            <td>
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll Number:</b>
            </td>
            <td>
                <input type="text" name="rollno" value="<?php echo $row['rollno'];?> "disabled>
            </td>
        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth(D/M/Y):</b>
                            </td>
                            <td>
                                <input type="text" name = "dob"value="<?php echo $row['dob']?>" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:</b>
                            </td>
                            <td>
                                <input type="text" name="gender" value="<?php echo $row['gender']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b>
                            </td>
                            <td>
                                <input type="text" name = "email" value="<?php echo $row['email']?>" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact:</b>
                            </td>
                            <td>
                                <input type="text" name = "phno" value="<?php echo $row['phno']?>" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department:</b>
                            </td>
                            <td>
                                <input type="text" name= "dept" value="<?php echo $row['dept']?>" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section:</b>
                            </td>
                            <td>
                                <input type="text" name = "section"value="<?php echo $row['section']?>" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td> <input type="submit" name= "edit" value = "Save">
   </td>
   </td>
   </tr>
        
    </table>
   </form>
    <?php
}

}
?>
<?php
if(isset($_POST['add_new_student'])){
    ?>
    <center><h4>Fill the given details:</h4></center>
    <form action="add_student.php" method = "post">
        <table>
            <tr>
                <td>Roll number:</td>
                 <td>
                     <input type="text" name="rollno" required>
                 </td>   
            </tr>
            <tr>
                <td>Name:</td>
                 <td>
                     <input type="text" name="name" required>
                 </td>   
            </tr>
            <tr>
                <td>Dateofbirth:</td>
                 <td>
                     <input type="text" name="dob" required>
                 </td>   
            </tr>
            <tr>
                <td>Gender:</td>
                 <td>
                     <input type="text" name="gender" required>
                 </td>   
            </tr>
            <tr>
                <td>Email:</td>
                 <td>
                     <input type="text" name="email" required>
                 </td>   
            </tr>
            <tr>
                <td>Contact:</td>
                 <td>
                     <input type="text" name="phno" required>
                 </td>   
            </tr>
            <tr>
                <td>Department:</td>
                 <td>
                     <input type="text" name="dept" required>
                 </td>   
            </tr>
            <tr>
                <td>Section:</td>
                 <td>
                     <input type="text" name="section" required>
                 </td>   
            </tr>
            <tr>
                <td></td>
                 <td>
                     <input type="submit" name="add" value="Add Student">
                 </td>   
            </tr>
</table>
</form>
<?php
}
?>
    </div>

</div>

</body>
</html>
 