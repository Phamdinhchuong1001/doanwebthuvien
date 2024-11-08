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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
<body>
    <div class="container123">
        
        <form class="borrowForm">
            <div class="form-group1">
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
            <div class="form-group1">
                <label >Mã số sinh viên:</label>
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
            <div class="form-group1">
                <label>Email:</label>
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
            <div class="form-group1">
                <label for="bookCode">Tên sách:</label>
                <div id="cart-container1">
            <!--sản phẩm add giỏ hàng hiện tại đây-->
        </div>
            </div>
            <div class="form-group1">
                <label for="borrowDate">Ngày mượn:</label>
                <input type="date" id="borrowDate" name="borrowDate" required>
            </div>
            <div class="form-group1">
                <label for="returnDate">Ngày trả:</label>
                <input type="date" id="returnDate" name="returnDate" required>
            </div>
            <button type="submit">Xác nhận</button>
        </form>
        <div id="result"></div>
        <button id="printButton" style="display: none;" onclick="printReceipt()">Print Receipt</button>
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
    <script src="../js/cart-scriptxp.js"></script>
</body>
</html>


<style>
/***************************************************************HEADER************************************************** */
  #header{
    position: fixed;
    top: 0;left: 0;right: 0;
    background:#ffffff;
    padding: 0rem 2.5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

.menu{
	display: flex;
	align-items: center;
	list-style: none;
	position: relative;
}

#header .logo{
	img {
		max-width: 70%;
		height: 50%;
		}

}


#header .menu a{
	font-size: 1.25rem;
	padding: 0 1.5rem;
	color:#24262b;
	font-weight: bolder;
}

li{
	display: flex;
	align-items: center;
	height: 100%;
	list-style-type: none; 
}
.dropdown{
	min-width: 130px;
	padding: 15px 10px;
	box-sizing: border-box;
	display: flex;
	flex-direction: column;
	gap: 12px;
	position: absolute;
	top: 40px;
	border: 8px;
	background-color: #fff;
	box-shadow: rgba(0, 0, 0, 0.4) 0px 25px 50px -12px;
	opacity: 0;
	visibility: hidden;
	transition: o.2 ease-in-out;
}

li:hover .dropdown{
	opacity: 1;
	visibility: visible;
	top: 60px;
}

.dropdown a{
	font-size: 14px;
	border-radius: 1px solid #000000;
	padding-bottom: 10px;
}


#header .menu a:hover{
	color:#00FFFF;
}

#header .icons a{
	font-size: 1.25rem;
	color: #333;
	margin-left: 1.5rem;
}

#header .icons a:hover{
	color:#00FFFF;
}

#header #toggler{
	display: none;
}

#header .fa-bars{
	font-size: 3rem;
	color: #333;
	border-radius: .5rem;
	padding: .5rem 1.5rem;
	cursor: pointer;
	border: .1rem solid rgba(0, 0, 0, .3);
	display: none;
}

/***************************************************************FOOTER**************************************** */


/**********************************************************************************FOOTER***********************************************************************************/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
#footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 55%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #242b26;
	background-color: #ffffff;
}

/*//////////////////////////////////////////////////////*/
.footer-col-link{
	width: 18%;
	padding: 0 15px;
 }
 .footer-col-link h4{
	 font-size: 18px;
	 color: #ffffff;
	 text-transform: capitalize;
	 margin-bottom: 35px;
	 font-weight: 500;
	 position: relative;
 }
 .footer-col-link h4::before{
	 content: '';
	 position: absolute;
	 left:0;
	 bottom: -10px;
	 background-color: #e91e63;
	 height: 2px;
	 box-sizing: border-box;
	 width: 50px;
 }
 .footer-col-link ul li:not(:last-child){
	 margin-bottom: 10px;
 }
 .footer-col-link ul li a{
	 font-size: 16px;
	 text-transform: capitalize;
	 color: #ffffff;
	 text-decoration: none;
	 font-weight: 300;
	 color: #bbbbbb;
	 display: block;
	 transition: all 0.3s ease;
 }
 .footer-col-link ul li a:hover{
	 color: #ffffff;
	 padding-left: 8px;
 }
 .footer-col-link .social-links a{
	 display: inline-block;
	 height: 40px;
	 width: 40px;
	 background-color: rgba(255,255,255,0.2);
	 margin:0 10px 10px 0;
	 text-align: center;
	 line-height: 40px;
	 border-radius: 50%;
	 color: #ffffff;
	 transition: all 0.5s ease;
 }
 .footer-col-link .social-links a:hover{
	 color: #242b26;
	 background-color: #ffffff;
 }
