<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="process.php" method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Message: <textarea name="message" required></textarea><br>
        <button type="submit" name="contact">Submit</button>
    </form>
</body>
</html>
