<?php require('partials/head.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="well well-sm text-center">

                <h1>Login with PHP & MySQL</h1>

            </div>

            <div class="form-container">

                <form method="post">

                    <?php

                    if(isset($error))

                    {
                        ?>

                        <div class="alert alert-danger">

                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !

                        </div>

                        <?php
                    }

                    ?>

                    <div class="form-group">

                        <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or Email" required />

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />

                    </div>

                    <div class="clearfix"></div><hr />


                    <div class="form-group">

                        <button type="submit" name="btn-login" class="btn btn-block btn-primary">

                            <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?php require('partials/footer.php');

