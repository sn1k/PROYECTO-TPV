DROP TABLE IF EXISTS Articulo;
CREATE TABLE Articulo (
 idArticulo INT AUTO_INCREMENT,
 nombre VARCHAR(30) NOT NULL,
 descripcion VARCHAR(100),
 PRIMARY KEY (idArticulo)
);


DROP TABLE IF EXISTS PrecioArticulo;
CREATE TABLE PrecioArticulo (
 id INT AUTO_INCREMENT,
 Precio DECIMAL(10,2),
 idArticulo INT,
 FechaInit DATE NOT NULL,
 FechaFin DATE,
 PRIMARY KEY (id),
 FOREIGN KEY (idArticulo)
    REFERENCES Articulo(id)
    ON DELETE CASCADE
 );

DROP TABLE IF EXISTS Stock;
CREATE TABLE Stock (
 id INT AUTO_INCREMENT,
 idArticulo INT,
 FechaDisp DATE NOT NULL,
 PRIMARY KEY (id),
 FOREIGN KEY (idArticulo)
    REFERENCES Articulo(id)
    ON DELETE CASCADE
 );

 DROP TABLE IF EXISTS Descuento;
 CREATE TABLE Descuento (
  id INT AUTO_INCREMENT,
  idArticulo INT,
  Porcentaje INT,
  Cantidad DECIMAL(10,2),
  FechaInit DATE NOT NULL,
  FechaFin DATE,
  PRIMARY KEY (id),
  FOREIGN KEY (idArticulo)
     REFERENCES Articulo(id)
     ON DELETE CASCADE
  );
  
 DROP TABLE IF EXISTS Precio;
 CREATE TABLE Precio (
  idPrecio INT AUTO_INCREMENT,
  idArticulo INT,
  FechaInit DATE NOT NULL,
  FechaFin DATE, 
  PRIMARY KEY (idPrecio),
  FOREIGN KEY (idArticulo)
     REFERENCES Articulo(idArticulo)
     ON DELETE CASCADE
  );
  
 DROP TABLE IF EXISTS Carrito;
 CREATE TABLE Carrito (
  idCarrito INT AUTO_INCREMENT,
  FechaCreacion DATE NOT NULL,
  Estado INT,
  FechaFin DATE, 
  PRIMARY KEY (idCarrito),
   );
   
 DROP TABLE IF EXISTS Ticket;
 CREATE TABLE Ticket (
  idTicket INT AUTO_INCREMENT,
  FechaCreacion DATE NOT NULL,
  Anulado BOOLEAN NOT NULL DEFAULT '0', 
  PRIMARY KEY (idTicket),
   );
   
 DROP TABLE IF EXISTS Devolucion;
 CREATE TABLE Devolucion (
  idDevolucion INT AUTO_INCREMENT,
  Fecha DATE,
    PRIMARY KEY (idDevolucion),
   );
