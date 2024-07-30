<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        .navbar img {
            height: 30px;
            width: auto;
        }
        .content {
            position: relative;
            text-align: center;
            margin-top: 0px;
        }
        .content img {
            width: 1550px;
            height: 635px;
            display: block;
        }
        .intro {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-weight: bold;
            font-size:25px;
            max-width: 80%;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 20px;
            box-sizing: border-box;
        }
        .intro h1, .intro p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    
    <div class="content">
        <img src="sql.jpg" alt="SQL image">
        <div class="intro">
            <h1>Welcome to SQL Injection Demonstration</h1>
            <p>This is a demo website designed to illustrate SQL injection attacks and their mitigation through a firewall.</p>
        </div>
    </div>

</body>
</html>
