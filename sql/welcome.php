<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1562542443-6d77a08f51ee');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #fff; /* Set text color to white for better contrast */
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay */
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
            box-shadow: 0 0 10px rgba(30, 20, 10, 0.9);
            text-align: center;
            background-color: rgba(35, 35, 35, 0.5);
        }
        h1 {
            margin-bottom: 50px;
            font-size:40px;
        }
        .welcome-message {
            margin-bottom: 40px;
            font-size:30px;
        }
        .button-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .button-grid a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button-grid a:hover {
            background-color: #45a049;
        }
        .logout-btn {
            display: block;
            width: 100px;
            margin: 30px auto;
            padding: 10px;
            text-align: center;
            background-color: #FF0000; /* Red color for logout button */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.1s;
        }
        .logout-btn:hover {
            background-color: #CC0000; /* Darker red for hover effect */
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="container">
            <h1>WELCOME TO ADMIN DASHBOARD</h1>
            <div class="welcome-message">
                <p>You can add, updata and delete student data here.</p>
            </div>
            <div class="button-grid">
                <a href="read_students.php">Read Student Data</a>
                <a href="update_student.php">Update Student Data</a>
                <a href="delete_student.php">Delete Student Data</a>
                <a href="add_student.php">Add Student Data</a>
            </div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>
