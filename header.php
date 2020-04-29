<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Data Covid-19 di Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html {
            font-size: 14px;
        }
        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }
        .border-bottom { border-bottom: 1px solid #e5e5e5; }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Data Covid-19 di Indonesia</h5>
    <?php
    session_start();
    if($_SESSION['sesi_id'] == null) {
        ?>
    <a class="btn btn-outline-primary" href="login.php"><i class="fa fa-sign-in"></i> Masuk</a>
    <?php
    }
    else{
        ?>
        <br>
    <a class="btn btn-outline-danger" onClick="javascript:return confirm('Yakin ingin keluar?');" href="logout.php"><i class="fa fa-sign-out"></i> Keluar</a>
    <?php
    }
    ?>

</div>

