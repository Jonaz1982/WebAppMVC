<?php
/*
Mapea la url ingresada en le navegador 
1 - Controlador
2- Metodo
3-Parametro
Ejemplo: /articulos/actualizar/4
*/

class Core{
    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    //Constructor
    public function __construct(){
        $url = $this->getUrl();
    }
   
    public function getUrl(){
        echo $_GET['url'];
    }

}
