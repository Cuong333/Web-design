<!doctype html>
<html lang="en">

<head>
  <?php include 'layout_head.php'; ?>
  <title>Bán Ốp điện thoại bằng Gỗ</title>
</head>

<body>
  <?php include 'layout_header.php'; ?>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-sm-10">
        <div class="card p-3">
          <h1 class="text-center mb-4">Login</h1>
          <form method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Tên tài khoản</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên tài khoản" maxlength="60">
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Nhập mật khẩu" minlength="8">
            </div>
            <a href="index.php"><button type="button" class="btn btn-primary w-100">Đăng nhập</button></a>
          </form>
        </div>
      </div>
      <?php
      include("./config/config.php");

      session_start();
      if (isset($_POST["username"]) && isset($_POST["inputPassword"])) {
        $username = $_POST['username'];
        $password = $_POST['inputPassword'];
        if ($username = "" || $password = "") {
          echo "Please input username and password";
        } else {
          $sql = ("Select Username, PassWord from account where Username = '$username' and PassWord = '$password' ");
          $conn = connectDB();
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);
          $row = mysqli_fetch_array($result);
          if ($count > 0) {
            echo "Bạn đã đăng nhập thành công";
            $_SESSION["username"] = $row[0];
            header("Location: Asm2Webb/index.php");
            exit;
          } else {
            echo " ";
          }
        }
      }
      ?>
      <style>
        h1{
          padding-top: 40px;
        }
      
      </style>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
</body>
</html>