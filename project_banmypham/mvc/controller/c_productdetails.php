<?php
ini_set('track_errors', 'on');
ini_set('display_errors', 'on');
//Lay id tu url luu ve 1 bien

$id = $_GET['id_product'];

//Lay du lieu theo id da duoc GET ve o tren
$product = $db->get('sanpham', array('id_product' => $id));


//Lay san pham lien quan theo id_type
$brand = $db->get_limit('brand', array('id_product' => $product[0]['id_product']), 3);
$product_lienquan = $db->get_limit('sanpham', array('id_type' => $product[0]['id_type']), 10);



require_once('./view/v_productdetails.php');