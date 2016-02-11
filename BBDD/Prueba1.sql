
#PRUEBA DATOS EN ARTICULO, PRECIO?
#ID DE OTRA TABLA
INSERT INTO Articulo
	(nombre,
	 descripcion)

VALUES
	('Camiseta',
	 'Camiseta manga corta');

#PRUEBA DATOS EN PRECIO ARTICULO, ENLAZAR IDARTICULO CON TABLA ARTICULOS
INSERT INTO PrecioArticulo
	(Precio,
	 idArticulo,
	 FechaInit,
	 FechaFin)

VALUES
	( 10,
	  1,
	 '2016-4-08',
	 '2016-8-08');

#PRUEBA DATOS EN STOCK, ENLAZAR IDARTICULO FROM ARTICULOS
INSERT INTO Stock
	(idArticulo,
	 FechaDisp)

VALUES
	( 1,
	 '2016-4-08');

#PRUEBA DATOS EN DESCUENTOS, ENLAZAR DARTICULO FROM ARTICULOS
INSERT INTO Descuento
	(idArticulo,
	 Porcentaje,
	 Cantidad,
	 FechaInit,
	 FechaFin
	 )

VALUES
	( 1,
	  10,
	  20.2,
	 '2016-4-08',
	 '2016-8-08' );
