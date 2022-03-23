create database Escuela;

use Escuela;

CREATE TABLE ALUMNO(
NUM_CTRL varchar(8) NOT NULL,
NOMBRE VARCHAR(25) NOT NULL,
APPAT VARCHAR(20) NOT NULL,
APMAT VARCHAR(20) NOT NULL,
SEXO VARCHAR(1),
EDAD varchar(2) NOT NULL,
CORREO VARCHAR(30),
TEL VARCHAR(12),
DOM VARCHAR(30),
CARRERA VARCHAR(30),
PRIMARY KEY(NUM_CTRL)
);

CREATE TABLE HORARIO(
CLV_HOR INT NOT NULL,
MATERIA VARCHAR(50),
DOCENTE VARCHAR(50),
CREDITOS INT,
LUN VARCHAR(5),
MAR VARCHAR(5),
MIE VARCHAR(5),
JUE VARCHAR(5),
VIE VARCHAR(5),
PRIMARY KEY(CLV_HOR),
NUM_CTRL varchar(8) NOT NULL,
foreign key(NUM_CTRL) references ALUMNO(NUM_CTRL)
);

CREATE TABLE CARDEX(
CLV_CAR INT NOT NULL,
MATERIA VARCHAR(50),
CALF INT,
SEM INT,
PERIODO VARCHAR(50),
PRIMARY KEY(CLV_CAR),
NUM_CTRL varchar(8) NOT NULL,
foreign key(NUM_CTRL) references ALUMNO(NUM_CTRL)
);
