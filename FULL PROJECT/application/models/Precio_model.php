<?php
class Precio_model extends CI_Model {
        const TABLA = 'PrecioArticulo';

        public function __construct()
        {
                $this->load->database();
        }

        public function get_precios($idArticulo)
        {
                $query = $this->db->get_where(self::TABLA, array('idArticulo' => $idArticulo));
                return $query->result();
        }

        public function get_precio($idArticulo)
        {
                $query = $this->db->get_where(self::TABLA, array('idArticulo' => $idArticulo, 'FechaFin' => NULL));
                return $query->row();
        }

        public function set_precio()
        {
          $idArticulo =  $this->input->post('idArticulo');
          $precio =  $this->input->post('precio');
          $date =  $this->input->post('fecha');

          $data = array(
               'FechaFin' => $date
            );

          $this->db->where('idArticulo', $idArticulo);
          $this->db->where('FechaFin', NULL);
          $this->db->update(self::TABLA, $data);

          $data = array(
              'idArticulo' => $idArticulo,
              'Precio' => $precio,
              'FechaInit' => $date
          );

          return $this->db->insert(self::TABLA, $data);
        }
}
