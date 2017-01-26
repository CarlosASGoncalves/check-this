<nav class="navbar navbar-default navbar-static-top">

    <div class="container">

        <div class="col-md-6 col-md-offset-3">

            <div class="navbar-header">

                <a class="navbar-brand" href="/">Check This!</a>

                <div class="container-fluid btn-group">

                    <ul class="nav navbar-nav">

                        <li><a href="/">Home</a></li>

                        <li><a href="about">About</a></li>

                        <li><a href="contact">Contact</a></li>

                    </ul>

                    <ul class="nav navbar-nav">

                        <li id="fat-menu" class="dropdown">

                            <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                Apps

                                <span class="caret"></span> </a>

                            <ul class="dropdown-menu" aria-labelledby="drop3">

                                <li><a href="users">Manage Names</a></li>

                                <li><a href="upload">Manage Files</a></li>

                                <?php if(!isset($_SESSION['user_session'])): ?>

                                    <li><a href="login">Sign-in</a></li>

                                <?php else: ?>

                                    <li><a href="logout">Sign-out</a></li>

                                <?php endif; ?>
                            </ul>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>


