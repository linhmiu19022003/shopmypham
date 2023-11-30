<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán mỹ phẩm</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../library/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../library/slick/slick/slick.css">

</head>

<style>
body {
    font-size: 14px;
}

.header h3 a {
    text-decoration: none;
    color: #fc6e83;
}

.header h3 a:hover {
    color: #ff556e;
}

.hd-form {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.login-icon h5 a {
    font-size: 15px;
    text-decoration: none;
    color: #fc6e83;
}

.login-icon h5 a:hover {
    color: #ff556e;
}

.login-icon h5 .ic-user {
    color: #fc6e83;
    margin-right: 3px;
}

.all-form input {
    width: 100%;
    padding: 12px 20px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 2px solid #ebebeb;
}

.all-form select {
    width: 100%;
    padding: 12px 20px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 2px solid #ebebeb;
}

.all-form textarea {
    border: 2px solid #ebebeb;
    border-radius: 5px;
}

.ghtn-form-d {
    border: 2px solid #ebebeb;
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
}

.form-f-tt {
    border: 2px solid #ebebeb;
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
}

.sidebar-h5 {
    border-bottom: 1px solid #ebebeb;
}

.mav-tt-2 .mony-tt {
    font-size: 20px;
    color: #fc6e83;
}

.nav-ghtn-1 input {
    vertical-align: middle;
}

.nav-ghtn-1 label {
    vertical-align: middle;
}

.nav-tt-1 input {
    vertical-align: middle;
}

.nav-tt-1 label {
    vertical-align: middle;
}

.mav-tt-2 {
    margin-top: 2px;
    display: block !important;
}

.nav-sp-card .img-card img {
    width: 20%;
}

.nav-sp-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.sidebar-h5 {
    padding: 16px;
}

.full-sp-card {
    border-bottom: 1px solid #ebebeb;
    margin-top: 1rem;
}

.form-mgg input {
    width: 82%;
    padding: 12px;
    border: 2px solid #ebebeb;
    border-radius: 5px;
}

.form-mgg button {
    background-color: #fc6e83;
    padding: 12px;
    border: 2px solid #ebebeb;
    border-radius: 5px;
    color: #fff;
}

.form-mgg button:hover {
    background-color: #ff556e;
}

.form-mgg {
    border-bottom: 1px solid #ebebeb;
    padding-bottom: 1rem;
    padding-left: 10px;
}

.nav-phivc-1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.nav-phivc-2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 1rem;
}

.phivc-tt {
    border-bottom: 1px solid #ebebeb;
}

.tc-tientt {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 1rem;
}

.nav-tc-tt-2 span h4 {
    color: #fc6e83;
}

