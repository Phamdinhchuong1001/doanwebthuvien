<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Đăng ký</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
        <i class="fa-solid fa-book"></i>
            <input name="nganh" id="nganh" placeholder="nganh" required>
            <label for="nganh">Ngành học</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-pencil"></i>
            <input name="khoa" id="khoa" placeholder="khoa" required>
            <label for="khoa">khóa</label>
        </div>
        <div class="input-group">
        <i class="fa-solid fa-user-pen"></i>
            <input type="text" name="mssv" id="mssv" placeholder="mssv" required>
            <label for="mssv">Mã sinh viên</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Đăng ký" name="signUp">

      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Đã có tài khoản ?</p>
        <button id="signInButton">Đăng nhập</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Đăng Nhập</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Quên mật khẩu ?</a>
          </p>
         <input type="submit" class="btn" value="Đăng nhập" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Bạn chưa có tài khoản?</p>
          <button id="signUpButton">Đăng ký</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
