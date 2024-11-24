// Helper to calculate the price
function calculatePizzaPrice(basePrice, size, sizePriceAdjustments, toppings, toppingPrice) {
    return basePrice + sizePriceAdjustments[size] + (toppings.length * toppingPrice);
}

// Function to add item to the cart
function addToCart(item) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));

    // Update cart count after adding an item
    updateCartCount();
}

// Function to update the cart count
function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCountElement = document.getElementById("cart-count");
    if (cartCountElement) {
        cartCountElement.textContent = cart.length;
    }
}

// Event listener for the form submission
document.addEventListener("DOMContentLoaded", () => {
    const orderForm = document.getElementById("order-form");

    // Initialize cart count on page load
    updateCartCount();

    orderForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const basePrice = 9.99;
        const sizePriceAdjustments = { small: 0, medium: 2, large: 4 };
        const toppingPrice = 1.5;

        // Retrieve form data
        const pizza = document.getElementById("pizza-selection").value;
        const size = document.getElementById("size").value;
        const toppings = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => checkbox.value);

        // Calculate total price
        const totalPrice = calculatePizzaPrice(basePrice, size, sizePriceAdjustments, toppings, toppingPrice);

        // Add to cart
        const cartItem = {
            name: pizza,
            size: size,
            toppings: toppings,
            price: totalPrice,
        };

        addToCart(cartItem);

        // Show confirmation
        alert("Your pizza has been added to the cart!");
    });
});
