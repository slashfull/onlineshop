<?php 

class InicioController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render($this, "index");
	}

	public function contacto()
	{
		$this->view->render($this, "contacto");
	}

}

 ?>