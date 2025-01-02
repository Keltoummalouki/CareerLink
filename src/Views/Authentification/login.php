<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="/">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="password" required>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div class="remember-me">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>
                    D'ont have an account? 
                    <a href="#">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>