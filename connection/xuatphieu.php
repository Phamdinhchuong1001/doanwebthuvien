<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng HUFLIT libary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="SGT.html">SÁCH GIÁO TRÌNH</a>
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
            </li>
        </ul>
        <div class="icons">
            <a href="search.html" class="fas fa-search"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
            <a href="userprofile.php" class="fas fa-user"></a>
        </div>
    </div>
     <!-------------------------------------------------------------------end------------------------------------------------------------------->
     <header>
        <h1>Mượn sách </h1>
    </header>
    <main>
    <div class="thuesach">
        <h1>Thông tin người mượn</h1>
        <form id="form-grid">
            <div class="form-group">
                <label>Họ và Tên:</label>
                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['firstName'].' '.$row['lastName'];
                          }
                      }
                 ?>
            </div>
            <div class="form-group">
                <label>Mã số sinh viên:</label>
                <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['mssv'];
                          }
                      }
                 ?>
            </div>
            <div class="form-group">
                <label>Địa chỉ email:</label>
                <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['email'];
                          }
                      }
                 ?>
            </div>
            <div class="form-group">
                <label>Tên sách:</label>
            <div id="cart-xuatphieu">
                          <!--sản phẩm add giỏ hàng hiện tại đây-->
            </div>
            <div class="form-group">
                <label>Ngày mượn:</label>
                <input type="date" id="borrowDate" name="borrowDate" required>
            </div>
            <div class="form-group">
                <label for="returnDate">Ngày trả:</label>
                <input type="date" id="returnDate" name="returnDate" required>
            </div>
            <button>
                <a href="homepage.php">Trang chủ</button>
                <div class="caution">
                <h1>! SINH VIÊN CHỤP LẠI PHIẾU MƯỢN SÁCH TRƯỚC KHI QUAY VỀ TRANG CHỦ</h1>
                    </div>
        </form>
    </div>
    </main>

    
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
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <script src="../js/xuatphieu.js"></script>
</body>
</html>

<style>
    .buttonxp {
        background-color:#FFFF00;
        color:#000000;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        float:end;
        margin-left: 250px;
    }

    .update-button:hover {
        background-color: #feb72a;
    }
    .update-button:hover a {
     color: aliceblue;
    }

    #cart-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    font-family: Arial, sans-serif;
    max-width: 1000px;
    margin: auto;
    padding: 0;
    margin-top: 50px;
    margin-bottom: 30px;
}


/*******************************************************************************************TRANG THUÊ SÁCH********************************************************************* */

.thuesach {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    display: contents;
}
.form-group {
    margin-bottom: 15px;
    text-align: left;
    color: #c67d42 ;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #c67d42; /* Màu sắc cho label */
}
input {
    width: calc(100% - 16px);
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 5px;
    transition: border-color 0.3s; /* Thêm hiệu ứng chuyển tiếp cho border */
}

button {
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s; /* Thêm hiệu ứng chuyển tiếp cho background */
    margin-left: 700px;
}
button:hover {
    background: #0056b3; /* Màu sắc khi hover */
}
#result p {
    margin: 10px 0;
}
button a{
    color: white;
}
.caution h1{
    margin-left:30px;
    margin-top: 20px;
    color:red;
}
</style>