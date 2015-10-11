<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT | E_WARNING);
define('BASE_PATH', __DIR__.'/../');
define('CONFIG_PATH', realpath(BASE_PATH.'core'.DIRECTORY_SEPARATOR.'config'));
?>

<!DOCTYPE html>

<html ng-app = "chat">
    <head>
        <title>Chat</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel
              = "stylesheet" integrity = "sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin
              = "anonymous">
    </head>
    <body>

        <div class="container" ng-controller="MessageController as ctrl">
            <div class="row span-12 " style="border:solid 1px #999; min-height: 300px; max-height: 300px; overflow-y:scroll" >
                <ul class="list-unstyled">
                    <li ng-repeat="message in ctrl.messages">{{message.user}} : {{message.message}}</li>
                </ul>
            </div>
            <hr>
            <input type="text" placeholder="digite seu nome" ng-model="ctrl.myUser">
            <hr>
            <div class="row span-12 " style="min-height: 100px">
                <textarea style="width:100%; min-height: 100px; resize: none; padding: 0; margin: 0;" placeholder="Digite sua mensagem" ng-model="ctrl.myMessage">

                </textarea>
            </div>
            <hr>
            <div class="row pull-right">
                <button class="btn btn-default btn-lg btn-success" ng-click="ctrl.sendMessage()">
                    Enviar
                </button>
            </div>
        </div>

        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.4.min.js" ></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script type="text/javascript" src="app/init.js"></script>
        <script type="text/javascript" src="app/Controller/MessageController.js"></script>

    </body>
</html>
