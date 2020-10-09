 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Simon's Webpage</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles/style.css">
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="col-12 text-center">
                    <h1>Simon Janssen's Webpage</h1>
                </div>
            </div>
        </div>

        <!-- Entries -->
        <?php
            // gets list of all entries in entrie/
            $entries = scandir('./entries/');
            foreach ($entries as $entry) { 

                // filter out entries with specific file extensions and ./ ../
                if (strpos($entry, '.') === false) { 

                    // create array of contents of entries
                    $contents = explode("\n\n",file_get_contents('./entries/'.$entry)); ?>
                    <div class="card">
                        <h2><?php echo $contents[0]; ?></h2>
                        <h5><?php echo $contents[1]; ?>, <?php echo $entry; ?></h5>

                        <?php // include image if one exists for entry
                        if (file_exists('./entries/'.$entry.'.jpg')) { ?>
                            <img src="<?php echo './entries/'.$entry.'.jpg'; ?>" alt="image">
                        <?php } ?>
                        <p><?php echo $contents[2]; ?></p>
                    </div>
                <?php }
            }
        ?>
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row text-light text-center py-4 justify-content-center">
                    <div class="col-ms-10 col-md-8 col-lg-6">
                        <ul class="social pt-3">
                            <li><a href="https://www.github.com/JanssenSimon" target="_blank"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://www.instagram.com/3stebane" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/simon-janssen-7225b91b6" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    </body>
</html> 
