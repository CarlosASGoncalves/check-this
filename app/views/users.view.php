<?php require('partials/head.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="well well-sm text-center">

                <h1>Save Names with PHP & MySQL</h1>

            </div>

            <ul class="list-group text-center">

                <h2 class="list-group-item active"> Names </h2>

                <?php foreach ($users as $user) : ?>

                    <li class="list-group-item"><?= $user->name; ?></li>

                <?php endforeach; ?>

            </ul>

            <div class="form-container">

                <form method="post" action="/users">

                    <div class="form-group">

                        <input type="text" class="form-control" name="name" placeholder="Save Your Name" required /> <!--todo: use htmlspecialchars-->

                    </div>

                    <div class="clearfix"></div><hr />

                    <div class="form-group">

                        <button type="submit" class="btn btn-block btn-primary">&nbsp;

                            <i class="glyphicon glyphicon-saved"></i> SAVE

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<?php require('partials/footer.php');