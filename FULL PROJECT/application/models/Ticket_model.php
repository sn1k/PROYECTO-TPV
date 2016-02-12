<?php
class Ticket_model extends CI_Model {
        const TABLA = 'Ticket';
        const SUBTABLA = 'LineaTicket';

        public function __construct()
        {
                $this->load->database();
                $this->load->model('articulo_model');
                $this->load->model('carrito_model');
        }

        public function get_tickets()
        {
          $this->db->select(self::TABLA.'.idTicket, FechaCreacion, Anulado');
          $this->db->select_sum('precio');
          $this->db->from(self::TABLA);
          $this->db->join(self::SUBTABLA, self::TABLA.'.idTicket = '.self::SUBTABLA.'.idTicket');
          $this->db->group_by(self::TABLA.'.idTicket');
          $query = $this->db->get();
          return $query->result();
        }

        public function get_ticket($idTicket)
        {
          $query = $this->db->get_where(self::SUBTABLA, array('idTicket' => $idTicket));
          return $query->result();
        }

        public function devolver_articulo($idLinea)
        {
          $linea = $this->db->get_where(self::SUBTABLA, array('idLinea' => $idLinea))->row();

          $data = array(
               'Anulado' => true
            );

          $this->db->where('idTicket', $linea->idTicket);
          $this->db->update(self::TABLA, $data);

          $lineas = $this->get_ticket($linea->idTicket);

          $date = date("Y-m-d H:i:s");
          $this->db->insert(self::TABLA, array('FechaCreacion' => $date));
          $idTicket = $this->db->insert_id();

      		foreach ($lineas as $linea_item) {
            if($linea_item->idLinea != $idLinea) {
              $this->db->insert(self::SUBTABLA, array(
                'idArticulo' => $linea_item->idArticulo,
                'idTicket' => $idTicket,
                'descripcion' => $linea_item->descripcion,
                'precio' => $linea_item->precio
              ));
            }
      		}
        }

        public function get_precio_ticket($idTicket)
        {
          $this->db->select(self::TABLA.'.idTicket, Anulado, FechaCreacion');
          $this->db->select_sum('precio');
          $this->db->from(self::TABLA);
          $this->db->where(self::TABLA.'.idTicket', $idTicket);
          $this->db->join(self::SUBTABLA, self::TABLA.'.idTicket = '.self::SUBTABLA.'.idTicket');
          $query = $this->db->get();
          return $query->row();
        }

        public function set_ticket()
        {
          $date = date("Y-m-d H:i:s");
          $this->db->insert(self::TABLA, array('FechaCreacion' => $date));
          $idTicket = $this->db->insert_id();

          $carrito = $this->carrito_model->get_carrito();
      		foreach ($carrito as $carrito_item) {
      			$this->db->insert(self::SUBTABLA, array(
              'idArticulo' => $carrito_item->idArticulo,
              'idTicket' => $idTicket,
              'descripcion' => $carrito_item->nombre,
              'precio' => $carrito_item->Precio
            ));
      		}

          $this->carrito_model->vaciar_carrito();

          return $idTicket;
        }

        public function delete_linea($idCarrito)
        {
            $this->db->delete(self::TABLA, array('idCarrito' => $idCarrito));
        }
}
