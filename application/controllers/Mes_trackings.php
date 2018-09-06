<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Mes_trackings extends CI_Controller {

        public $root_path = "../..";

        function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }


        public function show(){
            $data['site_url'] = site_url();
            $data['root_path'] = $this->root_path;
            // $data['base_url'] = base_url();
            // var_dump($data);

            $this->load->view('templates/file_head', $data);
            $this->load->view('mes_trackings', $data);
        }
        
    }

?>