/*****************************************/
.footer-col-time{
	width: 24%;
	padding: 0 15px;
 }
 .footer-col-time h4{
	 font-size: 18px;
	 color: #ffffff;
	 text-transform: capitalize;
	 margin-bottom: 35px;
	 font-weight: 500;
	 position: relative;
 }
 .footer-col-time h4::before{
	 content: '';
	 position: absolute;
	 left:0;
	 bottom: -10px;
	 background-color: #e91e63;
	 height: 2px;
	 box-sizing: border-box;
	 width: 50px;
 }
 .footer-col-time ul li:not(:last-child){
	 margin-bottom: 10px;
 }
 .footer-col-time ul li a{
	 font-size: 16px;
	 text-transform: capitalize;
	 color: #ffffff;
	 text-decoration: none;
	 font-weight: 300;
	 color: #bbbbbb;
	 display: block;
	 transition: all 0.3s ease;
 }
 .footer-col-time ul li a:hover{
	 color: #ffffff;
	 padding-left: 8px;
 }
 .footer-col-time .social-links a{
	 display: inline-block;
	 height: 40px;
	 width: 40px;
	 background-color: rgba(255,255,255,0.2);
	 margin:0 10px 10px 0;
	 text-align: center;
	 line-height: 40px;
	 border-radius: 50%;
	 color: #ffffff;
	 transition: all 0.5s ease;
 }
 .footer-col-time .social-links a:hover{
	 color: #242b26;
	 background-color: #ffffff;
 }

 
/*responsive*/
@media(max-width: 767px){
.footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
.footer-col{
    width: 100%;
   }
} 
/***************************************************************************************FOOTER*********************************************************************************/


/****************************************************************THEMUOCSACH******************************************** */


.container123 {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    border-top: 5px solid #007BFF; /* Thêm màu sắc cho viền trên của container */
    display:initial;
    justify-content: center;
}



.form-group1 {
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

input:focus {
    border-color: #007BFF; /* Thay đổi màu viền khi focus */
}

button {
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s; /* Thêm hiệu ứng chuyển tiếp cho background */
}

button:hover {
    background: #0056b3; /* Màu sắc khi hover */
}

.error-message {
    color: red;
    font-size: 0.9em;
    display: none;
}

#result {
    margin-top: 20px;
    font-weight: bold;
    text-align: center;
    color: #333; /* Màu sắc cho kết quả */
}

#result p {
    margin: 10px 0;
}



/*******************************************************CART************************************ */

/* style.css */


header {
    margin-top: 80px;
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}
main {
    padding: 20px;
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
.cart-item {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px;
    overflow: hidden;
}
.cart-item img {
    width: 120px;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 15px;
}
.cart-item-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}
.cart-item-content h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: #333;
}
.cart-item-content .quantity {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}
.cart-item-content .quantity label {
    font-size: 16px;
}
.cart-item-content .quantity input {
    width: 60px;
    padding: 5px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.remove-btn {
    margin-top: 10px;
    color: red;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}
.remove-btn:hover {
    text-decoration: underline;
}

























:root{
    color:rgb(135, 7, 49, 30, 30);
}

*{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
	background-color: #fff;
}

.btn{
	display: inline-block;
	margin-top: 0rem;
	border-radius: 5rem;
	background:#C0C0C0;
	color:#24262b;
	padding: .9rem 3.5rem;
	cursor: pointer;
	font-size: 1.2rem;
}

.btn:hover{
	background:#00FFFF;
}
</style>
