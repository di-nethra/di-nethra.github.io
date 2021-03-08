<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-4">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Available background image</h5>
                </div>

                <div class="img-bg">
                    <img src="http://lorempixel.com/800/500" alt="">
                </div>
                
                <div class="separator"></div>
                <div class="section-heading">
                    <h5>Upload Background Image</h5>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="heroBg">
                            <label class="custom-file-label" for="heroBg">Choose file</label>
                        </div>
                    </div>
                    <small class="form-text text-muted">Only .jpg , .jpeg , .png file support for uploading</small>
                    <div class="action mt-3">
                        <button type="submit" name="upload" class="btn btn-info">upload</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-4">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Text contents</h5>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="welcomeText">Welcome text</label>
                        <input type="text" class="form-control" name="welcomeText" id="welcomeText">
                        <small class="form-text text-muted">for example "Hi"</small>
                    </div>
                    <div class="form-group">
                        <label for="nameText">Introduce Text</label>
                        <input type="text" class="form-control" name="nameText" id="nameText">
                        <small class="form-text text-muted">For example "I am Hridoy roy"</small>
                    </div>
                    <div class="form-group">
                        <label for="buttonText">Button Text</label>
                        <input type="text" class="form-control" name="buttonText" id="buttonText">
                        <small class="form-text text-muted">For example "see my works"</small>
                    </div>
                    <div class="form-group">
                        <label for="buttonId">Button Id</label>
                        <input type="text" class="form-control" name="buttonId" id="buttonId">
                        <small class="form-text text-muted">For example "#portfolio"</small>
                    </div>
                    <div class="action">
                        <button type="submit" name="update" class="btn btn-info">update</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-4">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Available Type texts</h5>
                </div>
                <ul class="list-item">
                    <li>web designer</li>
                    <li>web developer</li>
                </ul>
                <div class="separator"></div>
                <div class="section-heading">
                    <h5>Type text update </h5>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="typeText">Edit typed text</label>
                        <input type="text" class="form-control" name="typeText" id="typeText">
                        <small class="form-text text-muted">Separate item with comma e.g web designer, web development</small>
                    </div>
                    <div class="action mt-3">
                        <button type="submit" name="upload" class="btn btn-info">upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once "inc/footer.php" ?>