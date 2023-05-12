<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';
      include "./config/config.php";
	  ?>
	
    <div class="container">

		<div class="order-details">
			<h2>Thông tin sản phẩm </h2>
			<div id="products">
			<ul class="product-list">
                <li>
                    <h3>Ốp loại 1</h3>
                    <p>Price: 100000 VND</p>
                    <div class="product-image">
                        <img src="opgoxiem.jpg" alt="">
                    </div>
	
                </li>
                <li>
                    <h3>Ốp loại 2</h3>
                    <p>Price: 200000 VND</p>
                    <div class="product-image">
                        <img src="opgocothu.jpg" alt="">
                    </div>
				
                </li>
                <li>
                    <h3>Ốp loại 3</h3>
                    <p>Price: 40000 VND</p>
                    <div class="product-image">
                        <img src="opgo5.jpg" alt="">
                    </div>
                   
                </li>
                <li>
                    <h3>Ốp loại 4</h3>
                    <p>Price: 300000 VND</p>
                    <div class="product-image">
                        <img src="opgo4.jpg" alt="">
                    </div>
                </li>
				<li>
                    <h3>Ốp loại 5</h3>
                    <p>Price: 80000 VND</p>
                    <div class="product-image">
                        <img src="oplunghavard.jpg" alt="">
                    </div>
                   
                </li>
            </ul>
		</div>
		</div>
		<div class="payment-method">
			<h2>Phương thức thanh toán</h2>
			<div class="radio">
				<input type="radio" id="credit-card" name="payment-method" value="credit-card" checked>
				<label for="credit-card">Thẻ tín dụng</label>
			</div>
			<div class="radio">
				<input type="radio" id="debit-card" name="payment-method" value="debit-card">
				<label for="debit-card">Thẻ ghi nợ</label>
			</div>
			<div class="radio">
				<input type="radio" id="paypal" name="payment-method" value="paypal">
				<label for="paypal">PayPal</label>
			</div>
			<div class="radio">
				<input type="radio" id="tienmat" name="payment-method" value="tienmat">
				<label for="paypal">Tiền Mặt</label>
			</div>
		</div>

		<div class="shipping-address">
			<h2>Địa chỉ giao hàng</h2>
			<label for="name">Họ tên:</label>
			<input type="text" id="name" name="name"><br>
			<label for="address">Địa chỉ:</label>
			<input type="text" id="address" name="address"><br>
			<label for="SDT">SDT:</label>
			<input type="text" id="SDT" name="address"><br>
			<label for="city">Thành phố:</label>
			<input type="text" id="city" name="city"><br>
			<label for="state">Quận/Huyện</label>
			<input type="text" id="state" name="state"><br>
			<label for="strict">Phường/Xã</label>
			<input type="text" id="strict" name="zip-code"><br>
		</div>
		<a href="payment.php"><button type="submit" id="checkout-btn">Đặt Hàng</button></a>
	   
	</div>
  <script src="payment.js"></script>
  <style>
  .container {
	max-width: 600px;
	margin: 0 auto;
	padding: 20px;
}
 h2 {
	padding-top: 50px;
	text-align: center;
}

table {
	border-collapse: collapse;
	width: 100%;
	margin-bottom: 20px;
}

th, td {
	padding: 10px;
	text-align: left;
}

th {
	background-color: #f2f2f2;
}

.radio {
	margin-bottom: 10px;
}

label {
	display: inline-block;
	width: 100px;
}

input[type="text"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 10px;
	box-sizing: border-box;
}

button[type="submit"] {
	display: block;
	margin: 20px auto;
	padding: 10px 20px;
	background-color: #008CBA;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	font-size: 16px;
}

button[type="submit"]:hover {
	background-color: #006F8F;
}

.product-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product-list li {
  display: inline-block;
  flex-direction: column;
  align-items: center;
  text-align: center;
  border: 1px solid black;
  padding: 10px;
  margin-bottom: 20px;
  width: calc(22.44% - 15.44px);
}

.product-image {
  width: 100%;
  padding-bottom: 100%;
  position: relative;
}

.product-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
  </style>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <?php include 'layout_footer.php';?>
</html>