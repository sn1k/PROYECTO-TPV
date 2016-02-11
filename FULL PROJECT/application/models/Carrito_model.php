<?php
class Carrito_model extends CI_Model {
        const TABLA = 'Carrito';

        public function __construct()
        {
                $this->load->database();
                $this->load->model('articulo_model');
                $this->load->model('precio_model');
        }

        public function get_carrito()
        {
                $query = $this->db->get(self::TABLA);
                return $query->result();
        }

        public function set_linea()
        {
            $idArticulo = $this->input->post('idArticulo');
            $articulo = $this->articulo_model->get_articulo($idArticulo);
            $data = array(
                'nombre' => $articulo->nombre,
                'precio' => $this->precio_model->get_precio($idArticulo);,
                'idArticulo' => $idArticulo,
            );

            return $this->db->insert(self::TABLA, $data);
        }
}
