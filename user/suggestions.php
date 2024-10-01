        <?php include('common/header.php'); ?>

        <?php
            $myId=$_SESSION['user_id'];
            $affectedRows=0;
            if(isset($_POST['user_id'])){
                $userId=$_POST['user_id'];
                $action=$_POST['action'];
                if($action=='follow'){
                    $query="INSERT INTO followers (follower_id,following_id) VALUES ('$myId','$userId')";
                    $result=mysqli_query($mysqli,$query);
                    $affectedRows=mysqli_affected_rows($mysqli);
                }else{
                    $query="DELETE FROM followers WHERE follower_id='$myId' AND following_id='$userId'";
                    $result=mysqli_query($mysqli,$query);
                    $affectedRows=mysqli_affected_rows($mysqli);
                }
                
            }

            $myInterest=$_SESSION['my_interest'];
            $myUserId=$_SESSION['user_id'];
            $query="SELECT * FROM users WHERE interested_in='$myInterest' AND user_id!='$myUserId'";
            $result=mysqli_query($mysqli,$query);
            $totalRows=mysqli_num_rows($result);
            if($totalRows > 0){
                $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
            }else{
                $users='';
            }
        ?>

        <section class="container my-4">
            <div class="row">
                <?php include('common/sidebar.php'); ?>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                            if($users!=''){
                                foreach($users as $user){
                                    $exist=false;
                                    $userId=$user['user_id'];
                                    $query="SELECT * FROM followers WHERE follower_id='$myId' AND following_id='$userId'";
                                    $result=mysqli_query($mysqli,$query);
                                    $numRows=mysqli_num_rows($result);
                                    if($numRows>0){
                                        $exist=true;
                                    }
                                    ?>
                                    <div class="col-sm-4 col-12 mb-4">
                                        <div class="card">
                                            <img src="../assets/imgs/<?php echo $user['image']; ?>" class="card-img-top" alt="my-content">
                                            <div class="card-body">
                                            <h5 class="card-text"><?php echo $user['full_name']; ?></h5>
                                                <p class="card-text mb-0"><?php echo $user['bio']; ?></p>
                                                <span class="badge bg-info text-dark mt-1"><?php echo $user['interested_in']; ?></span>
                                            </div>
                                            <div class="card-footer">
                                                <?php
                                                if($exist==false){
                                                ?>
                                                <form method="post" action="">
                                                    <input type="hidden" value="<?php echo $user['user_id']; ?>" name="user_id" />
                                                    <input type="hidden" name="action" value="follow" />
                                                    <button type="submit" class="btn btn-dark bg-gradient btn-sm"><i class="fa fa-plus"></i> Follow Me</button>
                                                </form>
                                                <?php }else{ ?>
                                                    <form method="post" action="">
                                                        <input type="hidden" value="<?php echo $user['user_id']; ?>" name="user_id" />
                                                        <input type="hidden" name="action" value="unfollow" />
                                                        <button type="submit" class="btn btn-success bg-gradient btn-sm"><i class="fa fa-check-circle"></i> Unfollow</button>
                                                    </form>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                        
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