USE latigo2018


CREATE TABLE LATIGO2018_OBJ_ESTRAG_INEI
(
ID_OBJ_EST_INEI INT NOT NULL PRIMARY KEY,
DESCRIPCION VARCHAR(4000)
)
GO

CREATE TABLE LATIGO2018_OBJ_ESTRA_OTIN
(
ID_OBJ_EST_OTIN INT NOT NULL PRIMARY KEY,
ID_OBJ_EST_INEI  INT, --FORI
DESCRIPCION VARCHAR(4000)
)
GO

CREATE TABLE LATIGO2018_OBJ_ESPEC_OTIN
(
ID_OBJ_ESP_OTIN INT NOT NULL PRIMARY KEY,
ID_OBJ_EST_OTIN INT,  --FORI
DESCRIPCION VARCHAR(4000)
)
GO

CREATE TABLE LATIGO2018_ASIGNACION_UNIDAD
(
ID_OBJ_ESP_OTIN INT,  --FORI
ID_UNIDAD INT   --FORI  INDIVIDUAL  Y PRIMARY COMPUESTO
) 
GO

CREATE TABLE LATIGO2018_UNIDAD
(
ID_UNIDAD INT NOT NULL PRIMARY KEY,
DESCRIPCION VARCHAR(100)
)
GO

CREATE TABLE LATIGO2018_PROYECTO
(
ID_PROYECTO INT NOT NULL PRIMARY KEY,
DESCRIPCION VARCHAR(100) NOT NULL,
FECHA_INICIO DATE NOT NULL,
FECHA_FIN DATE NOT NULL,
AVANCE FLOAT NOT NULL,
FECHA_FIN_REAL DATETIME,
RESPONSABLE VARCHAR(50),
ID_UNIDAD INT, --FORI 
ID_USUARIO INT, --FORi
ID_USU_EXTERNO INT --FORI
)
GO

CREATE TABLE LATIGO2018_USUARIO_EXTERNO
(
ID_USU_EXTERNO INT NOT NULL PRIMARY KEY,
NOMBRE VARCHAR(50) NOT NULL,
NOM_USUARIO VARCHAR(10) UNIQUE NOT NULL,
CONTRASENA VARCHAR(8) NOT NULL,
ID_PERFIL INT --FORI
)
GO

CREATE TABLE LATIGO2018_HISTORIAL_RECURSO
(
ID_PROYECTO INT, --FORI
ID_USUARIO INT, --FORY
FECHA_INICIO DATE NOT NULL,
FECHA_SALIDA DATE NOT NULL
)
GO

CREATE TABLE LATIGO2018_USUARIO
(
ID_USUARIO INT NOT NULL PRIMARY KEY,
NOMBRE VARCHAR(50),
NOM_USUARIO VARCHAR(10)UNIQUE NOT NULL,
CONTRASENA VARCHAR(8) NOT NULL,
ID_PERFIL INT, --FORI
ESPECIALIDAD VARCHAR(30)
)
GO

CREATE TABLE LATIGO2018_DETALLE_USUARIO
(
ID_USUARIO INT,--FK
CORREO VARCHAR(30) NOT NULL,
SEXO INT NOT NULL PRIMARY KEY,
TELEFONO VARCHAR(10) NOT NULL
)
GO

CREATE TABLE LATIGO2018_PERFILES
(
ID_PERFIL INT NOT NULL PRIMARY KEY,
PERFIL VARCHAR(30)
)
GO

CREATE TABLE LATIGO2018_PERFIL_VISTA
(
ID_PERFIL INT, --FK
ID_VISTA INT   --FK
)
GO

CREATE TABLE LATIGO2018_VISTAS
(
ID_VISTA INT NOT NULL PRIMARY KEY,
PAGINA VARCHAR(100) NOT NULL
)
GO

CREATE TABLE LATIGO2018_ACTIVIDAD
(
ID_ACTIVIDAD INT NOT NULL PRIMARY KEY,
ID_PROYECTO INT, --FORI
DESCRIPCION VARCHAR(100) NOT NULL,
FECHA_INICIO  DATE NOT NULL,
FECHA_FIN DATE NOT NULL,
AVANCE FLOAT NOT NULL, --- ES EN PORCENTAJE
FECHA_FIN_REAL DATETIME,
RESPONSABLE VARCHAR(50)
)
GO

CREATE TABLE LATIGO2018_TAREA
(
ID_TAREA INT NOT NULL PRIMARY KEY,
ID_ACTIVIDAD INT,  --FK
DESCRIPCION VARCHAR(100) NOT NULL,
FECHA_INICIO DATE NOT NULL,
FECHA_FIN DATE NOT NULL,
AVANCE FLOAT NOT NULL,
FECHA_FIN_REAL DATETIME,
HITO VARBINARY(MAX), ---PARA ARCHIVOS XLS,DOC,PDF
RESPONSABLE VARCHAR(50),
ID_ESTADO INT  --FK 
)
GO

CREATE TABLE LATIGO2018_ESTADO
(
ID_ESTADO INT NOT NULL PRIMARY KEY,
NOMBRE VARCHAR(30) NOT NULL
)
GO

CREATE TABLE LATIGO2018_ASIGNACION_TAREA
(
ID_USUARIO INT, --FK 
ID_TAREA INT  --FK
)
GO


----------LLAVES FORANEAS ---------------------------

