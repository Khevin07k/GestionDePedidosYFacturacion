DROP DATABASE IF EXISTS DBRESTAURANTE;
CREATE DATABASE DBRESTAURANTE;
USE DBRESTAURANTE;
-- crear tabla permiso
DROP TABLE IF EXISTS `permiso`;
CREATE TABLE `permiso`  (
  `IDPERMISO` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`IDPERMISO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(50) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `IDPERMISO` int(11) NOT NULL,
  `ESTADO` int(11) NOT NULL DEFAULT 1,
  `FECREGISTRO` date NOT NULL DEFAULT(NOW()),
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `IDPERMISO`(`IDPERMISO` ASC) USING BTREE,
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IDPERMISO`) REFERENCES `permiso` (`IDPERMISO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;


-- Creación de la tabla Restaurante

CREATE TABLE Restaurante (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255) NOT NULL,
    Direccion VARCHAR(255),
    Telefono VARCHAR(20)
)ENGINE=InnoDB;
-- CREAR TABLA PUESTO
-- ID PUESTO
-- NOMBRE


-- --------------------------------
-- AGREGAR CI, TELEFONO, DIRRECCION, FECHANACIMIENTO, IDPUESTO en EMPLEADO
-- ------------------------------
-- Creación de la tabla Empleado
CREATE TABLE Empleado (
    EmpleadoID INT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Apellido VARCHAR(100) NOT NULL,
    FechaContratacion DATE,
    Puesto VARCHAR(50),
    RestauranteID INT,
    FOREIGN KEY (RestauranteID) REFERENCES Restaurante(ID)
)ENGINE=InnoDB;




-- Creación de la tabla Cliente
CREATE TABLE Cliente (
    ClienteID INT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Apellido VARCHAR(100) NOT NULL,
    Direccion VARCHAR(255),
    Telefono VARCHAR(20)
)ENGINE=InnoDB;

-- Creación de la tabla Menu
CREATE TABLE Menu (
    MenuID INT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
		FotoMenu VARCHAR(250),
    Descripcion TEXT,
    Precio DECIMAL(10, 2) NOT NULL,
    RestauranteID INT,
    FOREIGN KEY (RestauranteID) REFERENCES Restaurante(ID)
)ENGINE=InnoDB;

-- Creación de la tabla Pedido
CREATE TABLE Pedido (
    PedidoID INT PRIMARY KEY,
    NumeroPedido INT NOT NULL,
		MenuId int not null,
		EmpleadoId int,
    Fecha DATE NOT NULL DEFAULT(NOW()) ,
    Estado ENUM ('SOLICITADO','EN PROCESO','COMPLETADO'),
    ClienteID INT NOT NULL,
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
		FOREIGN KEY (MenuId) REFERENCES Menu(MenuID),
		FOREIGN KEY (EmpleadoId) REFERENCES Empleado(EmpleadoId)
)ENGINE=InnoDB;

-- Creación de la tabla Factura
CREATE TABLE Factura (
    FacturaID INT PRIMARY KEY,
    NumeroFactura INT NOT NULL,
    Fecha DATE,
    Total DECIMAL(10, 2),
    PedidoID INT,
    FOREIGN KEY (PedidoID) REFERENCES Pedido(PedidoID)
)ENGINE=InnoDB;
