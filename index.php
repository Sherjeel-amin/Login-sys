<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      text-align: center;
    }

    h1 {
      color: #fdfcfc;
      margin-bottom: 50px;
      font-weight: 700;
      font-size: 2.5em;
    }

    .btn {
      padding: 15px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 50px;
      font-size: 1.2em;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
      margin: 10px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .btn-primary {
      margin-right: 20px;
    }

    .bg-img {
      background-image: url('https://plus.unsplash.com/premium_photo-1678565999332-1cde462f7b24?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      background-size: cover;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      filter: blur(4px);
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    .content {
      position: relative;
      z-index: 1;
      color: #fff;
    }

    .subtitle {
      font-size: 1.5em;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="bg-img"></div>
  <div class="overlay"></div>
  <div class="container content">
    <h1>Welcome to Login-sys</h1>
    <div class="subtitle">Please Login or Signup</div>
    <a href="Views/register.php" class="btn">SignUp</a>
    <a href="Views/login.php" class="btn btn-primary">Login</a>
  
  </div>
</body>
</html>

