<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <form id="login_form" method="post" action="login.php">
            <h1>Login</h1>
            <div class="input-box">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" autocorrect="off" autocapitalize="none" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href='for_pass.html'>Forgot password?</a>
            </div>
            <button type="submit" name="signin" class="btn">Login</button>
            <div class="ac">
                <p>Don't have an account? Please contact your admin.</p>
            </div>
        </form>
        <p id="loginStatus"></p>
    </div>
</body>
</html>
