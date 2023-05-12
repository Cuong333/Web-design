// Define constants
const PRODUCTS = [
	{
	  id: 1,
	  name: "Product 1",
	  price: 100000,
	},
	{
	  id: 2,
	  name: "Product 2",
	  price: 200000,
	},
	{
	  id: 3,
	  name: "Product 3",
	  price: 400000,
	},
	{
	  id: 4,
	  name: "Product 4",
	  price: 300000,
	},
	{
	  id: 5,
	  name: "Product 5",
	  price: 80000,
	},
  ];
  const CART_ITEMS_EL = document.getElementById("cart-items");
  const CART_TOTAL_EL = document.getElementById("total");
  
  // Declare cart object
  const cart = {};
  
  // Add event listener to all "Add to Cart" buttons
  const addToCartBtns = document.querySelectorAll(".add-to-cart-btn");
  addToCartBtns.forEach((btn) => {
	btn.addEventListener("click", () => {
	  const productId = btn.getAttribute("data-product-id");
	  addToCart(productId, 1);
	  updateCart();
	});
  });
  
  // Update cart
  function updateCart() {
	// Clear cart items
	CART_ITEMS_EL.innerHTML = "";
  
	// Calculate cart total
	let cartTotal = 0;
	for (const productId in cart) {
	  const product = getProductById(productId);
  
	  const cartItemEl = document.createElement("li");
	  cartItemEl.innerHTML = `${product.name} (${formatPrice(
		product.price
	  )}) x ${cart[productId].quantity}`;
	  const removeBtn = document.createElement("button");
	  removeBtn.classList.add("remove-btn");
	  removeBtn.setAttribute("data-product-id", productId);
	  removeBtn.innerText = "Remove";
	  removeBtn.addEventListener("click", () => {
		removeFromCart(productId);
		updateCart();
	  });
	  cartItemEl.appendChild(removeBtn);
	  CART_ITEMS_EL.appendChild(cartItemEl);
  
	  cartTotal += product.price * cart[productId].quantity;
	}
  
	// Update cart total
	CART_TOTAL_EL.innerHTML = formatPrice(cartTotal);
  }
  
  // Helper function to get product by ID
  function getProductById(id) {
	return PRODUCTS.find((product) => product.id === parseInt(id));
  }
  
  // Add item to cart
  function addToCart(id, quantity) {
	if (!id) {
	  throw new Error("Product ID is required.");
	}
	if (cart[id]) {
	  cart[id].quantity += quantity;
	} else {
	  const product = getProductById(id);
	  cart[id] = {
		name: product.name,
		price: product.price,
		quantity,
	  };
	}
  }
  
  // Remove item from cart
  function removeFromCart(id) {
	if (cart[id]) {
	  delete cart[id];
	}
  }
  
  // Add event listener to checkout button
  const checkoutBtn = document.getElementById("checkout-btn");
  checkoutBtn.addEventListener("click", () => {
	if (Object.keys(cart).length === 0) {
	  alert("Giỏ hàng trống!");
	} else {
	  alert("Thêm vào giỏ hàng thành công!");
	  Object.keys(cart).forEach((key) => {
		delete cart[key];
	  });
	  updateCart();
	}
  });
  
  // Calculate total price of all products
  function calculateTotalPrice() {
	const products = document.getElementsByClassName("product");
	let total = 0;
  
	for (let i = 0; i < products.length; i++) {
	  const priceText = products[i].getElementsByTagName("p")[0].innerText;
	  const price = parseFloat(priceText.replace("$", ""));
	  if (!isNaN(price)) {
		total += price;
	  }
	}
  
	return total;
  }
  
  // Format price as VND
  function formatPrice(price) {
	return price.toLocaleString("vi-VN", {
	  style: "currency",
	  currency: "VND",
	});
  }
  
  // Initialize cart and total price
  updateCart();
  const totalPrice = calculateTotalPrice();
  CART_TOTAL_EL.innerHTML = formatPrice(totalPrice);