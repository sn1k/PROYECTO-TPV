DROP TABLE IF EXISTS Articulo;
CREATE TABLE Articulo (
 id INT AUTO_INCREMENT,
 nombre VARCHAR(30) NOT NULL,
 descripcion VARCHAR(100),
 PRIMARY KEY (id)
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
