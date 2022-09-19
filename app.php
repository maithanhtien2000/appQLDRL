<?php

session_start();
ob_start();
include "./connectDatabase/conDatabase.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/colLeft.css">
    <link rel="stylesheet" href="./css/colRight.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nhapDiem.css">
    <title>App QLĐRL</title>
</head>

<body>

    <div class="app">

        <div class="col__left">

            <header class="col__left__header">

                <img src="https://pyu.edu.vn/Resources/Images/Subdomain/HomePage/logo/logo%20(1).png" alt="">

            </header>

            <div class="col__left__header__menu">

                <ul>
                    <li class="trangchu active" onclick="btnTrangChu()"><i class="fas fa-home-lg-alt"></i> Trang chủ
                    </li>
                    <li class="nhapdiem" onclick="btnNhapDiem()"><i class="fas fa-pen"></i> Nhập điểm</li>
                    <li class="xeploai" onclick="btnXepLoai()"><i class="fas fa-medal"></i> Xếp loại</li>
                    <li class="thongke" onclick="btnThongKe()"><i class="fas fa-analytics"></i> Thống kê</li>
                    <li class="qltaikhoan" onclick="btnQLTaiKhoan()"><i class="fas fa-user-lock"></i> Quản lý tài khoản
                    </li>
                </ul>

            </div>

        </div>

        <div class="col__right">

            <?php include './header.php' ?>

            <?php include './trangchu.php' ?>

            <?php include './nhapdiem.php' ?>

            <?php include './xeploai.php' ?>

            <?php include './thongke.php' ?>

            <?php include './quanlytaikhoan.php' ?>

        </div>


    </div>

    <script src="./js/main.js"></script>
</body>