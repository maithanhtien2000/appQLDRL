<div class="col__right__container pageThongKe">

    <p>Xếp loại</p>

    <div class="col__right__container__table">

        <h3>BẢNG THỐNG KÊ TỔNG HỢP KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

        <div class="col__right__container__table__from">

            <div class="col__right__container__table__from__item">
                <label>Lớp:</label><br>
                <select onchange="chonLopTK()" id="selectLopTK">
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
                <input type="text" value="2019-2023" id="khoahocThongKe" readonly style="cursor: default;">
            </div>

            <div class="col__right__container__table__from__item">
                <label for=""> </label><br>
                <button class="col__right__container__nutBam__nhapDiem">Xem</button>
            </div>

        </div>

        <table style="width:100%">

            <tr class="main">
                <th style="width:5%; height: 50px;">Sĩ số</th>
                <th style="width: 14px">Xuất sắc (%)</th>
                <th style="width: 14px">Tốt (%)</th>
                <th style="width: 14px">Khá (%)</th>
                <th style="width: 14px">Trung bình khá (%)</th>
                <th style="width: 14px">Trung bình (%)</th>
                <th style="width: 14px">Yếu (%)</th>
            </tr>

            <tr>
                <td rowspan="2" style="width:5%; text-align: center;">22</td>
                <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                    5
                </td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;">15</td>
            </tr>

            <tr>
                <td style="font-weight: bold; height: auto; word-wrap: break-word; padding: 10px; text-align: center;">
                    5%
                </td>
                <td style="text-align: center; font-weight: bold;">35%</td>
                <td style="text-align: center; font-weight: bold;">13%</td>
                <td style="text-align: center; font-weight: bold;">22%</td>
                <td style="text-align: center; font-weight: bold;">22%</td>
                <td style="text-align: center; font-weight: bold;">11%</td>
            </tr>

        </table>

    </div>

    <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>