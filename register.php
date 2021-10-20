<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main>
        <form method="post" action="" name="register-form">
            <div class="form-element">
                <label>Usuario</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Email</label>
                <input type="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input type="password" name="password" required />
            </div>
            <button type="submit" name="register" value="register">Registrarse</button>
        </form>
    </main>
</body>

</html>
