<?php
// producto.php
namespace App\Controllers;


class Empleado extends BaseController
{
//añadí cositos para la validacion 
public $csrfProtection = 'session';
public $tokenRandomize = true;
protected $helpers = ['form'];

    public function index(): string
    {

        $empleadoM = model('EmpleadoM');
        $data ['empleados']  = $empleadoM->findAll();
        return 
        view('head').
        view('menu').
        view('empleado/show', $data).
        view('footer');
    }

    public function add(): string
    {
        return 
        view('head').
        view('menu').
        view('empleado/add').
        view('footer');
    }

//añado funciones para editar 

public function edit($id_empleado){   //get
    $id_empleado = $data['id_empleado'] = $id_empleado;
    $empleadoM = model('EmpleadoM');
    $data['empleado'] = $empleadoM->where('id_empleado',$id_empleado)->findAll();
    return view('head') .
    view('menu') . 
    view('empleado/edit',$data) .
    view('footer');

   
}

//añado funciones para actualizar 

public function update(){
    $empleadoM = model('EmpleadoM');
    $id_empleado = $_POST['id_empleado'];
       
           $data = [
               'empleado' => $_POST['empleado'],
               
           ];
       
           $empleadoM->set($data)->where('id_empleado',$id_empleado)->update();

           
           return redirect()->to(base_url('/empleado'));

       
}
//modificar de acurdo a los atributos de la tabla views
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
