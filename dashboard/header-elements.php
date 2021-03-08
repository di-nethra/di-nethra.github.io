<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-9">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Edit existing menu items</h5>
                </div>
                <div class="row">
                    <div class="col-4">
                        <form action="" method="POST">
                            <div class="single-item">
                                <div class="form-group">
                                    <label for="menuNameUpdate1">Menu Name</label>
                                    <input type="text" class="form-control" name="menuNameUpdate1" id="menuNameUpdate1">
                                    <small class="form-text text-muted">e.g portfolio, contact me etc</small>
                                </div>
                                <div class="form-group">
                                    <label for="menuIdUpdate1">Menu Id</label>
                                    <input type="text" class="form-control" name="menuIdUpdate1" id="menuIdUpdate1">
                                    <small class="form-text text-muted">e.g for #portfolio write portfolio</small>
                                </div>
                                <div class="action">
                                    <button type="submit" name="update" class="btn btn-success mr-2">update</button>
                                    <button type="submit" name="delete" class="btn btn-outline-danger">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Available Menu items</h5>
                </div>

                <ul class="list-item">
                    <li>home</li>
                    <li>about</li>
                    <li>services</li>
                    <li>portfolio</li>
                    <li>blog</li>
                    <li>contact</li>
                </ul>

            </div>
            <div class="content-box mt-30">
                <div class="section-heading">
                    <h5>Add menu item</h5>
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="menuName">Menu Name</label>
                        <input type="text" class="form-control" name="menuName" id="menuName">
                        <small class="form-text text-muted">e.g portfolio, contact me etc</small>
                    </div>
                    <div class="form-group">
                        <label for="menuId">Menu Id</label>
                        <input type="text" class="form-control" name="menuId" id="menuId">
                        <small class="form-text text-muted">e.g for #portfolio write portfolio</small>
                    </div>

                    <button type="submit" class="btn btn-info">Add item</button>
                </form>
            </div>
        </div>
    </div>

<?php include_once "inc/footer.php" ?>