<div class="col__right__container pageXepLoai">

    <p>Xếp loại</p>

    <div class="col__right__container__table">

        <h3>BẢNG TỔNG HỢP ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

        <div class="col__right__container__table__from">

            <div class="col__right__container__table__from__item">
                <label>Lớp:</label><br>
                <select onchange="chonLopXL()" id="selectLopXL">
                    <option value="2019-2023">DC19CNTT</option>
                    <option value="2020-2024">DC20CNTT</option>
                    <option value="2021-2025">DC21CNTT</option>
                    <option value="2022-2026">DC22CNTT</option>
                </select>
            </div>

            <div class="col__right__container__table__from__item">
                <label>Học kỳ:</label><br>
                <select>
                    <option>Học kỳ 1</option>
                    <option>Học kỳ 2</option>
                    <option>Cả năm</option>
                </select>
            </div>

            <div class="col__right__container__table__from__item">
                <label>Năm học:</label><br>
                <select>
                    <option>2021-2022</option>
                    <option>2022-2023</option>
                    <option>2023-2024</option>
                    <option>2023-2025</option>
                    <option>2023-2026</option>
                </select>
            </div>

            <div class="col__right__container__table__from__item">
                <label>Khóa học:</label><br>
                <input type="text" value="2019-2023" id="khoahocXepLoai" readonly style="cursor: default;">
            </div>

            <div class="col__right__container__table__from__item">
                <label for=""> </label><br>
                <button class="col__right__container__nutBam__nhapDiem">Xem</button>
            </div>

        </div>

        <!-- Bảng học kỳ -->
        <table style="width:100%">

            <tr class="main">
                <th style="width:5%; height: 50px;">STT</th>
                <th>Họ và tên</th>
                <th>Điểm</th>
                <th>Xếp loại</th>
            </tr>

            <tr>
                <td style="width:5%; text-align: center;">2</td>
                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    Nguyễn Văn A
                </td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 16px;">Xuất Sắc</h3>
                </td>
            </tr>
            <tr>
                <td style="width:5%; text-align: center;">2</td>
                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    Nguyễn Văn A
                </td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 16px;">Xuất Sắc</h3>
                </td>
            </tr>
            <tr>
                <td style="width:5%; text-align: center;">2</td>
                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    Nguyễn Văn A
                </td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 16px;">Xuất Sắc</h3>
                </td>
            </tr>
            <tr>
                <td style="width:5%; text-align: center;">2</td>
                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    Nguyễn Văn A
                </td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 16px;">Xuất Sắc</h3>
                </td>
            </tr>

        </table>

        <!-- Bảng cả năm -->
        <table style="width:100%; display: none;">

            <tr class="main">
                <th rowspan="2" style="height: 50px;">STT</th>
                <th rowspan="2">Họ và tên</th>
                <th style="padding: 10px 0;" colspan="2">Học kỳ 1</th>
                <th style="padding: 10px 0;" colspan="2">Học kỳ 2</th>
                <th style="padding: 10px 0;" colspan="2">Cả năm</th>
            </tr>
            <tr class="main">
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
            </tr>

            <tr>
                <td style="width:5%; text-align: center;">1</td>

                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    Nguyễn Văn A
                </td>

                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 17px;">Xuất Sắc</h3>
                </td>

                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 17px;">Xuất Sắc</h3>
                </td>

                <td style="text-align: center;">15</td>
                <td style="text-align: center;">
                    <h3 style="font-size: 17px;">Xuất Sắc</h3>
                </td>
            </tr>

        </table>

    </div>

    <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>