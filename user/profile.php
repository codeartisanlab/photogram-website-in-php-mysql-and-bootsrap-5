<?php
include('../db_functions.php');
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>
<?php include('common/header.php'); ?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <div class="col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="card-img-top" alt="my-content">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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