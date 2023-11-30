<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../library/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.nav-menu {
    background: #181824;
    height: 100%;
    position: fixed;
    width: 14%;
}

.menu1 {
    text-align: center;
    color: #8e94a9;
    padding: 10px 0;
}

.menu1 a {
    color: #8e94a9;
}

.menu-right {

    margin-left: 14%;
    width: 100%;
}

.menu1:hover {
    background-color: black;
}

a:hover {
    color: white !important;
    text-decoration: none;
}
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="nav-menu">
                <div class="menu1 mt-3">
                    <h2><i class="fa-solid fa-user-gear" style="margin-right:6px;"></i>Admin</h2>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=trangchu"><i class="fa-solid fa-house-chimney "
                            style="margin-right:6px;"></i>Trang Chủ</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=nhanvien" class=""><i class="fa-solid fa-user-large"
                            style="margin-right:6px;"></i>Người dùng</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=products" class="  "><i class="fa-solid fa-dolly"
                            style="margin-right:6px;"></i>Sản phẩm</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=oder" class="  "><i class="fa-solid fa-box-open"
                            style="margin-right:6px;"></i>Đơn hàng</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=clients" class="  "><i class="fa-solid fa-users"
                            style="margin-right:6px;"></i>Khách hàng</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
                <div class="menu1">
                    <a href="?controller=log_out" class="  "><i class="fa-solid fa-right-from-bracket"
                            style="margin-right:6px;"></i>Đăng Xuất</a>
                </div>
                <div style="border-bottom: 1px solid;"></div>
            </div>
            <div class=" menu-right">
                <h3 class="text-center mt-4 mb-4"><i class="fa-solid fa-box-open " style="margin-right:6px;"></i>Chi
                    tiết đơn hàng</h3>

                <?php if ($user[0]['lv'] == 1) { ?>
                <div class="row">
                    <table class="table">
                        <thead style="background: cadetblue; text-align:center">
                            <tr>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody style=" text-align:center; align-items:center ;border-bottom:1px solid #dee2e6">
                            <tr>
                                <?php foreach ($data_order_detail as $key => $value) {
                                        //Lấy dữ liệu sản phẩm tương ứng
                                        $data_product = $db->get('sanpham', array('id_product' => $value['id_product']))
                                    ?>
                                <th scope="row"><img height="100" width="100"
                                        src="<?php echo $data_product[0]['thumbnail'] ?>"></th>
                                <td><?php echo $data_product[0]['name'] ?></td>
                                <td><?php echo $value['qty'] ?></td>
                                <td><?php echo number_format($value['price']) ?>₫</td>
                                <td><?php echo number_format($value['amount']) ?>₫</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class=" mt-5 " style="display: flex; justify-content: space-around; align-items: center;">
                    <p><b class="text col-md-12">Mã đơn hàng: </b><?php echo $data_order[0]['id'] ?><br>
                        <b class="text col-md-12">Họ tên:</b> <?php echo $data_order[0]['full_name'] ?><br>
                        <b class="text col-md-12">Địa chỉ:</b> <?php echo $data_order[0]['address'] ?><br>
                        <b class="text col-md-12">Số điện thoại:</b> <?php echo $data_order[0]['phone'] ?><br>
                        <b class="text col-md-12">Email:</b> <?php echo $data_order[0]['email'] ?><br>
                        <b class="text col-md-12">Tổng đơn:</b> <?php echo number_format($data_order[0]['amount']) ?>₫
                    </p>
                    <div>
                        <a href="?controller=xuli_oder_detail&id_user=<?php echo $id ?>" class="btn btn-primary ">Xác
                            nhận đơn hàng</a>
                    </div>
                </div>

                <?php } else { ?>
                <div class="row">
                    <h3 class="text-center text-danger col-md-12">Bạn không có quyền </h3>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script src="library/fontawesome/js/all.min.js"></script>

</html>