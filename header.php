<header class="col__right__header">


    <?php

    if (isset($_SESSION['email'])) {

    ?>
    <div onclick="btnUser()" class="col__right__home__header__user">
        <img src="./image/avata.jpg" alt="">
        <p><?php echo $_SESSION['email']; ?> <i class="far fa-angle-down"></i></p>
        <div class="col__right__home__header__user__logout">
            <button onclick="btnQLTaiKhoan()" class="btnQLTaiKhoan">Quản lý tài khoản</button><br><br>
            <a class="btnLogOut" href="index.php">Đăng xuất</a>
            <div class="arrow-up"></div>
        </div>
    </div>

    <?php } ?>

</header>