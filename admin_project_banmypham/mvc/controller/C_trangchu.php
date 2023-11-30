<?php
//Kiểm tra xem người dùng đã đăng nhập chưua
if (isset($_SESSION['ss_account'])) {
	//Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
} else {
	//Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
require_once('./view/V_trangchu.php');