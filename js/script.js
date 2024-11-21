document.addEventListener("DOMContentLoaded", () => {
        // Check if the current page is the home page
        if (window.location.pathname === "/" || window.location.pathname === "/index.php") {
            // Add the 'navbar-home' class to make the navbar transparent on the home page
            const navbar = document.querySelector(".navbar");
            if (navbar) {
                navbar.classList.add("navbar-home");
            }
        }
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
            cart.forEach((item, index) => {
                totalPrice += item.price;
                cartItemsContainer.innerHTML += `
                <div class="cart-item-style">
                    <p><strong>${item.name}</strong></p>
                    <p>Size: ${item.size}</p>
                    <p>Crust: ${item.crust}</p>
                    <p>Quantity: ${item.quantity}</p>
                    <p>Price: $${item.price.toFixed(2)}</p>
                    <button class="remove-item btn btn-danger btn-sm" data-index="${index}">Remove</button>
                </div>
                <hr>
            `;
            });
        }

        // Check if a coupon is applied
        const appliedCoupon = JSON.parse(localStorage.getItem('appliedCoupon'));
        if (appliedCoupon) {
            // Calculate and apply coupon discount safely
            if (appliedCoupon.type === 'percentage') {
                totalPrice *= (1 - appliedCoupon.value / 100);
            } else if (appliedCoupon.type === 'amount') {
                totalPrice -= appliedCoupon.value;
            }

            // Ensure total price doesn’t go below zero
            if (totalPrice < 0) {
                totalPrice = 0;
            }

            // Display coupon info with a remove button
            cartItemsContainer.innerHTML += `
                <div class="coupon-applied">
                    <p>Coupon Applied: ${appliedCoupon.description}</p>
                    <button class="remove-coupon btn btn-warning btn-sm">X</button>
                </div>
            `;
        }

        // Display the updated total price
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

    // Event listener for removing the applied coupon
    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-coupon')) {
            localStorage.removeItem('appliedCoupon'); // Remove coupon from localStorage
            updateCartDisplay(); // Update cart display to reflect coupon removal
            alert('Coupon removed!');
        }
    });

    // Event listeners for "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const basePrice = parseFloat(button.getAttribute('data-price'));
            
            // Retrieve the selected size
            const sizeSelect = button.parentElement.querySelector('.menu-size');
            const selectedSize = sizeSelect ? sizeSelect.options[sizeSelect.selectedIndex] : null;
            const sizePrice = selectedSize ? parseFloat(selectedSize.getAttribute('data-price')) : 0;
            const sizeName = selectedSize ? selectedSize.value : 'default';
    
            // Retrieve the selected crust
            const crustSelect = button.parentElement.querySelector('.menu-crust');
            const selectedCrust = crustSelect ? crustSelect.options[crustSelect.selectedIndex] : null;
            const crustName = selectedCrust ? selectedCrust.value : 'default';
            const crustPrice = selectedCrust && crustName === 'stuffed' ? 3 : 0;
    
            // Retrieve the selected quantity
            const quantityInput = button.parentElement.querySelector('.menu-quantity');
            const quantity = quantityInput ? parseInt(quantityInput.value) : 1;
    
            // Calculate total price for the item
            const price = (basePrice + sizePrice + crustPrice) * quantity;
    
            // Add item to cart
            cart.push({ name, crust: crustName, size: sizeName, quantity, price });
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${name} added to cart!`);
    
            // Update the cart display and count
            updateCartDisplay();
            updateCartCount();
        });
    });

    // Event listener for coupon application
    document.querySelectorAll('.apply-coupon').forEach(button => {
        button.addEventListener('click', function() {
            const coupon = this.getAttribute('data-coupon');

            let couponData;
            switch (coupon) {
                case '10percent':
                    couponData = { type: 'percentage', value: 10, description: '10% Off Any Large Pizza' };
                    break;
                case '5off':
                    couponData = { type: 'amount', value: 5, description: '$5 Off Family Feast Combo' };
                    break;
                case 'freeBread':
                    couponData = { type: 'free-item', description: 'Free Garlic Bread' };
                    break;
                case 'lunchSpecial':
                    couponData = { type: 'percentage', value: 15, description: '15% Off Lunch Special' };
                    break;
            }

            localStorage.setItem('appliedCoupon', JSON.stringify(couponData));

            // Display confirmation message
            const confirmation = document.getElementById('coupon-confirmation');
            if (confirmation) {
                confirmation.style.display = 'block';
                confirmation.textContent = `${couponData.description} applied to your order!`;
            }

            // Update cart display if on cart page
            if (document.getElementById('cart-items')) {
                updateCartDisplay();
            }
        });
    });

    // Initial display and count update
    updateCartCount(); // Always update the count on all pages

    // Only update the cart display if we are on the cart page
    if (document.getElementById('cart-items')) {
        updateCartDisplay();
    }
});
