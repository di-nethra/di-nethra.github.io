<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-8">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Edit skills</h5>
                </div>
                <div class="row">
                    <div class="col-4">
                        <form action="" method="POST">
                            <div class="single-item">
                                <div class="form-group">
                                    <label for="qualification1">Name of Skill</label>
                                    <input type="text" class="form-control" name="qualification1" id="qualification1">
                                    <small class="form-text text-muted">e.g PHP</small>
                                </div>
                                <div class="form-group">
                                    <label for="description1">Skill percentage</label>
                                    <input type="text" class="form-control" name="description1" id="description1">
                                    <small class="form-text text-muted">e.g 70%</small>
                                </div>
                                <div class="action">
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
                    <h5>Add new skill</h5>
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="quaTitle">Name of Skill</label>
                        <input type="text" class="form-control" name="quaTitle" id="quaTitle">
                        <small class="form-text text-muted">e.g PHP</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Skill percentage</label>
                        <input type="text" class="form-control" name="description" id="description">
                        <small class="form-text text-muted">e.g 70%</small>
                    </div>

                    <div class="action">
                        <button type="submit" name="add" class="btn btn-info">Add skill</button>
                    </div>
                </form>
            </div>

            <div class="content-box mt-30 mb-30">
                <div class="section-heading">
                    <h5>Available qualifications</h5>
                </div>

                <ul class="list-item">
                    <li>HTML <span class="float-right">90%</span></li>
                    <li>CSS <span class="float-right">85%</span></li>
                </ul>

            </div>

        </div>
    </div>

<?php include_once "inc/footer.php" ?>