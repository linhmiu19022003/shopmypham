<?php
ini_set('track_errors', 'on');
ini_set('display_errors', 'on');

include "../library/phpmailer/src/PHPMailer.php";
include "../library/phpmailer/src/Exception.php";
include "../library/phpmailer/src/OAuth.php";
include "../library/phpmailer/src/POP3.php";
include "../library/phpmailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

session_start();

require_once('./model/database.php');

$db = new database();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'homepage';
}
switch ($controller) {
    case 'homepage':
        require_once('./controller/c_homepage.php');
        break;
        case 'login':
            require_once('./controller/C_login.php');
            break;

            case 'log_out':
                require_once('./controller/C_log_out.php');
                break;
                
            case 'dangky':
                require_once('./controller/C_dangky.php');
                break;
    case 'c_add_to_cart':
        require_once('./controller/c_add_to_cart.php');
        break;
    case 'cart':
        require_once('./controller/c_cart.php');
        break;
    case 'c_contactus':
        require_once('./controller/c_contactus.php');
        break;
    case 'c_handle_cart':
        require_once('./controller/c_handle_cart.php');
        break;
    case 'c_introduction':
        require_once('./controller/c_introduction.php');
        break;
    case 'c_news':
        require_once('./controller/c_news.php');
        break;
    case 'c_payment':
        require_once('./controller/c_payment.php');
        break;
    case 'c_productdetails':
        require_once('./controller/c_productdetails.php');
        break;
    case 'c_products':
        require_once('./controller/c_products.php');
        break;
    case 'c_products2':
        require_once('./controller/c_products2.php');
        break;
    case 'c_productfavorite':
        require_once('./controller/c_productfavorite.php');
        break;
    default:
        echo "Error page";
        break;
}