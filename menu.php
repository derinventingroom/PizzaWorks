<?php include 'header.php'; ?>
<section id="menu" class="menu-section py-5">
    <div class="container">
      <!-- <h2 class="display-4 fw-bold text-center">Our Menu</h2> -->
      
      <div class="row">
        <!-- Pizza Category -->
        <div class="col-md-12">
          <h3 class="my-4">Pizzas</h3>
          <div class="row customize-block">
            <!-- Pizza Item 1 -->
            <div class="col-md-12 mb-12 col-md-4 mb-4">
              <div class="menu-row card">
                <img src="images/customize-pizza.jpg" class="card-img-top" alt="Margherita Pizza">
                <div class="card-body">
                  <h5 class="card-title">Build Your Own</h5>
                  <p class="card-text">Create your perfect pizza, your way.</p>
                  <p class="fw-bold">$12.99</p>
                  <!-- <a href="buildpizza.php" class="btn btn-primary">Customize</a> -->
                  <a href="#" class="btn btn-primary toggle-form-btn" data-toggle="order-form">Build</a>
                  <!--Build Form -->
                  <form id="order-form" class="form-closed">
                    <div class="mb-3">
                        <label for="pizza-selection" class="form-label">Select Your Pizza:</label>
                        <select id="pizza-selection" class="form-select" required>
                            <option value="">Choose a pizza...</option>
                            <option value="margherita">Margherita</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="bbq-chicken">BBQ Chicken</option>
                            <option value="hawaiian">Hawaiian</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size:</label>
                        <select id="size" class="form-select" required>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="toppings" class="form-label">Additional Toppings:</label>
                        <div>
                            <input type="checkbox" id="pepperoni" value="Pepperoni">
                            <label for="pepperoni">Pepperoni</label>
                        </div>
                        <div>
                            <input type="checkbox" id="mushrooms" value="Mushrooms">
                            <label for="mushrooms">Mushrooms</label>
                        </div>
                        <div>
                            <input type="checkbox" id="onions" value="Onions">
                            <label for="onions">Onions</label>
                        </div>
                        <div>
                            <input type="checkbox" id="extra-cheese" value="Extra Cheese">
                            <label for="extra-cheese">Extra Cheese</label>
                        </div>
                    </div>
                    <input type="number" id="quantity" class="form-control" min="1" value="1" required>
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>


                  <!-- <div id="order-summary" class="mt-4"></div> -->
                  <!--./End Build Pizza -->
                </div>
              </div>
            </div>
          </div>

        <!--Original Grid-->
        <div class="col-md-12">
    
          <div class="row">
            <!-- Pizza Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/margherita-pizza-2-menu.jpg" class="card-img-top" alt="Margherita Pizza">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Margherita Pizza</h5>
                    <p class="fw-bold">$12.99</p>
                  </div>
                  <p class="card-text">Classic cheese pizza with fresh basil.</p>

              <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="pizza-size" class="menu-size" data-base-price="12.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Margherita Pizza" data-price="12.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/pepperoni-pizza-menu.jpg" class="card-img-top" alt="Pepperoni Pizza">
                <div class="card-body">
                <div class="menu-card-header">
                    <h5 class="card-title">Pepperoni Pizza</h5>
                    <p class="fw-bold">$14.99</p>
                  </div>
                  <p class="card-text">A favorite topped with spicy pepperoni.</p>
                  <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="size-margherita" class="menu-size" data-base-price="14.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Pepperoni Pizza" data-price="14.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/veggie-pizza-menu.jpg" class="card-img-top" alt="Veggie Pizza">
                <div class="card-body">
                <div class="menu-card-header">
                   <h5 class="card-title">Veggie Pizza</h5>
                    <p class="fw-bold">$13.99</p>
                </div>
                  <p class="card-text">Loaded with fresh vegetables and cheese.</p>
                  <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="size-margherita" class="menu-size" data-base-price="13.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Veggie Pizza" data-price="13.99">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
  
          <div class="row">
            <!-- Pizza Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/cheesy-pizza-menu.jpg" class="card-img-top" alt="Margherita Pizza">
                <div class="card-body">
                <div class="menu-card-header">
                  <h5 class="card-title">Cheesy Pizza</h5>
                  <p class="fw-bold">$12.99</p>
                </div>
                  <p class="card-text">Classic cheese pizza with fresh mozzerella.</p>
                  <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="size-margherita" class="menu-size" data-base-price="12.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Cheesy Pizza" data-price="12.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/supreme-pizza-menu.jpg" class="card-img-top" alt="Pepperoni Pizza">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Supreme Pizza</h5>
                    <p class="fw-bold">$14.99</p>
                  </div>
                  <p class="card-text">Savory meats, fresh veggies, and melty cheese.</p>
                  <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="size-margherita" class="menu-size" data-base-price="14.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Supreme Pizza" data-price="14.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Pizza Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/meat-lovers-pizza-menu.jpg" class="card-img-top" alt="Veggie Pizza">
                <div class="card-body">
                 <div class="menu-card-header">
                    <h5 class="card-title">Meat Lovers Pizza</h5>
                    <p class="fw-bold">$13.99</p>
                  </div>
                  <p class="card-text">Packed with meats, perfect for carnivores!</p>
                  <div class="user-options">
                <div class="option-flex">
                    <!-- <label for="size-margherita">Size:</label> -->
                    <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                    <select id="size-margherita" class="menu-size" data-base-price="13.99" data-name="Margherita Pizza" placeholder="Size">
                    <option value="" disabled selected hidden>Size</option>
                        <option value="small" data-price="0">Small</option>
                        <option value="medium" data-price="2">Medium (+$2)</option>
                        <option value="large" data-price="4">Large (+$4)</option>
                    </select>
                    <!-- <label for="quantity-margherita">Quantity:</label> -->
                 </div>
                  <!-- <label for="crust-margherita">Crust:</label> -->
                  <select id="crust-margherita" class="menu-crust">
                      <option value="" disabled selected hidden>Crust</option>
                      <option value="thin">Thin Crust</option>
                      <option value="thick">Thick Crust</option>
                      <option value="stuffed" data-price="3">Stuffed Crust (+$3)</option>
                  </select>
               </div><!--End User Options-->
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Meat Lovers Pizza" data-price="13.99">Add to Cart</a>
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
                <img src="images/free-garlic-bread-deal.jpg" class="card-img-top" alt="Garlic Bread">
                <div class="card-body">
                  <div class="menu-card-header">
                   <h5 class="card-title">Garlic Bread</h5>
                   <p class="fw-bold">$2.99</p>
                  </div>
                  <p class="card-text">Deliciously baked garlic bread.</p>
                  
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Garlic Bread - 10 ct" data-price="5.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Side Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/buffalo-wings-menu.jpg" class="card-img-top" alt="Wings">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Buffalo Wings</h5>
                    <p class="fw-bold">$7.99</p>
                  </div>
                  <p class="card-text">Spicy wings served with ranch dip.</p>
                  
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Buffalo Wings - 10 ct" data-price="7.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Side Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/chicken-strips-menu.jpg" class="card-img-top" alt="Salad">
                <div class="card-body">
                <div class="menu-card-header">
                  <h5 class="card-title">Chicken Strips</h5>
                  <p class="fw-bold">$5.99</p>
                  </div>
                  <p class="card-text">Crispy, tender chicken strips, irresistibly tasty</p>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Chicken Strips - 6 ct" data-price="4.99">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Salads Category -->
        <div class="col-md-12">
          <h3 class="my-4">Salads</h3>
          <div class="row">
            <!-- Salad Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/ceasar-salad-menu.jpg" class="card-img-top" alt="Salad">
                <div class="card-body">
                <div class="menu-card-header">
                  <h5 class="card-title">Caesar Salad</h5>
                  <p class="fw-bold">$5.99</p>
                  </div>
                  <p class="card-text">Fresh greens with Caesar dressing.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Caesar Salad" data-price="5.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- SAlad Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/garden-salad-menu.jpg" class="card-img-top" alt="Iced Tea">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Garden Salad</h5>
                    <p class="fw-bold">5.99</p>
                  </div>
                  <p class="card-text">Fresh, crisp veggies tossed to perfection!</p>
                  <input type="number" id="quantity" class="form-control" min="1" value="1" required>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Garden Salad" data-price="5.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Salad Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/chicken-salad-menu.jpg" class="card-img-top" alt="Water">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Chicken Salad</h5>
                    <p class="fw-bold">$6.99</p>
                  </div>
                  <p class="card-text">Grilled chicken atop crisp garden greens.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Chicken Salad" data-price="6.99">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- Desserts Category -->
          <div class="col-md-12">
          <h3 class="my-4">Desserts</h3>
          <div class="row">
            <!-- Dessert Item 1 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images\cinnamon-squares-menu.jpg" class="card-img-top" alt="Soda">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Cinnamon Squares</h5>
                    <p class="fw-bold">$3.99</p>
                  </div>
                  <p class="card-text">Warm, sweet squares topped with frosting.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Cinnamon Squares 10 ct" data-price="3.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Dessert Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images\brownies-menu.jpg" class="card-img-top" alt="Iced Tea">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Brownies</h5>
                    <p class="fw-bold">$3.49</p>
                  </div>
                  <p class="card-text">Rich, fudgy brownies for chocolate lovers.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Browies - 6 ct" data-price="3.49">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Dessert Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images\butter-pecan-cookies-menu.jpg" class="card-img-top" alt="Water">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Buttery Pecan Cookies</h5>
                    <p class="fw-bold">$2.49</p>
                  </div>
                  <p class="card-text">Soft, buttery cookies loaded with pecans.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Buttery Pecan Cookies - 6 ct" data-price="2.49">Add to Cart</a>
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
                <img src="images/soda-pop-menu.jpg" class="card-img-top" alt="Soda">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Soda</h5>
                    <p class="fw-bold">$1.99</p>
                  </div>
                  <p class="card-text">Choice of cola, lemon-lime, or root beer.</p>
                  <div class="soda option-flex">
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <select id="" class="menu-flavor">
                      <option value="" disabled selected hidden>Flavor</option>
                      <option value="Cola">Cola</option>
                      <option value="Lemon/Lime Pop">Lemon/Lime</option>
                      <option value="Root Beer">Root Beer</option>
                  </select>
                </div>
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Soda" data-price="1.99">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Drink Item 2 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/iced-tea-menu.jpg" class="card-img-top" alt="Iced Tea">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Iced Tea</h5>
                    <p class="fw-bold">$2.49</p>
                  </div>
                  <p class="card-text">Refreshing iced tea with lemon.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
                  <a href="#" class="add-to-cart btn btn-primary" data-name="Iced Tea" data-price="2.49">Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Drink Item 3 -->
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="images/water-bottle-menu.jpg" class="card-img-top" alt="Water">
                <div class="card-body">
                  <div class="menu-card-header">
                    <h5 class="card-title">Bottled Water</h5>
                    <p class="fw-bold">$1.49</p>
                  </div>
                  <p class="card-text">Pure, refreshing bottled water.</p>
                  <input type="number" id="quantity-margherita" placeholder="Quantity" class="menu-quantity" value="1" min="1">
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