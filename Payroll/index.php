<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/login_styles.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <img src="image/nlogo.jpg" alt="Neuralcore Logo" class="logo">

        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Email/Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign in</button>
        </form>
        <a href="#" class="d-block mt-2 text-center">Forgot Password?</a>
    </div>
</body>
</html>