<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
</head>

<body>
    <?php include 'layout_header.php';   ?>

    <div class="container-fluid">
        <h1> Cart Page </h1>
        <hr>
        <!-- Nội dung chính của PAGE ở đây -->
        <div id="cart">
            <h2>Giỏ Hàng</h2>
            <ul id="cart-items">
                <!-- Cart items will be added dynamically using JavaScript -->
            </ul>
            <p>Total: <span id="total">0.00 </span></p>
            <button id="checkout-btn">Thêm vào giỏ hàng</button>
            </table>
            <form action="payment.php" method="post">
                <button id="checkout-btn" type="submit">Tiến hành thanh toán</button>
            </form>
        </div>
    </div>
    <div id="products">
        <h2>Sản Phẩm</h2>
        <ul class="product-list">
            <li>
                <h3>Ốp loại 1</h3>
                <p>Price: 100000</p>
                <div class="product-image">
                    <img src="opgoxiem.jpg" alt="">
                </div>
                <button class="add-to-cart-btn" data-product-id="1"  data-product-price="100000">Add to Cart</button>
            </li>
            <li>
                <h3>Ốp loại 2</h3>
                <p>Price: 200000</p>
                <div class="product-image">
                    <img src="opgocothu.jpg" alt="">
                </div>
                <button class="add-to-cart-btn" data-product-id="2"  data-product-price="200000">Add to Cart</button>
            </li>
            <li>
                <h3>Ốp loại 3</h3>
                <p>Price: 400000</p>
                <div class="product-image">
                    <img src="opgo5.jpg" alt="">
                </div>
                <button class="add-to-cart-btn" data-product-id="3"  data-product-price="400000">Add to Cart</button>
            </li>
            <li>
                <h3>Ốp loại 4</h3>
                <p>Price: 300000</p>
                <div class="product-image">
                    <img src="opgo4.jpg" alt="">
                </div>
                <button class="add-to-cart-btn" data-product-id="4"  data-product-price="300000">Add to Cart</button>
            </li>

            <li>
                <h3>Ốp loại 5</h3>
                <p>Price: 80000</p>
                <div class="product-image">
                    <img src="oplunghavard.jpg" alt="">
                </div>
                <button class="add-to-cart-btn" data-product-id="5"data-product-price="80000">Add to Cart</button>
            </li>
        </ul>
    </div>
      <?php
	// Define products and prices
	$products = array(
		1 => array(
			"name" => "Product 1",
			"price" => 100000
		),
		2 => array(
			"name" => "Product 2",
			"price" => 200000
		),
		3 => array(
			"name" => "Product 3",
			"price" => 400000
		),
		4 => array(
			"name" => "Product 4",
			"price" => 300000
        ),
        5 => array(
			"name" => "Product 5",
			"price" => 80000
		),
	);

	// Helper function to get product by ID
	function getProductById($id) {
		global $products;
		foreach ($products as $product) {
			if ($product["id"] === $id) {
				return $product;
			}
		}
		return null;
	}

	// Add item to cart
	function addToCart($id, $quantity) {
		if (!isset($_SESSION["cart"])) {
			$_SESSION["cart"] = array();
		}

		$cart = $_SESSION["cart"];

		if (isset($cart[$id])) {
			$cart[$id]["quantity"] += $quantity;
		} else {
			$product = getProductById($id);
			$cart[$id] = array(
				"name" => $product["name"],
				"price" => $product["price"],
				"quantity" => $quantity
			);
		}

		$_SESSION["cart"] = $cart;
	}
	// Remove item from cart
	function removeFromCart($id) {
		if (isset($_SESSION["product"][$id])) {
			unset($_SESSION["product"][$id]);
		}
	}
?>


<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('https://th.bing.com/th/id/OIP.VcFZT0FXz4OXmMB9BXsZBgHaHa?pid=ImgDet&rs=1');
        background-position: right -1px;
        background-size: 30% 90%;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        height: 500;

    }
    h1 {
        text-align: center;
        height: 45px;
    }

    h2 {
        margin-top: -10px;
        color: blue;
    }

    #cart {
        border: 1px solid black;
        padding: 10px;
        float: left;
        width: 300px;
        margin-right: 20px;
    }

    #products {
        text-align: center;
        float: left;
        width: 500px;
    }

    .add-to-cart-btn {
        background-color: green;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        margin-top: 10px;
    }

    .add-to-cart-btn:hover {
        background-color: darkgreen;
    }

    #cart-items {
        list-style-type: none;
        padding: 0;
    }

    #cart-items li {
        justify-self: center;
        display: inline-block;
        margin-bottom: 10px;
        vertical-align: top;
        margin-right: 10px;
    }
    #cart-items li:last-child {
        margin-right: 0;
    }

    #cart-items li span {
        margin-left: 10px;
    }

    #checkout-btn {
        display: block;
        margin-top: 10px;
        background-color: blue;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    #checkout-btn:hover {
        background-color: darkblue;
    }

    #products {
        margin-top: 20px;
    }

    .product-list {
        list-style: none;
        padding: 0;
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
        width: calc(33% - 10px);
        /* Thêm độ rộng cho mỗi sản phẩm */
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
    <script src="cartpage.js"></script>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>