<?php
class Categorias_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_categorias($id = FALSE)
        {
                if ($id === FALSE)
                {
                        $query = $this->db->get('tb_categoria');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('tb_categoria', array('id_categoria' => $id));
                return $query->row_array();
        }
        public function set_categorias()
        {
                $this->load->helper('url');

                $id = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'title' => $this->input->post('title'),
                        'id' => $id,
                        'text' => $this->input->post('text')
                );

                return $this->db->insert('categorias', $data);
        }
        
        
}
?>