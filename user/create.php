<?php include('common/header.php'); ?>
<?php
if(isset($_POST['content'])){
    $table="posts";
    $res=create_post($table,$_POST,$_FILES);
}
?>
<section class="container my-4">
    <div class="row">
        <?php include('common/sidebar.php'); ?>
        <div class="col-md-9">
            
            <div class="card">
                <h4 class="card-header">Create Content</h4>
                <div class="card-body">
                <?php
                    if(isset($res) && $res==true){
                        echo '<p class="alert alert-success">Data has been added</p>';
                    }

                    if(isset($res) && $res==false){
                        echo '<p class="alert alert-danger">Oops... Something went wrong</p>';
                    }
                ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Upload Photos/Videos</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" class="form-control" id="photoVideos">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="content" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" rows="8" class="form-control" id="content"></textarea>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('common/footer.php'); ?>