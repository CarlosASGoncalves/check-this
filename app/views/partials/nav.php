<nav class="navbar navbar-default navbar-static-top">

    <div class="container">

        <div class="col-md-6 col-md-offset-3">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="#">Check this!</a>

                <div class="container-fluid btn-group">

                    <ul class="nav navbar-nav">

                        <li><a href="/">Home</a></li>

                        <li><a href="/about">About</a></li>

                        <li><a href="/contact">Contact</a></li>

                    </ul>

                    <ul class="nav navbar-nav">

                        <li id="fat-menu" class="dropdown">

                            <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                Apps

                                <span class="caret"></span> </a>

                            <ul class="dropdown-menu" aria-labelledby="drop3">

                                <li><a href="/users">Manage Users</a></li>

                                <li><a href="/upload">Manage Files</a></li>

                                <?php if(isset($_SESSION['user_session'])): ?>

                                    <li><a href="/logout">Logout</a></li>

                                <?php else: ?>

                                    <li><a href="/login">Login</a></li>

                                <?php endif; ?>
                            </ul>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>