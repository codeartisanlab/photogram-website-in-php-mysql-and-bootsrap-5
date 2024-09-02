<?php
include('functions.php');
$mysqli=mysqli_connect("localhost","root","","photogram");
if(!$conn){
	echo mysqli_error($mysqli);
}

$userTable="users";

// Insert data in database
function insert_data($table,$data_array,$file_array){
	global $mysqli;
	$fullName=$data_array['full_name'];
	$mobile=$data_array['mobile'];
	$password=sha1($data_array['password']);
	$interested=$data_array['interested'];

	$tmpImage=$file_array['image']['tmp_name'];
	$image=$file_array['image']['name'];


	if(!move_uploaded_file($tmpImage, '../assets/imgs/'.$image)){
		_t('not uploaded');
		die;
	}

	$query="INSERT INTO $table (full_name,mobile,password,interested_in,image) VALUES ('$fullName','$mobile','$password','$interested','$image')";
	$result=mysqli_query($mysqli,$query);
	$affectedRows=mysqli_affected_rows($mysqli);
	if($affectedRows>0){
		return true;
	}else{
		return false;
	}
}



?>