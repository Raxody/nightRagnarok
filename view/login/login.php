<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>login</title>
</head>

<body>

<section>
    <div class="login-box">
        <form action="">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">                
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>¿No tienes una cuenta?<a href="#">Registrate</a></p>
            </div>
        </form>
    </div>
</section>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>