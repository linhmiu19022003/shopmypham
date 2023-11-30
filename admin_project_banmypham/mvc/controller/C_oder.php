<?php
// kiểm tra người dùng đã đăng nhập hay chưa
if (isset($_SESSION['ss_account'])) {
    // nếu đã đăng nhập thì lấy thông tin người dùng theo ss
    $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
    // lấy dữ liệu oder chưa duyệt
    $data_order_not_done = $db->get('oder', array('status' => 0));

    // lấy dữ liệu oder đã duyệt
    $data_order_done = $db->get('oder', array('status' => 1));
} else {
    // nếu chưa đăng nhập sẽ cho người dùng về trang login
    header('location: ?controller=login');
}
require_once('./view/V_oder.php');