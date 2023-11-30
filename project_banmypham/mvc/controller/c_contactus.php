<?php
//Kiểm tra người dùng có ấn nút xác nhận thanh toán không
if (isset($_POST['btn_guilienhe'])) {

	//Lấy thông tin người dùng nhập ở form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$content = $_POST['content'];


	//Lấy giá trị cho oder_id
	$id = 1;
	//Bước 1: Lấy dữ liệu từ bảng oder ra trước
	$data = $db->get('clients', array());
	//Bước 2 :Lặp dữ liệu từ bảng oder để có 1 id ko trùng lặp
	foreach ($data as $key => $value) {
		$id += $value['id_kh'];
	}



	//Bước 3: Thêm dữ liệu vào bảng oder
	$db->insert('clients', array(
		'id_kh' => $id,
		'name' => $name,
		'email' => $email,
		'sdt' => $phone,
		'content' => $content,

	));
}
require_once('./view/v_contactus.php');