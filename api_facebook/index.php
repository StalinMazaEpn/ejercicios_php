<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title>LOGIN</title>

    </head>
    <body>
        <h1 style="text-align: center">ACCESO AL SISTEMA WEB </h1>
        <div class="container">
            <div class="row" >
                <div class="col-sm" >
                </div>
                <div class="col-sm" >
                    
<?php
session_start();

// INVOCAR A LA LIBRERIA DE FACEBOOK
require_once "fbsdk4-5.1.2/src/Facebook/autoload.php";

// INVOCAR AL ARCHIVO EN DONDE ESTA LAS CREDENCIALES 
require_once "credentials.php";


  $fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.2'
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email'];

$loginUrl = $helper->getLoginUrl($login_url, $permissions);

echo '<a href="'.htmlspecialchars($loginUrl).'" class="btn btn-info" role="button">INGRESAR CON FACEBOOK</a>';

?>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
		
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>




