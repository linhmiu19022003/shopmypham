<?php
// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_account'])) {
    // Nếu người dùng đã đăng nhập thì chuyển hướng người dùng sang trang chủ
    header('location: ?controller=homepage');
}

// Kiểm tra xem người dùng đã ấn nút đăng ký chưa
if (isset($_POST['btn_dangky'])) {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Tạo mảng lưu trữ lỗi
    $error = array();

    // Kiểm tra tài khoản và mật khẩu
    // Bước 1: Kiểm tra tài khoản có trống không
    if ($username == '') {
        $error['username'] = "Tài khoản không được để trống";
    }

    // Bước 2: Kiểm tra mật khẩu có rỗng không
    if ($password == '') {
        $error['password'] = "Mật khẩu không được để trống";
    }

    // Bước 3: Kiểm tra email có rỗng không
    if ($email == '') {
        $error['email'] = "Email không được để trống";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Email không hợp lệ";
    }
    // Bước 2: Kiểm tra địa chỉ có rỗng không
    if ($address == '') {
        $error['address'] = "Địa chỉ không được để trống";
    }
// Bước 2: kta sốddieenj thoại có rỗng không
if ($phone == '') {
    $error['phone'] = "Địa chỉ không được để trống";
}
    // Bước 4: Nếu không có lỗi trống thì kiểm tra tên đăng nhập tồn tại chưa
    if (empty($error)) {
        $user = $db->get('account', array('username' => $username));

        if (!empty($user)) {
            $error['username'] = "Tài khoản này đã tồn tại";
        } else {
            // Bước 5: Tài khoản chưa tồn tại, thêm người dùng mới vào database
            $data = array(
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'sdt' => $phone,
                'address' => $address
            );

            $db->insert('account', $data);

            // Đăng nhập người dùng mới
            $_SESSION['username'] = $username;

            // Chuyển người dùng đến giao diện trang chủ
            header('location: ?controller=homepage');
        }
    }
}

require_once('./view/V_dangky.php');
?>
