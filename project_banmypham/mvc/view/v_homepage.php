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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<style>
/* header */

body {
    font-size: 14px;
    color: #363636;
    overflow-x: hidden;

}

.header-all {
    border-bottom: 1px solid #ebebeb;
    -webkit-box-shadow: 0px -8px 38px 0px rgb(66 66 66 / 23%);
    -moz-box-shadow: 0px -8px 38px 0px rgba(66, 66, 66, 0.23);
    box-shadow: 0px -8px 38px 0px rgb(66 66 66 / 23%);
    padding-top: 14px;
    padding-bottom: 10px;
    font-size: 14px;
}

.buttun-wall input {
    border: 1px solid #ebebeb;
    font-size: 14px;
}

.buttun-wall button {
    background: #363636;
    color: #fff;
    margin-left: -5px;
    border: 1px solid #ebebeb;
    font-size: 14px;
    width: 90px;
}

.buttun-wall button:hover {
    background-color: #fc6e83;
}

.wall-logo-img {
    width: 100%;
    height: auto;
}

.right-header {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}

.right-header a {
    color: #363636;
    font-size: 14px;
}

.right-header a:hover {
    color: #fc6e83;
    text-decoration: none;
    cursor: pointer
}

.her-li {
    list-style: none;
}

.her-li a {
    text-decoration: none;
}

.hot-wal a {
    text-decoration: none;
}

.dc-wal a {
    text-decoration: none;
}

.hot-wal {
    margin: 10px;
}

.dc-wal {
    margin: 10px;
}

.dkdn-wall {
    margin: 10px;
}

.dkdn-wall li a {
    margin-right: 5px;
    font-weight: 500;
}

.icon-wall li a {
    margin-right: 5px;
}

.ic-love {
    font-size: 20px;
    color: red;
}

.ic-cart {
    font-size: 20px;
    color: cornflowerblue;
}

/* end header */
/* phần danh mục */

.danhmuc {

    overflow-y: auto;
}

.danhmuc h2 {
    font-size: 26px;
    line-height: 28px;
    font-family: "Times New Rom";
    margin-top: 20px;
    margin-bottom: 10px;
    line-height: normal;
    letter-spacing: .01em;
    padding: 15px;
    text-shadow: 0 0 20px #FF0000;
}

.danhmuc-right ol a {
    text-decoration: none;
}

.danhmuc-right ol a:hover {
    color: #fc6e83;
}

.danhmuc ul {
    width: calc(100% - 15px);
    padding: 15px 0;
    margin-top: 10px;
    margin-bottom: 15px;
    list-style: none;
    margin-left: 15px;
}

.danhmuc ul li a {
    display: inline-block;
    padding: 4px 0;
    padding-left: 5px;
    text-decoration: none;
    color: #363636;
}

/* .sanpam-lienhe li {
    list-style: none;
    padding: 4px;
} */

/* .sanpam-lienhe {
    padding-left: 16px;
} */

.danhmuc li:hover a {
    color: #fc6e83;
}

.sanpam-lienhe li a {
    text-decoration: none;
    color: #363636;
}

.danhmuc ul li .icon {
    left: 0;
    color: #fc6e83;
    display: inline-block;
    line-height: 15px;
}

/* end danh mục */
/* banner right */

.img-banner-left {
    width: 100%;
    height: auto;
}

.baner-right h2 {
    text-align: center;
}

.baner-right .danhmuc-right {
    height: 259px;
}

.img-baner-1 img {
    width: 100%;
}

.danhmuc-right ol {
    padding: 10px;
    margin: 10px;
}

.danhmuc-right h2 {
    font-size: 26px;
    font-family: "Times New Rom";
    padding-top: 30px;
    text-shadow: 0 0 20px #FF0000;
}

.danhmuc-right ol li {
    margin: 8px;
    margin-left: 60px;
}

/* slider */

.swiper-slide img {
    width: 100%;
    height: auto;
}

.product-name a {
    text-decoration: none;
}

/* sham cua shop h2 */

.spcs-22 {
    text-align: center;
}

.spcs-22 h2 {
    color: white;
    padding: 20px;
    text-shadow: 0 0 20px #FF0000;
}

/* card */
/* shopping cart */

.category-products {
    width: 100%;
    float: left;
    margin-top: 0px;
}

.icon-magnifier-add:before {
    content: "\e091";
}

/* cart */

.title {
    position: relative;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 5px
}

.title h2.base_title {
    font-size: 21px;
    margin: 0;
    display: inline-block
}

.title h2.base_title a,
.title h2.base_title span {
    display: inline-block;
    padding-right: 10px;
    padding-left: 10px;
    background: #fff;
    font-family: "Quicksand", sans-serif;
    font-weight: 500;
    z-index: 10;
    position: relative;
    text-transform: uppercase;
    color: #363636
}

.title h2.base_title a:hover {
    color: #fc6e83
}

