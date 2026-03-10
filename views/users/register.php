<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - <?php echo SITENAME; ?></title>
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
        .reg-container {
            width: 100%;
            max-width: 450px;
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
            margin-bottom: 1.2rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.85rem;
            color: #94a3b8;
        }
        input {
            width: 100%;
            padding: 0.75rem;
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
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            color: #94a3b8;
        }
        .footer-links a {
            color: var(--primary);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="reg-container">
        <h2>Join the Blog</h2>
        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
            <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" name="username" id="username" class="<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
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
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <button type="submit" class="btn">Create Account</button>
            <div class="footer-links">
                Already have an account? <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
