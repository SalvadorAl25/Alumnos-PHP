use escuela;
insert into alumno values('19420001','Jesus','Gutierrez','Del Rio','M','17','Jesus321@hotmail.com','351-159-5646','Dr Fernando #321','Ing. Sistemas Computacionales');
insert into alumno values('19420002','Mario','Perez','Garcia','M','18','Mario321@hotmail.com','351-159-3256','Juarez #321','Ing. Sistemas Computacionales');
insert into alumno values('19420003','Luis','Rodriguez','Martinez','M','19','Luis321@hotmail.com','351-159-7854','Marinez de navarrete #321','Ing. Sistemas Computacionales');
insert into alumno values('19420004','Jorge','Florez','Herrera','M','20','Jorge21@hotmail.com','351-159-7877','Pino Suarez #321','Ing. Sistemas Computacionales');
insert into alumno values('19420005','Gerardo','Gomez','Peña','M','21','Gerardo321@hotmail.com','351-159-1122','Ocampo #321','Ing. Sistemas Computacionales');
insert into alumno values('19420006','Ixta','Cruz','Vizcaino','M','22','Ixta321@hotmail.com','351-159-7785','Corregidora #321','Ing. Sistemas Computacionales');
insert into alumno values('19420007','Genaro','Sanchez','Sosa','M','23','Genaro321@hotmail.com','351-159-4478','Madero #321','Ing. Sistemas Computacionales');




insert into HORARIO values(1,'Calculo Integral','Marco Ruiz', 5,'07:00','07:00','07:00','07:00','07:00','19420001');
insert into HORARIO values(2,'Probabilidad','Fernando Mendez', 5,'08:00','08:00','08:00','08:00','08:00','19420001');
insert into HORARIO values(3,'Geografia','Irma Linares', 5,'09:00','09:00','09:00','09:00','09:00','19420001');
insert into HORARIO values(4,'Contabilidad','Lucia Sosa', 5,'10:00','10:00','10:00','10:00','10:00','19420001');
insert into HORARIO values(5,'P.O.O','Ana Gonzales', 5,'12:00','12:00','12:00','12:00','12:00','19420001');

insert into HORARIO values(6,'Calculo diferencial','Marco Ruiz', 5,'07:00','07:00','07:00','07:00','07:00','19420002');
insert into HORARIO values(7,'Estructura de datos','Fernando Mendez', 5,'08:00','08:00','08:00','08:00','08:00','19420002');
insert into HORARIO values(8,'Ingles','Irma Linares', 5,'09:00','09:00','09:00','09:00','09:00','19420002');
insert into HORARIO values(9,'Desarrollo Sus','Lucia Sosa', 5,'10:00','10:00','10:00','10:00','10:00','19420002');
insert into HORARIO values(10,'P.O.O','Ana Gonzales', 5,'12:00','12:00','12:00','12:00','12:00','19420002');

insert into HORARIO values(11,'Algebra Lineal','Marco Ruiz', 5,'07:00','07:00','07:00','07:00','07:00','19420003');
insert into HORARIO values(12,'Topicos II','Fernando Mendez', 5,'08:00','08:00','08:00','08:00','08:00','19420003');
insert into HORARIO values(13,'Redes De Comp','Irma Linares', 5,'09:00','09:00','09:00','09:00','09:00','19420003');
insert into HORARIO values(14,'Taller de BD','Lucia Sosa', 5,'10:00','10:00','10:00','10:00','10:00','19420003');
insert into HORARIO values(15,'Ingles','Ana Gonzales', 5,'12:00','12:00','12:00','12:00','12:00','19420003');



select * from alumno;
select * from horario;

delete from horario where NUM_CTRL='19420002' or NUM_CTRL='19420003';

select * from ALUMNO where NUM_CTRL=19420001;

delete from ALUMNO where NUM_CTRL='19420001' or NUM_CTRL='19420002' or NUM_CTRL='19420003';

select MAX(NUM_CTRL) from ALUMNO;

call InsertarAlumno(19420103,'Mario','Bautista','Serrano','M',15,'jose321@hotmail.com','351-145-5423','Galeana #321','Ing. Sistemas Computacionales');