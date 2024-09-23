<?php
session_start();
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

function user_login($table,$data_array){
	global $mysqli;
	$mobile=$data_array['mobile'];
	$pwd=sha1($data_array['password']);

	$query="SELECT * FROM $table WHERE mobile='$mobile' AND password='$pwd'";
	$result=mysqli_query($mysqli,$query);
	$totalResult=mysqli_num_rows($result);
	if($totalResult  == 0){
		return false;
	}else{
		$row=mysqli_fetch_assoc($result);
		$_SESSION['user']=true;
		$_SESSION['mobile']=$mobile;
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['bio']=$row['bio'];
		$_SESSION['image']=$row['image'];
		$_SESSION['full_name']=$row['full_name'];
		return true;
	}
}


// Insert data in database
function create_post($table,$data_array,$file_array){
	global $mysqli;
	$userId=$_SESSION['user_id'];
	$post_content=$data_array['content'];
	$tmpImage=$file_array['file']['tmp_name'];
	$image=$file_array['file']['name'];


	if(!move_uploaded_file($tmpImage, '../assets/imgs/'.$image)){
		_t('not uploaded');
		die;
	}

	$query="INSERT INTO $table (user_id,post_content,post_upload) VALUES ('$userId','$post_content','$image')";
	$result=mysqli_query($mysqli,$query);
	$affectedRows=mysqli_affected_rows($mysqli);
	if($affectedRows>0){
		return true;
	}else{
		return false;
	}
}

function user_posts(){
	global $mysqli;
	$user_id=$_SESSION['user_id'];
	$query="SELECT * FROM posts WHERE user_id='$user_id'";
	$result=mysqli_query($mysqli,$query);
	$totalResult=mysqli_num_rows($result);
	if($totalResult>0){
		$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
	
}



?>