<?php $projectName = "Topcv1"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Raleway:wght@500;700&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="topcv1.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-grid-match" uk-grid>
            <div class="uk-width-auto">
                <div class="topcv1__cardLeft uk-card uk-card-body uk-width-medium uk-height-viewport uk-background-secondary">
                    <div class="uk-cover-container">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="215" height="222"></canvas>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__cardLeft__name">Nguyễn Văn A</div>
                        <div class="topcv1__title1">NHÂN VIÊN BÁN HÀNG</div>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__title1">THÔNG TIN CÁ NHÂN</div>
                        <ul class="uk-list topcv1__cardLeft__listInfo">
                            <li><span class="uk-margin-small-right" uk-icon="icon: receiver; ratio: .8"></span> (024) 6680 5588</li>
                            <li><span class="uk-margin-small-right" uk-icon="icon: mail; ratio: .8"></span> hotro@topcv.vn</li>
                            <li><span class="uk-margin-small-right" uk-icon="icon: info; ratio: .8"></span> <a href="">https://fb.com/topcv.vn</a></li>
                            <li><span class="uk-margin-small-right" uk-icon="icon: location; ratio: .8"></span> Quận A, Hà Nội</li>
                        </ul>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__title1">CÁC KỸ NĂNG</div>
                        <ul class="uk-list topcv1__cardLeft__list1">
                            <li>(BẠN CÓ THỂ CHỌN 4-6 KỸ NĂNG ĐƯỢC VIẾT BÊN DƯỚI HOẶC TỰ VIẾT MỚI)</li>
                            <li>TÌM KIẾM KHÁCH HÀNG TIỀM NĂNG</li>
                            <li>CHỐT ĐƠN</li>
                            <li>KIẾN THỨC NGÀNH HÀNG A, B, C</li>
                            <li>DUY TRÌ MỐI QUAN HỆ KHÁCH HÀNG</li>
                            <li>SỬ DỤNG PHẦN MỀM CRM</li>
                            <li>THUYẾT PHỤC KHÁCH HÀNG</li>
                            <li>THƯƠNG THẢO KHÁCH HÀNG</li>
                            <li>GIAO TIẾP TỐT VÀ NHANH NHẸN</li>
                            <li>ĐÀO TẠO CẤP DƯỚI VỀ CÁC KỸ NĂNG BÁN HÀNG, GIAO TIẾP</li>
                            <li>LÊN CHIẾN LƯỢC PHÁT TRIỂN SẢN PHẨM MỚI</li>
                        </ul>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__title1">SỞ THÍCH</div>
                        <p class="topcv1__cardLeft__txt">Teambuilding, tham gia các câu lạc bộ, ca hát, văn nghệ, chơi thể thao</p>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__title1">NGƯỜI GIỚI THIỆU</div>
                        <div class="uk-margin topcv1__cardLeft__txt">
                            Ông Nguyễn Văn A <br>
                            CEO công ty A <br>
                            Email: abc@gmail.com <br>
                            Điện thoại: 0123 456 789
                        </div>
                        <div class="uk-margin topcv1__cardLeft__txt">
                            Bà Lê Thị B <br>
                            Trưởng phòng nhân sự công ty B <br>
                            Email: xyz@gmail.com <br>
                            Điện thoại: 0123 456 789
                        </div>
                    </div>
                    <div class="topcv1__cardLeft__item">
                        <div class="topcv1__title1">THÔNG TIN THÊM</div>
                        <p class="topcv1__cardLeft__txt">(Điền các thông tin khác nếu có).</p>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body">
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">MỤC TIÊU NGHỀ NGHIỆP</div>
                        <p class="topcv1__cardRight__txt">Nhân viên bán hàng hiệu xuất cao với X năm kinh nghiệm trong lĩnh vực A, B, C. Kỹ năng thế mạnh bao gồm tìm kiếm khách hàng tiềm năng, chốt sales và giao tiếp. Trong quá khứ đã đạt thành tích vượt 15% KPI của năm. Hiện đang tìm kiếm cơ hội trở thành nhân viên bán hàng và đóng góp tăng trưởng doanh thu cho công ty X.</p>
                    </div>
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">KINH NGHIỆM LÀM VIỆC</div>

                        <div class="uk-margin">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="topcv1__cardRight__txt1">NHÂN VIÊN KINH DOANH</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span class="topcv1__cardRight__txt1">08/2020 - 08/2022</span>
                                </div>
                            </div>
                            <div class="topcv1__cardRight__txt2">Công ty ABC</div>
                            <ul class="uk-list uk-list-bullet topcv1__cardRight__list">
                                <li>Phục vụ nhóm 20 khách hàng lớn đem về doanh thu 5-10 tỉ mỗi năm cho công ty.</li>
                                <li>Đánh giá nhu cầu khách hàng dựa trên mục tiêu công ty, cung và cầu của thị trường.</li>
                                <li>Phát triển mạng lưới quan hệ khách hàng với hơn 1000 dữ liệu khách hàng tiềm năng.</li>
                                <li>Hợp tác với bộ phận Marketing để đẩy mạnh quảng bá sản phẩm.</li>
                                <li>Thành tích: Vượt mục tiêu doanh số hơn 15% trong mỗi quý.</li>
                            </ul>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="topcv1__cardRight__txt1">NHÂN VIÊN KINH DOANH</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span class="topcv1__cardRight__txt1">08/2018 - 07/2020</span>
                                </div>
                            </div>
                            <div class="topcv1__cardRight__txt2">Công ty BCD</div>
                            <ul class="uk-list uk-list-bullet topcv1__cardRight__list">
                                <li>Chăm sóc 500 khách hàng cũ, phát triển 200 khách hàng mới.</li>
                                <li>Tư vấn 1000+ khách hàng về sản phẩm dịch vụ của công ty</li>
                                <li>Thực hiện báo giá thành công 500 hợp đồng.</li>
                                <li>Theo dõi đơn hàng (giao hàng, thu hồi công nợ).</li>
                                <li>Thuyết phục khách hàng đặt hàng và chăm sóc khách hàng.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">HỌC VẤN</div>
                        <div class="uk-margin">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="topcv1__cardRight__txt1">CHUYÊN NGÀNH QUẢN TRỊ KINH DOANH</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span class="topcv1__cardRight__txt1">2016 - 2020</span>
                                </div>
                            </div>
                            <div class="topcv1__cardRight__txt2">Đại học TOPCV</div>
                            <ul class="uk-list topcv1__cardRight__list">
                                <li>Tốt nghiệp loại Giỏi</li>
                            </ul>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="topcv1__cardRight__txt1">KHÓA HỌC KỸ NĂNG SỬ DỤNG EXCEL</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span class="topcv1__cardRight__txt1">2021 - 2021</span>
                                </div>
                            </div>
                            <div class="topcv1__cardRight__txt2">Gitiho</div>
                        </div>
                    </div>
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">DANH HIỆU VÀ GIẢI THƯỞNG</div>
                        <ul class="uk-list topcv1__cardRight__list">
                            <li><strong>2020</strong> Nhân viên xuất sắc nhất Quý 3/2020</li>
                            <li><strong>2019</strong> Giải nhất Cuộc thi Thể thao X</li>
                        </ul>
                    </div>
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">CHỨNG CHỈ</div>
                        <ul class="uk-list topcv1__cardRight__list">
                            <li><strong>2022</strong> SCPS™ - Chuyên viên bán hàng chuyên nghiệp quốc tế</li>
                            <li><strong>2021</strong> Kỹ năng bán hàng – Selling Skill (Chứng chỉ Quốc tế CBP)</li>
                        </ul>
                    </div>
                    <div class="uk-margin-medium">
                        <div class="topcv1__title1">HOẠT ĐỘNG</div>
                        <div class="uk-margin">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="topcv1__cardRight__txt1">BAN TRUYỀN THÔNG</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span class="topcv1__cardRight__txt1">06/2016 - 09/2020</span>
                                </div>
                            </div>
                            <div class="topcv1__cardRight__txt2">Câu lạc bộ Kinh doanh, trường Đại học A</div>
                            <ul class="uk-list uk-list-bullet topcv1__cardRight__list">
                                <li>Phối hợp cùng 30 nhân sự phòng truyền thông.</li>
                                <li>Tìm kiếm cơ hội hợp tác và tài trợ, kêu gọi tài trợ thành công 50 triệu.</li>
                                <li>Tổ chức sự kiện X thu hút 500 sinh viên tham gia, đạt doanh thu 20 triệu tiền vé.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/app-->
</body>
</html>