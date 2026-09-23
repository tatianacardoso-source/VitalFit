<?= view('templates/header') ?>

<div>
    <div>
        <div>
            <h3>Iniciar Sesión</h3>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('exito')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('exito') ?></div>
            <?php endif; ?>

            <!-- 1. Crear un formulario con método POST que envíe los datos a la ruta 'login' -->
            <form>
                <div>
                <!-- 1.1 Insertar un campo para el mail -->
                </div>
                <div>
                <!-- 1.2 Insertar un campo para la contraseña -->
                </div>
                <!-- 1.3 Añadir un botón para enviar el formulario -->
            </form>
            <div>
            <!-- 2. Añadir un enlace para redirigir a 'register' si el usuario no tiene cuenta -->
            </div>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>