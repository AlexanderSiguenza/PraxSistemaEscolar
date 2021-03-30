-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-06-2011 a las 07:39:43
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `praxon`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `actividad`
-- 

CREATE TABLE `actividad` (
  `CodigoActividad` int(5) NOT NULL auto_increment,
  `Porcentaje` double NOT NULL,
  `Nombre` char(10) NOT NULL,
  `Descripcion` char(35) NOT NULL,
  `Periodo_codigoPeriodo` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoActividad`),
  KEY `Periodo_codigoPeriodo` (`Periodo_codigoPeriodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `actividad`
-- 

INSERT INTO `actividad` VALUES (1, 0.35, 'A1', 'Primera Actividad', 1);
INSERT INTO `actividad` VALUES (2, 0.35, 'A2', 'Segunda Actividad', 1);
INSERT INTO `actividad` VALUES (3, 0.3, 'ET', 'Examen Trimestral', 1);
INSERT INTO `actividad` VALUES (4, 0.35, 'A1', 'Primera Actividad', 2);
INSERT INTO `actividad` VALUES (5, 0.35, 'A2', 'Segunda Actividad', 2);
INSERT INTO `actividad` VALUES (6, 0.3, 'ET', 'Examen Trimestral', 2);
INSERT INTO `actividad` VALUES (8, 0.35, 'A1', 'Primera Actividad', 3);
INSERT INTO `actividad` VALUES (9, 0.35, 'A2', 'Segunda Actividad', 3);
INSERT INTO `actividad` VALUES (10, 0.3, 'ET', 'Examen Trimestral', 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `administrativo`
-- 

CREATE TABLE `administrativo` (
  `CodigoAdministrativo` int(5) NOT NULL auto_increment,
  `Nombres` char(30) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) default NULL,
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
  KEY `Departamento_codigoDepto` (`Departamento_codigoDepto`),
  KEY `Municipio_codigoMunicipio` (`Municipio_codigoMunicipio`),
  KEY `Usuario_nombreUsuario` (`Usuario_nombreUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Volcar la base de datos para la tabla `administrativo`
-- 

INSERT INTO `administrativo` VALUES (1, 'Juan Antonio', 'Campos', '', '04/05/70', 'col. los olivos', 1, 1, '2456-7988', 'Masculino', '45489925-9', 'Docente', 'Juan');
INSERT INTO `administrativo` VALUES (2, 'Administrador', 'Super ', 'Usuario', '04/08/80', 'col. los pinios', 1, 1, '2489-5264', 'Masculino', '45564575-8', 'Administrativo', 'Admin');
INSERT INTO `administrativo` VALUES (3, 'Roberto Carlos', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Masculino', '54564564-8', 'Docente', 'Roberto');
INSERT INTO `administrativo` VALUES (4, 'Susana Leonor', 'Mendoza', '', '04/06/1970', 'col. los amigos', 1, 1, '2448-9789', 'Femenino', '45645646-4', 'Docente', 'Susana');
INSERT INTO `administrativo` VALUES (5, 'Josue Henoch', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Masculino', '54564564-8', 'Docente', 'Josue');
INSERT INTO `administrativo` VALUES (6, 'Pedro Pica', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Masculino', '54564564-8', 'Docente', 'Pedro');
INSERT INTO `administrativo` VALUES (7, 'Salavdor Manuel', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Masculino', '54564564-8', 'Docente', 'Manuel');
INSERT INTO `administrativo` VALUES (8, 'Sabrina Leonor', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Femenino', '54564564-8', 'Docente', 'Sabrina');
INSERT INTO `administrativo` VALUES (9, 'Maria Celeste', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Femenino', '54564564-8', 'Docente', 'maria');
INSERT INTO `administrativo` VALUES (10, 'Ester Marmol', 'Martinez', '', '04/08/70', 'col. ivu', 1, 1, '4548-8955', 'Femenino', '54564564-8', 'Docente', 'ester');
INSERT INTO `administrativo` VALUES (11, 'Elena Rebeca', 'Zalasar', 'Gomez', '07-MAY-201', 'col los dermater', 1, 1, '2444-5454', 'Femenino', '45645645-6', 'Docente', 'Elena');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `alumno`
-- 

CREATE TABLE `alumno` (
  `CodigoAlumno` int(5) NOT NULL auto_increment,
  `Nombres` varchar(30) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) default NULL,
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
  KEY `Usuario_nombreUsuario` (`Usuario_nombreUsuario`),
  KEY `CodigoResponsable` (`CodigoResponsable`),
  KEY `Departamento_codigoDepto` (`Departamento_codigoDepto`),
  KEY `Municipio_codigoMunicipio` (`Municipio_codigoMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

-- 
-- Volcar la base de datos para la tabla `alumno`
-- 

INSERT INTO `alumno` VALUES (1, 'Claudia Veronica', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Claudia', 1);
INSERT INTO `alumno` VALUES (2, 'Lilian Sofia', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'Sofia', 2);
INSERT INTO `alumno` VALUES (3, 'Nelson Rolando', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'Nelson', 3);
INSERT INTO `alumno` VALUES (4, 'Dinora Mala', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dinora', 4);
INSERT INTO `alumno` VALUES (5, 'Regina Soliva', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Regina', 5);
INSERT INTO `alumno` VALUES (6, 'Damaris Fernanda', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Damaris', 6);
INSERT INTO `alumno` VALUES (7, 'Xoxana Retre', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Xoxana', 7);
INSERT INTO `alumno` VALUES (8, 'Sandra Murcia', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Sandra', 8);
INSERT INTO `alumno` VALUES (9, 'Veronica Esmeralda', 'Rodriguez', 'Pe', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'En el brazo', 'no', 'Activo', 'Claud', 9);
INSERT INTO `alumno` VALUES (10, 'Marta', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'Sof', 10);
INSERT INTO `alumno` VALUES (11, 'Nel Rol', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'Nel', 11);
INSERT INTO `alumno` VALUES (12, 'Dino Ma', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dino', 12);
INSERT INTO `alumno` VALUES (13, 'Regi Soli', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Regi', 13);
INSERT INTO `alumno` VALUES (14, 'Damar Ferna', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dama', 14);
INSERT INTO `alumno` VALUES (15, 'Xoxana Retre', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Xoxa', 15);
INSERT INTO `alumno` VALUES (16, 'Cla Veron', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Cla', 16);
INSERT INTO `alumno` VALUES (17, 'Li So', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'So', 17);
INSERT INTO `alumno` VALUES (18, 'Neto Omar', 'Castro', 'Lopez', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Femenino', 'en la pierna', 'no ', 'Activo', 'Ne', 18);
INSERT INTO `alumno` VALUES (19, 'Esperanza', 'Salgado', 'Uma', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'Alergias ', 'Activo', 'Di', 19);
INSERT INTO `alumno` VALUES (20, 'Re So', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Re', 20);
INSERT INTO `alumno` VALUES (21, 'Da Fe', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Da', 21);
INSERT INTO `alumno` VALUES (22, 'Maribel Sandra', 'Pertarco', 'Zurco', '04/06/80', 'calle independencia casa #4', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Xo', 22);
INSERT INTO `alumno` VALUES (23, 'C Veron', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'C', 23);
INSERT INTO `alumno` VALUES (24, 'L S', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'S', 24);
INSERT INTO `alumno` VALUES (25, 'N R', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'N', 25);
INSERT INTO `alumno` VALUES (26, 'D M', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'D', 26);
INSERT INTO `alumno` VALUES (27, 'Erick Sermon', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Masculino', 'no', 'no', 'Activo', 'R', 27);
INSERT INTO `alumno` VALUES (28, 'Deremos', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dtr', 28);
INSERT INTO `alumno` VALUES (29, 'X R', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'X', 29);
INSERT INTO `alumno` VALUES (30, 'Cdsjfkl Veron', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Cdsjfkl', 30);
INSERT INTO `alumno` VALUES (31, 'Sretretrt S', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'Sretretrt', 31);
INSERT INTO `alumno` VALUES (32, 'NNytrytr R', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'Nytrytr', 32);
INSERT INTO `alumno` VALUES (33, 'Djhkjhkj M', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Djhkjhkj', 33);
INSERT INTO `alumno` VALUES (34, 'Reqwee S', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Reqwee', 34);
INSERT INTO `alumno` VALUES (35, 'Dwerwe F', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dwerwe', 35);
INSERT INTO `alumno` VALUES (36, 'Alenxandra', 'Rodriguez', 'Ferda', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Aiiopoi', 36);
INSERT INTO `alumno` VALUES (37, 'Cioopopi Veron', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Cioopopi', 36);
INSERT INTO `alumno` VALUES (38, 'Sopiopi S', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'Sopiopi', 35);
INSERT INTO `alumno` VALUES (39, 'Noiopiop R', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'Noiopiop', 34);
INSERT INTO `alumno` VALUES (40, 'Dioipoi M', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dioipoi', 33);
INSERT INTO `alumno` VALUES (41, 'Riopiop S', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Riopiop', 32);
INSERT INTO `alumno` VALUES (42, 'Doiopop F', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Doiopop', 31);
INSERT INTO `alumno` VALUES (43, 'Xoipopi R', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Xoipopi', 30);
INSERT INTO `alumno` VALUES (44, 'Teto R', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Teto', 29);
INSERT INTO `alumno` VALUES (45, 'Carlos Alejo', 'Rodriguez', 'Campos', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Masculino', 'no', 'no', 'Activo', 'Aytyut', 28);
INSERT INTO `alumno` VALUES (46, 'Gabriela Alejandra', 'Sermeno', '', '04/06/80', 'calle independencia casa #4', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Cuyttyu', 27);
INSERT INTO `alumno` VALUES (47, 'Suyttyu S', 'Duke', 'Rubio', '04/08/80', 'col. metro', 1, 1, '2445-6899', 'Femenino', 'no', 'no', 'Activo', 'Suyttyu', 26);
INSERT INTO `alumno` VALUES (48, 'Nyutuyt R', 'Castro', '', '14/05/1980', 'col. los planes', 1, 1, '2448-6589', 'Masculino', 'no', 'no ', 'Activo', 'Nyutuyt', 25);
INSERT INTO `alumno` VALUES (49, 'Dtyuuy M', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Dtyuuy', 24);
INSERT INTO `alumno` VALUES (50, 'Rtyuuyt S', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Rtyuuyt', 23);
INSERT INTO `alumno` VALUES (51, 'Drtyuyt F', 'Salgado', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Drtyuyt', 22);
INSERT INTO `alumno` VALUES (52, 'Xtyuuyt R', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Xtyuuyt', 21);
INSERT INTO `alumno` VALUES (53, 'Ttyuuyt R', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Ttyuuyt', 20);
INSERT INTO `alumno` VALUES (54, 'Soberano Persico', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Masculino', 'no', 'no', 'Activo', 'Asdf', 19);
INSERT INTO `alumno` VALUES (55, 'Csdf Veron', 'Rodriguez', '', '04/06/80', 'col los pinos', 1, 1, '2448-6477', 'Femenino', 'no', 'no', 'Activo', 'Csdf', 18);
INSERT INTO `alumno` VALUES (56, 'Tomasino', 'Calixto', 'Anacleto', '15-FEB-196', 'kashfjkhasdjkhfs', 1, 1, '3894-7839', 'Masculino', 'Le falta un Ojo ', 'Gripe', 'Activo', 'giovanni', 38);
INSERT INTO `alumno` VALUES (57, 'Pedro', 'Picapiedra', 'Marmol', '08-FEB-200', 'col.ivu', 1, 1, '', 'Masculino', '', '', 'Activo', 'pedrop', 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `asignatura`
-- 

CREATE TABLE `asignatura` (
  `CodigoAsignatura` int(5) NOT NULL auto_increment,
  `Nombre` char(30) NOT NULL,
  `PlanEstudio_codigoPlan` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoAsignatura`),
  KEY `PlanEstudio_codigoPlan` (`PlanEstudio_codigoPlan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- 
-- Volcar la base de datos para la tabla `asignatura`
-- 

INSERT INTO `asignatura` VALUES (1, 'Matematica', 1);
INSERT INTO `asignatura` VALUES (9, 'Ingles', 1);
INSERT INTO `asignatura` VALUES (10, 'Eduacion Fisica', 1);
INSERT INTO `asignatura` VALUES (11, 'Eduacion Artistica', 1);
INSERT INTO `asignatura` VALUES (12, 'Lenguaje y Literatura', 1);
INSERT INTO `asignatura` VALUES (13, 'Estudios Sociales y Civica', 1);
INSERT INTO `asignatura` VALUES (14, 'CC Salud y Medio Ambiente', 1);
INSERT INTO `asignatura` VALUES (15, 'Ingles', 2);
INSERT INTO `asignatura` VALUES (16, 'Matematicas', 2);
INSERT INTO `asignatura` VALUES (17, 'Eduacion Fisica', 2);
INSERT INTO `asignatura` VALUES (18, 'Eduacion Artistica', 2);
INSERT INTO `asignatura` VALUES (19, 'Lenguaje y Literatura', 2);
INSERT INTO `asignatura` VALUES (20, 'Estudios Sociales y Civica', 2);
INSERT INTO `asignatura` VALUES (21, 'CC Salud y Medio Ambiente', 2);
INSERT INTO `asignatura` VALUES (22, 'Ingles', 3);
INSERT INTO `asignatura` VALUES (23, 'Matematicas', 3);
INSERT INTO `asignatura` VALUES (24, 'Eduacion Fisica', 3);
INSERT INTO `asignatura` VALUES (25, 'Eduacion Artistica', 3);
INSERT INTO `asignatura` VALUES (26, 'Lenguaje y Literatura', 3);
INSERT INTO `asignatura` VALUES (27, 'Estudios Sociales y Civica', 3);
INSERT INTO `asignatura` VALUES (28, 'CC Salud y Medio Ambiente', 3);
INSERT INTO `asignatura` VALUES (29, 'Ingles', 5);
INSERT INTO `asignatura` VALUES (30, 'Ingles', 6);
INSERT INTO `asignatura` VALUES (31, 'Ingles', 7);
INSERT INTO `asignatura` VALUES (32, 'Ingles', 8);
INSERT INTO `asignatura` VALUES (33, 'Ingles', 9);
INSERT INTO `asignatura` VALUES (35, 'Matematicas', 5);
INSERT INTO `asignatura` VALUES (36, 'Matematicas', 6);
INSERT INTO `asignatura` VALUES (37, 'Matematicas', 7);
INSERT INTO `asignatura` VALUES (38, 'Matematicas', 8);
INSERT INTO `asignatura` VALUES (39, 'Matematicas', 9);
INSERT INTO `asignatura` VALUES (41, 'Eduacion Fisica', 5);
INSERT INTO `asignatura` VALUES (42, 'Eduacion Artistica', 6);
INSERT INTO `asignatura` VALUES (43, 'Eduacion Fisica', 7);
INSERT INTO `asignatura` VALUES (44, 'Eduacion Fisica', 8);
INSERT INTO `asignatura` VALUES (45, 'Eduacion Fisica', 9);
INSERT INTO `asignatura` VALUES (46, 'Ingles', 10);
INSERT INTO `asignatura` VALUES (47, 'Matematicas', 10);
INSERT INTO `asignatura` VALUES (48, 'Eduacion Fisica', 10);
INSERT INTO `asignatura` VALUES (49, 'Eduacion Artistica', 10);
INSERT INTO `asignatura` VALUES (50, 'Lenguaje y Literatura', 10);
INSERT INTO `asignatura` VALUES (51, 'Estudios Sociales y Civica', 10);
INSERT INTO `asignatura` VALUES (52, 'Eduacion Artistica', 7);
INSERT INTO `asignatura` VALUES (53, 'Lenguaje y Literatura', 7);
INSERT INTO `asignatura` VALUES (54, 'Estudios Sociales y Civica', 7);
INSERT INTO `asignatura` VALUES (55, 'Eduacion Artistica', 8);
INSERT INTO `asignatura` VALUES (56, 'Lenguaje y Literatura', 8);
INSERT INTO `asignatura` VALUES (57, 'Estudios Sociales y Civica', 8);
INSERT INTO `asignatura` VALUES (58, 'CC Salud y Medio Ambiente', 8);
INSERT INTO `asignatura` VALUES (59, 'Eduacion Artistica', 9);
INSERT INTO `asignatura` VALUES (60, 'Lenguaje y Literatura', 9);
INSERT INTO `asignatura` VALUES (61, 'Estudios Sociales y Civica', 9);
INSERT INTO `asignatura` VALUES (62, 'CC Salud y Medio Ambiente', 9);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cargaacademica`
-- 

CREATE TABLE `cargaacademica` (
  `CodigoCargaAcademica` int(5) NOT NULL auto_increment,
  `Docente_codigoDocente` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Planestudio_codigoPlan` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoCargaAcademica`),
  KEY `Docente_codigoDocente` (`Docente_codigoDocente`),
  KEY `Asignatura_codigoAsignatura` (`Asignatura_codigoAsignatura`),
  KEY `Planestudio_codigoPlan` (`Planestudio_codigoPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cargaacademica`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `departamento`
-- 

CREATE TABLE `departamento` (
  `CodigoDepto` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  PRIMARY KEY  (`CodigoDepto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Volcar la base de datos para la tabla `departamento`
-- 

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

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `evaluacion`
-- 

CREATE TABLE `evaluacion` (
  `CodigoEvaluacion` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Actividad_codigoActividad` int(5) NOT NULL,
  `Resultado` double NOT NULL,
  PRIMARY KEY  (`CodigoEvaluacion`),
  KEY `Alumno_codigoAlumno` (`Alumno_codigoAlumno`),
  KEY `Asignatura_codigoAsignatura` (`Asignatura_codigoAsignatura`),
  KEY `Actividad_codigoActividad` (`Actividad_codigoActividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- 
-- Volcar la base de datos para la tabla `evaluacion`
-- 

INSERT INTO `evaluacion` VALUES (1, 10, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (2, 1, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (3, 37, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (4, 46, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (5, 55, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (6, 19, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (7, 28, 1, 1, 4);
INSERT INTO `evaluacion` VALUES (8, 10, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (9, 1, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (10, 37, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (11, 46, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (12, 55, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (13, 19, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (14, 28, 9, 1, 10);
INSERT INTO `evaluacion` VALUES (15, 10, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (16, 1, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (17, 37, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (18, 46, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (19, 55, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (20, 19, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (21, 28, 10, 1, 6);
INSERT INTO `evaluacion` VALUES (22, 10, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (24, 37, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (25, 46, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (26, 55, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (27, 19, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (28, 28, 11, 1, 4);
INSERT INTO `evaluacion` VALUES (29, 1, 11, 2, 2000);
INSERT INTO `evaluacion` VALUES (37, 10, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (38, 1, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (39, 37, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (40, 55, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (41, 28, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (42, 19, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (43, 46, 11, 3, 7.25);
INSERT INTO `evaluacion` VALUES (44, 17, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (45, 8, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (46, 44, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (47, 53, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (48, 26, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (49, 35, 33, 1, 8.25);
INSERT INTO `evaluacion` VALUES (58, 17, 39, 1, 6.75);
INSERT INTO `evaluacion` VALUES (59, 8, 39, 1, 6.75);
INSERT INTO `evaluacion` VALUES (60, 44, 39, 1, 6.75);
INSERT INTO `evaluacion` VALUES (61, 53, 39, 1, 6.75);
INSERT INTO `evaluacion` VALUES (62, 26, 39, 1, 6.75);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `grado`
-- 

CREATE TABLE `grado` (
  `CodigoGrado` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  `Nivel_codigoNivel` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoGrado`),
  KEY `Nivel_codigoNivel` (`Nivel_codigoNivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `grado`
-- 

INSERT INTO `grado` VALUES (1, 'Primer Grado', 1);
INSERT INTO `grado` VALUES (2, 'Segundo Grado', 1);
INSERT INTO `grado` VALUES (3, 'Tercer Grado', 1);
INSERT INTO `grado` VALUES (4, 'Cuarto Grado', 2);
INSERT INTO `grado` VALUES (5, 'Quinto Grado', 2);
INSERT INTO `grado` VALUES (6, 'Sexto Grado', 2);
INSERT INTO `grado` VALUES (7, 'Septimo Grado', 3);
INSERT INTO `grado` VALUES (8, 'Octavo Grado', 3);
INSERT INTO `grado` VALUES (9, 'Noveno Grado', 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `historial_institucion`
-- 

CREATE TABLE `historial_institucion` (
  `Codigo` int(5) NOT NULL auto_increment,
  `CodigoInstituto` int(5) NOT NULL,
  `Anho` char(4) NOT NULL,
  PRIMARY KEY  (`Codigo`),
  KEY `CodigoInstituto` (`CodigoInstituto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `historial_institucion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `institucion`
-- 

CREATE TABLE `institucion` (
  `CodigoInstituto` int(5) NOT NULL auto_increment,
  `NombreInstituto` char(50) NOT NULL,
  `NombreDirector` char(50) NOT NULL,
  `Telefono` char(9) NOT NULL,
  `Direccion` char(100) NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `Estado` char(8) NOT NULL,
  `Anho` char(4) NOT NULL,
  PRIMARY KEY  (`CodigoInstituto`),
  KEY `Departamento_codigoDepto` (`Departamento_codigoDepto`),
  KEY `Municipio_codigoMunicipio` (`Municipio_codigoMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `institucion`
-- 

INSERT INTO `institucion` VALUES (1, 'Escuela Venezuela', 'Tomas Regalado', '248889854', 'col. los pinos', 1, 1, 'Activo', '2011');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `matricula`
-- 

CREATE TABLE `matricula` (
  `CodigoMatricula` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Seccion_codigoSeccion` int(5) NOT NULL,
  `Institucion_anho` char(4) NOT NULL,
  `estadoFinal` char(15) NOT NULL,
  PRIMARY KEY  (`CodigoMatricula`),
  KEY `Alumno_codigoAlumno` (`Alumno_codigoAlumno`),
  KEY `Seccion_codigoSeccion` (`Seccion_codigoSeccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

-- 
-- Volcar la base de datos para la tabla `matricula`
-- 

INSERT INTO `matricula` VALUES (1, 1, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (2, 2, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (3, 3, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (4, 4, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (5, 5, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (6, 6, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (7, 7, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (8, 8, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (9, 9, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (10, 10, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (11, 11, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (12, 12, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (13, 13, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (14, 14, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (15, 15, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (16, 16, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (17, 17, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (18, 18, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (19, 19, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (20, 20, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (21, 21, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (22, 22, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (23, 23, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (24, 24, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (25, 25, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (26, 26, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (27, 27, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (28, 28, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (29, 29, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (30, 30, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (31, 31, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (32, 32, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (33, 33, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (34, 34, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (35, 35, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (36, 36, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (37, 37, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (38, 38, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (39, 39, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (40, 40, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (41, 41, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (42, 42, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (43, 43, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (44, 44, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (45, 45, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (46, 46, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (47, 47, 2, '2011', 'Activo');
INSERT INTO `matricula` VALUES (48, 48, 3, '2011', 'Activo');
INSERT INTO `matricula` VALUES (49, 49, 4, '2011', 'Activo');
INSERT INTO `matricula` VALUES (50, 50, 5, '2011', 'Activo');
INSERT INTO `matricula` VALUES (51, 51, 6, '2011', 'Activo');
INSERT INTO `matricula` VALUES (52, 52, 7, '2011', 'Activo');
INSERT INTO `matricula` VALUES (53, 53, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (54, 54, 9, '2011', 'Activo');
INSERT INTO `matricula` VALUES (55, 55, 1, '2011', 'Activo');
INSERT INTO `matricula` VALUES (56, 56, 8, '2011', 'Activo');
INSERT INTO `matricula` VALUES (57, 57, 6, '2011', 'Activo');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `municipio`
-- 

CREATE TABLE `municipio` (
  `CodigoMunicipio` int(5) NOT NULL auto_increment,
  `Nombre` char(30) NOT NULL,
  PRIMARY KEY  (`CodigoMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `municipio`
-- 

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

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `nivel`
-- 

CREATE TABLE `nivel` (
  `CodigoNivel` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  PRIMARY KEY  (`CodigoNivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `nivel`
-- 

INSERT INTO `nivel` VALUES (1, 'Primer Ciclo');
INSERT INTO `nivel` VALUES (2, 'Segundo Ciclo');
INSERT INTO `nivel` VALUES (3, 'Tercer Ciclo');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `periodo`
-- 

CREATE TABLE `periodo` (
  `CodigoPeriodo` int(5) NOT NULL auto_increment,
  `Nombre` char(5) NOT NULL,
  `Descripcion` text NOT NULL,
  `Nivel_codigoNivel` int(5) NOT NULL,
  `FechaInicio` varchar(12) NOT NULL,
  `FechaFin` varchar(12) NOT NULL,
  `estado` char(10) NOT NULL,
  `Institucion_anho` char(4) NOT NULL,
  PRIMARY KEY  (`CodigoPeriodo`),
  KEY `Nivel_codigoNivel` (`Nivel_codigoNivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `periodo`
-- 

INSERT INTO `periodo` VALUES (1, 'TI', 'Primer Trimestre', 1, '08-MAY-2011', '04/06/80', 'Activo', '2011');
INSERT INTO `periodo` VALUES (2, 'TII', 'Segundo Trimestre', 1, '06-MAY-2011', '08-MAY-2011', 'Inactivo', '2011');
INSERT INTO `periodo` VALUES (3, 'TIII', 'Tercer Trimestre', 1, '12-MAY-2011', '15/MY/2011', 'Inactivo', '2011');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `planestudio`
-- 

CREATE TABLE `planestudio` (
  `CodigoPlan` int(5) NOT NULL auto_increment,
  `Nombre` char(20) NOT NULL,
  `ano` char(4) NOT NULL,
  `Grado_CodigoGrado` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoPlan`),
  KEY `Grado_CodigoGrado` (`Grado_CodigoGrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `planestudio`
-- 

INSERT INTO `planestudio` VALUES (1, 'Plan Primer Grado', '2003', 1);
INSERT INTO `planestudio` VALUES (2, 'Plan Segundo Grado', '2003', 2);
INSERT INTO `planestudio` VALUES (3, 'Plan Tercer Grado', '2003', 3);
INSERT INTO `planestudio` VALUES (5, 'Plan Cuarto Grado.', '2003', 4);
INSERT INTO `planestudio` VALUES (6, 'Plan Quinto Grado.', '2003', 5);
INSERT INTO `planestudio` VALUES (7, 'Plan Sexto Grado', '2011', 6);
INSERT INTO `planestudio` VALUES (8, 'Plan Septimo Grado', '2011', 7);
INSERT INTO `planestudio` VALUES (9, 'Plan Octavo Grado', '2011', 8);
INSERT INTO `planestudio` VALUES (10, 'Plan Noveno Grado', '2003', 9);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `responsablealumno`
-- 

CREATE TABLE `responsablealumno` (
  `CodigoRespon` int(5) NOT NULL auto_increment,
  `Nombres` text NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) default NULL,
  `Sexo` char(10) NOT NULL,
  `Dui` char(15) NOT NULL,
  `Direccion` text NOT NULL,
  `Departamento_codigoDepto` int(5) NOT NULL,
  `Municipio_codigoMunicipio` int(5) NOT NULL,
  `telefonoCasa` text NOT NULL,
  `telefonoTrabajo` text,
  `Parentesco` text NOT NULL,
  PRIMARY KEY  (`CodigoRespon`),
  KEY `Departamento_codigoDepto` (`Departamento_codigoDepto`),
  KEY `Municipio_codigoMunicipio` (`Municipio_codigoMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- 
-- Volcar la base de datos para la tabla `responsablealumno`
-- 

INSERT INTO `responsablealumno` VALUES (1, 'Pedro Antonio', 'Portillo', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (2, 'Tatiana Leonor', 'Salazar', 'Romero', 'Femenino', '78945456-7', 'col.el bosque', 1, 1, '2448-9898', '2499-6378', 'Madre');
INSERT INTO `responsablealumno` VALUES (3, 'Onil', 'Prieto', '', 'Masculino', '45646456-4', 'col. los gatos', 1, 1, '2444-4444', '', 'Padre');
INSERT INTO `responsablealumno` VALUES (4, 'Soberno', 'Portillo', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (5, 'Manuel Gustavo', 'Sagastume', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (6, 'Antonio Gustavo', 'Cedros', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (7, 'Nira Aminda', 'Millar', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Madre');
INSERT INTO `responsablealumno` VALUES (8, 'Demo Alva', 'Pertecos', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (9, 'Vicente Fernandes', 'Pertecos', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (10, 'Fernando palomo', 'Alcanza', 'Perta', 'Masculino', '78787878-7', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (11, 'Tati Leon', 'Sala', 'Romero', 'Femenino', '78945456-7', 'col.el bosque', 1, 1, '2448-9898', '2499-6378', 'Madre');
INSERT INTO `responsablealumno` VALUES (12, 'Onil', 'Castaño', '', 'Masculino', '45646456-4', 'col. los gatos', 1, 1, '2444-4444', '8956-5665', 'Padre');
INSERT INTO `responsablealumno` VALUES (13, 'Sobe', 'Porti', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (14, 'Man Gust', 'Sagas', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (15, 'Anto Gus', 'Ced', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (16, 'Ni Ami', 'Mi', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Madre');
INSERT INTO `responsablealumno` VALUES (17, 'De Al', 'Pert', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (18, 'Carlos Antonio', 'Yerma', 'Portoco', 'Masculino', '66666666-3', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (19, 'Solito Mango', 'Portillo', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (20, 'Leticia Menha', 'Salazar', 'Romero', 'Femenino', '78945456-7', 'col.el bosque', 1, 1, '2448-9898', '2499-6378', 'Madre');
INSERT INTO `responsablealumno` VALUES (21, 'Erik', 'Gusta', '', 'Masculino', '45646456-4', 'col. los gatos', 1, 1, '2444-4444', '', 'Padre');
INSERT INTO `responsablealumno` VALUES (22, 'Tomate', 'Pertico', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (23, 'Memo Arru', 'Dinasta', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (24, 'Ricaredo Metra', 'Dyter', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (25, 'Pedro Antonio', 'Villar', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Madre');
INSERT INTO `responsablealumno` VALUES (26, 'Omar Bicentino', 'Quijano', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (27, 'Carlos Atruteo', 'Campos', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (28, 'Celibato', 'Puntifio', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (29, 'Jessica Madan', 'Rio', 'Romero', 'Femenino', '78945456-7', 'col.el bosque', 1, 1, '2448-9898', '2499-6378', 'Madre');
INSERT INTO `responsablealumno` VALUES (30, 'Osorto Cabla', 'Pertor', '', 'Masculino', '45646456-4', 'col. los gatos', 1, 1, '2444-4444', '', 'Padre');
INSERT INTO `responsablealumno` VALUES (31, 'Cipudo Serpo', 'Languido', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (32, 'Anibla Mala', 'Suerte', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (33, 'Jacobbo Herta', 'Sertyu', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (34, 'Dertui Corto', 'Zavaleta', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Madre');
INSERT INTO `responsablealumno` VALUES (35, 'Reter Morta', 'Pirtocu', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (36, 'Jossec Ale', 'Arubaba', '', 'Masculino', '89712154-8', 'col. el matazano', 1, 1, '2448-5698', '2446-8956', 'Padre');
INSERT INTO `responsablealumno` VALUES (37, 'aaaaaaaaaa', 'ryutu', '', 'Femenino', '45454545-4', 'uytuytuyt', 1, 1, '', '', 'ytuytuytuytu');
INSERT INTO `responsablealumno` VALUES (38, 'Giovanni', 'Morales', '', 'Masculino', '17862837-6', 'kjasfdhjkasdhkjfhasdkjfhasdfjkhadskjf', 1, 1, '2440-2389', '1726-5371', 'Tio');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `seccion`
-- 

CREATE TABLE `seccion` (
  `CodigoSeccion` int(5) NOT NULL auto_increment,
  `Nombre` char(5) NOT NULL,
  `Grado_codigo` int(5) NOT NULL,
  `Docente_codigoDocente` int(5) NOT NULL,
  PRIMARY KEY  (`CodigoSeccion`),
  KEY `Grado_codigo` (`Grado_codigo`),
  KEY `Docente_codigoDocente` (`Docente_codigoDocente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `seccion`
-- 

INSERT INTO `seccion` VALUES (1, '1A', 1, 1);
INSERT INTO `seccion` VALUES (2, '2A', 2, 4);
INSERT INTO `seccion` VALUES (3, '3A', 3, 3);
INSERT INTO `seccion` VALUES (4, '4A', 4, 5);
INSERT INTO `seccion` VALUES (5, '5A', 5, 6);
INSERT INTO `seccion` VALUES (6, '6A', 6, 7);
INSERT INTO `seccion` VALUES (7, '7A', 7, 8);
INSERT INTO `seccion` VALUES (8, '8A', 8, 9);
INSERT INTO `seccion` VALUES (9, '9A', 9, 10);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `trimestre1`
-- 

CREATE TABLE `trimestre1` (
  `Codigo` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Trimestre` int(5) NOT NULL,
  `A1` double NOT NULL,
  `A2` double NOT NULL,
  `ET` double NOT NULL,
  PRIMARY KEY  (`Codigo`),
  KEY `Alumno_codigoAlumno` (`Alumno_codigoAlumno`),
  KEY `Asignatura_codigoAsignatura` (`Asignatura_codigoAsignatura`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

-- 
-- Volcar la base de datos para la tabla `trimestre1`
-- 

INSERT INTO `trimestre1` VALUES (1, 1, 1, 1, 1, 4.5, 10);
INSERT INTO `trimestre1` VALUES (2, 1, 9, 1, 2, 10, 2);
INSERT INTO `trimestre1` VALUES (3, 1, 10, 1, 3, 3, 3);
INSERT INTO `trimestre1` VALUES (4, 1, 11, 1, 4, 4, 4);
INSERT INTO `trimestre1` VALUES (6, 10, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (7, 1, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (8, 37, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (9, 55, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (10, 28, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (11, 19, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (12, 46, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (13, 46, 1, 1, 1.23, 4.5, 10);
INSERT INTO `trimestre1` VALUES (31, 1, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (32, 37, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (33, 55, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (34, 28, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (35, 19, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (36, 46, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (37, 46, 9, 1, 9, 10, 0);
INSERT INTO `trimestre1` VALUES (38, 24, 31, 1, 4, 4, 2.34);
INSERT INTO `trimestre1` VALUES (39, 57, 31, 1, 3.45, 5.7, 9);
INSERT INTO `trimestre1` VALUES (40, 15, 31, 1, 4.5, 6, 3.45);
INSERT INTO `trimestre1` VALUES (41, 6, 31, 1, 6.43, 6.78, 5.7);
INSERT INTO `trimestre1` VALUES (42, 33, 31, 1, 8.34, 7, 6);
INSERT INTO `trimestre1` VALUES (43, 42, 31, 1, 6, 9, 8.34);
INSERT INTO `trimestre1` VALUES (44, 51, 31, 1, 9, 3.45, 9);
INSERT INTO `trimestre1` VALUES (45, 51, 31, 1, 9, 3.45, 9);
INSERT INTO `trimestre1` VALUES (46, 3, 22, 1, 8.34, 4, 3);
INSERT INTO `trimestre1` VALUES (47, 39, 22, 1, 5, 2.34, 5);
INSERT INTO `trimestre1` VALUES (48, 48, 22, 1, 6, 10, 7.8);
INSERT INTO `trimestre1` VALUES (49, 30, 22, 1, 3, 6, 8);
INSERT INTO `trimestre1` VALUES (50, 12, 22, 1, 6, 8, 3.45);
INSERT INTO `trimestre1` VALUES (51, 21, 22, 1, 1, 5, 9);
INSERT INTO `trimestre1` VALUES (52, 21, 22, 1, 1, 5, 9);
INSERT INTO `trimestre1` VALUES (53, 10, 1, 1, 8, 0, 0);
INSERT INTO `trimestre1` VALUES (54, 1, 1, 1, 5, 0, 0);
INSERT INTO `trimestre1` VALUES (55, 37, 1, 1, 4, 0, 0);
INSERT INTO `trimestre1` VALUES (56, 55, 1, 1, 3, 0, 0);
INSERT INTO `trimestre1` VALUES (57, 28, 1, 1, 2, 0, 0);
INSERT INTO `trimestre1` VALUES (58, 19, 1, 1, 1, 0, 0);
INSERT INTO `trimestre1` VALUES (59, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (60, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (61, 10, 1, 1, 0, 0, 0);
INSERT INTO `trimestre1` VALUES (62, 1, 1, 1, 5, 0, 0);
INSERT INTO `trimestre1` VALUES (63, 37, 1, 1, 4, 0, 0);
INSERT INTO `trimestre1` VALUES (64, 55, 1, 1, 3, 0, 0);
INSERT INTO `trimestre1` VALUES (65, 28, 1, 1, 2, 0, 0);
INSERT INTO `trimestre1` VALUES (66, 19, 1, 1, 1, 0, 0);
INSERT INTO `trimestre1` VALUES (67, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (68, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (69, 10, 1, 1, 0, 0, 0);
INSERT INTO `trimestre1` VALUES (70, 1, 1, 1, 5, 0, 0);
INSERT INTO `trimestre1` VALUES (71, 37, 1, 1, 4, 0, 0);
INSERT INTO `trimestre1` VALUES (72, 55, 1, 1, 3, 0, 0);
INSERT INTO `trimestre1` VALUES (73, 28, 1, 1, 2, 0, 0);
INSERT INTO `trimestre1` VALUES (74, 19, 1, 1, 1, 0, 0);
INSERT INTO `trimestre1` VALUES (75, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (76, 46, 1, 1, 7, 0, 0);
INSERT INTO `trimestre1` VALUES (77, 11, 16, 1, 8.42, 0, 0);
INSERT INTO `trimestre1` VALUES (78, 2, 16, 1, 5.25, 0, 0);
INSERT INTO `trimestre1` VALUES (79, 38, 16, 1, 6.32, 0, 0);
INSERT INTO `trimestre1` VALUES (80, 47, 16, 1, 7.25, 0, 0);
INSERT INTO `trimestre1` VALUES (81, 29, 16, 1, 8.9, 0, 0);
INSERT INTO `trimestre1` VALUES (82, 20, 16, 1, 5.63, 0, 0);
INSERT INTO `trimestre1` VALUES (83, 20, 16, 1, 5.63, 0, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `trimestre2`
-- 

CREATE TABLE `trimestre2` (
  `Codigo` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Trimestre` int(5) NOT NULL,
  `A1` double NOT NULL,
  `A2` double NOT NULL,
  `ET` double NOT NULL,
  PRIMARY KEY  (`Codigo`),
  KEY `Alumno_codigoAlumno` (`Alumno_codigoAlumno`),
  KEY `Asignatura_codigoAsignatura` (`Asignatura_codigoAsignatura`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Volcar la base de datos para la tabla `trimestre2`
-- 

INSERT INTO `trimestre2` VALUES (1, 1, 1, 2, 5, 5, 5);
INSERT INTO `trimestre2` VALUES (2, 1, 9, 2, 6, 6, 6);
INSERT INTO `trimestre2` VALUES (3, 1, 10, 2, 7, 7, 7);
INSERT INTO `trimestre2` VALUES (4, 1, 11, 8, 8, 8, 8);
INSERT INTO `trimestre2` VALUES (5, 10, 1, 2, 8.34, 0, 0);
INSERT INTO `trimestre2` VALUES (6, 1, 1, 2, 4.56, 0, 0);
INSERT INTO `trimestre2` VALUES (7, 37, 1, 2, 2.56, 0, 0);
INSERT INTO `trimestre2` VALUES (8, 55, 1, 2, 5.7, 0, 0);
INSERT INTO `trimestre2` VALUES (9, 28, 1, 2, 7.8, 0, 0);
INSERT INTO `trimestre2` VALUES (10, 19, 1, 2, 10, 0, 0);
INSERT INTO `trimestre2` VALUES (11, 46, 1, 2, 9, 0, 0);
INSERT INTO `trimestre2` VALUES (12, 46, 1, 2, 9, 0, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `trimestre3`
-- 

CREATE TABLE `trimestre3` (
  `Codigo` int(5) NOT NULL auto_increment,
  `Alumno_codigoAlumno` int(5) NOT NULL,
  `Asignatura_codigoAsignatura` int(5) NOT NULL,
  `Trimestre` int(5) NOT NULL,
  `A1` double NOT NULL,
  `A2` double NOT NULL,
  `ET` double NOT NULL,
  PRIMARY KEY  (`Codigo`),
  KEY `Alumno_codigoAlumno` (`Alumno_codigoAlumno`),
  KEY `Asignatura_codigoAsignatura` (`Asignatura_codigoAsignatura`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `trimestre3`
-- 

INSERT INTO `trimestre3` VALUES (1, 1, 1, 3, 9, 9, 9);
INSERT INTO `trimestre3` VALUES (2, 1, 9, 3, 10, 10, 10);
INSERT INTO `trimestre3` VALUES (3, 1, 10, 3, 1, 1, 1);
INSERT INTO `trimestre3` VALUES (4, 1, 11, 3, 2, 2, 8);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `nombreUsuario` char(10) NOT NULL,
  `Contrasenia` varchar(15) NOT NULL,
  `Privilegio` char(15) NOT NULL,
  PRIMARY KEY  (`nombreUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES ('Admin', 'admin', 'Administrativo');
INSERT INTO `usuario` VALUES ('Aiiopoi', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Asdf', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Aytyut', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('C', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('Cdsjfkl', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('Cioopopi', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('Cla', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('Claud', 'Claud', 'Alumno');
INSERT INTO `usuario` VALUES ('Claudia', 'claudia', 'Alumno');
INSERT INTO `usuario` VALUES ('Csdf', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('Cuyttyu', 'cla', 'Alumno');
INSERT INTO `usuario` VALUES ('D', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Da', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Dama', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Damaris', 'damaris', 'Alumno');
INSERT INTO `usuario` VALUES ('Di', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Dino', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Dinora', 'dinora', 'Alumno');
INSERT INTO `usuario` VALUES ('Dioipoi', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Djhkjhkj', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Doiopop', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Drtyuyt', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Dtr', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Dtyuuy', 'dino', 'Alumno');
INSERT INTO `usuario` VALUES ('Dwerwe', 'dama', 'Alumno');
INSERT INTO `usuario` VALUES ('Elena', 'elena', 'Docente');
INSERT INTO `usuario` VALUES ('Ester', 'ester', 'Docente');
INSERT INTO `usuario` VALUES ('giovanni', 'qwerty', 'Alumno');
INSERT INTO `usuario` VALUES ('Josue', 'josue', 'Docente');
INSERT INTO `usuario` VALUES ('Juan', 'juan', 'Docente');
INSERT INTO `usuario` VALUES ('Manuel', 'manuel', 'Docente');
INSERT INTO `usuario` VALUES ('Maria', 'maria', 'Docente');
INSERT INTO `usuario` VALUES ('N', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Ne', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Nel', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Nelson', 'nelson', 'Alumno');
INSERT INTO `usuario` VALUES ('Noiopiop', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Nytrytr', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Nyutuyt', 'nel', 'Alumno');
INSERT INTO `usuario` VALUES ('Pedro', 'pedro', 'Docente');
INSERT INTO `usuario` VALUES ('pedrop', 'pedrop', 'Alumno');
INSERT INTO `usuario` VALUES ('R', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('Re', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('Regi', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('Regina', 'regina', 'Alumno');
INSERT INTO `usuario` VALUES ('Reqwee', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('Riopiop', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('Roberto', 'roberto', 'Docente');
INSERT INTO `usuario` VALUES ('Rtyuuyt', 'regi', 'Alumno');
INSERT INTO `usuario` VALUES ('S', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Sabrina', 'sabrina', 'Docente');
INSERT INTO `usuario` VALUES ('Sandra', 'sandra', 'Alumno');
INSERT INTO `usuario` VALUES ('So', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Sof', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Sofia', 'sofia', 'Alumno');
INSERT INTO `usuario` VALUES ('Sopiopi', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Sretretrt', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Susana', 'susana', 'Docente');
INSERT INTO `usuario` VALUES ('Suyttyu', 'sof', 'Alumno');
INSERT INTO `usuario` VALUES ('Teto', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Ttyuuyt', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('X', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Xo', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Xoipopi', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Xoxa', 'Xoxa', 'Alumno');
INSERT INTO `usuario` VALUES ('Xoxana', 'Xoxana', 'Alumno');
INSERT INTO `usuario` VALUES ('Xtyuuyt', 'Xoxa', 'Alumno');

-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `actividad`
-- 
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`Periodo_codigoPeriodo`) REFERENCES `periodo` (`CodigoPeriodo`);

-- 
-- Filtros para la tabla `administrativo`
-- 
ALTER TABLE `administrativo`
  ADD CONSTRAINT `administrativo_ibfk_1` FOREIGN KEY (`Departamento_codigoDepto`) REFERENCES `departamento` (`CodigoDepto`),
  ADD CONSTRAINT `administrativo_ibfk_2` FOREIGN KEY (`Municipio_codigoMunicipio`) REFERENCES `municipio` (`CodigoMunicipio`),
  ADD CONSTRAINT `administrativo_ibfk_3` FOREIGN KEY (`Usuario_nombreUsuario`) REFERENCES `usuario` (`nombreUsuario`);

-- 
-- Filtros para la tabla `alumno`
-- 
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Usuario_nombreUsuario`) REFERENCES `usuario` (`nombreUsuario`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`CodigoResponsable`) REFERENCES `responsablealumno` (`CodigoRespon`),
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`Departamento_codigoDepto`) REFERENCES `departamento` (`CodigoDepto`),
  ADD CONSTRAINT `alumno_ibfk_4` FOREIGN KEY (`Municipio_codigoMunicipio`) REFERENCES `municipio` (`CodigoMunicipio`);

-- 
-- Filtros para la tabla `asignatura`
-- 
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`PlanEstudio_codigoPlan`) REFERENCES `planestudio` (`CodigoPlan`);

-- 
-- Filtros para la tabla `cargaacademica`
-- 
ALTER TABLE `cargaacademica`
  ADD CONSTRAINT `cargaacademica_ibfk_1` FOREIGN KEY (`Docente_codigoDocente`) REFERENCES `administrativo` (`CodigoAdministrativo`),
  ADD CONSTRAINT `cargaacademica_ibfk_2` FOREIGN KEY (`Asignatura_codigoAsignatura`) REFERENCES `asignatura` (`CodigoAsignatura`),
  ADD CONSTRAINT `cargaacademica_ibfk_3` FOREIGN KEY (`Planestudio_codigoPlan`) REFERENCES `planestudio` (`CodigoPlan`);

-- 
-- Filtros para la tabla `evaluacion`
-- 
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`Alumno_codigoAlumno`) REFERENCES `alumno` (`CodigoAlumno`),
  ADD CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`Asignatura_codigoAsignatura`) REFERENCES `asignatura` (`CodigoAsignatura`),
  ADD CONSTRAINT `evaluacion_ibfk_3` FOREIGN KEY (`Actividad_codigoActividad`) REFERENCES `actividad` (`CodigoActividad`);

-- 
-- Filtros para la tabla `grado`
-- 
ALTER TABLE `grado`
  ADD CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`Nivel_codigoNivel`) REFERENCES `nivel` (`CodigoNivel`);

-- 
-- Filtros para la tabla `historial_institucion`
-- 
ALTER TABLE `historial_institucion`
  ADD CONSTRAINT `historial_institucion_ibfk_1` FOREIGN KEY (`CodigoInstituto`) REFERENCES `institucion` (`CodigoInstituto`);

-- 
-- Filtros para la tabla `institucion`
-- 
ALTER TABLE `institucion`
  ADD CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`Departamento_codigoDepto`) REFERENCES `departamento` (`CodigoDepto`),
  ADD CONSTRAINT `institucion_ibfk_2` FOREIGN KEY (`Municipio_codigoMunicipio`) REFERENCES `municipio` (`CodigoMunicipio`);

-- 
-- Filtros para la tabla `matricula`
-- 
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`Alumno_codigoAlumno`) REFERENCES `alumno` (`CodigoAlumno`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`Seccion_codigoSeccion`) REFERENCES `seccion` (`CodigoSeccion`);

-- 
-- Filtros para la tabla `periodo`
-- 
ALTER TABLE `periodo`
  ADD CONSTRAINT `periodo_ibfk_1` FOREIGN KEY (`Nivel_codigoNivel`) REFERENCES `nivel` (`CodigoNivel`);

-- 
-- Filtros para la tabla `planestudio`
-- 
ALTER TABLE `planestudio`
  ADD CONSTRAINT `planestudio_ibfk_1` FOREIGN KEY (`Grado_CodigoGrado`) REFERENCES `grado` (`CodigoGrado`);

-- 
-- Filtros para la tabla `responsablealumno`
-- 
ALTER TABLE `responsablealumno`
  ADD CONSTRAINT `responsablealumno_ibfk_1` FOREIGN KEY (`Departamento_codigoDepto`) REFERENCES `departamento` (`CodigoDepto`),
  ADD CONSTRAINT `responsablealumno_ibfk_2` FOREIGN KEY (`Municipio_codigoMunicipio`) REFERENCES `municipio` (`CodigoMunicipio`);

-- 
-- Filtros para la tabla `seccion`
-- 
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`Grado_codigo`) REFERENCES `grado` (`CodigoGrado`),
  ADD CONSTRAINT `seccion_ibfk_2` FOREIGN KEY (`Docente_codigoDocente`) REFERENCES `administrativo` (`CodigoAdministrativo`);

-- 
-- Filtros para la tabla `trimestre1`
-- 
ALTER TABLE `trimestre1`
  ADD CONSTRAINT `trimestre1_ibfk_1` FOREIGN KEY (`Alumno_codigoAlumno`) REFERENCES `alumno` (`CodigoAlumno`),
  ADD CONSTRAINT `trimestre1_ibfk_2` FOREIGN KEY (`Asignatura_codigoAsignatura`) REFERENCES `asignatura` (`CodigoAsignatura`);

-- 
-- Filtros para la tabla `trimestre2`
-- 
ALTER TABLE `trimestre2`
  ADD CONSTRAINT `trimestre2_ibfk_1` FOREIGN KEY (`Alumno_codigoAlumno`) REFERENCES `alumno` (`CodigoAlumno`),
  ADD CONSTRAINT `trimestre2_ibfk_2` FOREIGN KEY (`Asignatura_codigoAsignatura`) REFERENCES `asignatura` (`CodigoAsignatura`);

-- 
-- Filtros para la tabla `trimestre3`
-- 
ALTER TABLE `trimestre3`
  ADD CONSTRAINT `trimestre3_ibfk_1` FOREIGN KEY (`Alumno_codigoAlumno`) REFERENCES `alumno` (`CodigoAlumno`),
  ADD CONSTRAINT `trimestre3_ibfk_2` FOREIGN KEY (`Asignatura_codigoAsignatura`) REFERENCES `asignatura` (`CodigoAsignatura`);

