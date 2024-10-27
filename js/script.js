// Get the cart from local storage or initialize it
const cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to update the cart display
function updateCartDisplay() {
    const cartItemsContainer = document.getElementById('cart-items');
    let totalPrice = 0;
    cartItemsContainer.innerHTML = ''; // Clear previous items

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
    } else {
        cart.forEach(item => {
            totalPrice += item.price;
            cartItemsContainer.innerHTML += `
                <div>
                    <p>${item.name} - $${item.price.toFixed(2)}</p>
                </div>
            `;
        });
    }
    
    document.getElementById('total-price').innerText = totalPrice.toFixed(2);
}

// Event listeners for "Add to Cart" buttons
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        const name = button.getAttribute('data-name');
        const price = parseFloat(button.getAttribute('data-price'));
        
        // Add item to cart
        cart.push({ name, price });
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${name} added to cart!`);
        
        // Update the cart display
        updateCartDisplay();
    });
});

// Initial display update
updateCartDisplay();
