<?php
include('php/redirectLogin.php'); // Inclui o arquivo com o sistema de segurança
verificaLogin();
echo'
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/ninjachat.css">
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="imagens/icons/ninjaIcon.png" >
    <title>Ninja Chat</title>
 </head>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                    <li><a href=""><span class="glyphicon glyphicon-align-justify"></span></a></li>
                    <li class="active"><a href=""><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-search"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-comment"></span></a></li>
                    </ul>
                </div>                    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="content">
            </div>
        </div>
    </div>
  </div>
</body>
</html>';
    