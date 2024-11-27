document.addEventListener("DOMContentLoaded", () => {
    // Add custom navbar class on the home page
    if (window.location.pathname === "/" || window.location.pathname === "/index.php") {
        const navbar = document.querySelector(".navbar");
        if (navbar) {
            navbar.classList.add("navbar-home");
        }
    }

    // Lunch Special Logic
    const lunchButton = document.getElementById("lunch-button");
    const lunchButtonDeals = document.getElementById("lunch-button-deals");
    const now = new Date();
    const currentHour = now.getHours();
    const lunchHours = { start: 11, end: 15 };

    if (currentHour >= lunchHours.start && currentHour < lunchHours.end) {
        if (lunchButton) lunchButton.style.display = "block";
        if (lunchButtonDeals) lunchButtonDeals.style.display = "inline-block";
    } else {
        if (lunchButton) lunchButton.style.display = "none";
        if (lunchButtonDeals) lunchButtonDeals.style.display = "none";
    }

    // Cart Operations
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    const updateCartDisplay = () => {
        const cartItemsContainer = document.getElementById("cart-items");
        if (!cartItemsContainer) return;

        let totalPrice = 0;
        cartItemsContainer.innerHTML = cart.length === 0
            ? '<p>Your cart is empty.</p>'
            : cart.map((item, index) => {
                  const itemPrice = item.price ? parseFloat(item.price) : 0;
                  totalPrice += itemPrice;

                  const toppings = item.toppings?.length
                      ? `<p>Toppings: ${item.toppings.join(", ")}</p>`
                      : "";

                  return `
                    <div class="cart-item-style">
                        <p><strong>${item.name}</strong></p>
                        ${item.size ? `<p>Size: ${item.size}</p>` : ""}
                        ${toppings}
                        ${item.crust ? `<p>Crust: ${item.crust}</p>` : ""}
                        ${item.flavor ? `<p>Flavor: ${item.flavor}</p>` : ""}
                        ${item.wings ? `<p>Wings: ${item.wings}</p>` : ""}
                        <p>Quantity: ${item.quantity}</p>
                        <p>Price: $${itemPrice.toFixed(2)}</p>
                        <button class="remove-item btn btn-danger btn-sm" data-index="${index}">X</button>
                    </div>
                    <hr>`;
              }).join("");

        // Apply any active coupons
        const appliedCoupon = JSON.parse(localStorage.getItem("appliedCoupon"));
        if (appliedCoupon) {
            if (appliedCoupon.type === "percentage") {
                totalPrice *= 1 - appliedCoupon.value / 100;
            } else if (appliedCoupon.type === "amount") {
                totalPrice -= appliedCoupon.value;
            }
            totalPrice = Math.max(totalPrice, 0); // Avoid negative prices

            cartItemsContainer.innerHTML += `
                <div class="coupon-applied">
                    <p>Coupon Applied: ${appliedCoupon.description}</p>
                    <button class="remove-coupon btn btn-warning btn-sm">X</button>
                </div>`;
        }

        // Update total price display
        const totalPriceElement = document.getElementById("total-price");
        if (totalPriceElement) {
            totalPriceElement.innerText = totalPrice.toFixed(2);
        }
    };

    const updateCartCount = () => {
        const cartCountElement = document.getElementById("cart-count");
        if (cartCountElement) {
            cartCountElement.innerText = cart.length;
        }
    };

    // Event Delegation for Removing Items or Coupons
    document.addEventListener("click", (event) => {
        if (event.target.classList.contains("remove-item")) {
            const index = event.target.getAttribute("data-index");
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartDisplay();
            updateCartCount();
        }

        if (event.target.classList.contains("remove-coupon")) {
            localStorage.removeItem("appliedCoupon");
            alert("Coupon removed!");
            updateCartDisplay();
        }
    });

    // Apply Coupons
    document.querySelectorAll(".apply-coupon").forEach((button) => {
        button.addEventListener("click", () => {
            const couponCode = button.getAttribute("data-coupon");
            let couponData;

            if (couponCode === "10percent") {
                const hasLargePizza = cart.some((item) => item.size === "large");
                if (!hasLargePizza) {
                    alert("You must have a large pizza in your cart to apply this coupon!");
                    return;
                }
                couponData = { type: "percentage", value: 10, description: "10% Off Any Large Pizza" };
            } else if (couponCode === "5off") {
                const hasFamilyFeast = cart.some((item) => item.name === "Family Feast");
                if (!hasFamilyFeast) {
                    alert("You must have a Family Feast Combo in your cart to apply this coupon!");
                    return;
                }
                couponData = { type: "amount", value: 5, description: "$5 Off Family Feast Combo" };
            }

            if (couponData) {
                localStorage.setItem("appliedCoupon", JSON.stringify(couponData));
                alert(`${couponData.description} applied!`);
                updateCartDisplay();
            }
        });
    });

    // Add Items to Cart
    document.querySelectorAll(".add-to-cart").forEach((button) => {
        button.addEventListener("click", () => {
            const item = {
                name: button.getAttribute("data-name"),
                price: parseFloat(button.getAttribute("data-price")),
                size: button.getAttribute("data-size") || "",
                quantity: 1,
            };
            cart.push(item);
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartDisplay();
            updateCartCount();
        });
    });

    updateCartCount();
    updateCartDisplay();
});
