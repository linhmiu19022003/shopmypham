<?php
ini_set('track_errors', 'on');
ini_set('display_errors', 'on');
//Kiểm tra người dùng có ấn nút xác nhận thanh toán không
if (isset($_POST['btn_xacnhan'])) {

	//Lấy thông tin người dùng nhập ở form
	$email = $_POST['email'];
	$full_name = $_POST['full_name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$note = $_POST['note'];
	$payments = $_POST['payments'];

	//Lấy giá trị cho oder_id
	$order_id = 1;
	//Bước 1: Lấy dữ liệu từ bảng oder ra trước
	$data_oder = $db->get('oder', array());
	//Bước 2 :Lặp dữ liệu từ bảng oder để có 1 id ko trùng lặp
	foreach ($data_oder as $key => $value) {
		$order_id += $value['id'];
	}

	//Thêm dữ liệu vào bảng oder_detail
	foreach ($_SESSION['cart4'] as $key => $value) {
		$db->insert('oder_detail', array(
			'id_order' => $order_id,
			'id_product' => $value['id_product'],
			'qty' => $value['sl'],
			'price' => $value['price'],
			'amount' => $value['sl'] * $value['price']
		));
	}

	//Thêm dữ liệu vào bảng oder
	//Bước 1:Lấy dữ liệu của các bảng oder_detail theo oder_id vừa tạo
	$data_oder_detail = $db->get('oder_detail', array('id_order' => $order_id));
	//Bước 2: Tính tổng tiền
	$amount = 40000;
	foreach ($data_oder_detail as $key => $value) {
		$amount += $value['amount'];
	}
	//Bước 3: Thêm dữ liệu vào bảng oder
	$db->insert('oder', array(
		'id' => $order_id,
		'full_name' => $full_name,
		'address' => $address,
		'phone' => $phone,
		'email' => $email,
		'amount' => $amount,
		'note' => $note,
		'status' => 0,
		'payments' => $payments
	));
	// Chuyển hướng đến trang chủ sau khi thanh toán thành công
	header('Location: ?controller=homepage&payment_success=true');
exit();

	// //Gửi email cho người dùng
	// //Chuẩn bị cấu trúc thư gửi cho người mua
	// //Bước 1: chuẩn bị phần thông tin người nhận
	// $content= '<p>Người nhận :'.$full_name.'</p>';
	// $content.= '<p>Số điện thoại :'.$phone.'</p>';
	// $content.= '<p>Địa chỉ người nhận :'.$address.'</p>';
	// $content.= '<p>Tổng tiền :'.number_format($amount).'đ</p>';
	// $content.= '<table class="mt-3 p-0 table table-borderless">
	// 			<thead>
	// 				<tr>	
	// 					<th>Sản phẩm</th>
	// 					<th>Hình ảnh</th>
	// 					<th>Đơn giá</th>
	// 					<th>Số lượng</th>
	// 					<th>Thành tiền</th>
	// 			   	</tr>	
	// 			</thead>';
	// //Bước 2: Lặp các sản phẩm người dùng mua ra
	// foreach ($_SESSION['cart'] as $key => $value) {
	// 	$content.= '<tr>
	// 					<td>'.$value['name'].'</td>
	// 					<td><img id="anh-cart" src="'.$value['img_link'].'"></td>
	// 					<td>'.number_format($value['price']).'đ</td>
	// 					<td >'.$value['sl'].'</td>
	// 					<td>'.number_format($value['price']*$value['sl']).'đ</td></tr>';
	// }
	// //Bước 3:đóng thẻ table
	// $content.='</tbody>
	// </table>';

	// //Bắt đầu gửi thư cho người mua
	try {
		//Server settings
		// $mail->SMTPDebug = 2;                                // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'kieuanhanthony@gmail.com';         // SMTP username
		$mail->Password = 'erioodgcqwsgeuxb';                       // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('nguyenthingan9122003@gmail.com', 'Athony Anh');
		$mail->addAddress($email, $full_name);                // Add a recipient
		// $mail->addAddress('ellen@example.com');            // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');      // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		// echo 'Message has been sent';
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}
require_once('./view/v_payment.php');