<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1>Build your own</h1>
    <form id="order-form">
        <div class="mb-3">
            <label for="pizza-selection" class="form-label">Select Your Pizza:</label>
            <select id="pizza-selection" class="form-select">
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
            <select id="size" class="form-select">
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
        const pizza = document.getElementById('pizza-selection').value;
        const size = document.getElementById('size').value;
        const toppings = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => checkbox.value);
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;

        const summary = `
            <h2>Order Summary</h2>
            <p>Pizza: ${pizza} (${size})</p>
            <p>Toppings: ${toppings.join(', ') || 'None'}</p>
            <p>Name: ${name}</p>
            <p>Phone: ${phone}</p>
        `;

        document.getElementById('order-summary').innerHTML = summary;
    });
</script>

<?php include 'footer.php'; ?>
