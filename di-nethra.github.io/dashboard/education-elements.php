<?php include_once "inc/header.php" ?>
<?php include_once "inc/sidebar.php" ?>
    <div class="row">
        <div class="col-8">
            <div class="content-box">
                <div class="section-heading">
                    <h5>Edit qualifications</h5>
                </div>
                <div class="row">
                    <div class="col-4">
                        <form action="" method="POST">
                            <div class="single-item">
                                <div class="form-group">
                                    <label for="qualification1">Qualification title</label>
                                    <input type="text" class="form-control" name="qualification1" id="qualification1">
                                    <small class="form-text text-muted">e.g SSC (Secondary School Certificate)</small>
                                </div>
                                <div class="form-group">
                                    <label for="description1">Qualification description</label>
                                    <textarea class="form-control" name="description1" id="description1"></textarea>
                                    <small class="form-text text-muted">e.g some text about this qualification</small>
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
                    <h5>Add new qualification</h5>
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="quaTitle">Qualification title</label>
                        <input type="text" class="form-control" name="quaTitle" id="quaTitle">
                        <small class="form-text text-muted">For example: SSC (Secondary School Certificate)</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                        <small class="form-text text-muted">for example: some text about this qualification</small>
                    </div>

                    <div class="action">
                        <button type="submit" name="add" class="btn btn-info">Add qualification</button>
                    </div>
                </form>
            </div>

            <div class="content-box mt-30 mb-30">
                <div class="section-heading">
                    <h5>Available qualifications</h5>
                </div>

                <ul class="list-item box">
                    <li>
                        <p class="title"><strong>SSC (Secondary School Certificate)</strong></p>
                        <p>Saunt you prob ably haven't heard of them accus amus labore sus taiue quidem poss imus! Autem
                            eaque exer citati onem</p>
                    </li>
                    <li>
                        <p class="title"><strong>SSC (Secondary School Certificate)</strong></p>
                        <p>Saunt you prob ably haven't heard of them accus amus labore sus taiue quidem poss imus! Autem
                            eaque exer citati onem</p>
                    </li>
                    <li>
                        <p class="title"><strong>SSC (Secondary School Certificate)</strong></p>
                        <p>Saunt you prob ably haven't heard of them accus amus labore sus taiue quidem poss imus! Autem
                            eaque exer citati onem</p>
                    </li>
                </ul>

            </div>

        </div>
    </div>

<?php include_once "inc/footer.php" ?>