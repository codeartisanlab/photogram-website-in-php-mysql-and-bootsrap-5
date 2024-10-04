<?php include('common/header.php'); ?>
<?php
// Fetch Followers data
$followers=[];
$myId=$_SESSION['user_id'];
$query="SELECT * FROM users,followers WHERE followers.following_id='$myId' AND users.user_id=followers.follower_id";
$result=mysqli_query($mysqli,$query);
$numRows=mysqli_num_rows($result);
if($numRows > 0){
    $followers=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            <h3 class="mb-4">Followers</h3>
            <div class="row">
                <div class="col-md-6 col-12 mb-3">
                    <?php
                    foreach($followers as $follower){
                        ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="http://localhost/core-php/photogram_dynamic/assets/imgs/<?php echo $follower['image']; ?>" class="img-fluid rounded-start" alt="my-photo">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="m-0"><?php echo $follower['full_name']; ?></h5>
                                        <p class="m-0"><?php echo $follower['bio']; ?></p>
                                        <p class="m-0 mt-2"><small class="text-body-secondary">Last Update: <?php echo $follower['add_time']; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>
            <!-- Load More -->
            <div class="row text-center mt-3">
                <div class="col-12">
                    <button class="btn btn-dark"><i class="fa-solid fa-arrows-rotate"></i> Load More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('common/footer.php'); ?>