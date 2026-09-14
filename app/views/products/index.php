<style>

body {
    font-family: Arial, sans-serif;
    background: #FDE8D3;
    margin: 0;
    padding: 30px;
    color: #657166;
}

.container {
    max-width: 1000px;
    margin: auto;
    background: #DAEBE3;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(101,113,102,0.2);
}

h2 {
    color: #657166;
    text-align: center;
}

.add-btn {
    display: inline-block;
    background: #99CDD8;
    color: #657166;
    padding: 10px 18px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
}

th {
    background: #99CDD8;
    color: #657166;
    padding: 12px;
}

td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #DAEBE3;
}

tr:hover {
    background: #FDE8D3;
}

.edit-btn {
    background: #CFD8C4;
    color: #657166;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
}

.delete-btn {
    background: #F3C3B2;
    color: #657166;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
}

</style>


<div class="container">

<div style="display:flex; justify-content:space-between; align-items:center; gap:12px;">
    <span>Signed in as <?= htmlspecialchars($_SESSION['user']['username'] ?? 'User', ENT_QUOTES, 'UTF-8') ?></span>
    <a href="/logout">Logout</a>
</div>

<?php if (($_SESSION['user']['role'] ?? 'user') !== 'user'): ?>
    <a href="/products/create" class="add-btn">
        + Add Product
    </a>
<?php endif; ?>

<h2>Product List</h2>

<table>

<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Quantity</th>
    <?php if (($_SESSION['user']['role'] ?? 'user') !== 'user'): ?>
        <th>Actions</th>
    <?php endif; ?>
</tr>

<?php foreach($products as $product): ?>

<tr>

    <td><?= $product['id'] ?></td>

    <td><?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?></td>

    <td><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></td>

    <td>₱<?= number_format($product['price'],2) ?></td>

    <td><?= $product['quantity'] ?></td>

    <?php if (($_SESSION['user']['role'] ?? 'user') !== 'user'): ?>
    <td>

        <a class="edit-btn" href="/products/edit/<?= $product['id'] ?>">
            Edit
        </a>

        <a class="delete-btn" 
           href="/products/delete/<?= $product['id'] ?>"
           onclick="return confirm('Delete this product?')">
            Delete
        </a>

    </td>
    <?php endif; ?>

</tr>

<?php endforeach; ?>

</table>

</div>