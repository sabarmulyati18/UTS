<?php
session_start();
include("dbconfig.php");
include("loginphp.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Masuk</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
<form id="formlogin" class="form-signin" method="post">
    <img src="https://img.icons8.com/doodle/96/000000/coronavirus.png"/>
    <h1 class="h3 mb-3 font-weight-normal">Silahkan masuk</h1>
    <h4 class="h5 mb-4 font-weight-normal" style="color: red"><?php echo @$pesan;?></h4>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Nama Pengguna" autofocus autocomplete="off"><br>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password"><br>
    <input name="BtnLogin" class="btn btn-lg btn-primary btn-block" type="submit" value="Masuk">
</form>
</body>
</html>
<script src="bootstrap/js/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#formlogin').validate({ // initialize the plugin
            rules: {
                username: {
                    required: true,
                },
                password: {
                    required: true,
                }
            },
            messages: {
                username: "Masukkan Nama Pengguna",
                password: {
                    required: "Masukkan Password",
                }
            }
        });

    });
</script>
