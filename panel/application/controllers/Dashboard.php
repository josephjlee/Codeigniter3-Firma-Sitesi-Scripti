<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $this->load->view("{$this->viewFolder}/index");
    }

}
