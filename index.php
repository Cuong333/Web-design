<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- google font -->
  <!-- boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- boxicons -->
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- swiper -->
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <!-- header -->
  <?php include 'layout_header.php';?>
   <!-- header -->
  <!-- hero slider -->
  <section>
    <h1>Home page</h1>
    <h2>Details product</h2>
    <div class="hero">
      <div class="swiper hero__swiper">
        <div class="swiper-wrapper">
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="hero__bg bg-image"
              style="background-image: url(./assets/bg/lennart-uecker-49bZDF_EgJU-unsplash.jpg);"></div>
            <div class="container">
              <div class="hero__content">
                <div class="hero__txt">
                  <h1>ỐP GỖ TRUYỀN THỐNG</h1>
                  <p>Được thiết kế bằng loại gỗ đặc biệt với chất lương cao</p>
                 <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
                </div>
                <div class="hero__img">
                  <img src="opgoxiem.jpg" alt="product image">
                </div>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="hero__bg bg-image"
              style="background-image: url(./assets/bg/dulcey-lima-8Tx1FOj8xJc-unsplash.jpg);"></div>
            <div class="container">
              <div class="hero__content">
                <div class="hero__txt">
                  <h1></h1>
                  <h1> ỐP LƯNG ĐIỆN THOẠI VERTU </h1>
                  <p>LÀ DÒNG SẢN PHẨM CHẤT LƯỢNG CAO- ĐƯỢC THIẾT KẾ ĐẶC BIỆT CHO DÒNG ĐIỆN THOẠI VERTU</p>
                  <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
                </div>
                <div class="hero__img">
                  <img src="opgo5.jpg" alt="product image">
                </div>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="hero__bg bg-image"
              style="background-image: url(./assets/bg/sherise-van-dyk-nS3HSEBrcik-unsplash.jpg);"></div>
            <div class="container">
              <div class="hero__content">
                <div class="hero__txt">
                  <h1>ỐP ĐIỆN THOẠI STYLE HARVARD</h1>
                  <p>Được thiết kế với style của trường đại học danh giá HARVARD UNIVERSITY</p>
                  <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
                </div>
                <div class="hero__img">
                  <img src="oplunghavard.jpg" alt="product image">
                </div>
              </div>
            </div>
          </div>
          <!-- slide item -->
           <!-- slide item -->
           <div class="swiper-slide">
            <div class="hero__bg bg-image"
              style="background-image: url(./assets/bg/sherise-van-dyk-nS3HSEBrcik-unsplash.jpg);"></div>
            <div class="container">
              <div class="hero__content">
                <div class="hero__txt">
                  <h1>ỐP ĐIỆN THOẠI BẰNG GỖ TRẮC</h1>
                  <p>Được thiết kế bằng nhiều phong cách khác nhau bằng chất liệu gỗ trắc chất lượng cao</p>
                  <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
                </div>
                <div class="hero__img">
                  <img src="opgo4.jpg" alt="product image">
                </div>
              </div>
            </div>
          </div>
          <!-- slide item -->
           <!-- slide item -->
           <div class="swiper-slide">
            <div class="hero__bg bg-image"></div>
            <div class="container">
              <div class="hero__content">
                <div class="hero__txt">
                  <h1>ỐP ĐIỆN THOẠI VỚI CHẤT LIỆU GỖ CỔ THỤ LÂU NĂM</h1>
                  <p>Được thiết kế với loại gỗ quý và hiếm bằng gỗ cổ thụ</p>
                  <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
                </div>
                <div class="hero__img">
                  <img src="opgocothu.jpg" alt="product image">
                </div>
              </div>
            </div>
          </div>
          <!-- slide item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- hero slider -->

  <!-- top products -->
  <section>
    <div class="container">
      <div class="top-product__header">
        <h2 class="section__title no-margin">
          Hot Product
        </h2>
        <div class="top-product__swiper__btn" id="top-product__swiper__btn">
          <div class="swiper-button btn-prev">
            <i class="bx bx-chevron-left"></i>
          </div>
          <div class="swiper-button btn-next">
            <i class="bx bx-chevron-right"></i>
          </div>
        </div>
      </div>
      <div class="swiper top-product__swiper">
        <div class="swiper-wrapper">
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="product-card">
              <div class="product__image">
                <img src="opgo4.jpg" alt="product image">
              </div>
              <div class="product__info">
                <h5 class="product__name">Ốp gỗ trắc</h5>
                <span class="product__price">80.000 VND</span>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="product-card">
              <div class="product__image">
                <img src="opgoxiem.jpg" alt="product image">
              </div>
              <div class="product__info">
                <h5 class="product__name">ỐP Gỗ truyền thống</h5>
                <span class="product__price">100.000 VND</span>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="product-card">
              <div class="product__image">
                <img src="oplunghavard.jpg" alt="product image">
              </div>
              <div class="product__info">
                <h5 class="product__name">Ốp phong cách HARVARD</h5>
                <span class="product__price">300.000 VND</span>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="product-card">
              <div class="product__image">
                <img src="opgocothu.jpg" alt="product image">
              </div>
              <div class="product__info">
                <h5 class="product__name">Ốp gỗ cổ thụ</h5>
                <span class="product__price">200.000 VND</span>
              </div>
            </div>
          </div>
          <!-- slide item -->
          <!-- slide item -->
          <div class="swiper-slide">
            <div class="product-card">
              <div class="product__image">
                <img src="opgo5.jpg" alt="product image">
              </div>
              <div class="product__info">
                <h5 class="product__name">Ốp gỗ VERTU</h5>
                <span class="product__price">400.000 VND</span>
              </div>
            </div>
          </div>
          <!-- slide item -->
        </div>
      </div>
    </div>
  </section>
  <!-- top products -->
  <!-- category banner -->

  <!-- promotion product -->
  <section>
    <div class="container">
      <div class="hero__content">
        <div class="hero__txt">
          <h3>ỐP GỖ CHẤT LƯỢNG CAO</h3><br>
          <p>Uy tín tạo nên thương hiệu <br>
          Nhận thiết kế theo yêu cầu của khách hàng <br>
          Nhiệt tình, chuyên nghiệp thái độ tốt cùng với chất lượng tuyệt vời
          </p>
         <a href="catalog.php"><button class="btn btn-success">Go to collection</button></a>
        </div>
        <div class="hero__img">
          <img src="Phonecase.png" alt="product image">
        </div>
      </div>
    </div>
  </section>
  <!-- promotion product -->

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="footer">
        <div class="footer__col">
            <img src="https://th.bing.com/th/id/OIP.fuBQOCBSAG_ClI1eI9eNfwHaGK?pid=ImgDet&rs=1" alt="logo" width="100" height="100">
          </a>
          <div class="social-list">
            <a href="https://www.facebook.com/profile.php?id=100013817283103">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100013817283103">
              <i class="bx bxl-instagram"></i>
            </a>
          </div>
        </div>
        <div class="footer__col">
          <div class="footer__header">Shop</div>
          <ul class="footer__menu">
            <li>
              <a href="https://www.facebook.com/profile.php?id=100013817283103">Contacts</a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <div class="footer__header">About</div>
          <ul class="footer__menu">
            <li>
              <a href="index.php">News</a>
            </li>
            <li>
              <a href="index.php">Careers</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- swiper -->
  <script src="index.js"></script>
</body>

</html>