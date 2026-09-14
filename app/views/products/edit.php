<style>

body {
    font-family: Arial, sans-serif;
    background: #FDE8D3;
    margin: 0;
    padding: 30px;
    color: #657166;
}

.container {
    max-width: 500px;
    margin: auto;
    background: #DAEBE3;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(101,113,102,0.2);
}

h2 {
    text-align: center;
    color: #657166;
}


label {
    font-weight: bold;
}


input,
textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    margin-top: 5px;
    background: white;
}


textarea {
    height: 100px;
    resize: none;
}


.update-btn {
    background: #CFD8C4;
    color: #657166;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}


.update-btn:hover {
    background: #99CDD8;
}


.back-btn {
    display: inline-block;
    margin-top: 15px;
    background: #F3C3B2;
    color: #657166;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 8px;
}


</style>


<div class="container">

<h2>Edit Product</h2>

<?php if (!empty($_SESSION['product_error'])): ?>
    <p style="color:#a33;" role="alert"><?= htmlspecialchars($_SESSION['product_error'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php unset($_SESSION['product_error']); ?>
<?php endif; ?>


<form method="POST" action="/products/update/<?= $product['id'] ?>">


<label>Product Name</label>
<br>
<input type="text" 
       name="product_name"
    value="<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?>"
       required>

<br><br>


<label>Description</label>
<br>

<textarea name="description" required><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></textarea>


<br><br>


<label>Price</label>
<br>

<input type="number"
       name="price"
    min="0"
    max="99999999.99"
    step="0.01"
       value="<?= $product['price'] ?>"
       required>


<br><br>


<label>Quantity</label>
<br>

<input type="number"
       name="quantity"
    min="0"
    max="2147483647"
    step="1"
       value="<?= $product['quantity'] ?>"
       required>


<br><br>


<button class="update-btn" type="submit">
    Update Product
</button>


<br>


<a class="back-btn" href="/products">
    Back to Product List
</a>


</form>


</div>