<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 2.5rem;
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        h1 {
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }
        p { color: #94a3b8; font-size: 1.1rem; }
        .nav {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        .nav a {
            text-decoration: none;
            color: #fff;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.05);
            transition: background 0.3s;
        }
        .nav a:hover {
            background: rgba(255, 255, 255, 0.15);
        }
        .nav a.primary {
            background: linear-gradient(to right, #38bdf8, #818cf8);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Professional Blog</h1>
        <p>Built with Row PHP & MVC Architecture</p>
        <div class="nav">
            <?php if(isLoggedIn()) : ?>
                <span>Welcome, <strong><?php echo $_SESSION['user_name']; ?></strong></span>
                <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
                <a href="<?php echo URLROOT; ?>/users/register" class="primary">Register</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
