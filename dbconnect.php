<?php

$last_id = null;
$conn = null;
function connect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = 'webdevproject';
	// Create connection
	global $conn;
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	// return $conn;
}

function getData($sql){	 //to fetch any data
	global $conn;
	$rows = NULL;	
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$rows[] =$row;
	}
	return($rows);
}

function getDataNum($sql){	 //to fetch any data
	global $conn;
	$rows = NULL;	
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
		$rows[] =$row;
	}
	return($rows);
}

function setData($sql){ //to insert any data
	$last_id = 0;
	// $conn = connect();
	global $conn;
	$result = mysqli_query($conn,$sql);
	$last_id = mysqli_insert_id($conn);
	return $last_id;
}

function close_link(){
	global $conn;
	mysqli_close($conn);
}



?>