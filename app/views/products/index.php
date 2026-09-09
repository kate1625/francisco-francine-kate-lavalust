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

<a href="/products/create" class="add-btn">
    + Add Product
</a>

<h2>Product List</h2>

<table>

<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Actions</th>
</tr>

<?php foreach($products as $product): ?>

<tr>

    <td><?= $product['id'] ?></td>

    <td><?= $product['product_name'] ?></td>

    <td><?= $product['description'] ?></td>

    <td>₱<?= number_format($product['price'],2) ?></td>

    <td><?= $product['quantity'] ?></td>

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

</tr>

<?php endforeach; ?>

</table>

</div>