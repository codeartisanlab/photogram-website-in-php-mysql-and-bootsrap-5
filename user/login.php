<?php
include('../db_functions.php');
$res='';
if(isset($_POST['mobile'])){
    $res=user_login('users',$_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-10 offset-1">
                <div class="card shadow-lg">
                    <h4 class="card-header text-center">Login</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="col-7">
                            <?php
                                if($res===false){
                                    echo '<p class="alert alert-danger">Invalid mobile/password!!</p>';
                                }
                                if($res===true){
                                    header("location:profile.php");
                                }
                            ?>
                                <form method="post">
                                    <div class="row mb-3">
                                        <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input name="mobile" type="number" class="form-control" id="mobile">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="passcode" class="col-sm-2 col-form-label">Passcode</label>
                                        <div class="col-sm-10">
                                            <input name="password" type="password" class="form-control" id="passcode">
                                        </div>
                                    </div>
                                    <p class="text-end">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </p>
                                    <p class="text-end">
                                        <a href="./forgetpassword.php" class="text-danger">Forget Password?</a>
                                    </p>
                                    <p class="text-end">
                                    If not registered, <a href="register.php">Register here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>