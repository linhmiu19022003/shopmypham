<?php
//Bắt đầu session
session_start();
//require fle database.php vào
require('./model/database.php');
//Tạo dối tượng $db
$db = new database();
//kiểm tra xem trên đường link có controller= chưa
if (isset($_GET['controller'])) {
	//Nếu có thì lấy giá trị đó
	$controller = $_GET['controller'];
} else {
	//nếu không thì mặc định là login
	$controller = 'login';
}
//Kiểm tra biến $controller bằng gì để require file tương ứng
switch ($controller) {
	case 'login':
		require_once('./controller/C_login.php');
		break;
	case 'oder_detail':
		require_once('./controller/C_oder_detail.php');
		break;
	case 'trangchu':
		require_once('./controller/C_trangchu.php');
		break;
	case 'oder':
		require_once('./controller/C_oder.php');
		break;
	case 'products':
		require_once('./controller/C_products.php');
		break;
	case 'xuli_products':
		require_once('./controller/C_xuli_products.php');
		break;
	case 'log_out':
		require_once('./controller/C_log_out.php');
		break;
	case 'nhanvien':
		require_once('./controller/C_nhanvien.php');
		break;
	case 'add_nhanvien':
		require_once('./controller/C_add_nhanvien.php');
		break;
	case 'xuli_nhanvien':
		require_once('./controller/C_xuli_nhanvien.php');
		break;
	case 'xuli_oder_detail':
		require_once('./controller/C_xuli_oder_detail.php');
		break;
	case 'clients':
		require_once('./controller/C_clients.php');
		break;
	default:
		echo "lỗi trang";
		break;
}