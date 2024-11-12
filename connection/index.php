<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Đăng ký</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <input type="text" name="fName" id="fName" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <input type="text" name="lName" id="lName" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <input name="nganh" id="nganh"  required>
            <label for="nganh">Ngành học</label>
        </div>
        <div class="input-group">
            <input name="khoa" id="khoa"  required>
            <label for="khoa">khóa</label>
        </div>
        <div class="input-group">
            <input type="text" name="mssv" id="mssv"  required>
            <label for="mssv">Mã sinh viên</label>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email"  required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password"  required>
            <label for="password">Mật khẩu</label>
        </div>
       <input type="submit" class="btn" value="Đăng ký" name="signUp">

      </form>
      <div class="links">
        <p>Đã có tài khoản ?</p>
        <button id="signInButton">Đăng nhập</button>
      </div>
    </div>






    <div class="container" id="signIn">
        <h1>Đăng Nhập</h1>
            <form method="post" action="register.php">
              <div class="input-group">
                 <input type="email" name="email" id="email" required>
                 <label for="email">Email</label>
              </div>
          <div class="input-group">
              <input type="password" name="password" id="password" required>
              <label for="password">Mật khẩu</label>
          </div>
         <input type="submit" class="btn" value="Đăng nhập" name="signIn">
        </form>
        <div class="links">
          <p>Bạn chưa có tài khoản?</p>
          <button id="signUpButton">Đăng ký</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>

<style>  

#signIn
{
	width: 100%;
	height: 450px;
}
#signup
{
	width: 100%;
	height: 690px;
}

body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background:#191970;
}

#signIn{
	position: absolute;
	top: 50%;
	left: 50%;
	width: 500px;
	padding: 40px;
	transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0.6);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
	border-radius: 10px;
}

#signup{
	position: absolute;
	top: 50%;
	left: 50%;
	width: 500px;
	padding: 40px;
	transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0.6);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
	border-radius: 10px;
}


.container h1{
	margin: 0 0 30px;
	padding: 0;
	color: #fff;
	text-align: center;
}

.container .input-group{
	position: relative;
}
.container .links{
	display:flex;

}

.container .links p {
	display: flex;
	color: #fff;
}
.links button {
	display: flex;
}

.container .links button {
	margin-top: 0.4rem;
	margin-left: 0.5rem;
}

.container .input-group input{
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #fff;
	outline: none;
	background: transparent;
}

.container .input-group label{
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	pointer-events: none;
	transition: .5s;
}

.container .input-group input:focus ~ label,
.container .input-group input:valid ~ label {
	top: -20px;
	left: 0;
	color: #03e9f4;
	font-size: 12px;
}
button{
	position: relative;
	display: inline-block;
	padding: 10px 20px;
	color: white;
	font-size: 16px;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	transition: .5s;
	margin-top: 40px;
	letter-spacing: 4px;
	background-color:#000033;
}

button:hover{
	background: #03e9f4;
	color: 	#000000;
	border-radius: 5px;
	box-shadow: 0 0 5px #03e9f4,
				0 0 25px #03e9f4,
				0 0 50px #03e9f4,
				0 0 100px #03e9f4;
}

button .link {
	position: absolute;
	display: block;
}

button .link p:nth-child(1){
	top:0;
	left: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(90deg, transparent,#03e9f4);
	animation: btn-anim1 1s linear infinite;
}

.btn{
	position: relative;
	display: inline-block;
	padding: 8px 6px;
	color: white;
	font-size: 16px;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	transition: .5s;
	letter-spacing: 4px;
	background-color:#000033;
}

.btn:hover{
	background: #03e9f4;
	color: 	#000000;
	border-radius: 5px;
	box-shadow: 0 0 5px #03e9f4,
				0 0 25px #03e9f4,
				0 0 50px #03e9f4,
				0 0 100px #03e9f4;
}


 </style>
