document.addEventListener("DOMContentLoaded", () => {
    // Get the cart from local storage or initialize it
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to update the cart display
    function updateCartDisplay() {
        const cartItemsContainer = document.getElementById('cart-items');
        if (!cartItemsContainer) {
            return; // Exit if the container doesn't exist
        }

        let totalPrice = 0;
        cartItemsContainer.innerHTML = ''; // Clear previous items

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cart.forEach((item, index) => {  // <-- Define 'index' here
                totalPrice += item.price;
                cartItemsContainer.innerHTML += `
                    <div>
                        <p>${item.name} - $${item.price.toFixed(2)}</p>
                        <button class="remove-item btn btn-danger btn-sm" data-index="${index}">Remove</button>
                    </div>
                `;
            });
        }

        document.getElementById('total-price').innerText = totalPrice.toFixed(2);
    }

    // Function to update the cart count in the header
    function updateCartCount() {
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            cartCountElement.innerText = cart.length;
        }
    } 

     // Event listener for removing items from the cart
     document.addEventListener('click', (event) => {
         if (event.target.classList.contains('remove-item')) {
             const itemIndex = event.target.getAttribute('data-index');
             cart.splice(itemIndex, 1); // Remove item from cart array
             localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
             updateCartDisplay(); // Refresh the cart display
             updateCartCount(); // Update the cart count immediately
            }
     });

    // Event listeners for "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));

            // Add item to cart
            cart.push({ name, price });
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${name} added to cart!`);

            // Update the cart display and count
            updateCartDisplay();
            updateCartCount();
        });
    });

    // Initial display and count update
    updateCartCount(); // Always update the count on all pages

    // Only update the cart display if we are on the cart page
    if (document.getElementById('cart-items')) {
        updateCartDisplay();
    }
});