.return {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.nav-return-1 li {
    list-style: none;
}

.nav-return-1 li a {
    text-decoration: none;
    color: #fc6e83;
}

.nav-return-2 button {
    padding: 12px;
    border: 2px solid #ebebeb;
    border-radius: 5px;
    color: #fff;
    background-color: #fc6e83;
}

.phivc-tt {
    padding-left: 10px;
}

.return-home {
    padding-left: 10px;
}

.tc-tien {
    padding-left: 10px;
}

.nav-return-1 a:hover {
    color: #ff556e;
}

.nav-return-2 button:hover {
    background-color: #ff556e;
}

.full-col5 {
    background: #fafafa
}

.inputPayment:hover {
    color: #000 !important;
}
</style>

<body>
    <!-- HEADER BEGIN -->
    <header>

    </header>
    <!-- HEADER END -->

    <!-- MAIN BEGIN -->
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-7">
                    <div class="header">
                        <h3><a href="?controller=homepage">Pink Beauty</a></h3>
                    </div>
                    <div class="information-dh-form">
                        <div class="row">
                            <div class="col">
                                <div class="hd-form">
                                    <div class="h4-form">
                                        <h5>Thông tin nhận hàng</h5>
                                    </div>

                                </div>
                                <div class="all-form">
                                    <form action="?controller=c_payment" method="post">
                                        <input class="inputPayment" style="box-shadow:none !important;" type="email"
                                            name="email" placeholder="Email" class="form-control"><br><br>
                                        <input class="inputPayment" style="box-shadow:none !important;" type="text"
                                            name="full_name" placeholder="Họ Và Tên" class="form-control"><br><br>
                                        <input class="inputPayment" style="box-shadow:none !important;" type="phone"
                                            name="phone" placeholder="Số Điện Thoại" class="form-control"><br><br>
                                        <input class="inputPayment" style="box-shadow:none !important;" type="text"
                                            name="address" placeholder="Địa chỉ" class="form-control">
                                        <br><br>
                                        <textarea type="text"
                                            style="width:100%; height:100px;line-height:25px ;padding-left: 24px;"
                                            placeholder="Ghi chú (tùy chọn)" name="note"></textarea>

                                </div>
                            </div>
                            <div class="col">
                                <div class="container-vanc">
                                    <div class="vanc-dv">
                                        <h5>Vận chuyển</h5>
                                    </div>
                                    <div class="ghtn-form-d">
                                        <div class="nav-ghtn-1">
                                            <label for="">Giao Hàng Tận Nơi</label>
                                        </div>
                                        <div class="nav-ghtn-2">
                                            <span>40.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-tt mt-4">
                                    <div class="thanh-t-tt">
                                        <h5>Thanh Toán</h5>
                                    </div>
                                    <div class="form-f-tt">
                                        <div class="nav-tt-1">
                                            <input type="radio" id="html" name="payments" value="TM">
                                            <label for="">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="mav-tt-2">
                                            <span><i class="fa-solid fa-money-bill-1 mony-tt"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-f-tt mt-3">
                                        <div class="nav-tt-1">
                                            <input type="radio" id="html" name="payments" value="CK">
                                            <label for="">Thanh toán chuyển khoản</label>
                                        </div>
                                        <div class="mav-tt-2">
                                            <span><i class="fa-solid fa-money-bill-1 mony-tt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- đơn hàng -->
                <div class="col-5 full-col5">
                    <div class="sidebar-ctn">
                        <div class="sidebar-h5">
                            <h5>Đơn Hàng </h5>
                        </div>
                        <div class="all-form-sidebar">
                            <div class="full-sp-card">
                                <table style="width: 100%;text-align: center;">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Thông tin sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Giá</th>
                                        </tr>
                                    </thead>
                                    <thead class="menu-cart">
                                        <?php
                                        $tongtt = 0;
                                        if (isset($_SESSION['cart4'])) {
                                            foreach ($_SESSION['cart4'] as $key => $value) {
                                                $tongtt += $value['sl'] * $value['price'];
                                        ?>
                                        <tr>
                                            <th><img width="50" height="50" src="<?php echo $value['thumbnail'] ?>">
                                            </th>
                                            <th><?php echo $value['name'] ?></th>
                                            <th><?php echo $value['sl'] ?></th>
                                            <th><?php echo number_format($value['price']) ?>₫</th>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <span style="color: #fc6e83;">Không có sản phẩm nào. Quay lại cửa hàng để tiếp
                                            tục mua sắm.</span>
                                        <?php } ?>
                                    </thead>
                                </table>

                            </div><br>
                            <div class="form-mgg">
                                <input type="text" name="mgg" placeholder="Mã Giảm Giá">
                                <button>Áp Dụng</button>
                            </div>
                            <div class="phivc-tt"><br>
                                <div class="nav-phivc-1">
                                    <div class="ttinh-1">
                                        <span>Tiền Hàng</span>
                                    </div>
                                    <div class="ttinh-1">
                                        <span>
                                            <th><a style="text-decoration: none; color:#fc6e83;"
                                                    class="col-md-6"><?php echo number_format($tongtt) ?>₫</a></th>
                                        </span>
                                    </div>
                                </div><br>
                                <div class="nav-phivc-2">
                                    <div class="ttinh-2">
                                        <span>Phí vận chuyển</span>
                                    </div>
                                    <div class="ttinh-2">
                                        <span>
                                            <th><a style="text-decoration: none; color:#fc6e83;"
                                                    class="col-md-6"><?php echo number_format(40000) ?>₫</a></th>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="tc-tien">
                                <div class="tc-tientt">
                                    <div class="nav-tc-tt-1">
                                        <span>
                                            <h4>Tổng cộng</h4>
                                        </span>
                                    </div>
                                    <div class="nav-tc-tt-2">
                                        <span>
                                            <h4>
                                                <th><a style="text-decoration: none; color:#fc6e83;"
                                                        class="col-md-6 "><?php echo number_format($tongtt + (40000)) ?>₫</a>
                                                </th>
                                            </h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="return-home">
                                <div class="return">
                                    <div class="nav-return-1">
                                        <li><a href="?controller=cart"><i class="fa-solid fa-chevron-left"
                                                    style="margin-right:2px;"></i>Quay về giỏ hàng</a></li>
                                    </div>
                                    <div class="nav-return-2">
                                        <button type="submit" name="btn_xacnhan">Đặt Hàng</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </main>
    <!-- MAIN END -->
    <!-- FOOTER BEGIN -->
    <footer>
    </footer>
    <!-- FOOTER END -->
    <script src="/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="/library/fontawesome/js/all.min.js"></script>
    <script src="/library/slick/slick/slick.min.js"></script>
    <script></script>

</body>

</html>