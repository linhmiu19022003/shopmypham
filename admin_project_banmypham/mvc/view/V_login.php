<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../library/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
body {
    background: #f0f1f6;
}

.all-form-1 {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: #0e3e78bd;
    height: 500px;
    border-radius: 15px;
}

.nav-form-0 {
    text-align: center;

}

.nav-form-1 {
    padding: 0 40px;
}

h2 {
    border-bottom: 1px solid;
    padding: 20px;

}

input {
    border-radius: 10px;
    width: 100%;
    height: 40px;
    border: 1px solid #f0f1f6;

}

button {
    border-radius: 10px;
    border: 1px solid #f0f1f6;
}

.add-dn:hover button {
    background-color: #ff556e !important;
}

hr {
    width: 200px;
}
</style>

<body>
    <div class="container mt-5">
        <div class="container px-5">
            <div class="login text-center mt-4">
                <h4 class="text-center text-uppercase">Đăng nhập tài khoản</h4>
                <form action="?controller=login" method="post">
                    <div class="row">
                        <div class="col-md"></div>
                        <div class="col-md-5 mt-5">
                            <div class="mb-4">
                                <input type="text" name="username" style="box-shadow:none;"
                                    class="form-control rounded-0" id="exampleFormControlInput1"
                                    placeholder="Tên tài khoản"
                                    value="<?php echo (isset($username)) ? $username : '' ?>">
                                <?php if (isset($error['username'])) { ?>
                                <p class="text-danger"><?php echo $error['username'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="mb-4">
                                <input type="password" name="password" style="box-shadow:none;"
                                    class="form-control rounded-0" id="exampleFormControlInput1" placeholder="Mật khẩu"
                                    value="<?php echo (isset($password)) ? $password : '' ?>">
                                <?php if (isset($error['password'])) { ?>
                                <p class="text-danger"><?php echo $error['password'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="add-dn mb-4">
                                <button type="submit" class="login btn-primary rounded-0 w-100" name="btn_login"
                                    style="color:#fff; padding:10px 40px; font-size: 14px; background-color: rgb(252, 110, 131); border: 0;">ĐĂNG
                                    NHẬP</button>
                            </div>
                        </div>
                        <div class="col-md"></div>
                    </div>
                </form>
                <hr>
                <div>
                    <span class="mt-5 text-center">Hoặc đăng nhập bằng</span>
                </div>
                <hr>
                <div class="row mt-4 mb-5">
                    <div class="col d-flex justify-content-end">
                        <a href=""><img class="d-block" style="width:130px;"
                                src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt=""></a>
                    </div>
                    <div class="col">
                        <a href=""><img class="d-block" style="width:130px;"
                                src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="library/fontawesome/js/all.min.js"></script>

</html>