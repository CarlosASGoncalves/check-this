<?php require(__DIR__. '/../partials/head.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="well well-sm text-center">

                <h1>Upload File with PHP & MySQL</h1>

            </div>

            <form action="../../../index.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">

                    <div class="input-group">

                        <label class="input-group-btn" for="upload">

                                <span class="btn btn-block btn-primary">

                                    Browse&hellip; <input type="file" id="upload" name="upload" style="display: none;">

                                </span>

                        </label>

                        <input type="text" class="form-control" readonly>

                    </div>

                </div>


                <div class="form-group">

                    <input type="text" class="form-control" id="desc" name="desc" maxlength="255" placeholder="File Description" required /> <!--todo: use htmlspecialchars-->

                </div>

                <div class="clearfix"></div><hr />

                <div class="form-group">

                    <input type="hidden" name="upload" value="upload"/>

                    <button type="submit" class="btn btn-block btn-primary">

                        <i class="glyphicon glyphicon-save-file"></i> UPLOAD

                    </button>

                    <span class="help-block text-center">The following files are stored in the database:</span>

                </div>

            </form>

            <br>

            <?php if (count($files) > 0): ?>

                <div class="panel panel-default">

                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Filename</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($files as $f): ?>
                                <tr>
                                    <td><?= $f->filename; ?></a></td>
                                    <td><?= $f->mimetype; ?></td>
                                    <td><?= $f->description; ?></td>
                                    <td>
                                        <form action="../../../index.php" method="POST">
                                            <div>
                                                <input type="hidden" name="delete" value="delete" />
                                                <input type="hidden" name="id" value="<?= $f->id; ?>"/>
                                                <button type="submit">Delete</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php require(__DIR__. '/../partials/footer.php');
