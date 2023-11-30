<?php
// kiểm tra người dùng đã đăng nhập hay chưa
if (isset($_SESSION['ss_account'])) {
    // nếu đã đăng nhập thì lấy thông tin người dùng theo ss
    $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
    // lấy dữ liệu oder chưa duyệt
    $data_clients_not_done = $db->get('clients', array());

    // lấy dữ liệu oder đã duyệt
    $data_clients_done = $db->get('clients', array());
} else {
    // nếu chưa đăng nhập sẽ cho người dùng về trang login
    header('location: ?controller=login');
}
require_once('./view/V_clients.php');