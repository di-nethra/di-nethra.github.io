<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-8">
            <div class="content-box">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="single-item">
                                <div class="img-bg">
                                    <img src="http://lorempixel.com/800/500" alt="">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="portfolioTitle1">Portfolio title</label>
                                    <input type="text" class="form-control" name="portfolioTitle1" id="portfolioTitle1">
                                    <small class="form-text text-muted">e.g. "Nirob - eCommerce Template"</small>
                                </div>

                                <div class="form-group">
                                    <label for="titleLink1">Title link</label>
                                    <input type="text" class="form-control" name="titleLink1" id="titleLink1">
                                    <small class="form-text text-muted">e.g. http://www.item-location.com</small>
                                </div>

                                <label for="selectCategories1"> Select categories</label>
                                <select class="custom-select" id="selectCategories1" multiple>
                                    <option value="1">github</option>
                                    <option value="2">themeforest</option>
                                    <option value="3">other</option>
                                </select>

                                <div class="action mt-4">
                                    <button type="submit" name="update" class="btn btn-success mr-2">Update</button>
                                    <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-4">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Available Categories</h5>
                </div>
                <ul class="list-item">
                    <li> themeforest</li>
                    <li>github</li>
                </ul>
                <div class="separator"></div>
                <div class="section-heading">
                    <h5>Add new category </h5>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="CategoryName">Name of the Category</label>
                        <input type="text" class="form-control" name="CategoryName" id="CategoryName">
                        <small class="form-text text-muted">e.g development</small>
                    </div>
                    <div class="action mt-3">
                        <button type="submit" name="add" class="btn btn-info">Add category</button>
                    </div>
                </form>
            </div>

            <div class="content-box mt-30 mb-30">
                <div class="section-heading">
                    <h5>Add new portfolio item</h5>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="portfolioTitle">Portfolio title</label>
                        <input type="text" class="form-control" name="portfolioTitle" id="portfolioTitle">
                        <small class="form-text text-muted">e.g. "Nirob - eCommerce Template"</small>
                    </div>

                    <div class="form-group">
                        <label for="titleLink">Title link</label>
                        <input type="text" class="form-control" name="titleLink" id="titleLink">
                        <small class="form-text text-muted">e.g. http://www.item-location.com</small>
                    </div>

                    <label for="selectCategories"> Select categories</label>
                    <select class="custom-select" id="selectCategories" multiple>
                        <option value="1">github</option>
                        <option value="2">themeforest</option>
                        <option value="3">other</option>
                    </select>

                    <div class="input-group mb-2 mt-4">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="heroBg">
                            <label class="custom-file-label" for="heroBg">Choose file</label>
                        </div>
                    </div>
                    <small class="form-text text-muted mb-4">Only .jpg , .jpeg , .png file support for uploading</small>

                    <div class="action">
                        <button type="submit" name="add" class="btn btn-info">Add Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once "inc/footer.php" ?>