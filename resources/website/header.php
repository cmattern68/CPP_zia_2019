<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./assets/cagette.png" />
    <title>ZIA - Les 6 Cagettes</title>
</head>
<body>
<div class="menu">
    <!-- Image and text -->
    <nav class="navbar navbar-light navbar-colored">
        <a class="navbar-brand" href="/">
            <img src="./assets/cagette.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Les 6 Cagettes
        </a>
    </nav>
</div>

<div class="container">
    <div class="card card-head">
        <div class="card-header">
            Query
        </div>
        <div class="card-body">
            <?php
            echo "{<br>";
            foreach ($_SERVER as $sKey => $sValue) {
                echo "\t['$sKey'] => \"$sValue\"<br>";
            }
            echo "}";
            ?>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html><?php
