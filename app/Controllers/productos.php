<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Productos extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $datos['productos'] = $productoModel->findAll();

        return view('productos/index', $datos);
    }

    public function crear()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('productos/crear');
    }

    public function guardar()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $productoModel = new ProductoModel();

        $productoModel->insert([
            'nombre'       => $this->request->getPost('nombre'),
            'descripcion'  => $this->request->getPost('descripcion'),
            'stock'        => $this->request->getPost('stock'),
            'precio'       => $this->request->getPost('precio'),
            'id_categoria' => $this->request->getPost('id_categoria'),
            'imagen'       => $this->request->getPost('imagen')
        ]);

        return redirect()->to('/productos');
    }

    public function agregarAlCarrito($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        if (!$producto) {
            return redirect()->to('/productos');
        }

        $carrito = session()->get('carrito') ?? [];
        $carrito[$id] = ($carrito[$id] ?? 0) + 1;

        session()->set('carrito', $carrito);

        return redirect()->to('/productos');
    }
}

//hola hola