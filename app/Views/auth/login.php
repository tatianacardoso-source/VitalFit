<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>

<body>

    <h1>Iniciar sesión</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p>
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <form action="<?= base_url('iniciarSesion') ?>" method="post">

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Ingresar</button>

    </form>

    <p>
        ¿No tenés una cuenta?
        <a href="<?= base_url('register') ?>">Registrate</a>
    </p>

</body>
</html>
    <p>
        ¿Ya tenés una cuenta????
        <a href="<?= base_url('login') ?>">Iniciar sesión</a>
    </p>

</body>
</html>