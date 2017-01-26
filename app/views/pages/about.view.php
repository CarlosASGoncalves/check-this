<?php require(__DIR__. '/../partials/head.php'); ?>

<div class="container">

    <div class="row">

<!--        <div class="col-md-6 col-md-offset-3">-->

            <h1 class="page-header text-center">About <?= $label; ?></h1>

            <h4>
                <p class="text-left">
                    General
                </p>
            </h4>
            <blockquote>
                <p>Check This! was built with PHP, MySQL and Boopstrap; following the PSR1-4 code standards.</p>

                <p>The Frontend is based on Bootstrap, the html css javascript framwork.</p>

                <p>On the Backend we have a costum php framwork based on the MVC model.</p>

                <p>Puphpet helped create the proper dev enviorment to create this project.</p>

                <p>The Applications are simple and are base on code examples that where found in the internet and books.</p>

                <p>Bplaced was the therd party hosting solution choosed to publicate the project.</p>

                <p>Localy the project was developed with php7.0 but some adaptations on the code had to be made because bplaced suppoerts php5.5.</p>

                <p>Check the project built with php7.0 on my GitHub Account.</p>
            </blockquote>

            <p class="text-justify">
                Home Page

                    Have a header to start the presentation

                    The bootstrap .row and grid system helps order the thumbnails for the tree apps
            </p>

            <p class="text-justify">
                About Page

                    Simple page with project description in detail
            </p>

            <p class="text-justify">
                Contact<br>

                Contact form that accepts name email text and result of 2+3  as anti-spam mecanism to garantie that the form is used by a human and not a robot.

                Use of php email() to send Demo Contact Form to the admin.
            </p>

            <p class="text-justify">
                Manage Names

                    This app will save names and display the saved name in the data base in the names table
            </p>

            <p class="text-justify">
                Manage Files
            </p>

<!--        </div>-->

    </div>

</div>

<?php require(__DIR__. '/../partials/footer.php'); ?>