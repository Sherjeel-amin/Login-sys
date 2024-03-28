<?php
require '../Controllers/UserController.php';
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
        
    <form action= "../Controllers//UserController.php" method="post" onsubmit="return validateForm()">

        <br>
        <h3> Registration Form</h3><br>

        <label class ="col"for="username">User Name</label>
        <input type="text" name = "username" id="input-box-username" placeholder="User Name" required><br>
        <label class = "col" for="email">Email</label>
        <input type="email" name="email" id="input-box-email" placeholder="Email" required><br>
        <label class = "col "for="Contact">Password</label>
        <input type="password" name="password" id="input-box-password"  placeholder="Password" required><br>
        <button type="submit">Submit</button>

        <script defer src="../Javascript/login.js"></script>
    </form>
</div>

</body>

</html>