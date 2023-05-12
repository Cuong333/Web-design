<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
    <h1> Catalog Page </h1>
		<!-- Nội dung chính của PAGE ở đây --> 

    <?php
      // Tham số
      include "./config/config.php";

      $dbconnect = connectDB();
      // Truy vấn
      $results = mysqli_query( $dbconnect, "Select * from product");
      while ($row = mysqli_fetch_row($results)) {
      ?>
        <div class="card" style="width: 17rem;">
          <img src="<?=$row[6]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$row[1]?></h5>
            <p class="card-text"><?=$row[2]?></p>
            <h6 class="Giatien"><?=$row[4]?></h6>
            <a href="cartpage.php" class="btn btn-primary"><?=$row[0]?></a>
          </div>
        </div>
      <?php
      }
      ?>

		<style>

/* Chỉnh kích thước và căn giữa tiêu đề trang web */
h1 {
  padding-top: 55px;
  text-align: center;
  font-size: 36px;
}
/* Chỉnh kích thước và căn giữa các thẻ card chứa sản phẩm */
.card {
  width: 300px;
  height: 500px; /* thêm chiều cao cho thẻ card */
  margin: 10px;
  display: inline-block;
  vertical-align: top;
  text-align: center;
  overflow: hidden; /* ẩn đi phần dư thừa của hình ảnh */
  border: solid 3px green;
}

/* Chỉnh kích thước của ảnh sản phẩm trong thẻ card */
.card img {
  height: 200px;
  width: 250px;
  object-fit: cover;
}
/* Chỉnh font size và màu sắc của tên, giá và nút mua sản phẩm */
.card-title {
  font-size: 24px;
  color: #333;
}
.Giatien {
  font-size: 28px;
  font-weight: bold;
  color: blue;
}
.btn-primary {
  background-color: blue;
  border-color: black;
}
.card-img-top {
  height: 150px;
  object-fit: cover; /* giữ tỷ lệ của hình ảnh và đầy đủ khung của thẻ */
}
    </style>
	</div>
	<?php include 'layout_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>