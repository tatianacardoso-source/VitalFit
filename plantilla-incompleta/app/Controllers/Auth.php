<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    // 1. REGISTRO DE USUARIO
    public function register()
    {
        /* 
         Si el usuario ya tiene una sesión activa, lo redirige al inicio para evitar que vuelva a registrarse.
         En caso contrario, el método continúa y carga el formulario de registro.
        */

        if (session()->get('')) { // 1.1 Evaluá si el usuario ya está logueado
            return redirect()->to(''); // 1.2 Si el usuario está logueado, redirigílo a la página principal
        }
        return view(''); // 1.3 Mostrá la vista de registro
    }

    // 2. PROCESO DE REGISTRO DE USUARIO
    public function processRegister()
    {
        /*
         Valida los datos recibidos por POST, hashea la contraseña y registra un nuevo usuario en la base de datos.
        */

        $rules = [
            'name'   => '', // 2.1 Validá que el nombre sea obligatorio y tenga al menos 3 caracteres
            'email'    => '', // 2.2 Validá que el email sea obligatorio, tenga un formato válido y sea único en la tabla 'users'
            'password' => '' // 2.3 Validá que la contraseña sea obligatoria y tenga al menos 8 caracteres
        ];

        if (!$this->validate()) { // 2.4 Validá los datos enviados desde el formulario de registro    
            return redirect()->back()->withInput()->with('errores', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $userModel->insert([
            'name'   => '', // 2.5 Almacená el nombre enviado por POST
            'email'    => '', // 2.6 Almacená el email enviado por POST
            'password' => '', // 2.7 Almacená la contraseña enviada por POST, hasheada usando password_hash()
            'role'     => '' // 2.8 Asigná el rol 'client' al nuevo usuario
        ]);

        return redirect()->to('')->with('exito', 'Registro completado. Ahora podés iniciar sesión.'); // 2.9 Redirigí al usuario a la página de login
    }

    // 3. INICIO DE SESIÓN DE USUARIO
    public function login()
    {
        /* 
         Si el usuario ya tiene una sesión activa, lo redirige al inicio para evitar que vuelva a loguearse.
         En caso contrario, el método continúa y carga el formulario de login.
        */

        if (session()->get('')) { // 3.1 Evaluar si el usuario ya está logueado
            return redirect()->to(''); // 3.2 Si el usuario está logueado, redirigílo a la página principal
        }
        return view(''); // 3.3 Mostrá la vista de login 
    }

    // 4. PROCESO DE INICIO DE SESIÓN
    public function processLogin()
    {
        /*
         Obtiene las credenciales por POST, busca al usuario en la base de datos, verifica la contraseña hasheada 
         y, si es correcta, guarda sus datos en la sesión.
        */

        $userModel = new UserModel();
        $email = ''; // 4.1 Almacená el email enviado por POST 
        $password = ''; // 4.2 Almacená la contraseña enviada por POST

        $user = ''; // 4.3 Buscá al usuario en la base de datos usando el email

        if ($user && password_verify('', '')) { // 4.4 Verificá que la contraseña coincida con la almacenada en la base de datos
            
            session()->set([
                'id'         => '', // 4.5 Asigná el id del usuario
                'name'       => '', // 4.6 Asigná el nombre del usuario
                'email'      => '', // 4.7 Asigná el email del usuario
                'role'       => '', // 4.8 Asigná el rol del usuario
                'isLoggedIn' => true
            ]);

            return redirect()->to(''); // 4.9 Redirigí al usuario a la página principal
        }

        return redirect()->back()->withInput()->with('error', 'Correo o contraseña incorrectos.');
    }

    // 5. CIERRE DE SESIÓN
    public function logout()
    {
        /*
         Destruye todos los datos guardados en la sesión actual y redirige al visitante a la página principal.
        */

        session()->destroy();
        return redirect()->to(''); // 5.1 Redirigí al usuario a la página principal
    }
}
