<?php require(__DIR__. '/../../partials/head.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="well well-sm text-center">

                <h1>Sign In with PHP & MySQL</h1>

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

                        <input type="text" class="form-control" name="txt_uname_email" placeholder="User: test" required /> <!--todo: use htmlspecialchars-->

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" name="txt_password" placeholder="Password: 123" required /> <!--todo: use htmlspecialchars-->

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

<?php require(__DIR__. '/../../partials/footer.php');

