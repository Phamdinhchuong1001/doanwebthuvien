<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $mssv=$_POST['mssv'];
    $nganh=$_POST['nganh'];
    $khoa=$_POST['khoa'];
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email đã tồn tại !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password,nganh,khoa,mssv)
                       VALUES ('$firstName','$lastName','$email','$password','$nganh','$khoa','$mssv')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   
}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    $_SESSION['role'] = $row['role']; // Lưu vai trò vào session
    if ($_SESSION['role'] === 'admin') {
        header("Location: ../admin_panel/indexAdmin.php");
    } else {
        header("Location: homepage.php"); // Hoặc trang khác cho user
    }
    exit();
   }
   else{
    echo "không tìm thấy người dùng, sai email hoặc mật khẩu";
   }

}
?>