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
        </div>
    </div>
    
    <div class="containers">
        <div class="profile-header">
            <div class="profile-image">
            <img src="../image/userprofile/user.webp">
            </div>
            <div class="profile-info">
                <div class="profile-name">
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
                <div class="profile-title">
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
                <div class="profile-title">
                                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['nganh'];
                          }
                      }
                 ?>
                </div>
            </div>
        </div>
        <div class="tabs">
            <div class="tab active">Thông tin sinh viên</div>
        </div>
        <form>
            <div class="form-grid">
                <div class="form-group">
                    <label>Họ</label>
                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['firstName'];
                          }
                      }
                 ?>
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['lastName'];
                          }
                      }
                 ?>
                </div>
                <div class="form-group">
                    <label>Mã số sinh viên</label>
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
                    <label>Email Address</label>
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
                    <label>Ngành học</label>
                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['nganh'];
                          }
                      }
                 ?>
                </div>
                <div class="form-group">
                    <label>Khóa</label>
                    <?php 
                     if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                         $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                      while($row=mysqli_fetch_array($query)){
                          echo $row['khoa'];
                          }
                      }
                 ?>
                </div>
            </div>
            <button class="update-button">
                <a href="logout.php">Đăng xuất</a>
            </button>
        </form>
    </div>

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
</body>
</html>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        padding-top: 90px;
    }

    .containers {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .profile-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 20px;
        background-color: #4267B2;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
    }

    .profile-info {
        flex-grow: 1;
    }

    .profile-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .profile-title {
        color: #666;
        font-size: 14px;
    }

    .stats {
        display: flex;
        margin-bottom: 30px;
        gap: 20px;
    }

    .stat-item {
        margin-right: 20px;
    }

    .stat-number {
        color: #4267B2;
        font-weight: bold;
        margin-right: 5px;
    }

    .stat-label {
        color: #666;
        font-size: 14px;
    }

    .tabs {
        display: flex;
        border-bottom: 1px solid #ddd;
        margin-bottom: 30px;
    }

    .tab {
        padding: 10px 20px;
        margin-right: 20px;
        cursor: pointer;
        color: #666;
    }

    .tab.active {
        color: #4267B2;
        border-bottom: 2px solid #4267B2;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
        font-size: 14px;
    }

    input, select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .update-button {
        background-color: #4267B2;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .update-button a {
        background-color: #4267B2;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .update-button:hover {
        background-color: #365899;
    }

    .update-button:hover a {
        background-color: #365899;
    }

    .profile-link {
        display: flex;
        align-items: center;
        color: #4267B2;
        text-decoration: none;
        font-size: 14px;
        margin-top: 20px;
    }

    .profile-link svg {
        margin-left: 5px;
        width: 16px;
        height: 16px;
    }



    .containers .profile-header .profile-image img{
	height: 5rem;
	width: 5rem;
	margin-right: 0rem;
	border-radius: 50%;
	object-fit: cover;
}
</style>