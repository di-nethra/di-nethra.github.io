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
                                    <label for="serviceName1">Name of service</label>
                                    <input type="text" class="form-control" name="serviceName1" id="serviceName1">
                                    <small class="form-text text-muted">e.g Responsive design</small>
                                </div>
                                <div class="form-group">
                                    <label for="serviceDec1">Service Description</label>
                                    <textarea class="form-control" name="serviceDec1" id="serviceDec1"></textarea>
                                    <small class="form-text text-muted">e.g goes some text about the service</small>
                                </div>
                                <div class="form-group">
                                    <label for="icon1">Choose icon</label>
                                    <input type="text" class="form-control" name="icon1" id="icon1">
                                    <small class="form-text text-muted">e.g give class name of icon from given icon documentation</small>
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
                    <h5>Add new service</h5>
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="serviceName">Name of service</label>
                        <input type="text" class="form-control" name="serviceName" id="serviceName">
                        <small class="form-text text-muted">e.g Responsive design</small>
                    </div>
                    <div class="form-group">
                        <label for="serviceDec">Service Description</label>
                        <textarea class="form-control" name="serviceDec" id="serviceDec"></textarea>
                        <small class="form-text text-muted">e.g goes some text about the service</small>
                    </div>
                    <div class="form-group">
                        <label for="icon">Choose icon</label>
                        <input type="text" class="form-control" name="icon" id="icon">
                        <small class="form-text text-muted">e.g give class name of icon from given icon documentation</small>
                    </div>

                    <div class="action">
                        <button type="submit" name="add" class="btn btn-info">Add service</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php include_once "inc/footer.php" ?>