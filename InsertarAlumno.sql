CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarAlumno`(
in numctrl varchar(8),
in nombre varchar(25),
in appat varchar(20),
in apmat varchar(20),
in sexo varchar(1),
in edad varchar(2),
in correo varchar(30),
in tel varchar(12),
in dom varchar(30),
in carre varchar(30)
)
BEGIN
	if(select count(*) from alumno where NUM_CTRL=numctrl)>1 then
		select 1;
    else
		if(nombre='') then
			select 2;
		else
			if(appat='') then
				select 3;
			else
				if(apmat='') then
					select 4;
				else
					if(sexo='') then
						select 5;
					else
						if(edad<16)	then
							select 6;
						else
							if(correo='') then
								select 7;
							else
								if(tel='') then
									select 8;
								else
									if(dom='') then
										select 9;
									else
										if(carre='') then
											select 10;
										else
											insert into ALUMNO(NUM_CTRL,NOMBRE,APPAT,APMAT,SEXO,EDAD,CORREO,TEL,DOM,CARRERA) values(numctrl,nombre,appat,apmat,sexo,edad,correo,tel,dom,carre);
										end if;
									end if;
								end if;
							end if;
						end if;
					end if;
				end if;
			end if;
		end if;
	end if;
END