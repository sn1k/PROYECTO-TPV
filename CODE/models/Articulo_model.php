<?php
class Articulo_model extends CI_Model {
        const TABLA = 'Articulo';
        const PRECIO = 'PrecioArticulo';

        public function __construct()
        {
                $this->load->database();
                $this->load->model('precio_model');
        }

        public function get_articulos()
        {
                $query = $this->db->get(self::TABLA);
                return $query->result();
        }

        public function get_articulo($idArticulo)
        {
                $query = $this->db->get_where(self::TABLA, array('idArticulo' => $idArticulo));
                return $query->row();
        }
        public function get_precio($idArticulo)
        {
                $query = $this->db->get_where(self::PRECIO, array('idArticulo' => $idArticulo));
                return $query->row();
        }
        public function set_articulos()
        {
            $precio = $this->input->post('precio');
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'descripcion' => $this->input->post('descripcion')
            );

            $count = $this->db->insert(self::TABLA, $data);

            $this->precio_model->set_precio($this->db->insert_id(), $precio);

            return $count;
        }
}
