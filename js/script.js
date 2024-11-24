document.addEventListener("DOMContentLoaded", () => {
    if (window.location.pathname === "/" || window.location.pathname === "/index.php") {
        const navbar = document.querySelector(".navbar");
        if (navbar) {
            navbar.classList.add("navbar-home");
        }
    }

    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCartDisplay() {
        const cartItemsContainer = document.getElementById('cart-items');
        if (!cartItemsContainer) {
            return;
        }

        let totalPrice = 0;
        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cart.forEach((item, index) => {
                const itemPrice = (item.price && !isNaN(item.price)) ? parseFloat(item.price) : 0;
                totalPrice += itemPrice;

                // Display toppings, if any
                const toppingsList = item.toppings && item.toppings.length > 0 
                    ? `<p>Toppings: ${item.toppings.join(', ')}</p>` 
                    : '';

                cartItemsContainer.innerHTML += `
                    <div class="cart-item-style">
                        <p><strong>${item.name}</strong></p>
                        ${item.size ? `<p>Size: ${item.size}</p>` : ''}
                        ${toppingsList}
                        ${item.crust ? `<p>Crust: ${item.crust}</p>` : ''}
                        ${item.flavor ? `<p>Flavor: ${item.flavor}</p>` : ''}
                        <p>Quantity: ${item.quantity}</p>
                        <p>Price: $${itemPrice.toFixed(2)}</p>
                        <button class="remove-item btn btn-danger btn-sm" data-index="${index}">Remove</button>
                    </div>
                    <hr>
                `;
            });
        }

        const appliedCoupon = JSON.parse(localStorage.getItem('appliedCoupon'));
        if (appliedCoupon) {
            if (appliedCoupon.type === 'percentage') {
                totalPrice *= (1 - appliedCoupon.value / 100);
            } else if (appliedCoupon.type === 'amount') {
                totalPrice -= appliedCoupon.value;
            }
            totalPrice = Math.max(totalPrice, 0);

            cartItemsContainer.innerHTML += `
                <div class="coupon-applied">
                    <p>Coupon Applied: ${appliedCoupon.description}</p>
                    <button class="remove-coupon btn btn-warning btn-sm">X</button>
                </div>
            `;
        }

        // Function to apply a coupon
function applyCoupon(couponCode, size, totalPrice) {
    let discount = 0;

    if (couponCode === "10percent" && size === "large") {
        discount = totalPrice * 0.10; // 10% off for large pizzas
        alert("Coupon applied! You saved 10% on your large pizza.");
    } else if (couponCode === "10percent" && size !== "large") {
        alert("This coupon is valid only for large pizzas.");
    }

    return discount;
}

        const totalPriceElement = document.getElementById('total-price');
        if (totalPriceElement) {
            totalPriceElement.innerText = totalPrice.toFixed(2);
        }
    }

    function updateCartCount() {
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            cartCountElement.innerText = cart.length;
        }
    }

    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-item')) {
            const itemIndex = event.target.getAttribute('data-index');
            cart.splice(itemIndex, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
            updateCartCount();
        }
    });

    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-coupon')) {
            localStorage.removeItem('appliedCoupon');
            updateCartDisplay();
            alert('Coupon removed!');
        }
    });

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const basePrice = parseFloat(button.getAttribute('data-price'));

            const sizeSelect = button.parentElement.querySelector('.menu-size');
            const selectedSize = sizeSelect ? sizeSelect.options[sizeSelect.selectedIndex] : null;
            const sizePrice = selectedSize ? parseFloat(selectedSize.getAttribute('data-price') || 0) : 0;
            const sizeName = selectedSize ? selectedSize.value : null;

            const crustSelect = button.parentElement.querySelector('.menu-crust');
            const selectedCrust = crustSelect ? crustSelect.options[crustSelect.selectedIndex] : null;
            const crustName = selectedCrust ? selectedCrust.value : null;
            const crustPrice = crustName === 'stuffed' ? 3 : 0;

            const flavorSelect = button.parentElement.querySelector('.menu-flavor');
            const selectedFlavor = flavorSelect ? flavorSelect.value : null;

            const toppings = Array.from(button.parentElement.querySelectorAll('input[type="checkbox"]:checked'))
                .map(checkbox => checkbox.value);

            const quantityInput = button.parentElement.querySelector('.menu-quantity');
            const quantity = quantityInput && !isNaN(quantityInput.value) ? parseInt(quantityInput.value) : 1;

            const price = ((basePrice || 0) + sizePrice + crustPrice + (toppings.length * 1.5)) * quantity;

            cart.push({
                name,
                size: sizeName,
                crust: crustName,
                toppings: toppings,
                flavor: selectedFlavor,
                quantity,
                price,
            });
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${name} added to cart!`);

            updateCartDisplay();
            updateCartCount();
        });
    });

    document.querySelectorAll('.apply-coupon').forEach(button => {
        button.addEventListener('click', function () {
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

            const confirmation = document.getElementById('coupon-confirmation');
            if (confirmation) {
                confirmation.style.display = 'block';
                confirmation.textContent = `${couponData.description} applied to your order!`;
            }

            if (document.getElementById('cart-items')) {
                updateCartDisplay();
            }
        });
    });

    updateCartCount();

    if (document.getElementById('cart-items')) {
        updateCartDisplay();
    }
});


