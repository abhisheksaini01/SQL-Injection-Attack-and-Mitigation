<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students(id, name, email) VALUES ('$id', '$name', '$email')";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo ' <script>
        alert("Student data added successfully.");
        </script>';
    } else {
        echo ' <script>
        alert("Error in adding student data:.");
        </script>'. $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1562542443-6d77a08f51ee');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(30, 20, 10, 0.8);
            text-align: center;
            background-color: rgba(50, 50, 50, 0.7);
        }
        h1 {
            margin-bottom: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #2E8B57;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #1E5631;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="container">
            <h1>Add Student Data</h1>
            <form method="post" action="">
                <label for="id">Student Id:</label>
                <input type="text" id="id" name="id" required>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</body>
</html>












