<?php include 'header.php'; ?>
<section class="hero-section d-flex align-items-center">
    <div class="container">
      <div class="row">
        <!-- Left Side: Image -->
        <!-- <div class="col-lg-6 d-none d-lg-block">
          <img src="images/pizza-logo.png" alt="Delicious Pizza" class="img-fluid hero-image">
        </div> -->
  
        <!-- Right Side: Text and CTA -->
        <div class="hero-right-cta col-lg-8 text-light text-center">
          <!-- <h1 class="display-4 fw-bold">Craft Your Perfect Pizza at Pizzaworks!</h1> -->
          <img src="images/pizza-logo.png" alt="Delicious Pizza" class="img-fluid hero-image">
          <!-- <h1 class="display-4 fw-bold">PizzaWorks!</h1> -->
          <!-- <p class="lead">Handcrafted ingredients. Endless combinations.</p>  -->
           <div class="hero-buttons">
          <a href="menu.php" class="btn btn-green btn-primary btn-lg mt-3">Explore Our Menu</a>
          <a href="coupons.php" class="btn btn-green btn-primary btn-lg mt-3">Deals</a>
           </div>
        </div>
      </div>
    </div>
  </section>
  <section class="background-image-section"></section>
  <section id="popular-pizzas" class="popular-pizzas-section py-5">
    
    <!-- <div class="section-header-container">
      <div class="section-header">
        <h2 class="display-4 fw-bold text-center">Popular Pizzas</h2>
        <p class="lead text-center">Our most loved pizzas by customers!</p>
      </div>
    </div> -->
  
      <div class="row">
       <div class="pop-pizza-header col-md-3">
          <div class="card mb-lg-0 mb-4">
          <div class="section-header">
            <h2 class="display-4 fw-bold text-center">Popular Pizzas</h2>
            <p class="lead text-center">Our most loved pizzas by customers!</p>
           </div>
          </div>
        </div>
        
        <!-- Pizza Card 1 -->
        <!-- <div class="col-md-3">
          <div class="card mb-lg-0 mb-4">
            <div class="popular-pizza-block">
              <h5 class="card-title">Margherita Pizza</h5>
              <img src="images/Margherita-Pizza.jpg" class="card-img-top" alt="Margherita Pizza">
              <div class="popular-pizza-block-bottom">
                <p class="card-text">Classic cheese pizza with fresh basil.</p>
                <a href="#" class="yellow-bg btn btn-primary">Order Now</a>
              </div>
             </div>
            </div>
         </div> -->
         
         <div class="col-md-3"> 
         <a href="#" class="add-to-cart card-link" data-name="Margherita Pizza" data-price="12.99">
          <div class="card mb-lg-0 mb-4">
            <div class="popular-pizza-block">   
              <h5 class="card-title">$12.99</h5>
              <img src="images/Margherita-Pizza.jpg" class="card-img-top" alt="Pepperoni Pizza">
              <div class="popular-pizza-block-bottom">
                <div>
                   <!-- <i class="fa-solid fa-pizza-slice fa-rotate-180" style="color: #000000;"></i> -->
                   <img src="images/pizza-icon.svg" class="pizza-icon" alt="Pizza Icon">
                </div>
                <div>
                  <p class="card-text"><strong>Margherita Pizza</strong></p>
                  <p class="card-text">Classic cheese pizza with fresh basil.</p>
                </div>
                <div>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </div>
            </div>
             </div>
            </a>
            <!-- <a href="#" class="add-to-cart btn-red btn btn-primary" data-name="Margherita Pizza" data-price="12.99">Order Now</a> -->
        </div>
         
  
        <!-- Pizza Card 2 -->
         
        <div class="col-md-3">
        <a href="#" class="add-to-cart card-link" data-name="Pepperoni Pizza" data-price="14.99">
          <div class="card mb-lg-0 mb-4">
            <div class="popular-pizza-block">   
              <h5 class="card-title">$14.99</h5>
              <img src="images/pepperoni-pizza.jpg" class="card-img-top" alt="Pepperoni Pizza">
              <div class="popular-pizza-block-bottom">
                <div>
                <img src="images/pizza-icon.svg" class="pizza-icon" alt="Pizza Icon">
                   <!-- <i class="fa-solid fa-pizza-slice fa-rotate-180" style="color: #000000;"></i> -->
                </div>
                <div>
                  <p class="card-text"><strong>Pepperoni Pizza</strong></p>
                  <p class="card-text">A favorite topped with spicy pepperoni.</p>
                </div>
                <div>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </div>
            </div>
            </div>
            <!-- <a href="#" class="btn-red btn btn-primary">Order Now</a> -->
            </a>
        </div>
  
        <!-- Pizza Card 3 -->
        <div class="col-md-3">
        <a href="#" class="add-to-cart card-link" data-name="Veggie Pizza" data-price="13.99">
          <div class="card mb-lg-0 mb-4">
            <div class="popular-pizza-block">  
                <h5 class="card-title">$13.99</h5>
                <img src="images/veggie-pizza-v2.jpg" class="card-img-top" alt="Veggie Pizza">
                <div class="popular-pizza-block-bottom">
                <div>
                <img src="images/pizza-icon.svg" class="pizza-icon" alt="Pizza Icon">
                   <!-- <i class="fa-solid fa-pizza-slice fa-rotate-180" style="color: #000000;"></i> -->
                </div>
                  <div>
                    <p class="card-text"><strong>Veggie Pizza</strong></p>
                    <p class="card-text">Loaded with fresh vegetables and cheese.</p>
                  </div>
                  <div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- <a href="#" class="btn-red btn btn-primary">Order Now</a> -->
        </div>
        </a>
      </div>
   
  </section>

  <section class="background-image-section"></section>
     
