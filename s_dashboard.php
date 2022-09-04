<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	
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
         #td{
			
			border-collapse: collapse;
			border : 1px solid black;
			padding: 5px 2px;
			text-align:left;
            width:200px;
            color: black;
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
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
    <center><br><strong>STUDENT MANAGEMENT SYSTEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></center><center><br> Username: <?php echo $_SESSION['Username'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "logout.php">Logout</a>&nbsp;&nbsp;&nbsp;<a href = "p_change.php">Change Password</a></center>
	
	</div>
	<span id="top_span"><marquee>Welcome to student dashboard of student management system.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
<center>
			<table>
            <tr>
					<td>
						<input type="submit" name="show_detail" value="Show Details">
					</td>
			</tr>
				<tr>
					<td>
						<input type="submit" name="edit_detail" value="Edit Details">
					</td>
				</tr>
				
			</table>
	</center>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where rollno = '$_SESSION[Username]'";
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
							<b>DateofBirth:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['dob']?>" disabled>
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
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
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
				</center>
				</table>
				<?php
				}
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where rollno = $_SESSION[Username]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run))
				{
					?>
					<form action="edit_student.php" method="post">
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
								<b>DateofBirth:</b>
							</td>
							<td>
								<input type="text" name="dob" value="<?php echo $row['dob']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td>
							<td>
								<input type="text" name="gender" value="<?php echo $row['gender']?>">
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
								<b>Email:</b>
							</td>
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
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
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
				</center>
					</table>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
</body>
</html>