<?php

//Lay gia tri cua $method tu tren URL de kiem tra xem nguoi dung muon lam gi
if (isset($_GET['method']) && isset($_GET['id_product'])) {
	$method = $_GET['method'];

	//Lay id tu url xem nguoi dung lam gi voi san pham do
	$id = $_GET['id_product'];

	//Kiem tra $method de xu ly theo tung truong hop (method = tru, cong, xoa)

	switch ($method) {
			//Neu nguoi dung click vao nut - thi $method = tru
		case 'tru':
			//B1: Tru so luong cua san pham di 1
			$_SESSION['cart4'][$id]['sl'] -= 1;
			//B2: Kiem tra xem so luong cua SP =0 chua
			if ($_SESSION['cart4'][$id]['sl'] == 0) {
				//Neu =0 thi xoa san pham do khoi gio hang
				unset($_SESSION['cart4'][$id]);
			}
			//B3: Kiem tra xem gio hang co rong khong?
			if (empty($_SESSION['cart4'])) {
				unset($_SESSION['cart4']);
			}
			header('location: ?controller=cart');
			break;
			//Neu nguoi dung click vao nut + thi $method = cong
		case 'cong':
			//Buoc 1: Tang so luong cua san pham them 1
			$_SESSION['cart4'][$id]['sl'] += 1;
			//Sau khi cong thi van o trang giohang
			header('location: ?controller=cart');
			break;
		case 'xoa':
			//B1: Xoa san phan do trong gio hang
			unset($_SESSION['cart4'][$id]);
			//B2: Kiem tra xem gio hang co rong khong? neu rong thi xoa luon gio hang
			if (empty($_SESSION['cart4'])) {
				unset($_SESSION['cart4']);
			}
			header('location: ?controller=cart');
			break;
			//Trong truong hop nguoi dung co tinh thao tac sai method thi cho tro ve trang chu
			// default:
			// 	header('location: ?controller=trangchu');
			// 	break;
	}
}