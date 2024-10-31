<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>HUFLIT libary</title>
     <link rel="stylesheet" href="../css/style.css">
     <!---------------------------------------------------------------header section--------------------------------------------------------->
</head>
<body>
<div id="header">
        <a href="homepage.php" class="logo" id="home">
          <img src="../image/index/logohuflit.png"></a>
        <ul class="menu">
            <li>
            <a href="homepage.php">TRANG CHỦ</a>
            </li>
            <li> 
            <a href="#">SÁCH GIÁO TRÌNH</a>
            <div class="dropdown">
                <a href="#newcolection">Giáo trình đại cương</a>
                <a href="#">Giáo trình phổ biến</a>
                <a href="#">Giáo trình</a>
                <a href="#">Giáo trình</a>
            </div>
            </li>
            <li>
                <a href="SACHTC.html">TRA CỨU</a>
                <div class="dropdown">
                    <a href="#">Tra cứu Opac</a>
                    <a href="#">Tra cứu môn học</a>
                    <a href="#">Tra cứu tài liệu nội sinh</a>
                    <a href="#">Tra cứu luận văn</a>    
            </div>
            </li>
            <li>
                <a href="SACHTK.html">SÁCH THAM KHẢO</a>
                <div class="dropdown">
                    <a href="#">Sách ...</a>
                    <a href="#">Sách ...</a>
                    <a href="#">Sách ...</a>
                    <a href="#">Sách ...</a>
                </div>
            </li>
        </ul>
        <div class="icons">
            <a href="search.html" class="fas fa-search"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
            <a href="index.php" class="fas fa-user"></a>
        </div>
    </div>
     <!-------------------------------------------------------------------end------------------------------------------------------------------->
     
          <!------------------------------------------------------------ bestseller section-------------------------------------------------------->
          <section class="products" id="sale">

            <h1 class="heading"><span>Sách hay mỗi tuần</span></h1>
            <div class="box-container">
                
                <div class="box">
                    <div class="image">
                        <img src="../image/index/Kynangbanhanghieuqua.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('Kỹ năng bán hàng hiệu quả', '../image/index/Kynangbanhanghieuqua.jpeg'); return false;">Thêm Sách</a>
                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Kỹ năng bán hàng hiệu quả</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="../image/index/The Economics of Tourism Destinations.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('The Economics of Tourism Destinations', '../image/index/The Economics of Tourism Destinations.jpeg'); return false;">Thêm Sách</a>                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>The Economics of Tourism Destinations</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="../image/index/Strategic Management.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('Strategic Management', '../image/index/Strategic Management.jpeg'); return false;">Thêm Sách</a>
                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Strategic Management</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="../image/index/Essentials of Food Science.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('Essentials of Food Science', '../image/index/Essentials of Food Science.jpeg'); return false;">Thêm Sách</a>
                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Essentials of Food Science</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                            <img src="../image/index/Kỹ năng mềm thế hệ Z.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('Kỹ năng mềm thế hệ Z', '../image/index/Kỹ năng mềm thế hệ Z.jpeg'); return false;">Thêm Sách</a>
                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Kỹ năng mềm thế hệ Z</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="../image/index/Nguồn gốc văn minh.jpeg">
                        <div class="icons">
                            <a class="cart-btn" onclick="addToCart('Nguồn gốc văn minh', '../image/index/Nguồn gốc văn minh.jpeg'); return false;">Thêm Sách</a>
                            <a href="Chitietsach.html" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Nguồn gốc văn minh</h3>
                    </div>
                </div>
            </div>
         </section>
            <!------------------------------------------------------------end---------------------------------------------------------->

            <!---------------------------------------------------------- about section-------------------------------------------------->
     <section class="about" id="about">
        <h1 class="heading"> <span>Giới thiệu chung</span> </h1>
        <div class="row">
            <div class="picture-container">
                <img src="../image/index/about.jpg">
                
            </div>
            <div class="content">
                <h3>THƯ VIỆN HUFLIT</h3> 
                <p>Thư viện Trường Đại học Ngoại ngữ - Tin học Thành phố Hồ Chí Minh được hình thành cùng với sự thành lập của 
                    nhà Trường theo quyết định số 616/TTg của Thủ tướng Chính phủ ngày 26 tháng 10 năm 1994.</p>  
                <h3>SỨ MẠNG</h3>
                <p>Sứ mạng của HUFLIT là đào tạo những con người có khả năng học tập suốt đời để trở thành công dân toàn cầu,
                   thích nghi và đóng góp tích cực cho xã hội luôn thay đổi, có ý thức phát triển bản thân, đặc biệt là ngoại ngữ và tin học,
                    thông qua các trải nghiệm thực tế.</p>
                <h3>TẦM NHÌN</h3>
                <p>HUFLIT hướng đến phụng sự xã hội bằng những con người năng động, sáng tạo, có tâm và có tầm; biết yêu thương, trân trọng cuộc sống;
                   có khả năng làm mới chính mình; đạt được hạnh phúc & tự do bằng trí tuệ và đạo đức.</p>
            </div>
        </div>
     </section>
     <!-----------------------------------------------------------------end----------------------------------------------------------------->

       <!------------------------------------------------------------ newcolection section-------------------------------------------------------->
       <section class="products" id="newcolection"> 

        <h1 class="heading"><span>Giáo trình đại cương</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="../image/index/phapluatdaicuong.jpg">
                    <div class="icons">
                        <a class="cart-btn" onclick="addToCart('Pháp luật đại cương', '../image/index/phapluatdaicuong.jpg'); return false;">Thêm Sách</a>
                        <a href="Chitietsach.html" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Pháp luật đại cương</h3>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../image/index/tamlihocdaicuong.jpg">
                    <div class="icons">
                        <a class="cart-btn" onclick="addToCart('Tâm lí học đại cương', '../image/index/tamlihocdaicuong.jpg'); return false;">Thêm Sách</a>
                        <a href="Chitietsach.html" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Tâm lí học đại cương</h3>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../image/index/Tinhocdaicuong.jpg">
                    <div class="icons">
                        <a class="cart-btn" onclick="addToCart('Tin học đại cương', '../image/index/Tinhocdaicuong.jpg'); return false;">Thêm Sách</a>
                        <a href="Chitietsach.html" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Tin học đại cương</h3>
                </div>
            </div>
        </div>
     </section>
        <!-------------------------------------------------------------end---------------------------------------------------------->

     <!---------------------------------------------------------- review section-------------------------------------------------->
     <section class="review" id="review">
        <h1 class="heading"><span>Sinh viên đánh giá</span> </h1>
      <div class="box-container">
            <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p> Thư viện được bố trí khoa học với nhiều khu vực chức năng riêng biệt như khu đọc sách,
                khu mượn sách, khu tra cứu tài liệu, khu vực dành cho sinh viên học bài.
            </p>
            <div class="user">
                <img src="../image/index/tranphuc.jpg">
                <div class="user-info">
                    <h3>Trần Phúc</h3>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p> Thư viện được cập nhật thường xuyên, 
                luôn tích hợp các tính năng mới và sửa lỗi nhanh chóng.
                Thư viện khang trang, hiện đại và tiện nghi.
            </p>
            <div class="user">
                <img src="../image/index/giahan.jpg">  
                <div class="user-info">
                    <h3>Gia Hân</h3>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Thư viện cũng được trang bị đầy đủ các trang 
            thiết bị phục vụ cho việc đọc sách và học tập như máy tính, máy in, wifi miễn phí.
            Không gian thư viện rộng rãi.
            </p>
            <div class="user">
                <img src="../image/index/vuanh.jpg">
                <div class="user-info">
                    <h3>Vũ Anh</h3>
                </div>
            </div>
        </div>
     </div>
     </section>
     </div>
      <!----------------------------------------------------------------------------------------end---------------------------------------------------------------------------------------------->

    <!-----------------------------------------------------------------------------------------footer---------------------------------------------------------------------------------------------> 
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Trường Đại học Ngoại ngữ - Tin học TP. Hồ Chí Minh (HUFLIT)</h4>
                    <ul>
                        <li><a href="#">Đc: 828 Sư Vạn Hạnh, Phường 13, Quận 10, TP. HCM</a></li>
                        <li><a href="#">SĐt: (028) 3863 2052 - (028) 3862 9232</a></li>
                        <li><a href="#">Email: contact@huflit.edu.vn</a></li>
                    </ul>
                </div>

                <div class="footer-col-time">
                    <h4>GIỜ MỞ CỬA</h4>
                    <ul>
                        <li><a href="#">Cơ sở Sư Vạn Hạnh</a></li>
                        <li><a href="#">Thứ 2 - 6: 8g00 - 20g00</a></li>
                        <li><a href="#">Thứ 7: 8g00 - 17g00</a></li>
                        <li><a href="#">Cơ sở Hóc Môn</a></li>
                        <li><a href="#">Thứ 2 - 6: 07g30 - 18g00</a></li>
                        <li><a href="#">Thứ 7: 7g30 - 16g00</a></li>
                        <li><a href="#">(Nghỉ Chủ nhật & Ngày lễ)</a></li>
                    </ul>
                </div>
                
                <div class="footer-col-link">
                    <h4>Theo dõi chúng tôi</h4>
                    <div class="social-links"> 
                        <a href="https://www.facebook.com/huflit.edu.vn"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.tiktok.com/@huflit.official?lang=vi-VN"><i class="fab fa-tiktok"></i></a>
                        <a href="http://lib.huflit.edu.vn/"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                </div>
        </div>
    </div>
   <!-----------------------------------------------------------------------end----------------------------------------------------->
   <script src="../js/addCart.js"></script>
</body>
</html> 