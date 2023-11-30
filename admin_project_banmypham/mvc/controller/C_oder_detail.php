<?php
// kiểm tra người dùng đã đăng nhập hay chưa
if (isset($_SESSION['ss_account'])) {
     // nếu đã đăng nhập thì lấy thông tin người dùng theo ss
     $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
     if ($user[0]['lv'] == 1) {
          // Nếu là admin thì lấy id trên url
          $id = $_GET['id'];
          // lấy dữ liệu chi tiết oder tương ứng
          $data_order = $db->get('oder', array('id' => $id));

          // lấy dữ liệu chi tiết oder_detail tương ứng
          $data_order_detail = $db->get('oder_detail', array('id_order' => $id));
     } else {
          //Nếu ko phải admin thì cho người dùng về trang oder
          header('location: ?controller=oder');
     }
} else {
     // nếu chưa đăng nhập sẽ cho người dùng về trang login
     header('location: ?controller=login');
}
require_once('./view/V_oder_detail.php');