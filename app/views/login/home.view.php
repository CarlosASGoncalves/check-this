<?php require('partials/head.php'); ?>

<div class="container text-center">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="well well-sm">

                <h1>Sign Out with PHP & MySQL</h1>

            </div>

            <div class="content">

                welcome : <?= $user['user_name']; ?>

            </div>

            <label><a href="logout"><i class="glyphicon glyphicon-log-out"></i> SIGN OUT</a></label>

        </div>

    </div>

</div>

<?php require('partials/footer.php');
