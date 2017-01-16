<?php 

class Index extends Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		echo "INSIDE INDEX!!!";
		$this->view->render('index/index');
	}
}