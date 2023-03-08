<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/createAccount.css">
    <title>login</title>
</head>

<body>

    <section>
        <div class="login-box">
            <form action="./saveCreateAccount.php" method="POST" autocomplete="off">
                <h2>Crear usuario</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="nameNewUser" name="nameNewUser" required>
                    <label>Nombre completo</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="userNameNewUser" name="userNameNewUser" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="idNewUser" name="idNewUser" required>
                    <label>Numero de documento</label>
                </div>
                <div class="select-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <select id="typeIdNewUser" name="typeIdNewUser">
                        <option value="">Selecciona tipo de documento</option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="CE">Cedula de extranjeria</option>
                        <option value="TI">Tarjeta de identidad</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="text" id="emailAddressNewUser" name="emailAddressNewUser" required>
                    <label>Correo electronico</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="call"></ion-icon>
                    </span>
                    <input type="number" id="cellPhoneNewUser" name="cellPhoneNewUser" required>
                    <label>Número de celular</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="location"></ion-icon>
                    </span>
                    <input type="text" id="locationNewUser" name="locationNewUser" required>
                    <label>Dirección de residencia</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="compass"></ion-icon>
                    </span>
                    <input type="text" id="detailsLocationNewUser" name="detailsLocationNewUser" required>
                    <label>Detalles de la dirección</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" id="passwordNewUser" name="passwordNewUser" required>
                    <label>Contraseña</label>
                </div>
                <button type="submit">Crear usuario</button>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>