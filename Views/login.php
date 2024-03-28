<?php
require '../Controllers/UserController.php';

// Retrieve the message from the URL parameter, if any
$message = isset($_GET['message']) ? $_GET['message'] : '';

// Display the message if it exists
if (!empty($message)) {
    echo "<p>$message</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

    <div class="container">
        
    <form action= "../Controllers/LoginController.php" method="post" >

        <h3> Login Form </h3><br>

        <label class = "col" for="email">Email</label>
        <input type="email" name="email" id="input-box-email" placeholder="Email" required><br>
        <label class = "col "for="Contact">Password</label>
        <input type="password" name="password" id="input-box-password"  placeholder="Password" required><br>
        <button type="submit">Submit</button>

    </form>
</div>

</body>

</html>