<?php
defined('ROOT_PATH') or exit('Direct access forbidden');

class Admin_Controller extends Controller 
{
	private $isLogin = false; //check if user login
	private $defaultView = 'admin/login';
	public $session;
	private $form;

	public function __construct() 
	{
		parent::__construct(); //to create view
		$this->view->assign('robots','noindex, nofollow')->assign('title','Panel de administración'); //assing allways the same robots(you can overwrite in assign function)
		$this->isLogin = Session::checkIfLogin();
		$this->session = new Session;
		$this->form = new Form;

	}

    public function index() 
	{
		
		$this->view->assign('keywords','')
				   ->assign('description','')
				   ->assign('other_title','')
				   ->assign('current_page','Visión general');
		if($this->isLogin)
		{
			$maps = $this->model->getMap(2);

			if($maps){
				$this->view->assign('maps', $maps);
			}

		}
		$this->loadAdminView('admin/mainAdmin');   
	}

	
	protected function loadAdminView($currentView = 'admin/login')
	{
		//Si no está logeado
		if(!$this->isLogin){
			//cargo el formulario
			$this->createLoginForm();
			$currentView = $this->defaultView;
		} 
		return $this->view->display($currentView,null,true);
	}

	protected function createLoginForm()
	{
		$this->view->assign('startform',$this->form->openForm("LoginForm","post",COMPLETE_WEB_PATH."admin/login",0));

	}


	public function login()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$validador = new Validation;

		
		if(!isset($_POST['submit']))
		{
			 $this->index();  
		}else{
			if(empty($_POST['email']) || empty($_POST['pass']))
			{
				$this->error('admin/login','Debe rellenar ambos campos');
			}
			if($this->model->logUser($_POST['email'],$_POST['pass'],$this->session))
			{
				$this->view->assign('email', $this->model->username);
				//Cargará el index
				$this->redirect('admin');
			}else{
				$this->error('admin/login','Usuario y contraseña incorrectos');
			}
		}
		}else{
			$this->error('admin/login','Entrada GET no permitida');
		}
		
		
	}


	private function error($view,$mensaje)
	{
		return $this->view->assign('message',$mensaje);
		$this->loadAdminView($view);
	}

	public function mapas()
	{

		$this->view->assign('current_page','Listado de mapas');
		$this->loadAdminView('admin/mapsAdmin');
	}

	public function crearmapa()
	{
		$this->view->assign('current_page','Listado de mapas')
					->assign('antecesor_page',array('mapas'=>'mapas')); //para el breadcrum, declaramos un array de url=>nombre
		$this->loadAdminView('admin/mapsAdmin');
	}
}