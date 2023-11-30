<?php

//Lay id san pham tu URL
$id = $_GET['id_product'];
//Lay san pham tu bang produc theo id vua lay duoc
$sanpham = $db->get('sanpham', array('id_product' => $id));
//Bat dau xu li SESSION gio hang
//Kiem tra SESSION['cart'] / kiem tra xem gio hang da ton tai mat hang nao chua?
if (isset($_SESSION['cart4'])) {
	//Neu da ton tai SS Cart/gio hang roi thi kiem tra xem san pham do da ton tai trong gio hang chua?
	if (isset($_SESSION['cart4'][$id])) {
		$_SESSION['cart4'][$id]['sl'] += 1;
	}
	//Neu san pham do chua ton tai tron giohang thi them du lieu san pham can mua vao gio hang
	else {
		$_SESSION['cart4'][$id]['id_product'] = $sanpham[0]['id_product'];
		$_SESSION['cart4'][$id]['sl'] = 1;
		$_SESSION['cart4'][$id]['thumbnail'] = $sanpham[0]['thumbnail'];
		$_SESSION['cart4'][$id]['name'] = $sanpham[0]['name'];
		$_SESSION['cart4'][$id]['price'] = $sanpham[0]['price'];
	}
} else {
	//Neu chua co san pham nao trong gio hang thi tao SESSION['cart'] va them du lieu cua san pham can mua vao gio hang
	$_SESSION['cart4'][$id]['id_product'] = $sanpham[0]['id_product'];
	$_SESSION['cart4'][$id]['sl'] = 1;
	$_SESSION['cart4'][$id]['thumbnail'] = $sanpham[0]['thumbnail'];
	$_SESSION['cart4'][$id]['name'] = $sanpham[0]['name'];
	$_SESSION['cart4'][$id]['price'] = $sanpham[0]['price'];
}
//Sau khi xu li xong thi tro ve trang chu
header('location: ?controller=c_products');
	// header('location: ?controller=homepage');