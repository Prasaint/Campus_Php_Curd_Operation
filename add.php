<?php include 'db.php'; //create insert data into database form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $conn->query("INSERT INTO users (name, age, number) VALUES ('$name', '$age', '$number')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New User</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="text" name="number" placeholder="Number" required>
        <button type="submit" class="btn">Save</button>
    </form>
</body>
</html>
