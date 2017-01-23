<footer class="footer">

    <div class="container text-center">

        <p class="text-muted">Place sticky footer content here.</p>

    </div>

</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $('.dropdown-toggle').dropdown()
</script>

<!--Costum -->
<script>

    $(function() {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {

            var input = $(this),

                numFiles = input.get(0).files ? input.get(0).files.length : 1,

                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

            input.trigger('fileselect', [numFiles, label]);

        });


        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {

            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),

                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {

                    input.val(log);

                } else {

                    if( log ) alert(log);

                }

            });
        });

    });

</script>


</body>
</html>
