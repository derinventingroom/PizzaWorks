<?php include 'header.php'; ?>
      <section class="hero-section d-flex align-items-center">
        <div class="container">
          <div class="row">
            <!-- Left Side: Image -->
            <div class="col-lg-6 d-none d-lg-block">
              <img src="path-to-pizza-image.jpg" alt="Delicious Pizza" class="img-fluid hero-image">
            </div>
      
            <!-- Right Side: Text and CTA -->
            <div class="col-lg-6 text-light text-end">
              <h1 class="display-4 fw-bold">Welcome to Pizzaworks</h1>
              <p class="lead">Where every slice is a masterpiece!</p>
              <a href="menu.php" class="btn btn-primary btn-lg mt-3">Explore Our Menu</a>
            </div>
          </div>
        </div>
      </section>
     
<section id="special-offers" class="special-offers-section py-5">
    <div class="container">
      <h2 class="display-4 fw-bold text-center">Special Offers</h2>
      <p class="lead text-center">Delicious deals just for you!</p>
  
      <div id="offersCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Offer 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <img src="path-to-offer-image-1.jpg" class="d-block w-100" alt="Offer 1">
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="carousel-caption">
                  <h5 class="fw-bold">Family Feast</h5>
                  <p>Get 2 large pizzas, 1 garlic bread, and a 2-liter soda for just $29.99!</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Family Feast" data-price="29.99">Order Now</a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Offer 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <img src="path-to-offer-image-2.jpg" class="d-block w-100" alt="Offer 2">
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="carousel-caption">
                  <h5 class="fw-bold">Pizza & Salad Combo</h5>
                  <p>Enjoy a large pizza and a fresh salad for only $19.99!</p>
                  <a href="#" class="btn btn-primary">Order Now</a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Offer 3 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <img src="path-to-offer-image-3.jpg" class="d-block w-100" alt="Offer 3">
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="carousel-caption">
                  <h5 class="fw-bold">Lunch Special</h5>
                  <p>Any personal pizza and a drink for just $9.99 from 11 AM to 3 PM!</p>
                  <a href="#" class="btn btn-primary">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#offersCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#offersCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <section id="popular-pizzas" class="popular-pizzas-section py-5">
    <div class="container">
      <h2 class="display-4 fw-bold text-center">Popular Pizzas</h2>
      <p class="lead text-center">Our most loved pizzas by customers!</p>
  
      <div class="row">
        <!-- Pizza Card 1 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="path-to-pizza-image-1.jpg" class="card-img-top" alt="Margherita Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Margherita Pizza</h5>
              <p class="card-text">Classic cheese pizza with fresh basil.</p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
  
        <!-- Pizza Card 2 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="path-to-pizza-image-2.jpg" class="card-img-top" alt="Pepperoni Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Pepperoni Pizza</h5>
              <p class="card-text">A favorite topped with spicy pepperoni.</p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
  
        <!-- Pizza Card 3 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="path-to-pizza-image-3.jpg" class="card-img-top" alt="Veggie Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Veggie Pizza</h5>
              <p class="card-text">Loaded with fresh vegetables and cheese.</p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
  
  
      
      
      
