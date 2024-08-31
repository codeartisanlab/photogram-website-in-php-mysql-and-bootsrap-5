<?php include('common/header.php'); ?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            <div class="card">
                <h4 class="card-header">Update Profile</h4>
                <div class="card-body">
                    <form>
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
                                <input type="file" class="form-control" id="photoVideos">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="content" class="col-sm-3 col-form-label">Bio</label>
                            <div class="col-sm-9">
                                <textarea rows="8" class="form-control" id="content"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="interestedIn" class="col-sm-3 col-form-label">Interested</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="interestedIn">
                                    <option value="animals">Animals</option>
                                    <option value="nature">Nature</option>
                                    <option value="sports">Sports</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('common/footer.php'); ?>