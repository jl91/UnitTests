<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT | E_WARNING);
define('BASE_PATH', __DIR__.'/../');
define('CONFIG_PATH', realpath(BASE_PATH.'core'.DIRECTORY_SEPARATOR.'config'));

use core\Connection\Connection;

var_dump((new Connection())->getConnection());

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
        <input ng-model = "text">
        <div ng-bind = "text">

        </div>
        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.4.min.js" ></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.29/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script type="text/javascript" src="app/init.js"></script>

    </body>
</html>
