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
    width: 30%;
    height: 45px;
    border-radius: 5px;
}

.add-nv {
    width: 29%;
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

                <form action="?controller=add_nhanvien" method="post" style="text-align: center;">
                    <input type="text" name="username" placeholder="Tài khoản" class=""
                        value="<?php echo (isset($username)) ? $username : '' ?>"><br><br>
                    <?php if (isset($error['username'])) { ?>
                    <p class="text-danger"><?php echo $error['username'] ?></p>
                    <?php } ?>
                    <input type="password" name="password" placeholder="Mật khẩu" class=""
                        value="<?php echo (isset($password)) ? $password : '' ?>"><br><br>
                    <?php if (isset($error['password'])) { ?>
                    <p class="text-danger"><?php echo $error['password'] ?></p>
                    <?php } ?>
                    <input type="text" name="full_name" placeholder="Họ và tên" class=""
                        value="<?php echo (isset($full_name)) ? $full_name : '' ?>"><br><br>

                    <?php if (isset($error['full_name'])) { ?>
                    <p class="text-danger"><?php echo $error['full_name'] ?></p>
                    <?php } ?>
                    <input type="email" name="email" placeholder="Emai" class=""
                        value="<?php echo (isset($email)) ? $email : '' ?>"><br><br>

                    <?php if (isset($error['email'])) { ?>
                    <p class="text-danger"><?php echo $error['email'] ?></p>
                    <?php } ?>
                    <input type="number" name="sdt" placeholder="Số điện thoại" class=""
                        value="<?php echo (isset($sdt)) ? $sdt : '' ?>"><br><br>

                    <?php if (isset($error['sdt'])) { ?>
                    <p class="text-danger"><?php echo $error['sdt'] ?></p>
                    <?php } ?>
                    <input type="text" name="address" placeholder="Địa chỉ" class=""
                        value="<?php echo (isset($address)) ? $address : '' ?>"><br><br>

                    <?php if (isset($error['address'])) { ?>
                    <p class="text-danger"><?php echo $error['address'] ?></p>
                    <?php } ?>
                    <div class="row mt-5">
                        <button type="submit" class="add-nv m-auto" name="btn_create">Tạo nhân viên</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="library/fontawesome/js/all.min.js"></script>

</html>