<?= view('templates/header') ?>

<div>
    <div>
        <div>
            <h3>Registro de Usuario</h3>

            <?php if (session()->getFlashdata('errores')): ?>
                <div class="alert alert-danger">
                    <ul>
                    <?php foreach (session()->getFlashdata('errores') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- 1. Crear un formulario con método POST que envíe los datos a la ruta 'register' -->
            <form>
                <div>
                    <!-- 1.1 Insertar un campo para ingresar el nombre completo -->
                </div>
                <div>
                    <!-- 1.2 Insertar un campo para ingresar el email -->
                </div>
                <div>
                    <!-- 1.3 Insertar un campo para ingresar la contraseña -->
                </div>
                <!-- 1.3 Añadir un botón para enviar el formulario -->
            </form>
            <div>
                <!-- 2. Añadir un enlace para redirigir a 'login' si el usuario ya tiene cuenta -->
            </div>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>
