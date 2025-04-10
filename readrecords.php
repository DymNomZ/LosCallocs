<?php
	
	require_once 'connection.php';
	
	if (!$connection) {
	    die('Could not connect: ' . mysqli_connect_error());
}
	
	$query = 'SELECT * from  tblstudents, tbluser where tbluser.uid = tblstudents.uid';
        $resultset = mysqli_query($connection, $query);
	
	//$querybsit = 'SELECT count(*) as total from  tblstudents where program = "BSIT"';
	//$resultset1 = mysqli_query($connection, $querybsit);
	//$count = mysqli_fetch_assoc($resultset1);	
		
	
?>