<?php $projectName = "Topcv2"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="topcv2.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.17/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div class="uk-container uk-container-small">
        <div class="uk-card uk-card-default uk-card-body uk-height-viewport">
            <h1 class="uk-text-center topcv2__name">Nguyễn Văn A</h1>
            <div class="uk-text-center topcv2__chucvu uk-margin">Nhân viên bán hàng</div>
            <ul class="topcv2__listinfo uk-child-width-auto uk-flex-center uk-grid-small" uk-grid>
                <li><span class="uk-margin-small-right" uk-icon="icon: receiver; ratio: .8"></span>(024) 6680 5588</li>
                <li><span class="uk-margin-small-right" uk-icon="icon: mail; ratio: .8"></span>hotro@topcv.vn</li>
                <li><span class="uk-margin-small-right" uk-icon="icon: info; ratio: .8"></span> <a href="">https://fb.com/topcv.vn</a></li>
                <li><span class="uk-margin-small-right" uk-icon="icon: location; ratio: .8"></span>Quận A, Hà Nội</li>
            </ul>
            <div class="uk-margin-medium">
                <div class="topcv2__title">MỤC TIÊU NGHỀ NGHIỆP</div>
                <p class="topcv2__txt1">Nhân viên bán hàng hiệu xuất cao với X năm kinh nghiệm trong lĩnh vực A, B, C. Kỹ năng thế mạnh bao gồm tìm kiếm khách hàng tiềm năng, chốt sales và giao tiếp. Trong quá khứ đã đạt thành tích vượt 15% KPI của năm. Hiện đang tìm kiếm cơ hội trở thành nhân viên bán hàng và đóng góp tăng trưởng doanh thu cho công ty X.</p>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">HỌC VẤN</div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt2">Đại học TOPCV</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2016 - 2020</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="topcv2__txt1">Chuyên ngành Quản trị Kinh Doanh</div>
                        <div class="topcv2__txt1">Tốt nghiệp loại Giỏi</div>
                    </div>
                </div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt2">Gitiho</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2021 - 2021</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="topcv2__txt1">Khóa học Kỹ năng sử dụng Excel</div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">KINH NGHIỆM LÀM VIỆC</div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt2">Công ty ABC</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">08/2020 - 08/2022</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="topcv2__txt1">Nhân viên kinh doanh</div>
                    </div>
                    <ul class="uk-list uk-list-bullet topcv2__list">
                        <li>Phục vụ nhóm 20 khách hàng lớn đem về doanh thu 5-10 tỉ mỗi năm cho công ty.</li>
                        <li>Đánh giá nhu cầu khách hàng dựa trên mục tiêu công ty, cung và cầu của thị trường.</li>
                        <li>Phát triển mạng lưới quan hệ khách hàng với hơn 1000 dữ liệu khách hàng tiềm năng.</li>
                        <li>Hợp tác với bộ phận Marketing để đẩy mạnh quảng bá sản phẩm.</li>
                        <li>Thành tích: Vượt mục tiêu doanh số hơn 15% trong mỗi quý.</li>
                    </ul>
                </div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt2">Công ty BCD</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">08/2018 - 07/2020</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="topcv2__txt1">Nhân viên kinh doanh</div>
                    </div>
                    <ul class="uk-list uk-list-bullet topcv2__list">
                        <li>Chăm sóc 500 khách hàng cũ, phát triển 200 khách hàng mới.</li>
                        <li>Tư vấn 1000+ khách hàng về sản phẩm dịch vụ của công ty</li>
                        <li>Thực hiện báo giá thành công 500 hợp đồng.</li>
                        <li>Theo dõi đơn hàng (giao hàng, thu hồi công nợ).</li>
                        <li>Thuyết phục khách hàng đặt hàng và chăm sóc khách hàng.</li>
                    </ul>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">HOẠT ĐỘNG</div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt2">Câu lạc bộ Kinh doanh, trường Đại học A</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">06/2016 - 09/2020</div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="topcv2__txt1">Ban truyền thông</div>
                    </div>
                    <ul class="uk-list uk-list-bullet topcv2__list">
                        <li>Phối hợp cùng 30 nhân sự phòng truyền thông.</li>
                        <li>Tìm kiếm cơ hội hợp tác và tài trợ, kêu gọi tài trợ thành công 50 triệu.</li>
                        <li>Tổ chức sự kiện X thu hút 500 sinh viên tham gia, đạt doanh thu 20 triệu tiền vé.</li>
                    </ul>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">CHỨNG CHỈ</div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt1">SCPS™ - Chuyên viên bán hàng chuyên nghiệp quốc tế</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2022</div>
                        </div>
                    </div>
                </div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt1">Kỹ năng bán hàng – Selling Skill (Chứng chỉ Quốc tế CBP)</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2021</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">DANH HIỆU VÀ GIẢI THƯỞNG</div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt1">Nhân viên xuất sắc nhất Quý 3/2020</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2020</div>
                        </div>
                    </div>
                </div>
                <div class="topcv2__item">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="topcv2__txt1">Giải nhất Cuộc thi Thể thao X</div>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="topcv2__txt1">2019</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">CÁC KỸ NĂNG</div>
                <div class="topcv2__item"><span class="topcv2__txt3">(bạn có thể chọn 4-6 kỹ năng được viết bên dưới hoặc tự viết mới)</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Tìm kiếm khách hàng tiềm năng</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Chốt đơn</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Kiến thức ngành hàng A, B, C</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Duy trì mối quan hệ khách hàng</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Sử dụng phần mềm CRM</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Thuyết phục khách hàng</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Thương thảo khách hàng</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Giao tiếp tốt và nhanh nhẹn</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Đào tạo cấp dưới về các kỹ năng bán hàng, giao tiếp</span></div>
                <div class="topcv2__item"><span class="topcv2__txt3">Lên chiến lược phát triển sản phẩm mới</span></div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">NGƯỜI GIỚI THIỆU</div>
                <div class="topcv2__item">
                    <div class="uk-child-width-1-2" uk-grid>
                        <div>
                            <div class="topcv2__txt1">
                                Ông Nguyễn Văn A <br>
                                CEO công ty A <br>
                                Email: abc@gmail.com <br>
                                Điện thoại: 0123 456 789
                            </div>
                        </div>
                        <div>
                            <div class="topcv2__txt1">
                                Bà Lê Thị B <br>
                                Trưởng phòng nhân sự công ty B <br>
                                Email: xyz@gmail.com <br>
                                Điện thoại: 0123 456 789
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">SỞ THÍCH</div>
                <p class="topcv2__txt1">Teambuilding, tham gia các câu lạc bộ, ca hát, văn nghệ, chơi thể thao</p>
            </div>
            <div class="uk-margin-medium">
                <div class="topcv2__title">THÔNG TIN THÊM</div>
                <p class="topcv2__txt1">(Điền các thông tin khác nếu có).</p>
            </div>
        </div>
    </div>
</div>
<!--/app-->
</body>
</html>