
document.getElementById("checkout-btn").addEventListener("click", function() {
  alert("Cảm ơn bạn đã đặt hàng!");
});

var username = document.cookie.replace(/(?:(?:^|.*;\s*)product\s*\=\s*([^;]*).*$)|^.*$/, "$1");
