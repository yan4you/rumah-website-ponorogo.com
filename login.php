<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "website";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("tidak bisa terkoneksi database");
}

$username    = "";
$password    = "";
$error       = "";
$sukses      = "";

if(isset($_POST['submit'])){
   $username   = $_POST['username'];
   $password   = $_POST['password'];

if($username && $password) {
    $sql1  = "insert into simpan (username,password) values ('$username','$password')";
    $q1    = mysqli_query($koneksi, $sql1);
if ($q1) {
    $sukses = "Berhasil memasukan data";
        } else {
    $error  = "gagal memasukan data";
   }
 } else{
    $error  = "silahkan masukan data";
 }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="assent/icon/user.png">
    <title>Login admin</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
           <div class="input-box">
               <input type="text" name="username" id="username" placeholder="username" required value="<?php echo $username  ?>">
               <i class='bx bxs-user' ></i>
           </div>
           <div class="input-box">
            <input type="password"  name="password" id="password" placeholder="password" required value="<?php echo $password  ?>">
            <i class='bx bxs-lock-alt' ></i>
           </div>
           <div class="remember-forget">
            <label><input type="checkbox">Remamber me</label>
            <a href="#">forgot password</a>
           </div>
           <button type="submit" name="submit" value="simpan data" class="btn">Login</button>
           <div class="register-link">
            <p>Don't have an account? <a href="#">registrasi </a></p>
           </div>
        </form>
    </div>
</body>
</html>