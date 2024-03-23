<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 3px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #333;
            color: #fff;
            border: 0;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <form action="process.php" method="POST">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>
    <br>
    <a href="index.php">Go Back</a>
</body>
</html>