<?php
class Paginas extends Controlador{

    public function __construct(){

      $this->articuloModelo = $this->modelo('Articulo');

       // echo 'Controlador paginas cargando';
    }
    public function index(){
        $articulos = $this->articuloModelo->obtenerArticulo();

        $datos=[
            'titulo'=>'Bienvenidos a WebAppMVC',
            'articulos' => $articulos
        ];

      $this->vista('paginas/inicio',$datos);
    }

    public function articulo(){
       // $this->vista('paginas/articulo');
    }
    public function actualizar($num_registro)
    {
      echo $num_registro;
    }
    
}