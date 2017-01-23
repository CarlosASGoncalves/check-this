<?php require('partials/head.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1 class="page-header text-center">Contact Form</h1>

            <form class="form-horizontal" role="form" method="post" action="contact">

                <div class="form-group">

                    <label for="name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">

                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?= htmlspecialchars($contact_name); ?>" required>

                    </div>

                </div>

                <div class="form-group">

                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">

                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?= htmlspecialchars($email); ?>" required>

                    </div>

                </div>

                <div class="form-group">

                    <label for="message" class="col-sm-2 control-label">Message</label>

                    <div class="col-sm-10">

                        <textarea class="form-control" rows="4" name="message" required><?= htmlspecialchars($message);?></textarea>

                    </div>

                </div>

                <div class="form-group">

                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>

                    <div class="col-sm-10">

                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" required>

                        <p class='text-danger'><?= $errHuman ?></p>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-sm-10 col-sm-offset-2">

                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-sm-10 col-sm-offset-2">

                        <?= $result; ?>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<?php require('partials/footer.php');
