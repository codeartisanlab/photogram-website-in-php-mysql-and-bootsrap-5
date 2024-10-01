<?php include('common/header.php'); ?>
<?php
$posts=[];
$myId=$_SESSION['user_id'];
// $query="SELECT * FROM followers,posts WHERE posts.user_id=followers.following_id AND followers.follower_id='$myId'";


$query="SELECT * FROM followers WHERE follower_id='$myId'";
$result=mysqli_query($mysqli,$query);
$totalRows=mysqli_num_rows($result);
if($totalRows > 0){
    $followingLists=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($followingLists as $row){
        $followingId=$row['following_id'];
        $postQuery="SELECT * FROM posts WHERE user_id='$followingId'";
        $postResult=mysqli_query($mysqli,$postQuery);
        $postNumRows=mysqli_num_rows($postResult);
        if($postNumRows>0){
            $posts=mysqli_fetch_all($postResult,MYSQLI_ASSOC);
        }
    }
}
?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            <div class="row">
                <?php foreach($posts as $row){ ?> 
                    <div class="col-sm-6 col-12 mb-4">
                        <div class="card">
                            <img src="http://localhost/core-php/photogram_dynamic/assets/imgs/<?php echo $row['post_upload']; ?>" class="card-img-top" alt="my-content">
                            <div class="card-body">
                                <p class="card-text"><?php echo $row['post_content']; ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <i class="fa-solid fa-heart text-danger"></i> 8.5k
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-comment text-primary"></i> 18.5k
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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