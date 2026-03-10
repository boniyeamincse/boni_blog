<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?php echo SITENAME; ?></title>
    <style>
        :root {
            --primary: #38bdf8;
            --secondary: #818cf8;
            --bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
            --text: #f8fafc;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 2.5rem;
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border-radius: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            margin-bottom: 2rem;
            text-align: center;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #94a3b8;
        }
        input {
            width: 100%;
            padding: 0.8rem;
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.5rem;
            color: #fff;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input:focus {
            outline: none;
            border-color: var(--primary);
        }
        input.is-invalid {
            border-color: #ef4444;
        }
        .invalid-feedback {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }
        .btn {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 0.5rem;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s, transform 0.2s;
            margin-top: 1rem;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .btn:active {
            transform: scale(0.98);
        }
        .footer-links {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #94a3b8;
        }
        .footer-links a {
            color: var(--primary);
            text-decoration: none;
        }
        .alert {
            padding: 0.8rem;
            margin-bottom: 1.5rem;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            text-align: center;
        }
        .alert-success { background: rgba(34, 197, 94, 0.2); color: #4ade80; border: 1px solid rgba(34, 197, 94, 0.2); }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <?php flash('register_success'); ?>
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="<?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="footer-links">
                No account? <a href="<?php echo URLROOT; ?>/users/register">Register</a>
            </div>
        </form>
    </div>
</body>
</html>
