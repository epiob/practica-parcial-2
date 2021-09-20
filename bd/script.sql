create database parcial2;

create table persona(
	cui bigint(13) not null primary key,
    nombre varchar(50) not null,
    fechaNac date,
    email varchar(50) not null,
    direccion varchar(50),
    nacionalidad varchar(50),
    departamento varchar(50) not null,
    telefono int(8) not null,
    profesion varchar(50) not null,
    pretSalario int not null
)

CREATE PROCEDURE `sp_obtener_registro`(in cuii bigint(13))
BEGIN
	select * from persona where cui = cuii;
END

CREATE PROCEDURE `sp_obtener_registroV`(in cuii bigint(13))
BEGIN
	select * from persona where cui = cuii;
END

CREATE PROCEDURE `sp_mostrar_datos` ()
BEGIN
	select cui,
    nombre,
    fechaNac,
    email,
    direccion,
    nacionalidad,
    departamento,
    telefono,
    profesion,
    pretSalario from persona;
END

CREATE PROCEDURE `sp_insertar_datos` (in cuiI bigint(13),
									  in nombreI varchar(50),
                                      in fechaNacI date,
                                      in emailI varchar(50),
                                      in direccionI varchar(50),
                                      in nacionalidadI varchar(50),
                                      in departamentoI varchar(50),
                                      in telefonoI int(8),
                                      in profesionI varchar(50),
                                      in pretSalarioI int)
BEGIN
	insert into persona(cui,
						nombre,
                        fechaNac,
                        email,
                        direccion,
                        nacionalidad,
                        departamento,
                        telefono,
                        profesion,
                        pretSalario)
			values (cuiI,
						nombreI,
                        fechaNacI,
                        emailI,
                        direccionI,
                        nacionalidadI,
                        departamentoI,
                        telefonoI,
                        profesionI,
                        pretSalarioI);
END

CREATE PROCEDURE `sp_eliminar_datos` (in cuiD bigint(13))
BEGIN
	delete from persona where cui=cuiD;
END

CREATE PROCEDURE `sp_actualizar_datos` (in nombreU varchar(50),
                                      in fechaNacU date,
                                      in emailU varchar(50),
                                      in direccionU varchar(50),
                                      in nacionalidadU varchar(50),
                                      in departamentoU varchar(50),
                                      in telefonoU int(8),
                                      in profesionU varchar(50),
                                      in pretSalarioU int,
                                      in cuiU bigint(13))
BEGIN
	update persona set nombre = nombreU,
    fechaNac = fechaNacU,
    email = emailU,
    direccion = direccionU,
    nacionalidad = nacionalidadU,
    departamento = departamentoU,
    telefono = telefonoU,
    prefesion = profesionU,
    pretSalario = pretSalarioU
    where cui = cuiU;
END