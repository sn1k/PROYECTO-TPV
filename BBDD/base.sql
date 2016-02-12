DROP TABLE IF EXISTS Articulo;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

CREATE TABLE Articulo (
 idArticulo INT AUTO_INCREMENT,
 nombre VARCHAR(30) NOT NULL,
 descripcion VARCHAR(100),
 PRIMARY KEY (idArticulo)
);# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).



DROP TABLE IF EXISTS PrecioArticulo;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

CREATE TABLE PrecioArticulo (
 id INT AUTO_INCREMENT,
 Precio DECIMAL(10,2),
 idArticulo INT,
 FechaInit DATE NOT NULL,
 FechaFin DATE,
 PRIMARY KEY (id),
 FOREIGN KEY (idArticulo)
    REFERENCES Articulo(idArticulo)
    ON DELETE CASCADE
 );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).


DROP TABLE IF EXISTS Stock;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

CREATE TABLE Stock (
 id INT AUTO_INCREMENT,
 idArticulo INT,
 FechaDisp DATE NOT NULL,
 PRIMARY KEY (id),
 FOREIGN KEY (idArticulo)
    REFERENCES Articulo(idArticulo)
    ON DELETE CASCADE
 );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).


 DROP TABLE IF EXISTS Descuento;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

 CREATE TABLE Descuento (
  id INT AUTO_INCREMENT,
  idArticulo INT,
  Porcentaje INT,
  Cantidad DECIMAL(10,2),
  FechaInit DATE NOT NULL,
  FechaFin DATE,
  PRIMARY KEY (id),
  FOREIGN KEY (idArticulo)
     REFERENCES Articulo(idArticulo)
     ON DELETE CASCADE
  );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

  
 DROP TABLE IF EXISTS Precio;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

 CREATE TABLE Precio (
  idPrecio INT AUTO_INCREMENT,
  idArticulo INT,
  FechaInit DATE NOT NULL,
  FechaFin DATE, 
  PRIMARY KEY (idPrecio),
  FOREIGN KEY (idArticulo)
     REFERENCES Articulo(idArticulo)
     ON DELETE CASCADE
  );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

  
 DROP TABLE IF EXISTS Carrito;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

CREATE TABLE Carrito (
  idCarrito INT AUTO_INCREMENT,
  FechaCreacion DATE NOT NULL,
  Estado INT,
  FechaFin DATE, 
  idArticulo INT,
  PRIMARY KEY (idCarrito),
  FOREIGN KEY (idArticulo) REFERENCES Articulo(idArticulo) ON DELETE CASCADE
   );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

   
 DROP TABLE IF EXISTS Ticket;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

 CREATE TABLE Ticket (
  idTicket INT AUTO_INCREMENT,
  FechaCreacion DATE NOT NULL,
  Anulado BOOLEAN NOT NULL DEFAULT '0', 
  PRIMARY KEY (idTicket)
   );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

   
 DROP TABLE IF EXISTS Devolucion;# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).

 CREATE TABLE Devolucion (
  idDevolucion INT AUTO_INCREMENT,
  Fecha DATE,
    PRIMARY KEY (idDevolucion)
   );# MySQL ha devuelto un conjunto de valores vacío (es decir: cero columnas).
