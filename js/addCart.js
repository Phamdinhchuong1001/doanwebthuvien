function addToCart(name, image, price) {
    // Chuyển giá thành số
    const productPrice = Number(price);

    // Lấy giỏ hàng từ localStorage hoặc khởi tạo một giỏ hàng mới nếu chưa có
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingProduct = cart.find(item => item.name === name);
    if (existingProduct) {

        // Tăng số lượng nếu sản phẩm đã có trong giỏ hàng
        existingProduct.quantity += 1;
    }
     else {
        // Thêm sản phẩm mới vào giỏ hàng
        cart.push({ name, image, price: productPrice, quantity: 1 });
    }
    
    // Lưu giỏ hàng vào localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Xác nhận việc thêm sản phẩm vào giỏ hàng (tuỳ chọn)
    alert(`${name} đã được thêm vào giỏ hàng!`);
}