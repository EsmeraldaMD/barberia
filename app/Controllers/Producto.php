<?php
// producto.php
namespace App\Controllers;


class Producto extends BaseController
{
//añadí cositos para la validacion 
public $csrfProtection = 'session';
public $tokenRandomize = true;
protected $helpers = ['form'];

    public function index(): string
    {

        $productoM = model('ProductoM');
        $data ['productos']  = $productoM->findAll();
        return 
        view('head').
        view('menu').
        view('producto/show', $data).
        view('footer');
    }

    public function add(): string
    {
        return 
        view('head').
        view('menu').
        view('producto/add').
        view('footer');
    }

//añado funciones para editar 

public function edit($id_producto){   //get
    $id_producto = $data['id_producto'] = $id_producto;
    $productoM = model('ProductoM');
    $data['producto'] = $productoM->where('id_producto',$id_producto)->findAll();
    return view('head') .
    view('menu') . 
    view('producto/edit',$data) .
    view('footer');

   
}

//añado funciones para actualizar 

public function update(){
    $productoM = model('ProductoM');
    $id_producto = $_POST['id_producto'];
       
           $data = [
               'producto' => $_POST['producto'],
               
           ];
       
           $productoM->set($data)->where('id_producto',$id_producto)->update();

           
           return redirect()->to(base_url('/producto'));

       
}

//modifique insertar 
    public function insert(){ //post
        if (! $this->request->is('post')) {
            $this->index();
    }
    
    $rules = [
        'nombre' => 'required',
        'precio' => 'required',
        'stock' => 'required',
        'descripcion' => 'required'
    ];

    $data = [
        "nombre" => $_POST['nombre'],
        "precio" => $_POST['precio'],
        "stock" => $_POST['stock'],
        "descripcion" => $_POST['descripcion']
      ] ;

    // Valida los datos
        if (! $this->validate($rules)) {
            // Si la validación falla, vuelve a cargar la vista con los errores
            return     
            view('head') .
            view('menu') . 
            view('producto/add',[
                'validation' => $this->validator
            ]) .
            view('footer'); 
        }
        else{
            $productoM = model('ProductoM');
        $productoM->insert($data);
        return redirect()->to(base_url('/producto'));
        }
    
    
    }





    public function delete($idProducto, )
    {

        $productoM = model('ProductoM');
        $productoM->delete($idProducto);
        return redirect()->to(base_url('/producto'));
    }
}
