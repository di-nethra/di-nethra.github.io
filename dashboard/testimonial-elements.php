<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-8">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Edit Testimonials</h5>
                </div>
                <div class="row">
                    <div class="col-4">
                        <form action="" method="POST">
                            <div class="single-item">
                                <div class="form-group">
                                    <label for="testimonialDec1">Testimonial Description</label>
                                    <textarea class="form-control" name="testimonialDec1" id="testimonialDec1"></textarea>
                                    <small class="form-text text-muted">e.g goes some text about the service</small>
                                </div>
                                <div class="form-group">
                                    <label for="reviewerName1">Name of reviewer</label>
                                    <input type="text" class="form-control" name="reviewerName1" id="reviewerName1">
                                    <small class="form-text text-muted">e.g Jhon Doe</small>
                                </div>
                                <div class="form-group">
                                    <label for="reviewerPos1">Reviewer position</label>
                                    <input type="text" class="form-control" name="reviewerPos1" id="reviewerPos1">
                                    <small class="form-text text-muted">e.g CEO, Tomuk company </small>
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
                    <h5>Add new testimonial</h5>
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="testimonialDec">Testimonial Description</label>
                        <textarea class="form-control" name="testimonialDec" id="testimonialDec"></textarea>
                        <small class="form-text text-muted">e.g goes some text about the service</small>
                    </div>
                    <div class="form-group">
                        <label for="reviewerName">Name of reviewer</label>
                        <input type="text" class="form-control" name="reviewerName" id="reviewerName">
                        <small class="form-text text-muted">e.g Jhon Doe</small>
                    </div>
                    <div class="form-group">
                        <label for="reviewerPos">Reviewer position</label>
                        <input type="text" class="form-control" name="reviewerPos" id="reviewerPos">
                        <small class="form-text text-muted">e.g CEO, Tomuk company </small>
                    </div>

                    <div class="action">
                        <button type="submit" name="add" class="btn btn-info">Add service</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php include_once "inc/footer.php" ?>