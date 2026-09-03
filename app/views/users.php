<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th {
            background: #2c3e50;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }
    </style>

</head>

<body>

<h2>Users List</h2>

<table>
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Username</th>
</tr>

<?php foreach($users as $user): ?>

<tr>
    <td><?= $user['id']; ?></td>
    <td><?= $user['firstname']; ?></td>
    <td><?= $user['lastname']; ?></td>
    <td><?= $user['email']; ?></td>
    <td><?= $user['username']; ?></td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>