<?php 

class UsuarioController extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function Entrar(){
		$this->view->render($this, 'login');
	}
}

 ?>