<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Shop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
  margin: 0;
  padding: 0;
}
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
  text-transform: uppercase;
  font-size: 18px;
}
.container-fluid {
  padding-right: 0;
  padding-left: 0;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./catalog.php">Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./cartpage.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./payment.php">Payment</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
