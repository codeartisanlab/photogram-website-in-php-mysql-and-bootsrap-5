        <?php include('common/header.php'); ?>
        <?php
        $data=user_posts();
        ?>
        <section class="container my-4">
            <div class="row">
                <?php include('common/sidebar.php'); ?>
                <div class="col-md-9">
                    <h3 class="mb-3">My Creations</h3>
                    <div class="row">
                        <?php
                            if($data!==false){
                                foreach($data as $row){
                                    ?>
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