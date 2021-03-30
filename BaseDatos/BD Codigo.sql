 CREATE TABLE `departamento` (
  `CodigoDepto` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  PRIMARY KEY  (`CodigoDepto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `departamento` VALUES (1, 'Santa Ana');
INSERT INTO `departamento` VALUES (2, 'Ahuachapan');
INSERT INTO `departamento` VALUES (3, 'Sonsonate');
INSERT INTO `departamento` VALUES (4, 'La Libertad');
INSERT INTO `departamento` VALUES (5, 'San Salvador');
INSERT INTO `departamento` VALUES (6, 'Cuscatlan');
INSERT INTO `departamento` VALUES (7, 'Chalatenango');
INSERT INTO `departamento` VALUES (8, ' La Paz');
INSERT INTO `departamento` VALUES (9, 'Cabanas');
INSERT INTO `departamento` VALUES (10, 'San Vicente');
INSERT INTO `departamento` VALUES (11, 'Usulutan');
INSERT INTO `departamento` VALUES (12, 'San Miguel');
INSERT INTO `departamento` VALUES (13, 'Morazan');
INSERT INTO `departamento` VALUES (14, 'La Union');

CREATE TABLE `municipio` (
  `CodigoMunicipio` int(5) NOT NULL auto_increment,
  `Nombre` char(30) NOT NULL,
  PRIMARY KEY  (`CodigoMunicipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `municipio` VALUES (1, 'Santa Ana');
INSERT INTO `municipio` VALUES (2, 'Texistepeque');
INSERT INTO `municipio` VALUES (3, 'Chalchuapa');
INSERT INTO `municipio` VALUES (4, 'Coatepeque');
INSERT INTO `municipio` VALUES (5, 'El Congo');
INSERT INTO `municipio` VALUES (6, 'El Porvenir');
INSERT INTO `municipio` VALUES (7, 'Metapan');
INSERT INTO `municipio` VALUES (8, 'Masahuat');
INSERT INTO `municipio` VALUES (9, 'San Antonio Pajonal');
INSERT INTO `municipio` VALUES (10, 'San Sebasti');
INSERT INTO `municipio` VALUES (11, 'Santa Rosa Guachipil');
INSERT INTO `municipio` VALUES (12, 'Candelaria de la Frontera');
INSERT INTO `municipio` VALUES (13, 'Santiago de la Frontera');

CREATE TABLE `usuario` (
  `nombreUsuario` char(10) NOT NULL,
  `Contrasenia` varchar(15) NOT NULL,
  `Privilegio` char(15) NOT NULL,
  PRIMARY KEY  (`nombreUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `responsablealumno` (
  `CodigoRespon` int(5) NOT NULL auto_increment,
  `Nombres` text NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NULL,
  `Sexo` char(10) NOT NULL,
  `Dui` char(15) NOT NULL,
  `Direccion` text NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `telefonoCasa` text NOT NULL,
  `telefonoTrabajo` text NULL,
  `Parentesco` text NOT NULL,
  PRIMARY KEY  (`CodigoRespon`),
  INDEX (Departamento_codigoDepto),
  INDEX (Municipio_codigoMunicipio),
  FOREIGN KEY (Departamento_codigoDepto) REFERENCES departamento(CodigoDepto),
  FOREIGN KEY (Municipio_codigoMunicipio) REFERENCES municipio(CodigoMunicipio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `alumno` (
  `CodigoAlumno` int(5) NOT NULL auto_increment,
  `Nombres` varchar(30) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NULL,
  `FechaNacimiento` varchar(10) NOT NULL,
  `Direccion` text NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `Telefono` text NOT NULL,
  `Sexo` char(10) NOT NULL,
  `Discapacidad` text NOT NULL,
  `ProblemasdeSalud` text NOT NULL,
  `Estado` text NOT NULL,
  `Usuario_nombreUsuario` char(10) NOT NULL,
  `CodigoResponsable` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoAlumno`),
  INDEX (Usuario_nombreUsuario),
  INDEX (CodigoResponsable),
  INDEX (Departamento_codigoDepto),
  INDEX (Municipio_codigoMunicipio),
  FOREIGN KEY (Usuario_nombreUsuario) REFERENCES usuario(nombreUsuario),
  FOREIGN KEY (CodigoResponsable) REFERENCES responsablealumno(CodigoRespon),
  FOREIGN KEY (Departamento_codigoDepto) REFERENCES departamento(CodigoDepto),
  FOREIGN KEY (Municipio_codigoMunicipio) REFERENCES municipio(CodigoMunicipio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE TABLE `nivel` (
  `CodigoNivel` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  PRIMARY KEY  (`CodigoNivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `nivel` VALUES (1, 'Primer Ciclo');
INSERT INTO `nivel` VALUES (2, 'Segundo Ciclo');
INSERT INTO `nivel` VALUES (3, 'Tercer Ciclo');

CREATE TABLE `grado` (
  `CodigoGrado` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  `Nivel_codigoNivel` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoGrado`),
  INDEX (Nivel_codigoNivel),
  FOREIGN KEY (Nivel_codigoNivel) REFERENCES nivel(CodigoNivel)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `planestudio` (
  `CodigoPlan` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  `ano` char(4) NOT NULL,
  `Grado_CodigoGrado` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoPlan`),
  INDEX (Grado_CodigoGrado),
  FOREIGN KEY (Grado_CodigoGrado) REFERENCES grado(CodigoGrado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `asignatura` (
  `CodigoAsignatura` int(5) NOT NULL auto_increment,
  `Nombre` char(30) NOT NULL,
  `PlanEstudio_codigoPlan` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoAsignatura`),
  INDEX (PlanEstudio_codigoPlan),
  FOREIGN KEY (PlanEstudio_codigoPlan) REFERENCES planestudio(CodigoPlan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `administrativo` (
  `CodigoAdministrativo` int(5) NOT NULL auto_increment,
  `Nombres` char(30) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NULL,
  `FechaNacimiento` varchar(10) NOT NULL,
  `Direccion` text NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `Telefono` text NOT NULL,
  `Sexo` char(10) NOT NULL,
  `Dui` char(15) NOT NULL,
  `Cargo` text NOT NULL,
  `Usuario_nombreUsuario` char(10) NOT NULL,
  PRIMARY KEY  (`CodigoAdministrativo`),
  INDEX (Departamento_codigoDepto),
  INDEX (Municipio_codigoMunicipio),
  INDEX (Usuario_nombreUsuario),
  FOREIGN KEY (Departamento_codigoDepto) REFERENCES departamento(CodigoDepto),
  FOREIGN KEY (Municipio_codigoMunicipio) REFERENCES municipio(CodigoMunicipio),
  FOREIGN KEY (Usuario_nombreUsuario) REFERENCES usuario(nombreUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cargaacademica` (
  `CodigoCargaAcademica` int(5) NOT NULL auto_increment,
  `Docente_codigoDocente` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Planestudio_codigoPlan` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoCargaAcademica`),
  INDEX (Docente_codigoDocente),
  INDEX (Asignatura_codigoAsignatura),
  INDEX (Planestudio_codigoPlan),
  FOREIGN KEY (Docente_codigoDocente) REFERENCES administrativo(CodigoAdministrativo),
  FOREIGN KEY (Asignatura_codigoAsignatura) REFERENCES asignatura(CodigoAsignatura),
  FOREIGN KEY (Planestudio_codigoPlan) REFERENCES planestudio(CodigoPlan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `seccion` (
  `CodigoSeccion` int(5) NOT NULL auto_increment,
  `Nombre` char(5) NOT NULL,
  `Grado_codigo` int(5) NOT NULL,
  `Docente_codigoDocente` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoSeccion`),
  INDEX (Grado_codigo),
  INDEX (Docente_codigoDocente),
  FOREIGN KEY (Grado_codigo) REFERENCES grado(CodigoGrado),
  FOREIGN KEY (Docente_codigoDocente) REFERENCES administrativo(CodigoAdministrativo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `institucion` (
  `CodigoInstituto` char(15) NOT NULL,
  `NombreInstituto` char(50) NOT NULL,
  `NombreDirector` char(50) NOT NULL,
  `Telefono` char(9) NOT NULL,
  `Direccion` char(100) NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `Estado` char(8) NOT NULL,
  `Anho` char(4) NOT NULL,
  PRIMARY KEY  (`Anho`),
  INDEX (Departamento_codigoDepto),
  INDEX (Municipio_codigoMunicipio),
  FOREIGN KEY (Departamento_codigoDepto) REFERENCES departamento(CodigoDepto),
  FOREIGN KEY (Municipio_codigoMunicipio) REFERENCES municipio(CodigoMunicipio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `historial_institucion` (
  `Codigo` int(5) NOT NULL auto_increment,
  `CodigoInstituto` char(15) NOT NULL,
  `Anho` char(4) NOT NULL,
  PRIMARY KEY  (`Codigo`),
  INDEX (Anho),
  FOREIGN KEY (Anho) REFERENCES institucion(Anho)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `matricula` (
  `CodigoMatricula` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Seccion_codigoSeccion` int(5) NOT NULL,
  `Institucion_anho` char(4) NOT NULL,
  `estadoFinal` char(15) NOT NULL,
  PRIMARY KEY  (`CodigoMatricula`),
  INDEX (Alumno_codigoAlumno),
  INDEX (Seccion_codigoSeccion),
  INDEX (Institucion_anho),
  FOREIGN KEY (Alumno_codigoAlumno) REFERENCES alumno(CodigoAlumno),
  FOREIGN KEY (Seccion_codigoSeccion) REFERENCES seccion(CodigoSeccion),
  FOREIGN KEY (Institucion_anho) REFERENCES institucion(Anho)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `periodo` (
  `CodigoPeriodo` int(5) NOT NULL auto_increment,
  `Nombre` char(5) NOT NULL,
  `Descripcion` text NOT NULL,
  `Nivel_codigoNivel` int(5) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `estado` char(10) NOT NULL,
  `Institucion_anho` char(4) NOT NULL,
  PRIMARY KEY  (`CodigoPeriodo`),
  INDEX (Nivel_codigoNivel),
  INDEX (Institucion_anho),
  FOREIGN KEY (Nivel_codigoNivel) REFERENCES nivel(CodigoNivel),
  FOREIGN KEY (Institucion_anho) REFERENCES institucion(Anho)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `actividad` (
  `CodigoActividad` int(5) NOT NULL auto_increment,
  `Porcentaje` Double NOT NULL,
  `Nombre` char(10) NOT NULL,
  `Descripcion` char(35) NOT NULL,
  `Periodo_codigoPeriodo` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoActividad`),
  INDEX (Periodo_codigoPeriodo),
  FOREIGN KEY (Periodo_codigoPeriodo) REFERENCES periodo(CodigoPeriodo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `evaluacion` (
  `CodigoEvaluacion` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Actividad_codigoActividad` int(5) NOT NULL,
  `Resultado` Double NOT NULL,
  PRIMARY KEY  (`CodigoEvaluacion`),
  INDEX (Alumno_codigoAlumno),
  INDEX (Asignatura_codigoAsignatura),
  INDEX (Actividad_codigoActividad),
  FOREIGN KEY (Alumno_codigoAlumno) REFERENCES alumno(CodigoAlumno),
  FOREIGN KEY (Asignatura_codigoAsignatura) REFERENCES asignatura(CodigoAsignatura),
  FOREIGN KEY (Actividad_codigoActividad) REFERENCES actividad(CodigoActividad)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




