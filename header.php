<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/yco6mnp.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pizzaworks</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <!-- Logo on the left -->
          <a class="navbar-brand" href="index.php">
            <img src="images/pizza-works-animated-logo.gif" alt="PizzaWorks | Header Logo" width="130" class="d-inline-block align-top">
          </a>
      
          <!-- Navbar toggle for smaller screens -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <!-- Links on the right -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="coupons.php">Deals</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li> -->
              <li class="nav-item cart">
                <a href="cart.php" class="btn btn-outline-secondary">
                <i class="fas fa-shopping-cart"></i>
                  <span id="cart-count" class="badge badge-pill badge-danger">0</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 