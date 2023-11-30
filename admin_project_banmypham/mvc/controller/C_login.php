<?php
//Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_account'])) {
	//Nếu người dùng đã đăng nhập thì cho người dùng sang trang chủ
	header('location: ?controller=trangchu');
}
//Kiểm tra xem người dùng đã ấn nút đăng nhập chưa 
if (isset($_POST['btn_login'])) {
	//Lấy dữ liệu từ ô username và password
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Kiểm tra tài khoản và mật khẩu đăng nhập
	//Bước 1: Tạo 1 biến lỗi cho nó là mảng
	$error = array();
	//Bước 2: Kiểm tra xem tài khoản có trống không
	if ($username == '') {
		$error['username'] = "Tài khoản không được để trống";
	}
	//Bước 3: Kiểm tra xem mật khẩu có rỗng không 
	if ($password == '') {
		$error['password'] = "Mật khẩu không được để trống";
	}
	//Bước 4: Nếu không có lỗi để trống thì kiểm tra tên đăng nhập tồn tại chưa
	if (!$error) {
		$user = $db->get('account', array('username' => $username));
		if (empty($user)) {
			$error['username'] = "Tài khoản này không tồn tại";
		} else {
			//Bước 5: Tài khoản đúng thì kiểm tra mật khẩu xem có đúng không
			if ($password != $user[0]['password']) {
				$error['password'] = "Mật khẩu bạn nhập sai";
			}
		}
	}
	//Sau khi người dùng đã nhập đúng tài khoản mật khẩu thì sẽ cho id người dùng vòa 1 biến ss
	if (!$error) {
		//Gán id của người đăng nhập vào ss
		$_SESSION['ss_account'] = $user[0]['id_user'];
		//chuyển người dùng đến giao diện trang chủ
		header('location: ?controller=trangchu');
	}
}
require_once('./view/V_login.php');