<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data List</h1>
    <a class="btn" href="add.php">Add New</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Number</th>
            <th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['number'] ?></td>
            <td>
                <a class="btn" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="btn red" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
