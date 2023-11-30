<?php
//Kiểm tra xem người dùng đã đăng nhập chưua
if (isset($_SESSION['ss_account'])) {
    //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
    $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
    //Kiểm tra có phải là admin không
    if ($user[0]['lv'] == 1) {
        //Kiểm tra người dùng muốn làm gì
        switch ($_GET['method']) {
            case "edit":
                //Lấy id ở url
                $id = $_GET['id_product'];
                //Lấy dữ liệu người dùng theo id
                $data_products = $db->get('sanpham', array('id_product' => $id));
                //Kiểm tra xem người dùng có ấn nút xác nhận chưa
                if (isset($_POST['btn_edit'])) {
                    //Lấy dữ liệu người dùng nhập vào
                    $price = $_POST['price'];
                    $tonkho = $_POST['tonkho'];
                    $daban = $_POST['daban'];
                    //Kiểm tra dữ liệu người dùng nhập
                    //Bước 1: Tạo 1 biến lỗi cho nó là mảng
                    $error = array();
                    if ($price == '') {
                        $error['price'] = "Giá không được để trống";
                    }
                    //Bước 2: Kiểm tra xem mật khẩu có rỗng không
                    if ($tonkho == '') {
                        $error['tonkho'] = "Tồn kho không được để trống";
                    }
                    //Bước 3: Kiểm tra xem họ tên có trống không
                    if ($daban == '') {
                        $error['daban'] = "Đã bán không được để trống";
                    }
                    //Bước 4: update vào cơ sở dữ liệu
                    if (!$error) {
                        $db->update('sanpham', array(
                            'price' => $price,
                            'tonkho' => $tonkho,
                            'daban' => $daban,
                        ), array('id_product' => $id));
                        //Bước 5: chuyển về trang products
                        header('location: ?controller=products');
                    }
                }
                require_once './view/V_xuli_products.php';
                break;
            case "del":
                //Lấy id ở url
                $id = $_GET['id_product'];

                // if(isset($id)){
                // 	echo "da dc khoi tao";
                // }else{
                // 	echo "chua da dc khoi tao";
                // }
                // echo "<br>";
                // if(!empty($id)){
                // 	echo "co gia tri";
                // }else{
                // 	echo "khong co gia tri";
                // }
                echo $id;
                //Gọi hàm xóa
                $db->delete('sanpham', array('id_product' => $id));
                //Chuyển về trang products
                header('location: ?controller=products');
                break;
            default:
                //Nếu không trùng thì cho về trang products
                header('location: ?controller=products');
                break;
        }
    } else {
        //Nếu không phải admin thì cho về trang nhan viên
        header('location: ?controller=products');
    }
} else {
    //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
    header('location: ?controller=login');
}