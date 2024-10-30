<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1>Build Your Own Pizza</h1>
    <form id="order-form">
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

        <div class="mb-3">
            <label for="name" class="form-label">Your Name:</label>
            <input type="text" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Your Phone:</label>
            <input type="tel" id="phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add to Cart</button>
    </form>

    <div id="order-summary" class="mt-4"></div>
</div>

<script>
    document.getElementById('order-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Base price and adjustments
        let basePrice = 9.99;
        let sizePriceAdjustments = { small: 0, medium: 2, large: 4 };
        let toppingPrice = 1.5; // Price per topping

        // Retrieve form data
        const pizza = document.getElementById('pizza-selection').value;
        const size = document.getElementById('size').value;
        const toppings = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => checkbox.value);
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;

        // Calculate final price
        let totalPrice = basePrice + sizePriceAdjustments[size] + (toppings.length * toppingPrice);

        // Generate order summary
        const summary = `
            <h2>Order Summary</h2>
            <p>Pizza: ${pizza} (${size})</p>
            <p>Toppings: ${toppings.join(', ') || 'None'}</p>
            <p>Total Price: $${totalPrice.toFixed(2)}</p>
            <p>Name: ${name}</p>
            <p>Phone: ${phone}</p>
        `;
        document.getElementById('order-summary').innerHTML = summary;

        // Add to cart object
        const cartItem = {
            name: `${pizza} (${size})`,
            toppings: toppings,
            price: totalPrice,
            customer: { name: name, phone: phone }
        };

        // Retrieve cart from localStorage, update, and save back
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(cartItem);
        localStorage.setItem('cart', JSON.stringify(cart));

        // Display a confirmation message
        alert("Your pizza has been added to the cart!");
        
        // Optionally, redirect to cart page after adding to cart
        // window.location.href = "cart.php";
    });
</script>

<?php include 'footer.php'; ?>
