<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $_SESSION['sup'] = "Hello";
}

require_once 'Assets/GlobalFunctions.php';
require_once 'Assets/DataMaster.php';

require_once 'Router/Router.php';
require_once 'config.php';

require_once 'Model/LoginModel.php';
require_once 'Model/StockModel.php';

include_once 'View/Header.php';
$router = new Router();
include_once 'View/Footer.php';
// include_once 'View/Footer.php';

?>