.title h2.base_title:before {
    content: "";
    width: 74%;
    height: 7px;
    background: transparent url(//bizweb.dktcdn.net/100/289/369/themes/853075/assets/line.png?1638352901868) center;
    position: absolute;
    top: 44%;
    margin-top: -2px;
    left: 13%;
    z-index: 1
}

@media (max-width: 767px) {
    .title h2.base_title:before {
        content: "";
        width: 100%;
        height: 7px;
        position: absolute;
        top: 30%;
        margin-top: -4px;
        left: 0;
        z-index: 1
    }
}

.display_ {
    display: none
}

b,
strong {
    font-weight: bold
}

.lazyload {
    background: #ebebeb
}

.lazyload.loaded {
    background: transparent
}

.hidden {
    display: none !important
}

.hidden-xs a:hover {
    color: #fc6e83;
}

@media (max-width: 767px) {
    .hidden-xs {
        display: none !important
    }
}

html {
    overflow-x: hidden
}

html,
body {
    padding: 0px !important;
    padding: 0;
    margin: 0
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
    display: block
}

.dropdown-menu {
    box-shadow: none
}

.dropdown-menu>li>a {
    white-space: inherit
}

.dropdown-menu>.active>a,
.dropdown-menu>.active>a:focus,
.dropdown-menu>.active>a:hover {
    background: none
}

body,
input,
textarea,
button,
select {
    line-height: 1.7;
    font-family: "Arial", sans-serif;
    color: #363636;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%
}

body {
    font-size: 14px;
    color: #363636;
    overflow-x: hidden
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Arial", sans-serif;
    line-height: 1.4
}

/* h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a {
        text-decoration: none;
        font-weight: inherit
    } */

a:focus {
    outline: none
}

em {
    font-style: italic
}

button {
    overflow: visible
}

form {
    margin-bottom: 30px
}

input,
textarea,
select,
fieldset {
    border-radius: 0;
    max-width: 100%
}

input.input-full,
textarea.input-full,
select.input-full,
fieldset.input-full {
    width: 100%
}

input {
    display: inline-block;
    width: auto
}

button,
input[type="submit"] {
    cursor: pointer
}

.bt-card {
    margin-left: 10px;
    margin-right: 10px;
}

.bt-card>div[class^="col"] {
    padding-right: 0px;
    padding-left: 0px
}

.btn,
input[type="submit"] {
    display: inline-block;
    height: 40px;
    line-height: 39px;
    padding: 0 20px;
    text-align: center;
    white-space: nowrap;
    outline: none !important;
    cursor: pointer;
    border: none;
    font-weight: 400;
    border-radius: 0;
    letter-spacing: 0
}


.pagination>li:first-child>a,
.pagination>li:first-child>span {
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-radius: 50%;
    background: transparent !important
}

.pagination>li:last-child>a,
.pagination>li:last-child>span {
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-radius: 50%;
    background: transparent !important
}

.pagenav {
    text-align: center;
    position: relative
}

.pagenav span {
    display: inline-block;
    margin-right: 10px;
    line-height: 30px;
    font-weight: 700
}

.nav_pagi {
    margin: 20px 0px;
    display: inline-block;
    background: #fff;
    padding-left: 10px
}

.nav_pagi .pagination {
    position: relative;
    z-index: 1;
    padding: 0 0px;
    margin: 0 0 0px;
    float: left
}

@media (max-width: 768px) {
    .nav_pagi .pagination {
        padding: 0 0px
    }
}

.nav_pagi .pagination .page-link {
    font-family: "Arial", sans-serif;
    font-weight: 400;
    float: left;
    margin: 0 2.5px;
    border-radius: 0;
    width: 40px;
    background: transparent;
    border: 1px solid #e1e1e1;
    text-align: center;
    height: 40px;
    font-size: 15px;
    padding: 0;
    line-height: 40px;
    color: #363636;
    text-decoration: none
}

.nav_pagi .pagination .page-link.page-db {
    width: auto;
    padding: 0 20px
}

.nav_pagi .pagination .page-link:hover {
    background-color: #fc6e83 !important;
    color: #fff;
    background: #fc6e83;
    border-color: #fc6e83
}

.nav_pagi .pagination .page-item .d7 {
    background: #d7d7d7
}

.nav_pagi .pagination .page-item.disabled .page-link {
    border: 0;
    display: none
}

.nav_pagi .pagination .page-item.active .page-link {
    background-color: #fc6e83;
    border-color: #fc6e83;
    background: #fc6e83;
    color: #fff;
    display: block
}

.scale_hover {
    display: block;
    overflow: hidden
}

.scale_hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.scale_hover:hover img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
}

@media (max-width: 1199px) {
    .product-action-grid {
        display: none !important
    }
}

.item_product_main {
    position: relative;
    overflow: hidden;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -ms-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    border: 1px solid #ebebeb;
    border-left: none;
    border-top: none
}

@media (max-width: 767px) {
    .item_product_main {
        margin-bottom: 0px
    }
}

.item_product_main .image_thumb {
    display: flex;
    position: relative;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    display: block;
    position: relative;
    height: 276px
}

