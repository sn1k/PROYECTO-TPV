#Proyecto TPV v0.003 ~ CodeIgniter+PHP & MYSQL
###En este proyecto vamos a tratar de solucionar los problemas que se presentar al modelar e implementar un TPV de una tienda de ropa.

#Página principal
![frontpage](https://i.gyazo.com/79078f25c4af2f8886f5623a0eb5337a.png)

#Diagrama UML
![UML](https://i.gyazo.com/d8a2df8e0edaaef9a31b71d9e5c44faf.png)

**Descripción**

Los articulos se añadiran uno a uno a la base de datos. Al introducirlos se le indiracara un precio aunque luego se podrá modificar dicho precio. Estos articulos pasaron por un carrito y al comprarlos se expenderá una factura.

**Artículos**

Dichos productos puede formar packs, esta asociado a un stock, a un precio y a un posible descuento.

**Precio**

Cada precio ira enlazado a un artículo.
Se han añadido dos atributos extra:
 - fechaInit: Desde que fecha empieza ese precio.
 - fechaFin : Hasta cuando esta disponible ese precio.

Un artículo puede estar enlazado a varios precios.Esto se ha realizado así para poder configurar precios según temporadas y además poder obtener un histórico de precios de cada articulo.

Linea carrito se compondrá de un Articulo y de su posible descuento, esta linea se enviara al carrito que a su vez se enviará a la factura final.

**Proceso de devolución.**

- Solo se podrán devolver los productos de uno en uno. 
- Cada vez que se devuelva, el campo interno "Anulado" se pondrá verdadero y se generará un nuevo ticket sin ese producto y con el precio actualizado.

###Creación de tablas 

[create.sql](https://github.com/sn1k/PROYECTO-TPV/blob/master/BBDD/base.sql)

#Codigo implementado / problemas solucionados

###Modelos

[Articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Articulo_model.php)

[Precio](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Precio_model.php)

[Carrito](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Carrito_model.php)

###Controladores

- [x] [Articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Articulos.php)

- [x] [Precios](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Precios.php)

- [x] [Tickets](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Tickets.php)
 
- [x] [Carritos](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Carritos.php)



###Vistas
**Articulos**

- [x] [Crear artículo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/create.php)

- [x] [index Artículos](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/index.php)

- [x] [Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/success.php)

- [x] [Ver artículo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/view.php)

**Precio**

- [x] [Add precio](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/index.php)

- [x] [Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/success.php)

**Carrito**

- [x] [Index](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/carritos/index.php)

**Ticket**

- [x] [Index](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/tickets/index.php)

- [x] [Vista carrito](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/tickets/view.php)

**Ofertas & descuentos**
- [ ] Descuentos

- [ ] Packs
##Otros
- [x] CSS index principal

- [x] CSS resto 
