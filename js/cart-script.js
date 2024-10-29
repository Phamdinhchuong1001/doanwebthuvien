// cart-script.js
// Lấy sản phẩm từ localStorage
function getCart() {
    return JSON.parse(localStorage.getItem('cart')) || [];
}

// Lưu sản phẩm vào localStorage
function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
function updateQuantity(index, quantity) {
    let cart = getCart();
    cart[index].quantity = parseInt(quantity, 10);
    saveCart(cart);
    renderCart();
}

// Xóa sản phẩm khỏi giỏ hàng
function removeItem(index) {
    let cart = getCart();
    cart.splice(index, 1);
    saveCart(cart);
    renderCart();
}

// Hiển thị giỏ hàng
function renderCart() {
    let cartContainer = document.getElementById('cart-container');
    let cart = getCart();
    cartContainer.innerHTML = '';
    cart.forEach((item, index) => {
        let itemElement = document.createElement('div');
        itemElement.className = 'cart-item';
        itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-content">
                <h3>${item.name}</h3>
                <div class="quantity">
                    <label for="quantity-${index}">Số lượng: </label>
                    <input type="number" id="quantity-${index}" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                </div>
                <div class="remove-btn" onclick="removeItem(${index})"><i class="fa fa-trash" aria-hidden="true"></i></div>
            </div>
        `;
        cartContainer.appendChild(itemElement);
    });
}

// Khởi tạo giỏ hàng
document.addEventListener('DOMContentLoaded', () => {
    renderCart();
});