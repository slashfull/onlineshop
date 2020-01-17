<?php 

class ProductoController extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function listar(){
		$lista_productos = ['Producto 1', 'Producto 2', 'Producto 3', 'Producto 4', 'Producto 5'];
		$this->view->lista_productos = $lista_productos;
		$this->view->render($this, 'index');
	}
}

 ?>