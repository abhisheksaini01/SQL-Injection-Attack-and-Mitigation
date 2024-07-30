<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #111;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar-right {
            float: right;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#home">Home</a>
    <a href="#contact">Contact</a>
    <div class="navbar-right">
        <a href="signup.php">Signup</a>
        <a href="login.php">Login</a>
        <a href="securelogin.php">SLogin</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>
