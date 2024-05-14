<?php
$routeRequested = $_GET["route"] ?? null;
$defaultCssPath = "assets/css/defaultStyle.css";
switch ($routeRequested) {
    case "login": 
        require_once __DIR__ . "/views/$routeRequested/index.php";
    break;
    case "register": 
        require_once __DIR__ . "/views/$routeRequested/index.php";
    break;
    default: 
        if (!false) {
            require_once __DIR__ . "/views/login/index.php";
        }
    break;
}