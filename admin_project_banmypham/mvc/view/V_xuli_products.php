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

input {
    width: 25%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    margin-left: 10px;
}

.add-nv {
    width: 150px;
    height: 45px;
    border-radius: 5px;
    background: #181824;
    color: #dee2e6 !important;
    border: none;
}

button:hover {
    background: #6c757d;
    color: white;
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

                <h3 class="text-center mt-4 mb-4"><i class="fa-solid fa-screwdriver-wrench"
                        style="margin-right:6px;"></i>Hãy điền thông tin</h3>

                <form action="?controller=xuli_products&method=edit&id_product=<?php echo $_GET['id_product'] ?>"
                    method="post" style="text-align: center;"><br>


                    <input type="number" name="price" class=" " placeholder="Giá bán"
                        value="<?php echo $data_products[0]['price'] ?>"><br><br>

                    <?php if (isset($error['tonkho'])) { ?>
                    <p class="text-danger"><?php echo $error['tonkho'] ?></p>
                    <?php } ?>



                    <input type="number" name="tonkho" class=" " placeholder="Tồn kho"
                        value="<?php echo $data_products[0]['tonkho'] ?>"><br><br>


                    <?php if (isset($error['tonkho'])) { ?>
                    <p class="text-danger"><?php echo $error['tonkho'] ?></p>
                    <?php } ?>

                    <input type="number" name="daban" class=" " placeholder="Đã bán"
                        value="<?php echo $data_products[0]['daban'] ?>"><br><br>
                    <?php if (isset($error['full_name'])) { ?>
                    <p class="text-danger"><?php echo $error['name'] ?></p>
                    <?php } ?>
                    <button type="submit" class="col-md-1  mt-4 add-nv" name="btn_edit">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="library/fontawesome/js/all.min.js"></script>

</html>