<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-10 offset-1">
                <div class="card shadow-lg">
                    <h4 class="card-header text-center">Register</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="http://localhost/core-php/photogram/assets/imgs/register_left_image.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="col-7">
                                <form>
                                    <div class="row mb-3">
                                        <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="full_name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="mobile">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="passcode" class="col-sm-2 col-form-label">Passcode</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="passcode">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="image">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="interestedIn" class="col-sm-2 col-form-label">Interested</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="interestedIn">
                                                <option value="animals">Animals</option>
                                                <option value="nature">Nature</option>
                                                <option value="sports">Sports</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p class="text-end">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </p>
                                    <p class="text-end">
                                    Already registered, <a href="login.php">Login here</a>
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