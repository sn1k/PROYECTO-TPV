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
          $this->db->select('*');
          $this->db->from(self::TABLA);
          $this->db->join('Articulo', self::TABLA.'.idArticulo = Articulo.idArticulo');
          $this->db->join('PrecioArticulo', 'Articulo.idArticulo = PrecioArticulo.idArticulo');
          $this->db->where('PrecioArticulo.FechaFin', NULL);
          $query = $this->db->get();
          return $query->result();
        }

        public function set_linea($idArticulo)
        {
            $articulo = $this->articulo_model->get_articulo($idArticulo);
            $data = array(
                'idArticulo' => $idArticulo,
            );
            return $this->db->insert(self::TABLA, $data);
        }

        public function delete_linea($idCarrito)
        {
            $this->db->delete(self::TABLA, array('idCarrito' => $idCarrito));
        }

        public function vaciar_carrito()
        {
            $this->db->empty_table(self::TABLA);


        }
}
