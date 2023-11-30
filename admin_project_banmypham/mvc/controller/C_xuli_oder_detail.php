<?php
// kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_account'])) {
  // nếu đăng nhập thì lấy thông tin người dùng theo ss
  $user = $db->get('account', array('id_user' => $_SESSION['ss_account']));
  // kiểm tra có phải là admin không 
  if ($user[0]['lv'] == 1) {

    //Nếu là admin lấy id ở url
    $id = $_GET['id_user'];
    // lấy dữ liệu chi tiết oder_fetail tương ứng
    $data_order_detail = $db->get('oder_detail', array('id_order' => $id));
    //Trừ sản phẩm tương ứng trong bảng product đi
    foreach ($data_order_detail as $key => $value) {
      //Bước 1: Lấy dữ liệu sản phẩm
      $product = $db->get('sanpham', array('id_product' => $value['id_product']));
      //Bước 2: sửa dữ liệu số lượng bằng product
      $db->update('sanpham', array(
        'amount' => $product[0]['amount'] - $value['qty']
      ), array(
        'id_product' => $value['id_product']
      ));
    }
    //Chuyển trạng thái oder là đã duyệt
    $db->update('oder', array(
      'status' => 1
    ), array(
      'id' => $id
    ));
    //Chuyển về trang oder
    header('location: ?controller=oder');
  } else {
    //Nếu ko phải admin thì cho người dùng về trang oder
    header('location: ?controller=oder');
  }
} else {
  // nếu chưa đăng nhập người dùng cho về trang login
  header('location: ?controller=login');
}
require_once('./view/V_oder_detail.php');
