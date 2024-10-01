<div class="col-md-3 mb-3">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="http://localhost/core-php/photogram_dynamic/assets/imgs/<?php echo $_SESSION['image']; ?>" class="img-fluid rounded-start" alt="my photo">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h6 class="m-0 mb-2"><?php echo $_SESSION['full_name']; ?> <i class="fa-solid fa-circle-check text-success"></i></h6>
                            <small><?php echo $_SESSION['bio']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="m-0 my-3 bg-secondary bg-gradient p-2 py-2 text-white rounded">My Interest: <span class="badge bg-warning text-dark float-end"><?php echo ucfirst($_SESSION['my_interest']); ?></span></h5>

                    <div class="list-group">
                        <a href="./my_creations.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Profile
                        </a>
                        <a href="./suggestions.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Suggestion
                        </a>
                        <a href="./timeline.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Timeline
                        </a>
                        <a href="./update-profile.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Update Profile
                        </a>
                        <a href="./followers.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Followers
                            <span class="badge text-bg-primary rounded-pill">2.5M</span>
                        </a>
                        <a href="./followings.php" class="list-group-item d-flex justify-content-between align-items-center">
                            Followings
                            <span class="badge text-bg-primary rounded-pill">2.5K</span>
                        </a>
                        
                        <a href="logout.php" class="list-group-item d-flex justify-content-between align-items-center text-danger">
                            Logout
                        </a>
                    </div>
                </div>