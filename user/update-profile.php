<?php include('common/header.php'); ?>
<?php

$currentUserId=$_SESSION['user_id'];

// Update user data
if(isset($_POST['submit'])){
    $bio=$_POST['bio'];
    $image=$_FILES['file']['name'];
    $tmp=$_FILES['file']['tmp_name'];
    if($image!=''){
        move_uploaded_file($tmp,$image);
    }else{
        $image=$_POST['oldimg'];
    }
    $interest=$_POST['interest'];

    $query="UPDATE users SET image='$image',bio='$bio',interested_in='$interest' WHERE user_id='$currentUserId'";
    $result=mysqli_query($mysqli,$query);
	$affectedRows=mysqli_affected_rows($mysqli);

}

// Fetch current user data
$query="SELECT * FROM users WHERE user_id='$currentUserId'";
$result=mysqli_query($mysqli,$query);
$totalRows=mysqli_num_rows($result);
$userExit=false;
if($totalRows > 0){
    $userExit=true;
    $userData=mysqli_fetch_assoc($result);
}
?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            <div class="card">
                <h4 class="card-header">Update Profile</h4>
                <div class="card-body">
                    <?php
                    if(isset($affectedRows)){
                        if($affectedRows>0){
                            $_SESSION['bio']=$userData['bio'];
                            echo '<p class="alert alert-success">Profile updated</p>';
                        }else{
                            echo '<p class="alert alert-danger">Profile not updated</p>';
                        }
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <label for="photoVideos" class="col-sm-3 col-form-label">Suraj Kumar</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <label for="photoVideos" class="col-sm-3 col-form-label">+9178146523699</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Change Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" class="form-control" id="photoVideos">
                                <?php
                                    if($userExit==true){
                                        echo '<input type="hidden" name="oldimg" value="'.$userData['image'].'" />';
                                        echo '<img src="'.$userData['image'].'" width="150" class="border mt-2" />';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="content" class="col-sm-3 col-form-label">Bio</label>
                            <div class="col-sm-9">
                                <textarea rows="8" name="bio" class="form-control" id="content"><?php
                                        if($userExit==true){
                                            echo $userData['bio'];
                                        }?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="interestedIn" class="col-sm-3 col-form-label">Interested</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="interestedIn" name="interest">
                                    <option value="animals" 
                                        <?php 
                                            if($userExit==true and $userData['interested_in'] == 'animals'){ 
                                            echo 'selected'; } 
                                        ?>
                                    >Animals</option>
                                    <option value="nature" <?php  if($userExit==true and $userData['interested_in'] == 'nature'){ echo 'selected'; } ?>>Nature</option>
                                    <option value="sports" <?php if($userExit==true and $userData['interested_in'] == 'sports'){ echo 'selected'; } ?>>Sports</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <input type="submit" name="submit" class="btn btn-dark" value="Save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('common/footer.php'); ?>