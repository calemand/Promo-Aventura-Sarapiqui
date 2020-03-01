<?php
class Categorias extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('categorias_model');
            $this->load->helper('url_helper');
    }

    public function index()
    {
            $data = $this->categorias_model->get_categorias();
            print(json_encode($data));
    }

    public function view($id = NULL)
    {
            $data = $this->categorias_model->get_categorias($id);
            if (empty($data))
            {
                    show_404();
            }else{
                print( json_encode($data));
            }
    }

}
