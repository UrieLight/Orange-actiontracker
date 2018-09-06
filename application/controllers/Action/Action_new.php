<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Action_new extends CI_Controller {

		/**
		 * Index Page for this controller.v 
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/welcome
		 *	- or -
		* 		http://example.com/index.php/welcome/index
		*	- or -
		* Since this controller is set as the default controller in
		* config/routes.php, it's displayed at http://example.com/
		*
		* So any other public methods not prefixed with an underscore will
		* map to /index.php/welcome/<method_name>
		* @see https://codeigniter.com/user_guide/general/urls.html
		*/

		public $root_path = "../../..";

		function __construct(){
				
			parent::__construct();
			//$this->load->model('Action_Model', 'actmod');
			$this->load->helper('url');
		}

		public function index()
		{
			$data['site_url'] = site_url();
			$data['root_path'] = $this->root_path;
			//var_dump($data);

			$this->load->view('templates/file_head', $data);
			$this->load->view('indx');
		}
		
		public function load_part(){

			//$this->load->view('indx');
		}
	}
?>
