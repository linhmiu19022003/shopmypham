<?php
//Kiểm tra xem người dùng đã đăng nhập chưua
if (isset($_SESSION['ss_account'])) {
    //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
    $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
    //Kiểm tra có phải là admin không
    if ($user[0]['lv'] == 1) {
        //Kiểm tra người dùng muốn làm gì
        switch ($_GET['method']) {
            case 'edit':
                //Lấy id ở url
                $id = $_GET['id_user'];
                //Lấy dữ liệu người dùng theo id
                $data_nhanvien = $db->get('account', array('id_user' => $id));
                //Kiểm tra xem người dùng có ấn nút xác nhận chưa
                if (isset($_POST['btn_edit'])) {
                    //Lấy dữ liệu người dùng nhập vào
                    $password = $_POST['password'];
                    $full_name = $_POST['full_name'];
                    //Kiểm tra dữ liệu người dùng nhập
                    //Bước 1: Tạo 1 biến lỗi cho nó là mảng
                    $error = array();
                    //Bước 2: Kiểm tra xem mật khẩu có rỗng không
                    if ($password == '') {
                        $error['password'] = "Mật khẩu không được để trống";
                    }
                    //Bước 3: Kiểm tra xem họ tên có trống không
                    if ($full_name == '') {
                        $error['full_name'] = "Họ tên không được để trống";
                    }
                    //Bước 4: update vào cơ sở dữ liệu
                    if (!$error) {
                        $db->update('account', array(
                            'password' => $password,
                            'full_name' => $full_name,
                        ), array('id' => $id));
                        //Bước 5: chuyển về trang nhân viên
                        header('location: ?controller=nhanvien');
                    }
                }
                require_once './view/V_xuli_nhanvien.php';
                break;
            case 'del':
                //Lấy id ở url
                $id = $_GET['id_user'];
                //Gọi hàm xóa
                $db->delete('account', array('id_user' => $id));
                //Chuyển về trang nhan viên
                header('location: ?controller=nhanvien');
                break;
            default:
                //Nếu không trùng thì cho về trang nhân viên
                header('location: ?controller=nhanvien');
                break;
        }
    } else {
        //Nếu không phải admin thì cho về trang nhan viên
        header('location: ?controller=nhanvien');
    }
} else {
    //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
    header('location: ?controller=login');
}