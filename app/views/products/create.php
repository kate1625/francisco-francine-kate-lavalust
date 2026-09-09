<h2>Add Product</h2>

<form method="POST" action="/products/store">

    <label>Product Name</label><br>
    <input type="text" name="product_name" required>
    <br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea>
    <br><br>

    <label>Price</label><br>
    <input type="number" name="price" required>
    <br><br>

    <label>Quantity</label><br>
    <input type="number" name="quantity" required>
    <br><br>

    <button type="submit">Save Product</button>

</form>