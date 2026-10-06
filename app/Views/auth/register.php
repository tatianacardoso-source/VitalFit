<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
</head>

<body>

    <h1>Crear cuenta</h1>

    <form action="<?= base_url('guardarRegistro') ?>" method="post">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Registrarme</button>

    </form>

    <p>
        ¿Ya tenés una cuenta?
        <a href="<?= base_url('login') ?>">Iniciar sesión</a>
    </p>

</body>
</html>