@media (min-width: 1200px) and (max-width: 1364px) {
    .item_product_main .image_thumb {
        height: 235px
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .item_product_main .image_thumb {
        height: 212px
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .item_product_main .image_thumb {
        height: 325px
    }
}

@media (min-width: 544px) and (max-width: 767px) {
    .item_product_main .image_thumb {
        height: 190px
    }
}

@media (min-width: 376px) and (max-width: 543px) {
    .item_product_main .image_thumb {
        height: 182.5px
    }
}

@media (max-width: 375px) {
    .item_product_main .image_thumb {
        height: 157.5px
    }
}

@media (max-width: 374px) {
    .item_product_main .image_thumb {
        height: 130px
    }
}

.item_product_main img {
    max-width: 100%;
    max-height: 100%;
    width: auto !important;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    height: 100%;
    min-height: 150px
}

.item_product_main img.loaded {
    min-height: unset;
    height: unset
}

.item_product_main .product-thumbnail {
    position: relative;
    padding: 10px
}

.item_product_main .product-thumbnail .sale-flash {
    position: absolute;
    top: 8px;
    left: 8px;
    background: #fc6e83;
    width: 36px;
    height: 22px;
    color: #fff;
    z-index: 9;
    font-size: 11px;
    text-transform: uppercase;
    line-height: 22px;
    border-radius: 3px;
    text-align: center
}

.item_product_main .product-thumbnail .action {
    position: absolute;
    text-align: center;
    right: 10px;
    top: 10px;
    width: 30px;

    background: rgba(255, 255, 255, 0.6);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: 1s;
    -moz-transition: 1s;
    -ms-transition: 1s;
    -o-transition: 1s;
    transition: 1s
}

.item_product_main .product-thumbnail .btn-views {
    width: 30px;
    height: 30px;
    background: transparent;
    line-height: 30px;
    text-align: center;
    padding: 0;
    margin: 0 3px;
    font-size: 16px;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    border-radius: 0%;
    margin: 0;
    border: none;
    color: #333
}

.item_product_main .product-thumbnail .btn-views:hover {
    color: #fc6e83
}

.item_product_main form {
    margin-bottom: 0
}

.item_product_main .product-info {
    padding: 0 15px 20px;
    text-align: left;
    margin-top: 0px;
    position: relative;
    min-height: 83px
}

@media (max-width: 767px) {
    .item_product_main .product-info {
        margin-top: 0px;
        padding: 0 6px 10px;
        min-height: 100px
    }
}

.item_product_main .product-info h3 {
    width: 100%;
    float: left;
    padding: 0;
    margin: 10px 0;
    font-size: 14px;
    font-weight: 400;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap
}

.item_product_main .product-info h3 a {
    color: #363636
}

.item_product_main .product-info h3:hover {
    color: #fc6e83
}

.item_product_main .product-info h3:hover a {
    color: #fc6e83
}

.item_product_main .product-info .price-box {
    text-align: left;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 0px;
    color: #fc6e83;
    font-family: "Arial", sans-serif
}

.item_product_main .product-info .price-box .compare-price {
    color: #adadad;
    text-decoration: line-through;
    font-size: 14px;
    font-weight: 400;
    margin-left: 10px
}

@media (max-width: 767px) {
    .item_product_main .product-info .price-box {
        font-size: 14px
    }
}

.item_product_main .product-info .product-action-add {
    position: absolute;
    left: 15px;
    top: 33px;
    display: none
}

.item_product_main .product-info .product-action-add .btn,
.item_product_main .product-info .product-action-add input[type="submit"] {
    background: transparent;
    font-weight: 700;
    box-sizing: none;
    box-shadow: none;
    /* text-decoration: underline; */
    text-transform: uppercase;
    padding-left: 15px;
    font-size: 13px;
    font-family: "Arial", sans-serif;
    padding: 0
}

.item_product_main .product-info .product-action-add .btn:hover,
.item_product_main .product-info .product-action-add input[type="submit"]:hover {
    color: #fc6e83
}

@media (min-width: 1200px) {
    .item_product_main:hover .product-thumbnail .action {
        opacity: 1;
        visibility: visible
    }

    .item_product_main:hover .product-action-add {
        display: block
    }

    .item_product_main:hover .price-box {
        display: none
    }
}

/* button next*/

.slick-arrow:hover {
    background: #fff;
    color: #fc6e83;
}

.slick-prev {
    position: absolute;
    top: 45%;
    left: 0;
    width: 30px;
    z-index: 2;
    border-radius: 50%;
    height: 30px;
    border: none;
    box-shadow: 0px 3px #fc6e83;
    font-size: 18px;
    color: #fc6e83;
    background-color: pink;
}

.slick-next {
    position: absolute;
    top: 45%;
    right: 0;
    z-index: 2;
    width: 30px;
    border-radius: 50%;
    height: 30px;
    box-shadow: 0px 3px #fc6e83;
    border: none;
    color: #fc6e83;
    font-size: 18px;
    background-color: pink;
}

/* card video  */

.card-vd h2 {
    text-align: center;
    color: #fff;
    text-shadow: 0 0 20px #FF0000;
    padding: 10px;
    align-items: center;
}

.slider-videos img {
    border-radius: 30px;
    width: 100%;
    padding: 20px;
}

.ctn-1 {
    position: relative;
}

/* end card video */
/* footer */

.all-footer-1 {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    background: #f8f9fb;
    padding: 15px;
}

.menu-footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.mail-footer input {
    border: 1px solid #ebebeb;
    width: 250px;
    height: 35px;
}

.mail-footer button {
    background: #363636;
    color: #fff;
    border: 1px solid #ebebeb;
    margin-left: -5px;
    height: 35px;
    width: 90px;
    font-size: 14px;
}

.mail-footer button:hover {
    background-color: #fc6e83;
}

.menu-footer li {
    padding: 15px;
}

footer {

    overflow: hidden;
    color: #333;
    padding-left: 15px;
    padding-right: 15px;
}

footer .footer-inner {
    padding: 40px 0 25px;
}

.padding-top-50 {
    padding-top: 50px !important;
}

footer.footer .list-menu {
    padding-left: 0px;
}

footer .list-menu {
    margin-bottom: 15px;
    line-height: 18px;
    color: #898989;
    font-size: 14px;
}

.margin-top-10 {
    margin-top: 10px !important;
}

footer .site-footer .footer-widget>h3 {
    border-bottom: 1px solid #ebebeb;
    margin-bottom: 20px;
}

footer .site-footer h3 {
    position: relative;
    margin: 0;
    padding: 8px 0 5px;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
}

.list-menu-1 li {
    padding: 12px 0px;
}

.list-menu-2 li {
    padding: 12px 0px;
}

.site-footer .footer-widget>h3 {
    border-bottom: 1px solid #ebebeb;
    margin-bottom: 20px;
    width: 154px;
}

.fom-ft {
    display: flex;
    justify-content: space-between;
}

.ic-dd-1 {
    font-size: 30px;
    margin-right: 10px;
    color: rgb(55, 55, 238);
}

.ic-dd-2 {
    font-size: 30px;
    margin-right: 10px;
    color: rgb(112, 112, 243);
}

.ic-dd-3 {
    font-size: 30px;
    margin-right: 10px;
    color: rgb(238, 55, 116);
}

.anl-menu {
    border: 1px solid black;
}

.menu-footer li {
    list-style: none;
}

.menu-footer li a {
    text-decoration: none;
}

.footer-widget li a {
    text-decoration: none;
}

.menu-footer li a {
    color: #363636;
}

.menu-footer li a:hover {
    color: #fc6e83;
}

.item {
    list-style: none;
}

.item-lh {
    list-style: none;
}

.item-lh a {
    color: #363636;
}

.item-lh a:hover {
    color: #fc6e83;
}

.footer-widget h3 a {
    color: #363636;
    text-decoration: none;
}

.footer-widget h3 a:hover {
    color: #fc6e83;
}

.footer-widget ul li {
    list-style: none;
}

.footer-widget ul li a {
    color: #363636;
}

.footer-widget ul li a:hover {
    color: #fc6e83;
}

.lh-ft a {
    text-decoration: none;
    color: #363636;
}

.lh-ft a:hover {
    color: #fc6e83;
}

.icon-fb li {
    list-style: none;
}

/* ARROW BACK TO HEADER */
#scrollTopBtn {
    display: none;
    position: fixed;
    bottom: 60px;
    right: 15px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: rgb(252, 110, 131);
    border: 1px solid #ccc;
    color: white;
    cursor: pointer;
    opacity: 0.9;
    width: 40px;
    height: 35px;
}

/* end ft */
</style>

<body>
    <?php  

// Kiểm tra xem có thông báo thanh toán thành công hay không
if (isset($_GET['payment_success']) && $_GET['payment_success'] === 'true') {
    echo '<p style="color: green;">Đã thanh toán thành công!</p>';
}
    ?>
    <!-- HEADER BEGIN -->
    <header>
        <div class="header-all">
            <div class="container">
                <div class="row hear-mn">
                    <div class="col-2 col-md-2 col-sm-2 logo-wall">
                        <a href="?controller=homepage"><img src="../images/HEADER/logo (1).webp" class="wall-logo-img"
                                alt=""></a>
                    </div>
                    <div class="col-10 col-md-10 col-sm-10 right-header">
                        <form class="buttun-wall mb-0" action="#">
                            <input name="keyword" type="text" placeholder="Từ khóa tìm kiếm ..."
                                value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : ""  ?>">
                            <input type="hidden" name="controller" value="c_products" />
                            <button type="submit">Tìm kiếm</button>
                        </form>
                        <div class="hot-wal" style="margin-left: 70px;">
                            <i class="fa-solid fa-headphones" style="color:red ;padding-right:10px;"></i>
                            <a href="tel:1900 6750" style="font-weight:500 ;">Hỗ trợ:<span>1900 6750</span></a>
                        </div>
                        <div class="dc-wal">
                            <i class="fa-solid fa-location-dot" style="color:red ;padding-right:10px ;"></i>
                            <a href="?controller=c_contactus" style="font-weight:500 ;">Địa chỉ: <span>118 Nguyen Khanh toan cau giay ha noi</span></a>
                        </div>
                        <div class="dkdn-wall">

                        </div>
                        <div class="icon-wall" style="    padding-left: 100px;
    width: 800px;
    display: flex;
    justify-content: space-between;">
                        <li class="her-li" style="    position: relative;">
    <a href="?controller=c_productfavorite"><i class="fa-solid fa-heart ic-love"></i> 
        <small style="position: absolute;right: 48%; top: -8px;background: #fc6e83;width: 11px;border-radius: 50%;height: 17px;color: white;width:17px;">
            <?php
            if (isset($_SESSION['cart4'])) {
                echo array_sum(array_column($_SESSION['cart4'], 'sl'));
            } else {
                echo 0;
            }
            ?>
        </small>
    </a>
    
    <a href="?controller=cart"><i class="fa-solid fa-cart-shopping ic-cart"></i> 
        <small style="position: absolute;right: -7%; top: -8px;background: #fc6e83;width: 11px;border-radius: 50%;height: 17px;color: white;width:17px;">
            <?php
            if (isset($_SESSION['cart4'])) {
                echo array_sum(array_column($_SESSION['cart4'], 'sl'));
            } else {
                echo 0;
            }
            ?>
        </small>
    </a>

</li>
<li style="list-style: none;">
    <?php if (isset($_SESSION['username'])): ?>
        <a href="?controller=log_out">
            <i class="fa-solid fa-right-to-bracket"></i>
            <?= htmlspecialchars($_SESSION['username']); // Hiển thị tên người dùng ?>
        </a>
    <?php else: ?>
        <a href="?controller=login">
            <i class="fa-solid fa-right-to-bracket"></i>
            Login
        </a>
    <?php endif; ?>
</li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->



    <!-- MAIN BEGIN -->
    <main>
        <div class="container">
            <div class="row main-bg">
                <!-- danh muc -->
                <div class="col-2 col-md-2 col-md-2 col-sm-12 px-0 th-danhmuc">
                    <div class="danhmuc position-fixed" style="width:219px; border: 1px solid #ebebeb;">
                        <h2>DANH MỤC</h2>
                        <div style="border-top: 1px solid #ebebeb;"></div>
                        <ul>
                            <li><i class="fa-regular fa-star icon"></i><a href="?controller=homepage">Trang chủ</a>
                            </li>
                            <li><i class="fa-regular fa-heart icon"></i><a href="?controller=c_products">Sản phẩm</a>
                            </li>
                            <li><i class="fa-regular fa-heart icon"></i><a href="?controller=c_introduction">Giới
                                    thiệu</a></li>
                            <li><i class="fa-regular fa-gem icon"></i><a href="?controller=c_news">Tin tức</a></li>
                            <li><i class="fa-regular fa-gem icon"></i><a href="?controller=c_contactus">Liên hệ</a></li>
                        </ul>
                        <!-- lien he -->
                        <div class="sanpam-lienhe">
                            <img src="../images/banner/slider_banner_2.webp" alt=""
                                style="width: 100%;height: 246px;margin-top: -15px; border-top: 1px solid #ebebeb;">
                        </div>
                    </div>
                </div>
                <!-- banner right -->
                <div class="col-10 d-flex all-baner-right p-0">
                    <div class="col-9">
                        <img style="height: 100%;" src="../images/banner/slider_1.webp" class="img-banner-left" alt="">
                    </div>
                    <div class="col-3  baner-right" style="border: 1px solid #ebebeb;">
                        <div class="img-baner-1" style="border-bottom: 1px solid #ebebeb;">
                            <img src="../images/banner/slider_banner_3.webp" alt="">
                        </div>

                        <div class="img-baner-1">
                            <img src="../images/banner/slider_banner_1.webp" alt="">
                        </div>

                    </div>
                </div>
                <!-- end banner right -->
            </div>
            <!--all slider -->
            <div class="row cardd-slider">
                <div class="col-2"></div>
                <div class="col-10 p-0">
                    <!-- slider -->
                    <div class="swiper mySwiper" style="border: 1px solid #ebebeb ;">
                        <div class="swiper-wrapper">
                            <!-- card-slide -->
                            <?php foreach ($product as $key => $value) { ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-lg-fix-5 product-col clear">
                                <div>
                                    <div class="item_product_main">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-id="product-actions-9619682" enctype="multipart/form-data">
                                            <div class="product-thumbnail clearfix">
                                                <div class="reviews hidden">
                                                    <div class="bizweb-product-reviews-badge" data-id="9619682"></div>
                                                </div>
                                                <a class="image_thumb scale_hover"
                                                    href="?controller=c_productdetails&id_product=<?php echo $value['id_product'] ?>"
                                                    title="">
                                                    <img class="lazyload loaded" src="<?php echo $value['thumbnail'] ?>"
                                                        alt="" data-was-processed="true">
                                                </a>
                                                <div class="action">
                                                    <a class="ajax_addtocart btn-views js-btn-wishlist"
                                                        href="javascript:void(0)" title="Đến trang sản phẩm yêu thích"
                                                        data-handle="sua-tam-victoria-s-secret-quyen-ru"><i
                                                            class="far fa-heart ego-added"></i></a>

                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a
                                                        href="?controller=c_productdetails&id_product=<?php echo $value['id_product'] ?>"
                                                        title="">
                                                        <?php echo $value['name'] ?></a></h3>
                                                <div class="price-box">
                                                    <?php echo number_format($value['price']) ?>₫
                                                    <span class="compare-price"><?php echo $value['cost'] ?></span>
                                                </div>
                                                <div class="product-action-add clearfix">

                                                    <input type="hidden" name="variantId" value="15346427">
                                                    <button
                                                        class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active "
                                                        title="Thêm vào giỏ hàng">
                                                        <a
                                                            href="?controller=c_add_to_cart&id_product=<?php echo $value['id_product'] ?>">
                                                            Thêm vào giỏ hàng</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- end card slide -->
                            <!-- end card slide -->
                        </div>
                    </div>
                    <!--end slider -->
                </div>
            </div>
            <div class="row sp-h2h">
                <div class="col-2"></div>
                <div class="col-10 spcs-22">
                    <h2>SẢN PHẨM CỦA SHOP</h2>
                </div>
            </div>
            <div class="row shop-carrd">
                <div class="col-2"></div>
                <div class="col-10 p-0">
                    <!-- Shoping cart -->
                    <div class="container2" style="border: 1px solid #ebebeb ;">
                        <div class="row card-shop">
                            <div class=" section col-xl-12 col-lg-12 p-0">
                                <div class="main_container collection">
                                    <div class="category-products products">
                                        <div class="clearfix"></div>
                                        <section
                                            class="products-view products-view-grid collection_reponsive list_hover_pro">
                                            <div class="row row-noGutter bt-card">
                                                <?php foreach ($product as $key => $value) { ?>
                                                <div
                                                    class="col-6 col-sm-6 col-md-6 col-lg-3 col-lg-fix-5 product-col clear">
                                                    <div class="item_product_main">
                                                        <form action="" method="post" class="variants product-action"
                                                            data-id="product-actions-9619682"
                                                            enctype="multipart/form-data">
                                                            <div class="product-thumbnail clearfix">
                                                                <div class="reviews hidden">
                                                                    <div class="bizweb-product-reviews-badge"
                                                                        data-id="9619682"></div>
                                                                </div>
                                                                <a class="image_thumb scale_hover"
                                                                    href="?controller=c_productdetails&id_product=<?php echo $value['id_product'] ?>"
                                                                    title="">
                                                                    <img class="lazyload loaded"
                                                                        src="<?php echo $value['thumbnail'] ?>" alt=""
                                                                        data-was-processed="true">
                                                                </a>
                                                                <div class="action">
                                                                    <a class="ajax_addtocart btn-views js-btn-wishlist"
                                                                        href="javascript:void(0)"
                                                                        title="Đến trang sản phẩm yêu thích"
                                                                        data-handle="sua-tam-victoria-s-secret-quyen-ru"><i
                                                                            class="far fa-heart ego-added"></i></a>

                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-name"><a
                                                                        href="?controller=c_productdetails&id_product=<?php echo $value['id_product'] ?>"
                                                                        title="">
                                                                        <?php echo $value['name'] ?></a></h3>
                                                                <div class="price-box">
                                                                    <?php echo number_format($value['price']) ?>₫
                                                                    <span
                                                                        class="compare-price"><?php echo $value['cost'] ?></span>
                                                                </div>
                                                                <div class="product-action-add clearfix">

                                                                    <input type="hidden" name="variantId"
                                                                        value="15346427">
                                                                    <button
                                                                        class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active "
                                                                        title="Thêm vào giỏ hàng">
                                                                        <a
                                                                            href="?controller=c_add_to_cart&id_product=<?php echo $value['id_product'] ?>">
                                                                            Thêm vào giỏ hàng</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card video slider -->
                            <div class="card-vd">
                                <h2>VIDEO NỔI BẬT </h2>
                                <div class="slider-videos">
                                    <div class="video-s">
                                        <?php foreach ($video as $key => $value) { ?>
                                        <div class="ctn-1">
                                            <div class="videoLink">
                                                <img src="<?php echo $value['img'] ?>" alt=""
                                                    style="position:relative;">
                                                <a href="https://www.youtube.com/watch?v=bq6Yp_mAO0k"><i
                                                        class="fa-solid fa-circle-play"
                                                        style="position: absolute;z-index: 3;left:110px;top: 110px;font-size: 50px; color: #fff;"></i></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </main>
    <!-- MAIN END -->

    <!-- FOOTER BEGIN -->
    <footer>
        <div class=container>
            <div class="row footer-bg">
                <div class="col-2"></div>
                <div class="col-10 p-0">
                    <div class="all-footer-1" style="border: 1px solid #ebebeb;background: #f8f9fb;">
                        <div class="mail-footer">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button> Gửi ngay</button>
                        </div>
                        <div class="menu-footer">
                            <li><i class="fa-solid fa-location-dot" style="margin-right:3px ;color: #fc6e83;"></i><a
                                    href="?controller=c_contactus">Địa chỉ</a></li>
                            <div style="border:1px solid #ebebeb ; height: 26px;"></div>
                            <li><i class="fa-solid fa-phone" style="margin-right: 3px; color: #fc6e83;"></i><a
                                    href="tel:1900 6750">Gọi ngay</a></li>
                            <div style="border:1px solid #ebebeb ; height: 26px;"></div>
                            <li><i class="fa-solid fa-comment-dots" style="margin-right:3px ;color: #fc6e83;"></i><a
                                    href="">Chat ngay</a></li>
                            <div style="border:1px solid #ebebeb ; height: 26px;"></div>
                            <li><i class="fa-solid fa-envelope-open-text"
                                    style="margin-right: 3px; color: #fc6e83;"></i><a href="?controller=c_contactus">Gửi
                                    lời nhắn</a></li>
                        </div>
                    </div>
                    <div class="site-footer">
                        <div class="containerxx">
                            <div class="footer-inner padding-top-50"
                                style="border: 1px solid #ebebeb;background: #f8f9fb;">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
                                        <div class="footer-widget active">
                                            <div class="logo">

                                                <a href="" class="logo-wrapper ">
                                                    <img src="../images/HEADER/logo (1).webp" alt="logo "
                                                        style="padding-left:30px ;">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="list-menu list-showroom margin-top-10">
                                                    <li class="item">
                                                        <p><b>Hà Nội:</b> 118 Nguyen Khanh toan cau giay ha noi</p>
                                                    </li>
                                                    <li class="item">
                                                        <p><b>TP HCM:</b> ApTech, Tp Hồ Chí Minh</p>
                                                    </li>
                                                    <li class="item">
                                                        <p><b>Hải Phòng:</b> ApTech, Hải Phòng</p>
                                                    </li>
                                                    <li>
                                                        Liên hệ:
                                                        <a href="tel:1900 6750"> 1900 6750</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
                                        <div class="footer-widget">
                                            <h3>
                                                <a role="button" class="collapsed" data-toggle="collapse"
                                                    aria-expanded="false" data-target="#collapseListMenu01"
                                                    aria-controls="collapseListMenu01" style="padding-left:30px ;">
                                                    Về chúng tôi <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </a>
                                            </h3>

                                            <ul class="list-menu margin-top-10 list-menu-1">

                                                <li><a href="?controller=homepage">Trang chủ</a></li>

                                                <li><a href="?controller=c_products">Sản phẩm</a></li>

                                                <li><a href="?controller=c_introduction">Giới thiệu</a></li>

                                                <li><a href="?controller=c_news">Tin tức</a></li>

                                                <li><a href="?controller=c_contactus">Liên hệ</a></li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
                                        <div class="footer-widget">
                                            <h3>
                                                <a role="button" class="collapsed" data-toggle="collapse"
                                                    aria-expanded="false" data-target="#collapseListMenu02"
                                                    aria-controls="collapseListMenu02" style="padding-left:30px ;">
                                                    Trợ giúp <i class="fas fa-angle-down" aria-hidden="true"></i>
                                                </a>
                                            </h3>
                                            <ul class="list-menu margin-top-10 list-menu-2">
                                                <li><a href="?controller=homepage">Trang chủ</a></li>

                                                <li><a href="?controller=c_products">Sản phẩm</a></li>

                                                <li><a href="?controller=c_introduction">Giới thiệu</a></li>

                                                <li><a href="?controller=c_news">Tin tức</a></li>

                                                <li><a href="?controller=c_contactus">Liên hệ</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                                        <div class="footer-widget active">
                                            <h3>
                                                <a href="tin-tuc" title="Tin tức nổi bật">Tin tức nổi bật</a>
                                            </h3>
                                            <div class="content">
                                                <div class="list-blogs list-image margin-top-25">
                                                    <div class="blog_in clearfix">
                                                        <a class="image image-blog" href="?controller=c_news"
                                                            title="Công dụng của dầu oliu trong làm đẹp không phải ai cũng biết">
                                                            <img class="lazyload loaded"
                                                                src="../images/img footter/foody-mobile-mgs-jpg-707-635973769703218073.webp"
                                                                alt="Công dụng của dầu oliu trong làm đẹp không phải ai cũng biết"
                                                                data-was-processed="true">
                                                        </a>
                                                        <div class="blog-info">
                                                            <h3 class="blog-item-name"><a href="?controller=c_news"
                                                                    title="Công dụng của dầu oliu trong làm đẹp không phải ai cũng biết">Công
                                                                    dụng của dầu oliu trong làm đẹp không phải
                                                                    ai cũng biết</a></h3>
                                                            <div class="post-time">
                                                                <div class="inline-block">11/01/2018
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="blog_in clearfix">
                                                        <a class="image image-blog" href="?controller=c_news"
                                                            title="Học lỏm bí quyết đơn giản giúp trắng da, mượt tóc">
                                                            <img class="lazyload loaded"
                                                                src="../images/img footter/cg210-7-san-pham-cham-soc-toc-800x500-c.webp"
                                                                alt="Học lỏm bí quyết đơn giản giúp trắng da, mượt tóc"
                                                                data-was-processed="true">
                                                        </a>
                                                        <div class="blog-info">
                                                            <h3 class="blog-item-name"><a href="?controller=c_news"
                                                                    title="Học lỏm bí quyết đơn giản giúp trắng da, mượt tóc">Học
                                                                    lỏm bí quyết đơn giản giúp trắng da, mượt
                                                                    tóc</a></h3>
                                                            <div class="post-time">
                                                                <div class="inline-block">11/01/2018
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fom-ft"
                        style="padding:13px ; align-items: center; border: 1px solid;border: 1px solid #ebebeb;background: #f8f9fb;">
                        <div class="lh-ft">
                            <a href="">© Pink Beauty</a>
                        </div>
                        <div class="icon-fb">
                            <li class="her-li">
                                <a href=""><i class="fa-brands fa-facebook ic-dd-1"></i></a>
                                <a href=""><i class="fa-brands fa-twitter-square ic-dd-2"></i></a>
                                <a href="tel:1900 6750"><i class="fa-solid fa-square-phone ic-dd-3"></i></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW BACK TO HEADER -->
        <button id="scrollTopBtn" title="Back to header"><i class="fa-solid fa-chevron-up"
                title="back to header"></i></button>
    </footer>
    <!-- FOOTER END -->
    <script src="/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="/library/fontawesome/js/all.min.js"></script>
    <script src="/library/slick/slick/slick.min.js"></script>
    <script></script>
    <!-- scrip slick -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    // ARROW BACK TO HEADER
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {

        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            document.getElementById("scrollTopBtn").style.display = "block";
        } else {
            document.getElementById("scrollTopBtn").style.display = "none";
        }
    }

    document.getElementById('scrollTopBtn').addEventListener("click", function() {
        document.body.scrollTop = 1;
        document.documentElement.scrollTop = 1;
    });
    </script>
    <script>
    $('.swiper-wrapper').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: false,

                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
    <!-- end slick  -->
    <!-- slidervideos -->
    <script>
    $('.video-s').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: false,
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
    <!-- end slider videos -->
    <!-- telephone -->
    <script type="text/javascript">
    (function(b) {
        var a = "https://web.cmbliss.com/webtools/hotline/";
        b.fn.hotline = function(d) {
            var f = b.extend({
                themes: "default",
                phone: "1900 6750",
                top: 0,
                p_top: false,
                left: 0,
                p_left: false,
                bottom: 0,
                p_bottom: true,
                right: 0,
                p_right: true,
                img_icon: a + "images/icon-call.png",
                bg_color: "#fc6e83",
                abg_color: "rgb(238, 55, 116)",
                show_bar: true,
                position: "fixed"
            }, d);
            var c = f.phone.split("");
            var h = "";
            for (var e = 0; e < c.length; e++) {
                if (isNaN(c[e])) {} else {
                    if (c[e] != " ") {
                        h += c[e]
                    }
                }
            }
            switch (f.themes) {
                case "default":
                    b(":root").css({
                        "--cmbHl-bg": f.bg_color,
                        "--cmbHl-abg": f.abg_color
                    });
                    var g =
                        '<div class="hotline-phone-ring-wrap">                    <div class="hotline-phone-ring">                        <div class="hotline-phone-ring-circle"></div>                        <div class="hotline-phone-ring-circle-fill"></div>                        <div class="hotline-phone-ring-img-circle">                            <a href="tel:' +
                        h + '" class="pps-btn-img">                                <img src="' + f.img_icon +
                        '" alt="Gá»i Ä‘iá»‡n thoáº¡i" width="50">                            </a>                        </div>                    </div>                </div>';
                    var j = '<div class="hotline-bar">                        <a href="tel:' + h +
                        '">                            <span class="text-hotline">' + f.phone +
                        "</span>                        </a>                    </div>";
                    b(this).append(g);
                    if (f.show_bar) {
                        b(this).find(".hotline-phone-ring-wrap").append(j)
                    }
                    b(this).find(".hotline-phone-ring-wrap").css({
                        position: f.position
                    });
                    if (f.p_top) {
                        b(this).find(".hotline-phone-ring-wrap").css({
                            top: f.top
                        })
                    }
                    if (f.p_right) {
                        b(this).find(".hotline-phone-ring-wrap").css({
                            right: f.right
                        });
                        b(this).find(".hotline-phone-ring-wrap").find(".hotline-bar").css({
                            left: "auto",
                            right: "33px"
                        });
                        b(this).find(".hotline-phone-ring-wrap").find(".hotline-bar a").css({
                            "text-indent": "10px"
                        })
                    }
                    if (f.p_bottom) {
                        b(this).find(".hotline-phone-ring-wrap").css({
                            bottom: f.bottom
                        })
                    }
                    if (f.p_left) {
                        b(this).find(".hotline-phone-ring-wrap").css({
                            left: f.left
                        })
                    }
                    b("body").append('<link rel="stylesheet" href="' + a + "css/hotline-themes/" + f.themes +
                        '.css" type="text/css" />');
                    break;
                case "hero":
                    b(":root").css({
                        "--cmbHl-H-bg": f.bg_color,
                        "--cmbHl-H-abg": f.abg_color
                    });
                    var g = '<div class="hotline-hero hero-btn">                    <a href="tel:' + h +
                        '" class="btn">                        <img src="' + f.img_icon +
                        '" alt="Gá»i Ä‘iá»‡n thoáº¡i">                    </a>                    <span class="particles-circle"></span>                    <span class="particles-circle"></span>                    <span class="particles-circle"></span>                    <span class="particles-circle"></span>                    <span class="particles-circle"></span>                    <span class="particles-circle"></span>                </div>';
                    var j = '<span class="hotline-hero-text">' + f.phone + "</span>";
                    b(this).append(g);
                    if (f.show_bar) {
                        b(this).find(".hotline-hero a").append(j)
                    }
                    b(this).find(".hotline-hero").css({
                        position: f.position
                    });
                    if (f.p_top) {
                        b(this).find(".hotline-hero").css({
                            top: f.top + 20
                        })
                    }
                    if (f.p_right) {
                        b(this).find(".hotline-hero").css({
                            right: f.right
                        });
                        b(this).find(".hotline-hero").css({
                            left: "auto",
                            right: b(this).find(".hotline-hero .btn").width() + 33
                        });
                        b(this).find(".hotline-hero").css({
                            "text-indent": "10px"
                        })
                    }
                    if (f.p_bottom) {
                        b(this).find(".hotline-hero").css({
                            bottom: f.bottom + 70
                        })
                    }
                    if (f.p_left) {
                        b(this).find(".hotline-hero").css({
                            left: f.left + 80
                        })
                    }
                    b("body").append('<link rel="stylesheet" href="' + a + "css/hotline-themes/" + f.themes +
                        '.css" type="text/css" />');
                    b(this).find(".hero-btn").click(function() {
                        if (!b(".hero-btn").parent().hasClass("active")) {
                            b(this).parent().stop().addClass("active");
                            setTimeout(function() {
                                b(".hero-btn").parent().removeClass("active")
                            }, 2000)
                        }
                    });
                    break
            }
        }
    }(jQuery));
    </script>
    <script type="text/javascript">
    $("body").hotline({
        phone: "1900 6750",
        p_bottom: true,
        bottom: 100,
        p_right: true,
        right: 0,
        bg_color: "rgb(238, 55, 116)",
        abg_color: "#fc6e83",
        show_bar: true,
        position: "fixed",
    });
    </script>
    <!-- telephone end -->
</body>

</html>