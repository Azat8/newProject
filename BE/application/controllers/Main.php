<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
    {
        echo "Works correctly";
        $this->test1();

    }

    public function test1 ()
    {
        $this->load->model('main_model');
        echo $this->main_model->test_main();
    }

    public function form_validation()
    {

    }
}