ALTER TABLE LATIGO2018_OBJ_ESTRA_OTIN
ADD CONSTRAINT FK_INEI_OTIN
FOREIGN KEY (ID_OBJ_EST_INEI)
REFERENCES LATIGO2018_OBJ_ESTRAG_INEI(ID_OBJ_EST_INEI)
GO

ALTER TABLE LATIGO2018_OBJ_ESPEC_OTIN
ADD CONSTRAINT FK_ESPECIFICO_OTIN
FOREIGN KEY (ID_OBJ_EST_OTIN)
REFERENCES  LATIGO2018_OBJ_ESTRA_OTIN(ID_OBJ_EST_OTIN)
GO

ALTER TABLE LATIGO2018_ASIGNACION_UNIDAD
ADD CONSTRAINT FK_OBJ_ESP
FOREIGN KEY(ID_OBJ_ESP_OTIN)
REFERENCES LATIGO2018_OBJ_ESPEC_OTIN(ID_OBJ_ESP_OTIN) 
GO

ALTER TABLE LATIGO2018_ASIGNACION_UNIDAD
ADD CONSTRAINT FK_OBJ_UNIDAD
FOREIGN KEY(ID_UNIDAD)
REFERENCES LATIGO2018_UNIDAD(ID_UNIDAD)
GO

ALTER TABLE LATIGO2018_PROYECTO
ADD CONSTRAINT FK_PROYECTO_UNIDAD
FOREIGN KEY(ID_UNIDAD)
REFERENCES LATIGO2018_UNIDAD(ID_UNIDAD)
GO

ALTER TABLE LATIGO2018_PROYECTO
ADD CONSTRAINT FK_PROYECTO_USUARIO
FOREIGN KEY(ID_USUARIO)
REFERENCES LATIGO2018_USUARIO(ID_USUARIO)
GO

ALTER TABLE LATIGO2018_PROYECTO
ADD CONSTRAINT FK_EXTERNO_PROYECTO
FOREIGN KEY(ID_USU_EXTERNO)
REFERENCES LATIGO2018_USUARIO_EXTERNO(ID_USU_EXTERNO)
GO

ALTER TABLE LATIGO2018_ACTIVIDAD
ADD CONSTRAINT FK_PROYECTOA_ACTIVIDAD
FOREIGN KEY(ID_PROYECTO)
REFERENCES LATIGO2018_PROYECTO(ID_PROYECTO)
GO

ALTER TABLE LATIGO2018_TAREA
ADD CONSTRAINT FK_ACTIVIDAD_TAREA
FOREIGN KEY(ID_ACTIVIDAD)
REFERENCES LATIGO2018_ACTIVIDAD(ID_ACTIVIDAD)
GO

ALTER TABLE LATIGO2018_TAREA
ADD CONSTRAINT FK_ESTADO_TAREA
FOREIGN KEY(ID_ESTADO)
REFERENCES LATIGO2018_ESTADO(ID_ESTADO)
GO

ALTER TABLE LATIGO2018_ASIGNACION_TAREA
ADD CONSTRAINT FK_USUARIO_AT
FOREIGN KEY(ID_USUARIO)
REFERENCES LATIGO2018_USUARIO(ID_USUARIO)
GO

ALTER TABLE LATIGO2018_USUARIO
ADD CONSTRAINT FK_USUARIO_PERFILES
FOREIGN KEY (ID_PERFIL)
REFERENCES LATIGO2018_PERFILES(ID_PERFIL)
GO

ALTER TABLE LATIGO2018_ASIGNACION_TAREA
ADD CONSTRAINT FK_TAREA_USUARIO
FOREIGN KEY(ID_TAREA)
REFERENCES LATIGO2018_TAREA(ID_TAREA)
GO

ALTER TABLE LATIGO2018_HISTORIAL_RECURSO
ADD CONSTRAINT FK_PROYECTO_RECURSO
FOREIGN KEY(ID_PROYECTO)
REFERENCES LATIGO2018_PROYECTO(ID_PROYECTO)
GO

ALTER TABLE LATIGO2018_HISTORIAL_RECURSO
ADD CONSTRAINT FK_USUARIO_HISTORIAL
FOREIGN KEY(ID_USUARIO)
REFERENCES LATIGO2018_USUARIO(ID_USUARIO)
GO

ALTER TABLE LATIGO2018_USUARIO_EXTERNO
ADD CONSTRAINT FK_USUARIO_EXTERNO_PERFIL
FOREIGN KEY(ID_PERFIL)
REFERENCES LATIGO2018_PERFILES(ID_PERFIL)
GO

ALTER TABLE LATIGO2018_PERFIL_VISTA
ADD CONSTRAINT FK_PERFILES_PERFIL_VISTA
FOREIGN KEY (ID_PERFIL)
REFERENCES LATIGO2018_PERFILES(ID_PERFIL)
GO

ALTER TABLE LATIGO2018_PERFIL_VISTA
ADD CONSTRAINT FK_VISTAS_PERFIL_VISTA
FOREIGN KEY (ID_VISTA)
REFERENCES LATIGO2018_VISTAS(ID_VISTA)
GO

ALTER TABLE LATIGO2018_DETALLE_USUARIO
ADD CONSTRAINT FK_DETALLE_USUARIO
FOREIGN KEY (ID_USUARIO)
REFERENCES LATIGO2018_USUARIO(ID_USUARIO)
GO