<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificarse</title>
    <link rel="stylesheet" href="estilos/login.css">
</head>

<body>
    <main>
        <div class="bg"></div>
        <div class="form">
            <h1>Gestión de proyectos</h1>
            <div class="links">
                <a href="login.php">Iniciar sesión</a>
                <a href="register.php">Registrarse</a>
            </div>
            <form method="post" action="" name="login-form">
                <header>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                    </svg>
                    <h2>Identificarse</h2>
                </header>
                <div class="form-element">
                    <label>Usuario</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" placeholder="Usuario" required />
                </div>
                <div class="form-element">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña" required />
                </div>
                <button name="login" value="login">Iniciar sesión</button>
            </form>
        </div>
    </main>
</body>

</html>
