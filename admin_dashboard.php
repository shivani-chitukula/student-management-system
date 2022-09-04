<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	
	<style type="text/css">
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
			border-collapse: collapse;
			padding: 2px 1px;
			/*padding-left:2px;*/
			text-align:left;
            width:200px;
            color: black;
			align: justify;
			
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
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
    <center><br><strong>STUDENT MANAGEMENT SYSTEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></center><center><br> Username:<?php echo $_SESSION['Username'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name:Admin;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "logout.php">Logout</a></center>
	</div>
	<span id="top_span"><marquee>Welcome to Admin Dashboard of Student Management System</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<center>
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_teacher" value="Show Teachers">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="view_students" value="View Students">
					</td>
				</tr>
	
			</table>
			</center>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="rollno">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where rollno = '$_POST[rollno]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table>
							<tr>
								<td>
									<b>Roll No:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['rollno']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>dateofbirth:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['dob']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['phno']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Department:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['dept']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Section:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['section']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Gender:</b>
								</td>
								<td>
                                <input type="text" value="<?php echo $row['gender']?>" disabled>
								</td>
							</tr>
						</table>
					</center>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="rollno">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where rollno = $_POST[rollno]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run))
				{
					?>
					<form action="a_edit_stu.php" method="post">
					<center>	
					<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td>
							<td>
								<input type="text" name="rollno" value="<?php echo $row['rollno']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>dateofbirth:</b>
							</td>
							<td>
								<input type="text" name="dob" value="<?php echo $row['dob']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="phno" value="<?php echo $row['phno']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Department:</b>
							</td>
							<td>
								<input type="text" name="dept" value="<?php echo $row['dept']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Section:</b>
							</td>
							<td>
								<input type="text" name="section" value="<?php echo $row['section']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td> 
							<td>
                            <input type="text" name="gender" value="<?php echo $row['gender']?>">
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
				</center>
					</form>
					<?php
				}
			}
		?>
        <?php
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
					<center>	
					<table>
						<tr>
							<td>
								<b>Roll Number:</b>
							</td>
							<td>
								<input type="text" name="rollno" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Department:</b>
							</td> 
							<td>
								<input type="text" name="dept" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td>
							<td>
								<input type="text" name="phno" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Section:</b>
							</td> 
							<td>
								<input type="text" name="section" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Dateofbirth:</b>
							</td>
							<td>
								<input type="text" name="dob" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td>
							<td>
                            <input type="text" name="gender" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
				</center>
					</table>
					</form>
					
					<?php
                }
            ?>
			<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="rollno">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5><br><strong>Teachers Details</br></strong></h5>
						<table style=" border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Courses</b></td>
								
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style=" border-collapse: collapse;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['phno']?></td>
								<td id="td"><?php echo $row['courses']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
			<?php
				if(isset($_POST['view_students']))
				{
					?>
					<center>
						<h5>Students Details</h5>
						<table  style=" border: 1px solid black;border-collapse: collapse; text-align:'center'" >
							<tr>
								<td  id="td"><b>Roll Number</b></td>
								<td  id="td"><b>Name</b></td>
								<td  id="td"><b>Date of Birth</b></td>
								<td  id="td"><b>Gender</b></td>
								<td  id="td"><b>Email</b></td>
								<td  id="td"><b>Department</b></td>
								<td  id="td"><b>Section</b></td>
								<td  id="td"><b>Mobile</b></td>
								
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style="border-collapse: collapse;">
							<tr  >
								<td  id="td"><?php echo $row['rollno']?></td> 
								<td  id="td"><?php echo $row['name']?></td>			
								<td  id="td"><?php echo $row['dob']?></td>
								<td  id="td"><?php echo $row['gender']?></td>
								<td align = "left"  id="td"><?php echo $row['email']?></td>
								<td  id="td"><?php echo $row['dept']?></td>
								<td  id="td"><?php echo $row['section']?></td>
								<td  id="td"><?php echo $row['phno']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
			
	
         </div>

</div>

</body>
</html>
 