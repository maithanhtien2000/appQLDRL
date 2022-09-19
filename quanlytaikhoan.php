<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>


<div class="col__right__container pageQLTaiKhoan">

    <p>Quản lý tài khoản</p>

    <div class="col__right__container__table">

        <h3>DANH SÁCH ADMIN QUẢN LÝ ĐIỂM RÈN LUYỆN</h3>

        <table style="width:100%">

            <tr class="main">
                <th style="width:5%; height: 50px;">STT</th>
                <th style="width: 14px">Họ và tên</th>
                <th style="width: 14px">Tài khoản</th>
                <th style="width: 14px">Mật khẩu</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

            ?>

            <tr>
                <td style="padding: 10px; text-align: center;"><?php echo $row['id'] ?></td>
                <td style="padding: 10px; text-align: center;"><?php echo $row['name'] ?></td>
                <td style="padding: 10px;width: 35%; text-align: center;"><?php echo $row['email'] ?></td>
                <td style="padding: 10px;width: 35%; text-align: center;"><?php echo $row['pass'] ?></td>
            </tr>

            <?php }
            } ?>

        </table>

    </div>

    <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>