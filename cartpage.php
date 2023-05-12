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
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
        }
        .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        hr {
            margin: 2rem 0;
        }
        #cart {
            float: left;
            width: 40%;
            background-color: #f7f7f7;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        #cartitems {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .cart-item img {
            height: 50px;
            width: auto;
            margin-right: 1rem;
        }
        #products {
            float: right;
            width: 55%;
        }
        .product-list {
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }
        .product-list li {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        background-color: white;
    }

    .product-image {
        width: 100%;
        height: 0;
        padding-bottom: 75%;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    button {
        cursor: pointer;
        background-color: #32CD32	;
        color: white;
        border: none;
        padding: 0.5rem;
        margin-top: 1rem;
    }
    </style>
    <script src="cartpage.js"></script>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
