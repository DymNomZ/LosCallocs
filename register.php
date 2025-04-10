<?php    
    include 'connection.php';    
    require_once 'includes/header.php'; 

	$res = null;

	if (isset($_GET['add']) && $_GET['add'] == '1') {
		$title = "Add New Student";
	} else if (isset($_GET['update'])) {
		$title = "Update Student";

		$stmt = $connection->prepare("SELECT * FROM tbluser LEFT JOIN tblstudents ON tblstudents.uid = tbluser.uid WHERE tbluser.uid = ?");
		$stmt->bind_param("i", $_GET['update']);
		$stmt->execute();
		$row = $stmt->get_result();

		if (!$row || $row->num_rows != 1) {
			$res = null;
			$title = "Add New Student";
		} else {
			$res = $row->fetch_assoc();
		}
	} else {
		$title = "User Registration Page";
	}
?>

<body class="min-h-screen bg-[#343f57] m-0 flex flex-col text-white font-serif overflow-hidden">
        <header class="h-20 flex px-6 py-4 bg-[#485268] border-0 border-b-2 border-[#f5e6ca] border-solid">
            <img src="./assets/logo.png" alt="" class="rounded-full border-[#f5e6ca] h-full aspect-square">
            <h2 class="ml-5 text-2xl my-auto font-semibold">SIMS: Store Inventory Management System</h2>
        </header>
        <div class="flex-grow flex justify-center items-center font-sans">
			<form method="post" id="registerForm">
				<div class="bg-[#485268] border border-[#737a8c] border-solid rounded-lg py-7 px-12 flex flex-col">
					<input name="update" value="<?=$res != null ? $_GET['update'] : ''?>" hidden>
					<h2 class="text-2xl text-[#fbf4e7] text-center mb-3 font-bold"><?=$title?></h2>
					<label class="text-[#fbf4e7] mb-1">Firstname:</label>
					<input type="text" placeholder="Enter Firstname" name="txtfirstname" value="<?=$res != null ? $res['firstname'] : ''?>" required>

					<label class="text-[#fbf4e7] mb-1">Lastname:</label>
					<input type="text" placeholder="Enter Lastname" name="txtlastname" value="<?=$res != null ? $res['lastname'] : ''?>" required>

					<div class="mb-1 grid grid-cols-2">
						<div class="flex flex-col pr-4">
							<label class="text-[#fbf4e7] mb-1">Gender:</label>
							<select name="txtgender">
								<option value="">----</option>
								<option value="Male" <?=($res != null && $res['gender'] == "Male") ? 'selected' : ''?>>Male</option>
								<option value="Female" <?=($res != null && $res['gender'] == "Female") ? 'selected' : ''?>>Female</option>
							</select>
						</div>
						<div class="flex flex-col pl-4">
							<label class="text-[#fbf4e7] mb-1">User Type:</label>
							<select name="txtusertype">
								<option value="">----</option>
								<option value="student" <?=($res != null && $res['usertype'] == "student") ? 'selected' : ''?>>Student</option>
								<option value="employee" <?=($res != null && $res['usertype'] == "employee") ? 'selected' : ''?>>Employee</option>
							</select>
						</div>
						<div class="flex flex-col pr-4">
							<label class="text-[#fbf4e7] mb-1">Program:</label>
								<select name="txtprogram">
								<option value="">----</option>
								<option value="bsit" <?=($res != null && $res['program'] == "bsit") ? 'selected' : ''?>>BSIT</option>
								<option value="bscs" <?=($res != null && $res['program'] == "bscs") ? 'selected' : ''?>>BSCS</option>
							</select>
						</div>
						<div class="flex flex-col pl-4">
							<label class="text-[#fbf4e7] mb-1">Year Level:</label>
							<select name="txtyearlevel">
								<option value="">----</option>
								<option value="1" <?=($res != null && $res['yearlevel'] == "1") ? 'selected' : ''?>>1</option>
								<option value="2" <?=($res != null && $res['yearlevel'] == "2") ? 'selected' : ''?>>2</option>
								<option value="3" <?=($res != null && $res['yearlevel'] == "3") ? 'selected' : ''?>>3</option>
								<option value="4" <?=($res != null && $res['yearlevel'] == "4") ? 'selected' : ''?>>4</option>
							</select>
						</div>
					</div>

					<label class="text-[#fbf4e7] mb-1">Username:</label>
					<input type="text" placeholder="Enter Username" name="txtusername"  value="<?=$res != null ? $res['username'] : ''?>" required>

					<label class="text-[#fbf4e7] mb-1 mt-3">Password:</label>
					<input type="password" placeholder="Enter Password" name="txtpassword" required>

					<label class="text-[#fbf4e7] mb-1 mt-3">Confirm Password:</label>
					<input type="password" placeholder="Enter Password" name="txtconfirmpassword" required>

					<button type="submit" name="btnRegister" class="mt-4 mx-auto text-black bg-[#f7ecd6] border-0 px-5 py-2 rounded-2xl cursor-pointer">Register</button>
				</div>
			</form>
        </div>
        <img class="w-full h-full absolute top-20 -z-30 max-w-screen-xl" src="./assets/about.png">
        <div class="h-10 bg-[#2b313d] bg-opacity-65 border-slate-800 border-0 border-solid border-t backdrop-blur-xl flex text-center items-center">
            <p class="mx-auto text-lg">John Zillion Reyes | BSCS - 2</p>
        </div>
    </body>

	<script src="js/register.js"></script>
</html>

<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluser
		$fname=$_POST['txtfirstname'];		
		$lname=$_POST['txtlastname'];
		$gender=$_POST['txtgender'];
		$utype=$_POST['txtusertype'];
		$uname=$_POST['txtusername'];		
		$pword=$_POST['txtpassword'];	
		$hashedpw = password_hash($pword, PASSWORD_DEFAULT);
		
		//for tblstudent
		$prog=$_POST['txtprogram'];		
		$yearlevel=$_POST['txtyearlevel'];		
		
		
		if (isset($_POST['update'])) {
			$sql1 ="UPDATE tbluser SET firstname ='".$fname."', lastname = '".$lname."', gender = '".$gender."', usertype = '".$utype."', username = '".$uname."', password = '".$hashedpw."' WHERE uid = " . $_POST['update'];
		} else {
			$sql1 ="Insert into tbluser(firstname,lastname,gender, usertype, username, password) values('".$fname."','".$lname."','".$gender."','".$utype."', '".$uname."', '".$hashedpw."')";
		}

		//save data to tbluser	
		mysqli_query($connection,$sql1);
				
		$last_id = mysqli_insert_id($connection);
		 
		if (isset($_POST['update'])) {
			$sql2 ="UPDATE tblstudents SET program = '".$prog."', yearlevel = '".$yearlevel."' WHERE uid = '".$_POST['update']."'";
		} else {
			$sql2 ="Insert into tblstudents(program, yearlevel, uid) values('".$prog."','".$yearlevel."','".$last_id."')";
		}
		mysqli_query($connection,$sql2);
		echo "<script language='javascript'>
			alert('New record saved.');
		      </script>";
		header("location: dashboard.php");
		
			
		
	}
		

?>