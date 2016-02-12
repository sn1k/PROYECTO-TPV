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
          // $date = date("Y-m-d H:i:s");
          // $data = array(
          //   'FechaInit >=' => $date,
          //   'FechaFin <=' => $date,
          // )
          //   $this->db->where('FechaInit >=', $date);
          //   $this->db->or_where('FechaInit >=', $date);
                $query = $this->db->get_where(self::TABLA, array('idArticulo' => $idArticulo, 'FechaFin' => NULL));
                return $query->row();
        }

        public function set_precio($idArticulo, $precio, $date = NULL)
        {
          if($date !== NULL) {
            $data = array(
                 'FechaFin' => $date
              );


            $this->db->where('idArticulo', $idArticulo);
            $this->db->where('FechaFin', NULL);
            $this->db->update(self::TABLA, $data);
          }
          else {
            $date = date("Y-m-d H:i:s");
          }

          $data = array(
              'idArticulo' => $idArticulo,
              'Precio' => $precio,
              'FechaInit' => $date
          );

          return $this->db->insert(self::TABLA, $data);
        }
}
