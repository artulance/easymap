<?php
namespace app\controllers;

use app\classes\Controller;
use app\model\index_Model;

defined('ROOT_PATH') or exit('Direct access forbidden');

class Index_Controller extends Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->view->assign('robots','index, follow');
		$this->model = new index_Model();
	}

	public function index() {
		// $this->loadModel('Index');
		$this->view->assign('title','asdf')
				   ->assign('keywords','')
				   ->assign('description','')
				   ->assign('other_title','')
				   ->display('main');
	}
	
}
