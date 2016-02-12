#PRÓXIMA ACTUALIZACIÓN COMPLETA 12/02/2016 18:00H~
- Diagrama
- Nuevos modelos, controladores y vistas
- CSS
- Merendar

#Proyecto TPV v0.001 ~ CodeIgniter+PHP & MYSQL
###En este proyecto vamos a tratar de solucionar los problemas que se presentar al modelar e implementar un TPV de una tienda de ropa.


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

Cada ticket tendra X lineaTicket, cada una de ellas identificadas por un id propio. De esta forma, si queremos devolver un producto anularemos en nuestra base de datos el ticket emitido, y se creara un nuevo ticket sin dicha linea. Al estar cada linea del ticket asociada a un único id, solo se cancelará el producto de dicha linea.

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

- [ ] Devolución

- [ ] Descuentos

###Vistas
**Articulos**

- [x] [Crear articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/create.php)

- [x] [index Articulos](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/index.php)

- [x] [Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/success.php)

**Precio**

- [x] [Add precio](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/index.php)

- [x] [Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/success.php)


##Otros
- [ ] css by bootstrap.
