<!DOCTYPE html>
<html>
<head>
    <title>Daftar-PERPUSKOM</title>
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
                    <h2><font color="white">Silahkan SignUp</h2>
                </center>
            </p>
            <br>
                 
            <form class="form-horizontal" action="input.php" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
 
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
 
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><font color="black">Daftar</button>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-0 col-sm-12">
                    <div class="checkbox">
                     
                        <p>
                            Sudah punya akun? <a href="index2.php"><font color="white">Login</a>
                        </p>
                     
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="style/jquery.js"></script>
    <script type="text/javascript" src="style/bootstrap.js"></script>  
    <script type="text/javascript" src="script.js"></script>   
</body>
</html>