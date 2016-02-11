#Proyecto TPV
###En este proyecto vamos a tratar de solucionar los problemas que se presentar al modelar e implementar un TPV de una tienda de ropa.


###Diagrama UML
![UML](https://i.gyazo.com/39b61a5ffbe415cb7ef42bd158cbff7e.png)

**Descripción***
Los articulos se añadiran uno a uno a la base de datos. Al introducirlos se le indiracara un precio aunque luego se podrá modificar dicho precio.

**Precio**
En el apartado de precios se han añadido dos atributos extra:
 - fechaInit: Desde que fecha empieza ese precio.
 - fechaFin : Hasta cuando esta disponible ese precio.
Esto se ha realizado así para poder configurar precios según temporadas y además poder obtener un histórico de precios de cada articulo.

Linea carrito se compondrá de un Articulo y de su posible descuento, esta linea se enviara al carrito que a su vez se enviará a la factura final.

**Proceso de devolución.**
Cada linea del ticket tendrá un id propio. de esta forma si queremos devolver un producto anularemos en nuestra base de datos el ticket emitido, y se creara un nuevo ticket sin dicha linea. Al estar cada linea del ticket asociada a un único id, solo se cancelará el producto de dicha linea.

###Creación de tablas 

[create.sql](https://github.com/sn1k/PROYECTO-TPV/blob/master/BBDD/base.sql)
#Codigo implementado de problemas solucionados

###Modelos

[Articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Articulo_model.php)
[Precio](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Precio_model.php)
[Carrito](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/models/Carrito_model.php)

###Controladores

[Articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Articulos.php)

[Precios](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/controllers/Precios.php)


###Vistas
**Articulos**

[Crear articulo](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/create.php)

[index Articulos](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/index.php)

[Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/articulos/success.php)

**Precio**

[Add precio](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/index.php)

[Success added](https://github.com/sn1k/PROYECTO-TPV/blob/master/CODE/views/precios/success.php)
