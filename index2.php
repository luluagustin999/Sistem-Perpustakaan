<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Masuk-PERPUSKOM</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <style>
    body{
    height: 100vh;
    background-image:url(gambar.jpeg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; }

    .container{
    position: absolute;
    left: 50%;
    top: 40%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 350px;
    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3); }

    .container h1{
    text-align: left;
    color: #F5F5F5;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;}

    .container label{
    text-align: left;
    color: #FFFFFF; }

    .container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 1px solid #FFFFFF;
    color: 	white;
    font-size: 15px; }

    .container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#FFFFFF;
    font-size: 16px;
    color: #fafafa; }
    </style>
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>
                <center>
                    <h2><font color="white">Silahkan Login</h2>
                </center>
            </p>
            <br>
                 <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus> <br><br>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value=""> <br><br>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right"><font color="black"><a href="index.html">Submit</button> <br> <br>
                                <div class="checkbox">
                                    <label>
                                        Belum punya akun? <a href="daftar.php"><font color="black">Daftar</a>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <?php
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                echo '<div id="pesan" class="alert alert-danger">'.$_SESSION['pesan'].'</div>';
            }
            $_SESSION['pesan'] = '';
            ?>
    </div>
    <br>
</div>
    <script type="text/javascript" src="style/jquery.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
</body>
</html>