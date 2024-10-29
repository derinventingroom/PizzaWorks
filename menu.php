<?php include 'header.php'; ?>
<section id="menu" class="menu-section py-5">
    <div class="container">
      <h2 class="display-4 fw-bold text-center">Our Menu</h2>
      
      <div class="row">
        <!-- Pizza Category -->
        <div class="col-md-12">
          <h3 class="my-4">Pizzas</h3>
          <div class="row">
            <!-- Pizza Item 1 -->
            <div class="col-md-12 mb-12">
              <div class="card">
                <!-- <img src="path-to-pizza-image-1.jpg" class="card-img-top" alt="Margherita Pizza"> -->
                <div class="card-body">
                  <h5 class="card-title">Build Your Own</h5>
                  <p class="card-text">Classic cheese pizza with fresh basil.</p>
                  <p class="fw-bold">$12.99</p>
                  <a href="buildpizza.php" class="btn btn-primary">Cuztomize</a>
                </div>
              </div>
            </div>
           
          </div>
        </div>

        <div class="col-md-12">
          <h3 class="my-4">Pizzas</h3>
          <div class="row">
            <!-- Pizza Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <!-- <img src="path-to-pizza-image-1.jpg" class="card-img-top" alt="Margherita Pizza"> -->
                <div class="card-body">
                  <h5 class="card-title">Margherita Pizza</h5>
                  <p class="card-text">Classic cheese pizza with fresh basil.</p>
                  <p class="fw-bold">$12.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Margherita Pizza" data-price="12.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-pizza-image-2.jpg" class="card-img-top" alt="Pepperoni Pizza">
                <div class="card-body">
                  <h5 class="card-title">Pepperoni Pizza</h5>
                  <p class="card-text">A favorite topped with spicy pepperoni.</p>
                  <p class="fw-bold">$14.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Pepperoni Pizza" data-price="14.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-pizza-image-3.jpg" class="card-img-top" alt="Veggie Pizza">
                <div class="card-body">
                  <h5 class="card-title">Veggie Pizza</h5>
                  <p class="card-text">Loaded with fresh vegetables and cheese.</p>
                  <p class="fw-bold">$13.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Veggie Pizza" data-price="13.99">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Sides Category -->
        <div class="col-md-12">
          <h3 class="my-4">Sides</h3>
          <div class="row">
            <!-- Side Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-side-image-1.jpg" class="card-img-top" alt="Garlic Bread">
                <div class="card-body">
                  <h5 class="card-title">Garlic Bread</h5>
                  <p class="card-text">Deliciously baked garlic bread.</p>
                  <p class="fw-bold">$4.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Garlic Bread" data-price="4.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Side Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-side-image-2.jpg" class="card-img-top" alt="Wings">
                <div class="card-body">
                  <h5 class="card-title">Chicken Wings</h5>
                  <p class="card-text">Spicy wings served with ranch dip.</p>
                  <p class="fw-bold">$7.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Chicken Wings" data-price="7.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Side Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-side-image-3.jpg" class="card-img-top" alt="Salad">
                <div class="card-body">
                  <h5 class="card-title">Caesar Salad</h5>
                  <p class="card-text">Fresh greens with Caesar dressing.</p>
                  <p class="fw-bold">$5.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Caesar Salad" data-price="5.99">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Drinks Category -->
        <div class="col-md-12">
          <h3 class="my-4">Drinks</h3>
          <div class="row">
            <!-- Drink Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-drink-image-1.jpg" class="card-img-top" alt="Soda">
                <div class="card-body">
                  <h5 class="card-title">Soda</h5>
                  <p class="card-text">Choice of cola, lemon-lime, or root beer.</p>
                  <p class="fw-bold">$1.99</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Soda" data-price="1.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Drink Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-drink-image-2.jpg" class="card-img-top" alt="Iced Tea">
                <div class="card-body">
                  <h5 class="card-title">Iced Tea</h5>
                  <p class="card-text">Refreshing iced tea with lemon.</p>
                  <p class="fw-bold">$2.49</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Iced Tea" data-price="2.49">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Drink Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="path-to-drink-image-3.jpg" class="card-img-top" alt="Water">
                <div class="card-body">
                  <h5 class="card-title">Bottled Water</h5>
                  <p class="card-text">Pure, refreshing bottled water.</p>
                  <p class="fw-bold">$1.49</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Bottled Water" data-price="1.49">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>