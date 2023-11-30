<?php
ini_set('track_errors', 'on');
ini_set('display_errors', 'on');

//Kiem tra co ton tai keyword tren url khong
if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	//Hien thi du lieu ma nguoi dung tim kiem

	$product = $db->get_like('sanpham', 'name', $keyword);
} else {
	//Neu khong co keyword Lấy dữ liệu ở trong bảng sanpham
	$product = $db->get('sanpham', array());
}
//Lấy dữ liệu ở trong bảng sanpham
$product = $db->get_limit('sanpham', array('catalog_id' => $product[20]['catalog_id']), 14);

require_once('./view/v_products2.php');