<?php
class Empresa extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('empresa_model');
            $this->load->helper('url_helper');
    }

    public function index()
    {
            $data = $this->empresa_model->get_empresas();
            print(json_encode($data));
    }

    public function view($id = NULL)
    {
            $data = $this->empresa_model->get_empresas($id);
            if (empty($data))
            {
                    show_404();
            }else{
                print( json_encode($data));
            }
    }

}
