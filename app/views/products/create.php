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
    margin-bottom: 25px;
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
    color: #657166;
}

textarea {
    height: 100px;
    resize: none;
}

input:focus,
textarea:focus {
    outline: 2px solid #99CDD8;
}


.save-btn {
    width: 100%;
    background: #CFD8C4;
    color: #657166;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
}


.save-btn:hover {
    background: #99CDD8;
}


.back-btn {
    display: block;
    text-align: center;
    margin-top: 15px;
    background: #F3C3B2;
    color: #657166;
    padding: 10px;
    border-radius: 8px;
    text-decoration: none;
}


</style>


<div class="container">

<h2>Add Product</h2>

<?php if (!empty($_SESSION['product_error'])): ?>
    <p style="color:#a33;" role="alert"><?= htmlspecialchars($_SESSION['product_error'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php unset($_SESSION['product_error']); ?>
<?php endif; ?>


<form method="POST" action="/products/store">


<label>Product Name</label>
<br>

<input type="text" 
       name="product_name"
       placeholder="Enter product name"
       required>

<br><br>


<label>Description</label>
<br>

<textarea name="description"
          placeholder="Enter description"
          required></textarea>

<br><br>


<label>Price</label>
<br>

<input type="number"
       name="price"
    min="0"
    max="99999999.99"
    step="0.01"
       placeholder="Enter price"
       required>

<br><br>


<label>Quantity</label>
<br>

<input type="number"
       name="quantity"
    min="0"
    max="2147483647"
    step="1"
       placeholder="Enter quantity"
       required>

<br><br>


<button class="save-btn" type="submit">
    Save Product
</button>


<a class="back-btn" href="/products">
    Back to Product List
</a>


</form>

</div>