<section id="special-offers" class="special-offers-section light-blue-background">
    <!-- <div class="container"> -->
      <!-- <div class="section-header-container">
        <div class="section-header">
            <h2 class="display-4 fw-bold text-center">Special Offers</h2>
            <p class="lead text-center">Delicious deals just for you!</p>
        </div>
      </div> -->
      <!-- <div id="offersCarousel" class="carousel slide" data-bs-ride="carousel" > -->
      <div id="offersCarousel" class="carousel slide" data-bs-ride="carousel" > 
         <div class="carousel-inner">
          <!-- Offer 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="carousel-bg-image-1"></div>
              <div class="carousel-description">
                <div class="carousel-description-style">
                  <h3 class="fw-bold">Family Feast</h3>
                  <p>Get 2 large pizzas, 1 garlic bread, and a 2-liter soda for just $29.99!</p>
                  <a href="#" class="add-to-cart btn-red btn btn-primary" data-name="Family Feast" data-price="29.99">Order Now</a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Offer 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="carousel-bg-image-2"></div>
              <div class="carousel-description">
                <div class="carousel-description-style">
                  <h3 class="fw-bold">Pizza & Salad Combo</h3>
                  <p>Enjoy a large pizza and a fresh salad for only $19.99!</p>
                  <a href="#" class="btn btn-red btn-primary">Order Now</a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Offer 3 -->
          <div class="carousel-item">
            <div class="row">
              <div class="carousel-bg-image-3"></div>
              <div class="carousel-description">
                <div class="carousel-description-style">
                  <h3 class="fw-bold">Lunch Special</h3>
                  <p>Any personal pizza and a drink for just $9.99 from 11 AM to 3 PM!</p>
                  <a href="#" class="btn btn-red btn-primary">Order Now</a>
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

  <section class="background-image-section"></section>

  <section class="family-fun-section">
    <div class="row">
      <img src="images\family-photo-6.jpg" class="img-fluid" alt="">
      <img src="images\family-photo-2.jpg" class="img-fluid" alt="">
      <img src="images\family-photo-3.jpg" class="img-fluid" alt="">
      <img src="images\family-photo-4.jpg" class="img-fluid" alt="">
      <img src="images\family-photo-5.jpg" class="img-fluid" alt="">
      <img src="images\family-photo-1.jpg" class="img-fluid" alt="">
    </div>
  </section>
  

  <?php include 'footer.php'; ?>
  
  
      
      
      
