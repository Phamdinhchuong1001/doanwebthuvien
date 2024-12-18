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
    <title>Chi tiết sách</title>
    <link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
        
        .DetailProcontainer{
            max-width: 1000px;
	        margin:auto;        
        }
        .Prodetail{
            margin-top: 120px;
            margin-bottom: 150px;
            width: auto;
            height: auto;
            display: flex !important;
            flex-wrap: wrap;
        }
        .Proimg{
            width: 500px;
            height: auto;
            margin: auto;
        }
        .Proinfo{
            font-family: Roboto;
            margin: auto;
            width: 500px;
            height: auto;
        }
        .Booktitle{
            color: #06c;
            font-family: Roboto;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .tacgia{
            color: #4f4f4f;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
            margin-bottom: 2.5px;
        }
        .tacgia span{
            font-size: 16px;
            color: #06c;
            font-weight: normal;
        }

        .dichthuat{
            color: #4f4f4f;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
            margin-bottom: 2.5px;
        }
        .dichthuat span{
            font-size: 16px;
            color: #06c;
            font-weight: normal;
        }

        .theloai{
            color: #4f4f4f;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
            margin-bottom: 2.5px;
        }
        .theloai span{
            font-size: 16px;
            color: #06c;
            font-weight: normal;
        }

        .mucsach{
            color: #4f4f4f;
            font-size: 14px;
            font-style: normal;
            font-weight: bold;
            margin-bottom: 2.5px;
        }
        .mucsach span{
            font-size: 16px;
            color: #06c;
            font-weight: normal;
        }

        .like-view{
            display: flex;
            gap: 50px;
            margin-bottom: 10px;
            align-items: center;
            justify-content: center; 
            justify-content: space-between;
        }
        .like {
            display:flex; 
        }
        .view{
            display: flex; 
        }
        .mota{
            margin-top: 12px;
        }
        .mota span{
            font-weight: bold;
            color: #4F4F4F;
            text-decoration: underline 2px #158FFF;
            text-underline-offset: 8px;
        }
        .thongtinmota{
            color: #4F4F4F;
            margin-top: 15px;
            text-align: justify;
            width: auto;
            height: 200px;
            overflow: hidden;
        }
        .OptPro{
            margin-top: 10px;
            display: flex;
            gap: 50px;
        }
        .Docsach a{
            display: flex;
            color: white;
            width: auto;
            height: auto;
            background-color: #158FFF;
            border-radius: 24px;
            box-shadow: 0px 6px 0px 0px #106BE1;
            padding: 10px 20px;
        }
        .nghesach a{
            display: flex;
            color: #7D5749;
            width: auto;
            height: auto;
            background-color: #FFE123;
            border-radius: 24px;
            box-shadow: 0px 6px 0px 0px #DFC100;
            padding: 10px 20px;
        }
        .lightbox {
            display: none; 
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); 
            z-index: 1000; 
        }

        .lightbox img {
            display: block; 
            margin: 50px auto; 
            max-width: 80%; 
            max-height: 80%; 
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
        .RowProOrther{
            margin-bottom: 50px;
            width: 1170px;
            height: auto;
        }
        .TitlerPrOr{
            margin-left: 10px;
            margin-bottom: 15px;
        }
        .TitlerPrOr span{
            font-family: roboto;
            border-radius: 32px;
            background-color: #FCE02C;
            margin-left: -20px;
            padding: 7px 17px;
        }
        .SlideRowProO{
            width: 1170px; /* Chiều rộng của slider */
            display: flex;
            gap: 40px;
        }
        .DetailProOrther{
            width: 220px;
            height: auto;
            background-color: whitesmoke;
            border-radius: 15px;
        }
        .ImgProOr img{
            border-radius: 15px;
            width: 220px; 
            height: auto;
        }
        .detailProOr{
            margin: 8px;
            line-height: 1.3;
        }
        .detailProOr span {
            display: block;
        }
        .card-title{
            color: #596d79;
            font-family: roboto;
            font-size: 18px;
        } 
        .author{
            color: #596d79;
            font-family: roboto;
            font-size: 14px;
        }
        .seen{
            display: flex;
            align-items: center;
            justify-content: start;
            gap: 4px;
            color: #596d79;
            font-family: roboto;
            font-size: 11px;
        }
        .ratecmt{
            display: flex;
            justify-content: space-between;
            margin: 5px;
        }
        .love{
            display: flex;
            align-items: center;
            justify-content: start;
            gap: 4px;
            color: #596d79;
            font-family: roboto;
            font-size: 11px;
        }
    </style>
</head>
<body>
    <!---------------------------------------------------------------header section--------------------------------------------------------->
    <div id="header">
        <a href="homepage.php" class="logo" id="home">
          <img src="../image/index/logohuflit.png"></a>
        <ul class="menu">
            <li>
            <a href="homepage.php">TRANG CHỦ</a>
            </li>
            <li> 
            <a href="SGT.html">SÁCH GIÁO TRÌNH</a>
            <div class="dropdown">
                <a href="#newcolection">Giáo trình đại cương</a>
                <a href="#">Giáo trình phổ biến</a>
            </div>
            </li>
            <li>
                <a href="SACHTC.html">TRA CỨU</a>
                <div class="dropdown">
                    <a href="TCMH.html">Tra cứu môn học</a>
                    <a href="SACHTCLV.html">Tra cứu luận văn</a>     
            </div>
            </li>
            <li>
                <a href="SACHTK.html">SÁCH THAM KHẢO</a>
                <div class="dropdown">
                    <a href="#">Sách ...</a>
                    <a href="#">Sách ...</a>
                </div>
            </li>
        </ul>
        <div class="icons">
            <a href="search.html" class="fas fa-search"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
            <a href="userprofile.php" class="fas fa-user"></a>
        </div>
    </div>
        <!----content---->
        <div class="DetailProcontainer">
        <div class="Prodetail">
            <a href="../image/index/Kynangbanhanghieuqua.jpeg" target="_blank"> 
                <div class="Proimg">
                    <img src="../image/index/Kynangbanhanghieuqua.jpeg" style="margin: auto; height: auto; width: 370px; border-radius: 15px ; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);" >
                </div>
            </a>
            
            <div class="lightbox">
              <img src="" alt="Hình ảnh phóng to">
              <span class="close-button">&times;</span>
            </div>

            <script>
                const image = document.querySelector('.Proimg img');
                const lightbox = document.querySelector('.lightbox');
                const lightboxImage = document.querySelector('.lightbox img');
                const closeButton = document.querySelector('.close-button');
                
                image.addEventListener('click', (event) => {
                  event.preventDefault();
                  lightboxImage.src = image.src;
                  lightbox.style.display = 'block';
                });
                
                closeButton.addEventListener('click', () => {
                  lightbox.style.display = 'none';
                });
                
                // Thêm sự kiện click cho toàn bộ document
                document.addEventListener('click', (event) => {
                  // Kiểm tra xem click có nằm ngoài lightbox và nút close hay không
                  if (event.target !== lightboxImage && event.target !== closeButton && lightbox.contains(event.target)) { 
                    lightbox.style.display = 'none';
                  }
                });
                </script>

            <div class="Proinfo">
                <div class="Booktitle">
                Kỹ năng bán hàng hiệu quả
                </div>
                <div class="like-view">
                    <div class="like">
                        <img src="../image/index/Pic_Chitietsach/heart.png" style="width: 24px; height: 24px; margin-right: 6px;">
                        <a style="margin-right: 5px ;">250</a>
                        <span>lượt yêu thích</span> 
                    </div>
                    <div class="view">
                        <img src="../image/index/Pic_Chitietsach/reading.png" style="width: 26px; height: 26px; margin-right: 6px;">
                        <a style="margin-right: 5px ;">240</a> 
                        <span>người xem</span>
                    </div>
                </div>
                <div class="tacgia">
                    Tác Giả: 
                    <span>Tomita Kazusama</span>
                </div>
                <div class="dichthuat">
                    Người dịch: 
                    <span>Thu Phương</span>
                </div>
                <div class="theloai">
                    Thể Loại: 
                    <span>Sách quản lý - Kinh tế</span>
                </div>
                <div class="mucsach">
                    Danh Mục: 
                    <span>Quản trị - Kinh doanh</span>
                </div>
                
                <div class="mota">
                    <span>MÔ TẢ</span>
                    <br>
                    <div class="thongtinmota">
                        "Trong môi trường kinh doanh ngày nay, giá trị doanh nghiệp không được quyết định chỉ bởi các mô hình dịch vụ và công nghệ hoàn toàn mới. Bởi những mô hình này sẽ ngay lập tức được dịch sang các ngôn ngữ của mỗi quốc gia, lan truyền trên toàn thế giới và trở nên lỗi thời.Thay vào đó, các công ty có sức mạnh tổ chức có thể tiếp tục tạo ra các hệ thống và dịch vụ mới với tốc độ chóng mặt và tính linh hoạt có thể phản ứng với những thay đổi của thị trường ngay lập tức sẽ có thể tồn tại trong thời kỳ hỗn loạn. Vậy các doanh nghiệp phải làm sao để tạo ra sức mạnh tổ chức giúp thích nghi với sự thay đổi chóng mặt của thị trường? Cuốn sách này chính là câu trả lời cho bạn."
                    </div>
                </div>
                <script>
                    function truncateText(element) {
                      const originalText = element.textContent;
                      let truncatedText = originalText;
                
                      while (element.scrollHeight > element.clientHeight) {
                        truncatedText = truncatedText.slice(0, -1);
                        element.textContent = truncatedText + "...";
                
                        if (truncatedText === "") {
                          break;
                        }
                      }
                    }
                
                    document.addEventListener('DOMContentLoaded', (event) => {
                      const thongtinmotaDiv = document.querySelector('.thongtinmota'); 
                      truncateText(thongtinmotaDiv);
                    });
                  </script>
                  <div class="OptPro">
                    <div class="nghesach">
                    <a class="cart-btn" onclick="addToCart('Kỹ năng bán hàng hiệu quả', '../image/index/Kynangbanhanghieuqua.jpeg'); return false;">
                        <span>Thêm sách</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="RowProOrther">
            <div class="TitlerPrOr">
                <img src="../image/index/Pic_Chitietsach/leaf.png" style="height: auto; width: 30px;vertical-align: middle;">
                <span>Sách Gợi Ý</span>
            </div>
            <div class="SlideRowProO">
                <div class="DetailProOrther">
                        <a href="#">
                            <div class="ImgProOr">
                                <img src="../image/index/ChiPheo.png">
                            </div>
                            <div class="detailProOr">
                                <span class="card-title">Chí Phèo</span>
                                <span class="author">Nam Cao</span>
                            </div>
                            <div class="ratecmt">
                                <div class="seen">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>10k Lượt xem</span>
                                </div>
                                <div class="love">
                                    <i class="fa-solid fa-heart"></i>
                                    <span>7,8k Yêu thích</span>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="DetailProOrther">
                    <a href="#">
                        <div class="ImgProOr">
                            <img src="../image/index/CachNghiDeThanhCong.png">
                        </div>
                        <div class="detailProOr">
                            <span class="card-title">Cách nghĩ để thành công</span>
                            <span class="author">Napoleon Hill</span>
                        </div>
                        <div class="ratecmt">
                            <div class="seen">
                                <i class="fa-solid fa-eye"></i>
                                <span>17k Lượt xem</span>
                            </div>
                            <div class="love">
                                <i class="fa-solid fa-heart"></i>
                                <span>8,7k Yêu thích</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="DetailProOrther">
                    <a href="#">
                        <div class="ImgProOr">
                            <img src="../image/index/DoiNganNguiDungNguDai.png">
                        </div>
                        <div class="detailProOr">
                            <span class="card-title">Đời ngắn ngủi đừng ngủ dài</span>
                            <span class="author">Robin Sharma</span>
                        </div>
                        <div class="ratecmt">
                            <div class="seen">
                                <i class="fa-solid fa-eye"></i>
                                <span>16k Lượt xem</span>
                            </div>
                            <div class="love">
                                <i class="fa-solid fa-heart"></i>
                                <span>11,5k Yêu thích</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="DetailProOrther">
                    <a href="#">
                        <div class="ImgProOr">
                            <img src="../image/index/DacNhanTam.png">
                        </div>
                        <div class="detailProOr">
                            <span class="card-title">Đắc nhân tâm</span>
                            <span class="author">Dale Carnegie</span>
                        </div>
                        <div class="ratecmt">
                            <div class="seen">
                                <i class="fa-solid fa-eye"></i>
                                <span>80k Lượt xem</span>
                            </div>
                            <div class="love">
                                <i class="fa-solid fa-heart"></i>
                                <span>70,7k Yêu thích</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <!-----------------------------------------------------------------footer----------------------------------------------------------------> 
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
        <script src="../js/addCart.js"></script>
</body>
</html>