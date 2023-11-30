<?php
//Kiểm tra xem người dùng đã đăng nhập chưua
if (isset($_SESSION['ss_account'])) {
	//Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
	//Kiểm tra có phải là admin không
	if ($user[0]['lv'] == 1) {
		//Kiểm tra người dùng có ấn nút xác nhận không
		if (isset($_POST['btn_create'])) {
			//Lấy dữ liệu người dùng nhập vào
			$username = $_POST['username'];
			$password = $_POST['password'];
			$full_name = $_POST['full_name'];
			$email = $_POST['email'];
			$sdt = $_POST['sdt'];
			$address = $_POST['address'];
			//Kiểm tra dữ liệu người dùng nhập
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
			//Bước 4: Kiểm tra xem họ tên có trống không
			if ($full_name == '') {
				$error['full_name'] = "Họ tên không được để trống";
			}
			if ($email == '') {
				$error['email'] = "Email không được để trống";
			}
			if ($sdt == '') {
				$error['sdt'] = "Số điện thoại không được để trống";
			}
			if ($address == '') {
				$error['address'] = "Địa chỉ không được để trống";
			}
			//Bước 5: kiểm tra xem tên đăng nhập có trùng không
			if (!$error) {
				$nhanvien_create = $db->get('account', array('username' => $username));
				if (!empty($nhanvien_create)) {
					$error['username'] = "Tài khoản đã được sử dụng";
				}
			}
			//Bước 6: insert vào cơ sở dữ liệu
			if (!$error) {
				$db->insert('account', array(
					'username' => $username,
					'password' => $password,
					'name' => $full_name,
					'email' => $email,
					'sdt' => $sdt,
					'address' => $address,
					'lv' => 2
				));
				//CHuyển về trang nhân viên
				header('location: ?controller=nhanvien');
			}
		}
	} else {
		//Nếu không phải admin thì cho về trang nhan viên
		header('location: ?controller=nhanvien');
	}
} else {
	//Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
require_once('./view/V_add_nhanvien.php');