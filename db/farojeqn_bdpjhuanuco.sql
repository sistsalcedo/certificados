-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-09-2020 a las 11:27:48
-- Versión del servidor: 10.3.24-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farojeqn_bdpjhuanuco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(10) NOT NULL,
  `dni` int(8) NOT NULL,
  `apenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `detalles` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `dni`, `apenom`, `correo`, `celular`, `detalles`) VALUES
(1, 42536524, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, ''),
(2, 0, 'Pablo Santos Daniel Edwin', 'Danyelpablos@gmail.com', 962909898, ''),
(3, 0, 'Acosta Peña Jessica Catherine', 'Jessicacostap2073@gmail.com', 962916474, ''),
(4, 0, 'Montaldo Zevallos Ketty', 'kettypj2008@gmail.com', 944869983, ''),
(5, 0, 'Malpartida Ramirez Lucila Juana', 'lujmara1612@gmail.com', 985411483, ''),
(6, 0, 'Tantalean Chavez Yuri', 'Dikeyuri@gmail.com', 999554644, ''),
(7, 0, 'Heredia Rivera Vanessa', 'Cielitahr@gmail.com', 994743105, ''),
(8, 0, 'Mozombite Tineo Karen', 'karenmozombitetineo@gmail.com', 966960165, ''),
(9, 0, 'Ramirez Llamoja Edith Victoria', 'edithramirezllamoja@gmail.com', 945803270, ''),
(10, 0, 'Rios Shahuano Grace Jheniffer', 'graziaribelle@gmail.com', 982114346, ''),
(11, 0, 'SAAVEDRA LEVEAU POLUX', 'poluxsaavedraleveau@gmail.com', 962803791, ''),
(12, 0, 'Villavicencio Rojas Velsy Veronica', '', 962629297, ''),
(13, 0, 'SOTO MORALES ELOY', 'gastonsoto22.22@gmail.com', 920229488, ''),
(14, 0, 'Camarena Miranda Manuel Cirilo', 'manuelcamarenamiranda@gmail.co', 962986858, ''),
(15, 0, 'Vasquez De La Cruz Rudi Vilma', 'vilmita.v3242@gmail.com', 988971826, ''),
(16, 0, 'Encarnacion Ramirez Ketty', 'Ketty19783004@gmail.com', 962524043, ''),
(17, 0, 'CARHUARICRA RUPAY JOSEPH ANTHONY', 'josephcarhuaricrarupay@', 953330612, ''),
(18, 0, 'Cisneros Panana Sayda Cecilia', 'Gela300@gmail.com', 980854557, ''),
(19, 0, 'Saenz Perez Luis Edgar', 'adriansaenzperez@gmail.com', 995659105, ''),
(20, 0, 'Mozombite Tineo Karen', 'karenmozombitetineo@gmail.com', 966960165, ''),
(21, 0, 'Aucaruri Quispe Gabriela Dina', 'Gaucaruriqts@gmail.com', 957639550, ''),
(22, 0, 'Tucto Cristobal Ana Maria', 'atuctoc@gmail.com', 988941003, ''),
(23, 0, 'Salinas Avila Javier Naval', 'Xjhaviersalinas@gmail.com', 921891796, ''),
(24, 0, 'Laguna Velasquez Juana Jenny', 'juanajenylagunavelasque', 916437342, ''),
(25, 0, 'Camarena Miranda Manuel Cirilo', 'manuelcamarenamiranda', 962986858, ''),
(26, 0, 'Trujillo Luciano Tania Medalith', 'taniatrujilloluciano@gmail.com', 970627996, ''),
(27, 0, 'Gallo Olazo Robins', 'robinsgallo1989@gmail.com', 935984386, ''),
(28, 0, 'Castañeda ccori Junior Vladimir', 'Jccori12@gmail.com', 954433383, ''),
(29, 0, 'Acosta Picon Flor de Maria', 'aflor6350@gmail.com', 962653366, ''),
(30, 0, 'Guillen Vilca Karina Rosaly', 'Kguillenmail@gmail.com', 959651506, ''),
(31, 0, 'Guillen Vilca Karina Rosaly', 'Kguillenmail@gmail.com', 959651506, ''),
(32, 0, 'Reyes Garcia Paola', 'paola190102@gmail.com', 989181311, ''),
(33, 0, 'Rodriguez Cisneros Gerson Julio', 'Gersonrodriguezcisneros', 987558590, ''),
(34, 0, 'Tucto Livia Eloisa', 'elo.181livia@gmail.com', 988375386, ''),
(35, 0, 'Fernandez Yabar Rocio Isabel', 'rosyfy1806@gmail.com', 962663538, ''),
(36, 0, 'Celadita guevara Beatriz', 'beabcg230780@gmail.com', 986775895, ''),
(37, 0, 'Blancas Zevallos Fiorella Cintya', 'Fiorelacintya@gmail.com', 978021906, ''),
(38, 0, 'Huaman Leon Enma Polet', 'enmapolethuamanleon22', 931104144, ''),
(39, 0, 'Villacorta Saldaña', 'amalidavs@gmail.com', 972054327, ''),
(40, 0, 'Buendia Casafranca Ruth Antuaneth', 'bc.ruth5@gmail.com', 962628493, ''),
(41, 0, 'Urquiaga Calderon Graciela Del Carmen', 'gracia.urquiaga@hotmail.com', 969813642, ''),
(42, 0, 'Talavera Zapana Nolam Elias', 'eltal1972@gmail.com', 959538112, ''),
(43, 0, 'Chilon  Rayco Raul Eduardo', 'raulchilonrayco@gmail.com', 972238834, ''),
(44, 0, 'huarancca laurente alejandro', 'ahuaranccalaurente17@gmail.com', 926898926, ''),
(45, 0, 'Silva Morales Helen Rocio', 'helenrociosilvamorales@', 916237793, ''),
(46, 0, 'Herrera Fernandez Yanet', 'yanefer08@gmail.com', 933775890, ''),
(47, 0, 'Roldan Correa Ingrid Magali', 'ingrid27correa@gmail.com', 912079539, ''),
(48, 0, 'Montañez de la cruz Cesar Raul', 'cmontanezd@gmail.com', 954403009, ''),
(49, 0, 'Sinchi Wilbert', 'Wilibert100@gmail.com', 984709760, ''),
(50, 0, 'Torres Aguilar Oskar', 'ostorresdj@mpfn.gob.pe', 980191887, ''),
(51, 0, 'Solano De la cruz Susy Rosy', 'susyrosysolanodelacrus@gmail.c', 933602915, ''),
(52, 0, 'Rocano Ponce Eunice Lud', 'ludrocano@gmail.com', 962601456, ''),
(53, 0, 'Rios diaz Mabel soledad', 'Mriosd56@gmail.com', 954097878, ''),
(54, 0, 'Rengifo Cardenas Llony', '', 961092867, ''),
(55, 0, 'Velazco Carnero Grace Anali', 'grace.velacar@gmail.com', 948323489, ''),
(56, 0, 'Ircañaupa Carhuapoma Ruty Magaly', 'normayruty@gmail.com', 987154129, ''),
(57, 0, 'Tuesta Hernandez Jose Segundo', 'joshtuesta090@gmail.com', 979286985, ''),
(58, 0, 'PARIONA HUAROTO WILBER DAVID', 'david11_w@hotmail.com', 961604144, ''),
(59, 0, 'Tantalean Chavez Yuri', 'Dikeyuri@gmail.com', 999554644, ''),
(60, 0, 'Cavalie orihuela Alexandra Vanessa', 'Alexandra.cavalieor@gmail.com', 973969390, ''),
(61, 0, 'Flores Rivera  Edilberto freed ', 'friverab3@gmail.com ', 990151661, ''),
(62, 0, 'CORNELIO SORIA SANDRA ELENA', 'elena.cornelio.soria@gmail.com', 962587007, ''),
(63, 0, 'Cotrina Maccha Manuel Jesus', 'Cotrinaabogados12@gmail.com', 921853021, ''),
(64, 0, 'Atencia Morales Omayra  Nayla', 'omayra.atencia@gmail.com', 935325784, ''),
(65, 0, 'Perez  Nascimento Rosa Elisa', 'Eli.12xinita.92@hotmail.com', 939303962, ''),
(66, 0, 'Fernandez Lazo Patricia Silvia', 'Paticitafernandez19@gmail.com', 962621212, ''),
(67, 0, 'Conislla Ramirez Magdalena', 'mconisllaramirez@gmail.com', 957591242, ''),
(68, 0, 'MENDOZA VALLE DEXTRE LIZETHE MARILu MAR', 'lizethmv1980@gmail.com', 993581593, ''),
(69, 0, 'Palomo Gomez Galia Elizabeth', 'galia.eliza@gmail.com', 942197767, ''),
(70, 0, 'Aguirre Suarez Wenceslao Justo', 'Waguirres66@gmail.com', 993581593, ''),
(71, 0, 'Acosta Peña Jessica Catherine', 'Jessicacostap2073@gmail.com', 962916474, ''),
(72, 0, 'Arroyo soriano Jorge', 'Jmtk.arroyo@gmail.com', 926560331, ''),
(73, 0, 'Rojas Francisco', '', 0, ''),
(74, 0, 'Mendez Ancca Tania ', 'caritofiore@hotmail.com', 959829856, ''),
(75, 0, 'SANTOS ESPINOZA SAMUEL', 'samuelsantose99@gmail.com', 988487389, ''),
(76, 0, 'Ramirez Figueroa Jim', 'jimramirezfigueroa@gmail.com', 988651856, ''),
(77, 0, 'Santos Espinoza Samuel', 'samuelsantose99@gmail.com', 987487389, ''),
(78, 0, 'Chile Araoz Jhon Andersson', 'Andru.3.8.20@gmail.com', 984776776, ''),
(79, 0, 'Pimentel Tello Maria Isabel', 'marisa_pimentel@hotmail.com', 976499625, ''),
(80, 0, 'Huachua Luna Carmen Smitehe', 'huachuacarmen@gmail.com', 948169000, ''),
(81, 0, 'Sotomayor Torres  Fabiola Milagros ', 'sotomayorfabiolamilagros', 995091075, ''),
(82, 0, 'De La Cruz Torres  Lady Esthefany ', 'csapricornio_@hotmail.com', 962804058, ''),
(83, 0, 'Bustos Balta Celia del Pilar', 'Celiapbb@gmail.com', 966777515, ''),
(84, 0, 'Ugaz Montenegro Lady Mabel', 'ladyugazm22@gmail.com', 939358279, ''),
(85, 0, 'Garcia Cabrera Violeta Maria', 'vgarciac@pj.gob.pe', 972898489, ''),
(86, 0, 'Teodoro Tello Luz Eugenia', 'luzteodorotello@gmail.com', 950222818, ''),
(87, 0, 'Romero Guia Teodorico Cesar', 'teodoricocesarromerogui', 994445392, ''),
(88, 0, 'Contreras Ferrer Kelly Caryto', 'kellycaryto11@gmail.com', 962937755, ''),
(89, 0, 'Ayasta Vallejo  Maria del Carmen ', 'carmenayasta2002@gmail.com', 941904073, ''),
(90, 0, 'Garay Molina  Ana Cecilia', 'garay.ac@pucp.edu.pe', 962703431, ''),
(91, 0, 'Salinas Linares Cesar Augusto', 'cesar.salinas.linares@gmail.co', 956791603, ''),
(92, 0, 'Coronado Henry', 'Titoc518@gmail.com', 979858986, ''),
(93, 0, 'Mazzini Ojeda Mitzy Jetme', 'Mitzyjetmemazzini@gmail.com', 962540374, ''),
(94, 0, 'Nureña Jara Milagros Irene', 'milagrosnj@gmail.com', 947940180, ''),
(95, 0, 'VENTURA CAVA JOSe LUIS FRANCISCO', 'joseluisventuracava@gmail.com', 956452054, ''),
(96, 0, 'Solorzano Saldivar Perci Silicio ', 'solsalpercy@gmail.com ', 962676342, ''),
(97, 0, 'Cercedo  Falcon  Juana Silvia ', 'juanyscf@hotmail.com ', 962685959, ''),
(98, 0, 'Gomez Bazalar Iris Edith', 'irisegb@gmail.com', 964817066, ''),
(99, 0, 'Rebaza Cribillero Jaime Roland', 'jaime.rrc.jr@gmail.com', 917795964, ''),
(100, 0, 'TORREJoN  CAPARACH JANET IRENE', 'jan_torrejon@hotmail.com', 951960689, ''),
(101, 0, 'Cabanillas Quevedo Claudia', 'c.cabanillasq77@gmail.com', 976999971, '1'),
(102, 0, 'GERONIMO DE LA CRU JAIME', 'jaime.geronimo.de.la.cruz', 962530657, ''),
(103, 0, 'Davila Jorge Walter Justino', 'wdavila1405@gmail.com', 962975459, ''),
(104, 0, 'Ircañaupa Carhuapoma  Ruty Magaly', 'normayruty@gmail.com', 987154129, ''),
(105, 0, 'Vasquez Deza Pedro Enrique', 'pevasquez@mpfn.gob.pe', 976955959, ''),
(106, 0, 'Morales Besada Giovanna Orfelinda', 'gmoralesbesada@gmail.com', 963338672, ''),
(107, 0, 'MANCO HUAMAN NORMA', 'normamancoh10@gmail.com', 983984357, ''),
(108, 0, 'Gavidia Espinoza Yudy Neri', 'ygavidiaespinoza@gmail.com', 949524654, ''),
(109, 0, 'Urbina Antón Josemaria Augusto', 'jomagua1234@gmail.com', 945159848, ''),
(110, 0, 'Loza peña Rildo', 'rildo.77@hotmail.com', 953278967, ''),
(111, 0, 'Uceda Inoñán Rosa Lila del Milagro', 'Rosaui2524@gmail.com', 932903949, ''),
(112, 0, 'Carrión Suarez Estefany', 'Stefanycarrionsuarez@gmail.com', 955726378, ''),
(113, 0, 'Carcausto chavez Pablo Eduardo', 'carcaustopablo8@gmail.com', 959972447, ''),
(114, 0, 'Mundaca Mundaca Elsa Margarita', 'elsi05.mar02@gmail.com', 971723164, ''),
(115, 0, 'OLIVA PUSE Ricardo Fabiany ', 'Fabiany. 2410@gmail.com', 964539792, ''),
(116, 0, 'Bravo Gamarra  Daysi Eliana ', 'Taeluk@gmail.com ', 945867679, ''),
(117, 0, 'Villanueva Casusol  Joana Lisseth', 'joanavillanuevac@gmail.com', 960374144, ''),
(118, 0, 'Olascoaga velarde Fanny ruth', 'fannyolascoaga@yahoo.com', 976483301, ''),
(119, 0, 'Gallardo Barrueta Angel', 'Angelitogallardo2050@gmail.com', 999348377, '1'),
(120, 0, 'Guzman Afan Victor', 'vguzmanafan@gmail.com', 952683332, ''),
(121, 0, 'Fonseca Livias Nelly', 'nellyfonseca42@gmail.com', 962602829, ''),
(122, 0, 'Larrea Serquen  Haydee María ', 'Haydeelarrea@hotmail.com', 978164623, ''),
(123, 0, 'NÚÑEZ RODOLFO', 'copazul@hotmail.com', 999733412, ''),
(124, 0, 'Pizarro tsuchiya Vladimir greco', 'Vpizats@gmail.com', 924099108, ''),
(125, 0, 'Vásquez De La Cruz Rudi Vilma', 'vilmita.v3242@gmail.com', 988971826, ''),
(126, 0, 'Caracela Borda  Javier', 'jcaracela@gmail.com ', 951926169, ''),
(127, 0, 'Alva Vásquez Anita Ivonne', 'anitaivonne1965@gmail.com', 962586006, ''),
(128, 0, 'Moron fretel Ricardo', 'ricardomoronfretel@gmai.com', 947553267, ''),
(129, 0, 'Laguna Velasquez Juana Jenny', 'juanajenylagunavelasque', 916437342, ''),
(130, 0, 'Medina Mamani  Lourdes ', 'Lmedina521521@gmail.com  ', 978824432, ''),
(131, 0, 'Quispe Ramon Rosanel susana', 'Rosusana09@gmail.com', 938175011, ''),
(132, 0, 'Villanueva Gamarra Giovana Soledad', 'villanueva_giovi@hotmail.com', 944428601, ''),
(133, 0, 'Quispe Rojas Raquel LIliana', 'kellyrqr@gmail.com', 962929222, ''),
(134, 0, 'Dávila Lastra  Karen Olivia ', 'kdlastra@gmail.com ', 962664545, ''),
(135, 0, 'Davila Vivar Milagros katerin', 'Mkdavilavivar@gmail.com', 957972400, ''),
(136, 0, 'Chura Escobar Lucero Yomira', 'churalucero422@gmail.com', 947783029, ''),
(137, 0, 'Ponce León Natalia Cristina', 'lia_xs@hotmail.com', 963928548, ''),
(138, 0, 'Diestro Y Leon  Ernesto ', 'ediestro@hotmail.com ', 962603313, ''),
(139, 0, 'Oblitas Moya Rosa Mercedes', 'xxrosaxoblitasxx@gmail.com', 962656146, ''),
(140, 0, 'Espinoza Salazar Anatolia Patrick', 'anatoliapatrik3@gmail.com', 962629682, ''),
(141, 0, 'Alvarado Fernández Alexa Hankel', 'hankelfernandez@hotmail.com', 945109566, ''),
(142, 0, 'Armas ildefonso Vanessa Alicia ', 'vanalis15@gmail.com ', 943196404, ''),
(143, 0, 'Livias Huisa Cinthya Antonieta', 'Paloma_yesua@hotmail.com', 955257529, ''),
(144, 0, 'Brenis Mendoza Matilde Angélica', 'mbrenisdj@mpfn.gob.pe', 949040370, ''),
(145, 0, 'Solano Robles John Albert', 'johnsr1789@gmail.com', 947545500, ''),
(146, 0, 'VENTURA CAVA JOSÉ LUIS FRANCISCO', 'joseluisventuracava@gmail.com', 956452054, ''),
(147, 0, 'Huayaban flores Mara', 'bmhf1907@gmail.com', 950738420, ''),
(148, 0, 'Pilco Machaca Wilmer Edelis', 'wily.pilco.12@gmail.com', 952416076, ''),
(149, 0, 'Lopez Munguia Selene Patricia', 'selene.paty22@gmail.com', 982358416, ''),
(150, 0, 'Martel Martinez', 'ofe.martmart@gmail.com', 988066669, ''),
(151, 0, 'Rojas Coral Jhon Percy', 'jrojas028@gmail.com', 951635774, ''),
(152, 0, 'Marin Sandoval  Rocío Angélica ', 'marinsandovalr@gmail.com ', 975757576, ''),
(153, 0, 'González Rubina Mirko Enrique', 'mgonzalezrdj@mpfn.gob.pe', 0, ''),
(154, 0, 'TARAZONA ESTACIO JAVIER CESAR', 'jtarazonaestacio@gmail.com', 962510407, ''),
(155, 0, 'RAMOS DUEÑAS Herbert Margarito', 'Herbertmargaritoramos75', 963570906, ''),
(156, 0, 'Gonzales Núñez  María Ysabel ', 'lebasygonzales@gmail.com', 959496181, ''),
(157, 0, 'Garcia Escolastico Rover Honorato', 'Jhadi101@hotmail.com', 962512986, ''),
(158, 0, 'VEGA LEÓN| SERNINIAN FRANCISCA', 'Sermypsico@gmail.com', 940037487, ''),
(159, 0, 'Baldeon Izaguirre Emperatriz Kasandra', 'shiro.no.law@gmail.com', 957852328, ''),
(160, 0, 'Tumbay Ambrocio  Lisdey Mayra ', 'Lisdeyta@gmail.com ', 947299383, ''),
(161, 0, 'Sanchez Gonzales Yanet', 'yanetsanchez352@gmail.com', 981840084, ''),
(162, 0, 'Lastra Claudio Elsa Teófila', 'elsalastra28@gmail.com', 941006980, ''),
(163, 0, 'roldan correa ingrid magali', 'ingrid27correa@gmail.com', 912079539, ''),
(164, 0, 'Liza Castillo  Luis Manuel ', 'mlizadj@mpfn.gob.pe ', 968289450, ''),
(165, 0, 'Montoya Salís Susan América', 'Susanmontoya22@gmail.com', 956065388, ''),
(166, 0, 'Pari Quispe Lizbeth Fiorella', 'Lizbeth-fiorella@hotmail.com', 992121278, ''),
(167, 0, 'Vargas Supa Carlos Eduardo', 'evasfrey@gmail.com', 955470642, ''),
(168, 0, 'Pari Quispe  Jessica Nayder ', 'Jessica-Nayder@hotmail.com', 985547202, ''),
(169, 0, 'Silva Morales Helen Rocio', 'lamnty18@hotmail.com', 916237793, ''),
(170, 0, 'Gómez Bazalar Iris Edith', 'irisegb@gmail.com', 964817066, ''),
(171, 0, 'Silva Morales Helen Rocio', 'helenrociosilvamorales', 916237793, ''),
(172, 0, 'Montalicos Pinto  Henrry Michael ', 'henrry.montalicos@gmail.com', 912459542, ''),
(173, 0, 'CALISAYA PINTO Karina Carmen', 'Karinitacp@gmail.com', 952692642, ''),
(174, 0, 'Mendieta Garay Luis Enrique', 'luisemendietag13@gmail.com', 930739136, ''),
(175, 0, 'Grandez canta  Freddy ', 'Fre_grandezc@hotmail.com ', 946622070, ''),
(176, 0, 'ARIAS QUISPE IVAN BLADIMIR', 'ivan.arias00@gmail.com', 928579112, ''),
(177, 0, 'RIVERA ATENCIO AMARILIS MERCEDES', 'amyriveraatencio@gmail.com', 943284702, ''),
(178, 0, 'Soria Cisneros Jose Maria', 'Kingcisneros2283@gmail.com', 988261785, ''),
(179, 0, 'Churs Escobar Lucero Yomira', 'churalucero422@gmail.com', 961092867, ''),
(180, 0, 'guzman afan victor', 'vguzmanafan@gmail.com', 952683332, ''),
(181, 0, 'Aguilar.Dextre Hernando Edgar', 'Nandiux33@homail.com', 944983575, ''),
(182, 0, 'Sanchez Villafuerte Rosa', 'rsanchesvi1361@gmail.com', 944257775, ''),
(183, 0, 'Agular Dextre Hernando', 'Nandiux33@hotmail.com', 944983575, ''),
(184, 0, 'Balta Navarro  Melissa Indhira ', 'mibn@gmail.com ', 943863266, ''),
(185, 0, 'Flores castillon Edwin', 'Edwinflocas@gmail.com', 991898038, ''),
(186, 0, 'Huayta Arias Laura Isabel', 'liha2121@gmail.com', 996788808, ''),
(187, 0, 'Pari Quispe Lizbeth Fiorella', 'Lizbeth-fiorella@hotmail.com', 992121278, ''),
(188, 0, 'VILELA FARFAN ELIZABETH MARIA', 'marielizabeth1612@gmail.com', 965795772, ''),
(189, 0, 'BUSTILLOS CUBA ROLANDO', 'rolando.bustillos.cuba@gmail.c', 975243385, ''),
(190, 0, 'Sosa Canchari Carmen Del Rocío', 'carmencita.sc@gmail.com', 954471364, ''),
(191, 0, 'Lopez Arana Andrea Mercedes', 'Lopezaranaandrea@gmail.com', 985851202, ''),
(192, 0, 'Chagua Timoteo  Epifania ', 'anthony_epi@hotmail.com', 982314355, ''),
(193, 0, 'LOPEZ  ROBERTO JAQUELINE ROSA', 'jaquelinerosalr', 942976755, ''),
(194, 0, 'Garcia ponce  Edith', 'Editgarciaponce@gmail.com', 995197687, ''),
(195, 0, 'Solano De la cruz Susy Rosy', 'susyrosysolanodelacruz@gmail.c', 933602915, ''),
(196, 0, 'Solano De la cruz Susy Rosy', 'susyrosysolanodelacruz@gmail.c', 933602915, ''),
(197, 0, 'Torres ticona  Virgilio', 'totivirgilio4@gmail.com ', 910314207, ''),
(198, 0, 'Escalante Reyes  Piero Renato ', 'Piero_renato3@hotmail.com', 997594758, ''),
(199, 0, 'Sosa Canchari Carmen Del Rocío', 'carmencita.sc@gmail.com', 954471364, ''),
(200, 0, 'Huanca Janampa  Cinthya Carolina ', 'cinthyacrln@gmail.com ', 945245131, ''),
(201, 0, 'Prado Murillo Ruth Alexandra', 'alexandra3_8@hotmail.com', 962077373, ''),
(202, 0, 'Echegaray bernaola Luzmila violeta', 'Luzmilaechegarayb@gmail.com', 944411902, ''),
(203, 0, 'Vidal Hinostroza  Mercedes ', 'Mercedesvidalhinostroza ', 934514983, ''),
(204, 0, 'Lastra Claudio Elsa Teófila', 'elsalastra28@gmail.com', 941006980, ''),
(205, 0, 'Vilcas Cauchos Juan Carlos', 'Jcvilcas@gmail.com', 965874287, ''),
(206, 0, 'Torres Aguilar  Carmen Doris ', 'carmtorres16@gmail.com ', 939182124, ''),
(207, 0, 'Silva Morales Helen Rocio', 'helenrociosilvamorales@gmail.c', 916237793, ''),
(208, 0, 'Rubio Grados Dumer Gary', 'dumer3187@gmail.com', 962752895, ''),
(209, 0, 'Malpartida Repetto  José Luis ', 'joserepetto2207@gmail.com', 996252662, ''),
(210, 0, 'Miraval Aguirre Katya Nohely', 'katyamiraval@gmail.com', 962073760, ''),
(211, 0, 'Quiñones Galindo Aydee Emerita', 'aydegalindo@hotmail.com', 996878750, ''),
(212, 0, 'Villanueva Laurencio  Soledad ', 'Sovila222@gmail.com ', 986007541, ''),
(213, 0, 'Carrillo Rodriguez  Jorge Luis ', 'jorgeluiscarrillorodriguez6@gm', 996904766, ''),
(214, 0, 'Flores castillon Edwin', 'Edwinflocas@hotmail.com', 991898038, ''),
(215, 0, 'Silva Morales Helen Rocio', 'lamnty18@hotmail.com', 916237793, ''),
(216, 0, 'Romero Mory  Rosmery ', 'Rrmam77@gmail.com ', 962820363, ''),
(217, 0, 'SOTO SOLIS EDITH ELVIRA', 'edithelviraso@gmail.com', 975506335, ''),
(218, 0, 'Capcha Salazar Patricia Elena', 'Pecs.2085@gmail.com', 977220266, ''),
(219, 0, 'TORRES  BOZA MIRIAM  LILI', 'ssssss', 962916681, ''),
(220, 0, 'Sáenz Pérez Luis Edgar', 'adriansaenzperez@gmail.com', 995659105, ''),
(221, 0, 'Sanchez Villafuerte Rosa', 'rsanchezvi1361@gmail.com', 944257775, ''),
(222, 0, 'Herrera Fernández Yanet', 'yanefer08@gmail.com ', 933775890, ''),
(223, 0, 'Herrera Fernández Yanet', 'yanefer08@gmail.com', 933775890, ''),
(224, 0, 'Atencio Deudor Liz Roxanna', 'Lizatenciod@gmail.com', 962514458, ''),
(225, 0, 'Estrada Salvador  Catalina Tania ', 'Cestradasalvador09@gmail.com', 940164692, ''),
(226, 0, 'Ramíre Armas ildefonso Vanessa Alicia', 'vanalis15@gmail.com', 943196404, ''),
(227, 0, 'Mariano Lobatón Cancia', 'cmarianol123@gmail.com', 970001247, ''),
(228, 0, 'Vidaurre Chos  Helen Zully', 'helen.zu95@gmail.com ', 988666572, ''),
(229, 0, 'Catari Mamani Guido Vladimir', 'gvcatari@gmail.com', 951010176, ''),
(230, 0, 'ALBINO GONZALES JESSY ELIZABETH', 'Jessyta1819@gmail.com', 950907454, ''),
(231, 0, 'Gutierrez Salvador  Miguel ', 'Mg8615691@gmail.com ', 945573934, ''),
(232, 0, 'Salazar cruz Lizbeth', 'Lizsalazarcruz@gmail.com', 959160690, ''),
(233, 0, 'Villegas Alva Diana Liliana', 'dianneazul@gmail.com', 942546372, ''),
(234, 0, 'Meza Reyes  Eva', 'eva.290288.emr@gmail.com  ', 945214865, ''),
(235, 0, 'Aguilar Terrones  Harry William ', 'harryaguilar@gmail.com ', 949912812, ''),
(236, 0, 'Salazar Mendoza Silvia', 'silvanitasalazarm@gmail.com', 994436134, ''),
(237, 0, 'Parra Céspedes Dora cecilia', 'dceciliapc@gmail.com', 962642244, ''),
(238, 0, 'Meza Benites  Giovanna Esther ', 'Giovimb@hotmail.com ', 948568811, ''),
(239, 0, 'Manzano sandoval Wilfredo', 'Wilfre2317@gmail.com', 999588877, ''),
(240, 0, 'Trejo Lugo Nivar', 'ntrejolugo@gmail.com', 975758080, ''),
(241, 0, 'Ponce Rojas  Maybee ', 'meyliss12@gmail.com ', 979772972, ''),
(242, 0, 'Contreras Escobar Lisseth Belinda Lorena', 'blorenacon@hotmail.com', 968399722, ''),
(243, 0, 'Chamorro Yalico Ronny Humberto', 'ronnyhcy96@gmail.com', 935322607, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciacursos`
--

CREATE TABLE `asistenciacursos` (
  `id` int(10) NOT NULL,
  `curso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(10) NOT NULL,
  `apenom` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `fechareg` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `horaini` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `horafin` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `certificados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistenciacursos`
--

INSERT INTO `asistenciacursos` (`id`, `curso`, `dni`, `apenom`, `correo`, `celular`, `fechareg`, `horaini`, `horafin`, `certificados`, `detalles`) VALUES
(1, 'xxx', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '13/08/2020', '10:00', '12:00', 'si', ''),
(2, 'ingles', 654987211, 'Fresia', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(3, 'ingles', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(4, 'mate', 654987211, 'Fresia', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(5, 'ingeles', 11111111, 'james', 'james', 987654321, '25-08-2020', '', '', '', ''),
(6, 'informatica', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '26-08-2020', '', '', '', ''),
(7, 'ingles', 22222222, 'hola', 'hola@gmail.com', 654321, '26-08-2020', '', '', '', ''),
(8, 'ingles', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '26-08-2020', '', '', '', ''),
(9, 'NCPP', 999999999, 'sdfsdf', 'sdfsdf', 2432525, '26-08-2020', '', '', '', ''),
(10, 'PHP', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '31-08-2020', '', '', '', ''),
(11, 'MySql', 67676767, 'octubre', 'octubre', 987654321, '31-08-2020', '', '', '', ''),
(12, 'PHP', 77777777, 'ddddddd', 'rrrrrr', 2147483647, '01-09-2020', '', '', '', ''),
(13, 'MySql', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '02-09-2020', '', '', '', ''),
(14, 'PHP', 88888888, 'sdfsdf', 'sfsdfd@dfsdfsdf', 2147483647, '02-09-2020', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `idcertificado` int(6) NOT NULL,
  `idcursos` varchar(20) NOT NULL,
  `idalumno` varchar(20) NOT NULL,
  `horas` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `tipocertificado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `id` int(4) NOT NULL,
  `dni` int(8) NOT NULL,
  `apenom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `resolucion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechasolicitud` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fechaatencion` varchar(21) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`id`, `dni`, `apenom`, `sede`, `dependencia`, `cargo`, `celular`, `resolucion`, `fechasolicitud`, `correo`, `clave`, `fechaatencion`) VALUES
(1, 43801670, 'Palpa Collazos Edgar', 'Huanuco', 'Informatica', 'Asistente en Informa', 962662500, '7-2020', '26-06-2020', 'epalpac@pj.gob.pe', '654321', '26-06-2020'),
(2, 98765432, 'James Palpa', 'Tingo M', 'Amin', 'Gerente', 987654321, '77-2020', '12-07-2020', '', '', ''),
(3, 43680112, 'Tapia', 'Huanuco', 'informatica', 'informatica', 987654321, '2020', '12-07-2020', '', '', ''),
(4, 14785236, 'aaaa', 'bbbbb', 'lkjlk', 'mmmm', 147852369, '10', '15-07-2020', '', '', ''),
(5, 0, '', '', '', '', 0, '', '', '', '', ''),
(6, 0, '', '', '', '', 0, '', '', '', '', ''),
(7, 0, '', '', '', '', 0, '', '', '', '', ''),
(8, 0, '\" pc \"', '\" wwww \"', '\" rrr \"', '\" dd \"', 0, '\" 101 \"', '\" 15-07-2020', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correosgenericos`
--

CREATE TABLE `correosgenericos` (
  `id` int(4) NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `anexo` int(9) NOT NULL,
  `detalles` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `correosgenericos`
--

INSERT INTO `correosgenericos` (`id`, `sede`, `dependencia`, `correo`, `anexo`, `detalles`, `imagen`) VALUES
(1, 'Huanuco', 'Informatica', 'epalpac@pj.gob.pe', 14019, '', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(2, 'Tingo M', '1fis prov de hucnuco', 'james@gmail.com', 32154, 'bbbbb', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(3, 'Huanuco', 'odecma', 'jhadjadnb1@pj.gob,pe', 6546, 'Registra su escrito de quejas para denunciar el ma', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(4, 'Huanuco', 'odecma', 'jhadjadnb1@pj.gob,pe', 6546, 'Registra su escrito de quejas', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(5, 'Tingo Maria', 'JIP', 'dsdfsdfsd@pj.gob.pe', 98765, 'puede realizar consultas de su proceso', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(6, 'Tingo Maria', 'JIP', 'dsdfsdfsd@pj.gob.pe', 98765, 'puede realizar consultas de su proceso', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(7, 'Huamalies', 'Informatica', 'informaticallata@pj.gob.pe', 654312, 'consulte administartivo', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED'),
(8, 'Huamalies', 'Informatica', 'informaticallata@pj.gob.pe', 654312, 'consulte administartivo', 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/117289939_3037196426497860_2028776714049549127_n.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeEqnkPlQfQYUqteA7tlMEuwxnaJ6KoemOrGdonoqh6Y6mJ9HtW8uLzS2c68hXDFD8Pe6AvBIXDWMfdHHUztNv4D&_nc_ohc=Jbfw-4t1zLAAX976mTR&_nc_ht=scontent.flim1-2.fna&oh=edefcbbf2c4d8c7a97f7ee3554a20ac8&oe=5F53ECED');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(4) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `ponente` int(11) NOT NULL,
  `fecha_curso` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `ponente`, `fecha_curso`) VALUES
(1, 'MySql', 0, '2020-09-03 06:28:31'),
(2, 'PHP', 0, '2020-09-03 06:28:31'),
(4, 'Criterios para dictar el internamiento en la justicia penal.', 1, '2020-05-06 06:29:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio`
--

CREATE TABLE `directorio` (
  `id` int(4) NOT NULL,
  `apenom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anexo` int(9) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `directorio`
--

INSERT INTO `directorio` (`id`, `apenom`, `sede`, `dependencia`, `cargo`, `celular`, `correo`, `anexo`, `imagen`) VALUES
(1, 'Palpa Collazos Edgar', 'Huanuco', 'Informatica', 'Asistente Informatica', 962662500, 'epalpac@pj.gob.pe', 18019, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/29683870_2431012447116264_5801917623461670950_n.jpg?_nc_cat=106&_nc_sid=85a577&_nc_eui2=AeG1iWXN9oy4qxbq-HapIr_qrYFRAkFkgJ6tgVECQWSAnkh8eNNgBeP4TkwcEDb2mAFJY2k_24lkttL5oOP-QGKA&_nc_oc=AQmxG-958FPylSVYYcTkE828qyg1bPDIWcXb7vPFKezw_Mog4pef1pUMxo5OEtLZJwVHZfmbKokd-Yg4GjGITHCe&_nc_ht=scontent.flim1-1.fna&oh=207ed4e533c763f9ea88279eb8ee6cc0&oe=5F30C2EB'),
(2, 'Daniel Pablo Santos', 'Huanuco', 'Informatica', 'Coordinador', 987654321, 'daniel@gmail.com', 654321, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/109356379_3017582385125931_3689782912435150249_n.jpg?_nc_cat=110&_nc_sid=8024bb&_nc_eui2=AeFJGjDNV--x3UJECpTr1LYjR7ORqhft3gNHs5GqF-3eA-7xgvWCN7W_bQNqbJH4xt9GaaUgI9l7AtkKG7mv-mDx&_nc_oc=AQksDhQHXrlSRYtZ_KoorZrP2IV6EKUDVl3pacL0HH-cjjVy_Iypf_zPX9wBH4SpjeHoQG55cmPZVSZ3lIDYaUwm&_nc_ht=scontent.flim1-2.fna&oh=364d53338b5548da364582829117fcba&oe=5F32E942'),
(3, 'Jorge Tapia', 'Huanuco', 'Informatica', 'Asistente en Informatica', 987654321, 'tapia@gmail.com', 321654, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/108331648_3017582548459248_1700346026858598400_n.jpg?_nc_cat=111&_nc_sid=8024bb&_nc_eui2=AeGZHemrgp7tXfqyuoVm-m3NWxLlf4bEdHdbEuV_hsR0d_k-31R74TcYFH_RS7m2Ocz7O3AfkoXeBAJ2sVFi2bf9&_nc_oc=AQmqg052q4Pfo2UUjZn1SdEA415pXD825MsNkQzW2hEYMVIuGIs3eb9TlDaBgMWj9FN-yo9TRXvIOHScEup9qeHI&_nc_ht=scontent.flim1-2.fna&oh=a0b387d3c1d25f0a0caf9f968b7cea42&oe=5F321D15'),
(4, 'Keni Clemente', 'Huanuco', 'Informatica', 'Asistente en Informatica', 987654321, 'keny@gmail.com', 321654, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/108178956_3017582451792591_7079625068095962300_n.jpg?_nc_cat=104&_nc_sid=8024bb&_nc_eui2=AeEYRH24Ele-AmyT2vwX5uYMdkkkhVPrZwh2SSSFU-tnCLbZdgyEJjN_MYd-ydlGc3wshhVZtlXMmYm4biHZR2AL&_nc_oc=AQmr0EYrpP24SLnQReaaEWXvm6R8BxtzT8uRPXAf7Bd78nxiawJhR3Nndkt56wWRft1_p_bSsACBQHJjdu3nCHXV&_nc_ht=scontent.flim1-1.fna&oh=e5564e34b77617a765ecb3550221aa8f&oe=5F30CB68'),
(5, 'Joyce', 'Huanuco', 'Informatica', 'Asistente en Informatica', 987654321, 'Joyce@gmail.com', 321654, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/108213492_3017582391792597_4107598188137535459_n.jpg?_nc_cat=102&_nc_sid=8024bb&_nc_eui2=AeFIYexDirQqkf_WvrXEv8Fnp5VnU4ufIW2nlWdTi58hbepmJzALuOsiu4ZPP3sqFODDmFvqNl4G-QtTFs-d5T27&_nc_oc=AQk6TgukKIR8O5mQBISUghkDxjFUayd4UuCJhqXPjkk7W_OPVg8IvB5xtyq2lrAkzeLAfEUD5hYSDGxf2i16loH2&_nc_ht=scontent.flim1-2.fna&oh=dfa0e89afb5c7b7e6d4949c9c21c2eed&oe=5F3073A7'),
(6, 'Dina', 'Huanuco', 'Informatica', 'Asistente en Informatica', 987654321, 'dina@gmail.com', 321654, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/107930350_3017582408459262_413217049588984267_n.jpg?_nc_cat=111&_nc_sid=8024bb&_nc_eui2=AeEusuTtVvt8OqAGKXeNK2AqYKScsbrr7tdgpJyxuuvu1_YFykhthwc24_4ZPSEZ6cQL_msl3xZ-yK6XUay8N0bb&_nc_oc=AQkvlZmXxdDm3Mtf6qtLwpghuYbfcQK30NnkldX3vA-6pU2Y2UrOA6VFeD9lWOxCokLnq9PKExYVOOd8BSCxcsbd&_nc_ht=scontent.flim1-2.fna&oh=441fd8dc324e6000c4a8e03f563f1b65&oe=5F32562A'),
(7, 'Oyarce', 'Huanuco', 'Informatica', 'Asistente en Informatica', 987654321, 'oyarce@gmail.com', 321654, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/109316739_3017582471792589_8102301940436293957_n.jpg?_nc_cat=100&_nc_sid=8024bb&_nc_eui2=AeFmxa0-w5Iapo4b8gOdk_Jedcd6f1rlYM11x3p_WuVgzY2SBRUKiomynBPGHxB_10X5PSrVO2X9QkCIJCIX5mUT&_nc_oc=AQlxfrcLMlhoL19WszdMB2fRiUci7oOU_WoCbd3mZMqwbvrqM2om4THH06eJpGGqAWbjHhXhrxcAkkMcEcpUufFW&_nc_ht=scontent.flim1-1.fna&oh=6380de0576d3bf9b775df202d77d7936&oe=5F3347E0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorioexterno`
--

CREATE TABLE `directorioexterno` (
  `id` int(6) NOT NULL,
  `apenom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `institucion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `directorioexterno`
--

INSERT INTO `directorioexterno` (`id`, `apenom`, `provincia`, `institucion`, `dependencia`, `cargo`, `celular`, `correo`, `imagen`) VALUES
(1, 'Palpa', 'Huanuco', 'Fiscalia', 'Informatica', 'Gerente', '987654321', 'epalpac@pj.gob.pe', 'fsfsdff'),
(2, 'Zenon', 'Huanuco', 'Sunat', 'Gerencia', 'Gerente', '897654321', 'zenon@gmail.com', 'werwer'),
(3, '\" aaa \"', '\" tttt \"', '\" eeee \"', '\" ccccc \"', '\" bbbb \"', '\" 9876543', '\" hhhh', ''),
(4, 'James', 'TM', 'fiscal', 'hhuanuco', 'Fiscal', '987654321', 'sjdh', ''),
(5, 'prueba', 'jhg', 'kjh', 'kjh', 'iu', '654321', 'kjh', ''),
(6, 'prueba2', 'Tingo', 'Fiscalia', '2da fiscalia', 'Fiscal', '654321987', 'fiscal1@pj.gob.pe', ''),
(8, 'pruebaaa', 'ahsd', 'kjhkm', 'oiuoi', 'nbmnm', '987987', 'jhgjh', ''),
(9, 'prueba10', 'huanuco', 'fiscalia', 'kjhkj', 'oooooo', '987654', 'jhgjh@gamial', ''),
(10, 'Fiscal1', 'Tingo', 'Fiscalia', '1era ficalia', 'Fiscal adjunto', '987654321', 'fiscal@gmail.com', ''),
(11, 'James', 'Lima', 'Fiscalia', 'gerente', 'gerente', '987654321', 'james@gmail.com', ''),
(12, 'dfgdfg', 'ertert', 'fdgdfg', 'dfgdfg', 'dfgdfg', '987654321', 'dgdfdfgdf', ''),
(13, '', '', '', '', '', '', '', ''),
(14, 'web', 'web', 'web', 'web', 'kjlkj', '654321987', 'jhjh', ''),
(15, 'jdjjdjf', 'jjdjdjdj', 'nxjkfkf', 'ndnkfjf', 'jdjjfjf', '975474678', 'bznnx', ''),
(16, 'idkdjd', 'jdjdjjd', 'ndnjff', 'jdjjff', 'jdjjfjf', '78288474', 'jsbbdbdd', ''),
(17, 'dina', 'huamalies', 'fiscalia', 'infaor', 'infra', '978654321', 'dina@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarioinformatica`
--

CREATE TABLE `inventarioinformatica` (
  `id` int(10) NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `bien` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `serie` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cpatrimonial` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechareg` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inventarioinformatica`
--

INSERT INTO `inventarioinformatica` (`id`, `sede`, `dependencia`, `usuario`, `cargo`, `bien`, `marca`, `modelo`, `serie`, `cpatrimonial`, `estado`, `fechareg`, `detalles`) VALUES
(1, 'Huanuco', 'Informatica', 'JamesPC', 'Gerente', 'laptop', 'hp', 'x5000', '2KJKJ4H', 'M654321', 'Bueno', '13/08/2020', ''),
(2, 'Huanuco', 'Informatica', 'Palpa Collazos Edgar', 'Asistente en Informa', 'laptop', 'Lenovo', 'SP564', '897SDF2132', 'PC123456', 'Bueno', '13/08/2020', ''),
(4, 'Llata', 'kjhk', 'dina', 'kjhkj', 'pc', 'ho', 'kjh', '654kj', '987654', 'regular', '12/08/2020', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idinscrito` int(6) NOT NULL,
  `idcursos` int(10) NOT NULL,
  `idalumno` int(10) NOT NULL,
  `fechainscripcion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `detalles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

CREATE TABLE `players` (
  `id` int(4) NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `juzgado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `anexo` int(9) NOT NULL,
  `telefono` int(9) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `players`
--

INSERT INTO `players` (`id`, `sede`, `direccion`, `juzgado`, `anexo`, `telefono`, `imagen`) VALUES
(1, 'hh', 'rwer', 'sdfsf', 32154, 987654321, 'https://www.facebook.com/photo.php?fbid=3000486433502193&set=a.1410065509210968&type=3&eid=ARBc3sV-fcHuLFJyQV0cAmDp5aFtpzyLtPTSR3jI32dUQsywOBjWkPA2-lbbcbgGgx62ZwTHpx4OFipb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente`
--

CREATE TABLE `ponente` (
  `idDocente` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `firma` text NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `dependencia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ponente`
--

INSERT INTO `ponente` (`idDocente`, `nombre`, `firma`, `cargo`, `dependencia`) VALUES
(1, 'Hector Lama More', 'firmaHector.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redhuanuco`
--

CREATE TABLE `redhuanuco` (
  `id` int(5) NOT NULL,
  `numip` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `apenom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `responsable` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `redhuanuco`
--

INSERT INTO `redhuanuco` (`id`, `numip`, `apenom`, `sede`, `dependencia`, `fecha`, `responsable`, `detalles`) VALUES
(1, '172.17.88.26', 'Palpa Collazos Edgar', 'Huanuco', 'Informatica', '09/05/2020', 'palpa', 'xxxxxx'),
(2, '172.17.88.20', 'Tapia', 'Huanuco', 'Informatica', '12/05/2020', 'tapia', 'xxx'),
(3, '172.17.88.29', 'Palpa Collazos Edgar', 'fff', 'jkhjkjh', '15/25', 'palpa', ''),
(4, '10.65.213.16', 'iuyiu', 'kjhkjhk', 'lkjlkjlk', '65', 'kjhkj', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(4) NOT NULL,
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `juzgado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `anexo` int(9) NOT NULL,
  `telefono` int(10) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `sede`, `direccion`, `juzgado`, `anexo`, `telefono`, `imagen`) VALUES
(1, 'Huanuco', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/109789395_3020639521486884_20608410740181377_n.jpg?_nc_cat=108&_nc_sid=8024bb&_nc_ohc=pvfz5SGdM18AX-j3-LM&_nc_ht=scontent.flim1-2.fna&oh=3e6c41011835d022165487eefcbdef67&oe=5F72CFF2'),
(2, 'CISAJ', 'Jr Tingo sn', 'paz letrado\r\njuzgado mixto\r\nNCPP', 32154, 987654321, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/s960x960/109505397_3020645351486301_6989718916064867655_o.jpg?_nc_cat=106&_nc_sid=8024bb&_nc_eui2=AeEF9qRtSi2ojW5NoO9m0b5nlVy6jMHEXl-VXLqMwcReX5RDaacAgPtFBq_A74EOc-_1m0AvHUTZBdAYlBw0SJPm&_nc_ohc=z-kJVjfkZA4AX-sL0DA&_nc_ht=scontent.flim1-1.fna&_nc_tp=7&oh=4831a89ed9c0316f9f87e73a0c288b17&oe=5F35EF79'),
(3, 'Amarilis', 'Jr sin Numero', 'Jugado mixto - juzgado paz', 2354, 5656756, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/109526775_3020645091486327_5147775526302947241_n.jpg?_nc_cat=104&_nc_sid=8024bb&_nc_eui2=AeFHwkVzLvkizvZOSN9m3bmDbBoT6LdW1hlsGhPot1bWGYlYklyHneRm5kHvV14KazQumAIu-Ca-B_Gcguoq6bML&_nc_ohc=2OtguXDyt-wAX9qLx_1&_nc_ht=scontent.flim1-1.fna&oh=31180ff36a59a0a0c7671772637feb5e&oe=5F37E2F0'),
(4, 'Santa Cruz', 'Jr plaza', 'Juzgado mixto - Juzgado NCPP - Juzgado de paz letrado', 55555, 21365465, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/p720x720/109686680_3020645494819620_8139331965904197582_o.jpg?_nc_cat=108&_nc_sid=8024bb&_nc_eui2=AeHI53YIgOqAzgRvWaVxdjxlpAfo_NbykW-kB-j81vKRb07dt53DMkoWK61YN3rz9vrZbDqYT8C1dHcaupgAuC2Q&_nc_ohc=I55YPJxAQkgAX_qdHNE&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=23983f4e492ee1715bb443c154da0a14&oe=5F355FA3'),
(5, 'Ambo', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-0/p640x640/107829893_3020645258152977_4414989698587628071_o.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_eui2=AeGdxy86MkoDprJsa0NUx78QOE80nNEK4wA4TzSc0QrjAK4SYfGU1NVc-YNhXc4DU2Eg4tXByJ44pwUzwtGCg-3Y&_nc_ohc=VGQLbRlGUaIAX_EYVKQ&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=8f152f8ca9a10fcb456e07af63951353&oe=5F34B27C'),
(6, 'H valdizan', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/110200222_3020645084819661_6461572867614043872_n.jpg?_nc_cat=106&_nc_sid=8024bb&_nc_eui2=AeGj5rAkILgsy3Pstj3sVr-ytmYyHxoMo3q2ZjIfGgyjehIklm2jpcikBYwio8q1coJesArGeRZFIWDfqtpoPSML&_nc_ohc=yHgJ8qH_7xMAX-eXQo5&_nc_ht=scontent.flim1-1.fna&oh=b4b471c6c3cd179119c3a6909c42400a&oe=5F37836C'),
(7, 'Huamalies', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/107700433_3020645388152964_92646707795183890_n.jpg?_nc_cat=111&_nc_sid=8024bb&_nc_eui2=AeHa_telHSFb--PnV-iXW0Lnx3Da97MR5W_HcNr3sxHlb_bjWcTUbkD1vYRkQXkx8M562mxupObYXVk3e77JYyKt&_nc_ohc=qvN_qePd9cEAX-WmpYU&_nc_ht=scontent.flim1-2.fna&oh=bd8c51b3128fd605c1dc550954b1cf17&oe=5F3534C0'),
(8, 'Aucayacu', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/s960x960/107823679_3020645204819649_8822937519794667162_o.jpg?_nc_cat=105&_nc_sid=8024bb&_nc_eui2=AeEAHZ1A3WoLP81kA8uUiFvSxu4X2M-04enG7hfYz7Th6ShqIYmybuhw4g3-6MjreyO5EhUwXylR2n6JrK3P52g8&_nc_ohc=AWb2SAM6tdoAX-LnqwJ&_nc_ht=scontent.flim1-1.fna&_nc_tp=7&oh=6d2b9a29d4fc9597ea78a94e6a9289e3&oe=5F36CC59'),
(9, 'Familia', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/s960x960/109821700_3020645291486307_6294764897648681080_o.jpg?_nc_cat=105&_nc_sid=8024bb&_nc_eui2=AeHn4VbUs2TVdPxc3A1fdSobxvaERSoeUOzG9oRFKh5Q7Bfyo6xA9gQjXA7maJox0SzqvbEMM80Gttfyc6k7Jry0&_nc_ohc=0hMkv-TWkXEAX9aejuO&_nc_ht=scontent.flim1-1.fna&_nc_tp=7&oh=2e6e34da326448d8c287459bdde9bbbe&oe=5F348EE7'),
(10, 'Yarowilca', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/p720x720/113769262_3020645534819616_2706432775132486625_o.jpg?_nc_cat=108&_nc_sid=8024bb&_nc_eui2=AeHgoHz1OuoUDjd2gRzkjDV4KWsHpJYR-akpaweklhH5qenqFBNVVdON3AJ8JSRbjb5Gi-HYTYJV17MUizsv1VT-&_nc_ohc=hD_EhmpI96gAX_XfPza&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=5984671c4d149935628e5cf772b0b5e8&oe=5F3744D8'),
(11, 'Lauricocha', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-0/p180x540/107648690_3020645358152967_6540938288816910693_o.jpg?_nc_cat=108&_nc_sid=8024bb&_nc_eui2=AeE8OQtoLs4ZX6cdBHDcUfLzjDyUVIsbTwWMPJRUixtPBdzLzA2JwLNtN8XOXTqKlt6EcDmVdHd_XOAttdkbL0Zm&_nc_ohc=7Lt3677ns6UAX9ehYwL&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=bcee8d7aae3792a0d7d1eb98b5d51930&oe=5F34E17F'),
(12, 'Panao', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/p720x720/110180126_3020645468152956_4936105897219776954_o.jpg?_nc_cat=103&_nc_sid=8024bb&_nc_eui2=AeHi48zLqLs5pKeBSdS9hZ2ZP2pE-h5PGmA_akT6Hk8aYNSn5Gmm5EQZwNqWVMdF6z9d_ldPPCW9--CZr773RTXs&_nc_ohc=roFkCQjLTdUAX_UYfp_&_nc_ht=scontent.flim1-1.fna&_nc_tp=6&oh=355efa159453d21902cb6c0e055a5e06&oe=5F34CB10'),
(13, 'Huacrachuco', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-0/p640x640/110145547_3020645428152960_6032806630925393300_o.jpg?_nc_cat=103&_nc_sid=8024bb&_nc_eui2=AeEiKt2xWXmfnYK1qI-BFC3LdQSOtKGQr351BI60oZCvfrwQucJ71aO1oZaQijCNfboS6syLql4ykA9gpHTjiJKC&_nc_ohc=EnNIYi07MsYAX__QLIQ&_nc_ht=scontent.flim1-1.fna&_nc_tp=6&oh=0572c2220a109dee96cdc874058d7005&oe=5F35611A'),
(14, 'Margos', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/p720x720/109980176_3020645411486295_5616485546007705086_o.jpg?_nc_cat=104&_nc_sid=8024bb&_nc_eui2=AeFCNWkQAlsYj-1z8SBVR0Q7GiKwq4A7UC4aIrCrgDtQLpNc8DyuSiRqVCRUHF940oTCT0V-sMTSkqSY1rDKP_ak&_nc_ohc=s7WwdLODSF4AX8Fj8At&_nc_ht=scontent.flim1-1.fna&_nc_tp=6&oh=386a61a4accc6c2b7a1d9b2f185d5cc3&oe=5F35C4E4'),
(15, 'Potracancha', 'Jr. 2 de Mayo 1191', 'Audiencias Reos', 14019, 962662500, 'https://scontent.flim1-1.fna.fbcdn.net/v/t1.0-9/110211951_3020645451486291_2942265676465264490_n.jpg?_nc_cat=103&_nc_sid=8024bb&_nc_eui2=AeFMOOcyxDNIER_TlA2VKAB9CyKcx3MjqPMLIpzHcyOo8-bah1iPwEHVu2DG-ta-opZp46zw2Au3yBfAYXkfMnwJ&_nc_ohc=F4HTeD6Oq40AX_9am43&_nc_ht=scontent.flim1-1.fna&oh=807a7768a9296544aaaba804a7380527&oe=5F37D6AE'),
(16, 'Chinchao', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/p720x720/107675222_3020645128152990_2896005129403511252_o.jpg?_nc_cat=102&_nc_sid=8024bb&_nc_eui2=AeGiY_2ihCYHsUAFu8_GUBO2f87Ado7L6Z5_zsB2jsvpnnSvtjNrKr0YBQoZ2J7Q6ruRaX5LrvD6FygpLysqndyi&_nc_ohc=uc9RAuqY2vYAX81rmWc&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=daa4acf6cdeb40671a1928955cdcc1f8&oe=5F36C110'),
(17, 'Pillcomarca', 'Jr. 2 de Mayo 1191', 'Juzgado NCPP\r\nJuzgado Sala Civil\r\nJuzgado Sala Mixta', 14019, 962662500, 'https://scontent.flim1-2.fna.fbcdn.net/v/t1.0-9/p720x720/110347987_3020645514819618_5196394195206194208_o.jpg?_nc_cat=108&_nc_sid=8024bb&_nc_eui2=AeHsEv1FjwVzxWK8ilLs5qikfxeyMRyDtIh_F7IxHIO0iMfwu2v_Thm5lAgjvhys5JlUB8O94qw419D0qMTiuCOs&_nc_ohc=KtQCG9AXOaUAX88pDrE&_nc_ht=scontent.flim1-2.fna&_nc_tp=6&oh=883bbf42726e88b32af759857817cdc5&oe=5F35D3EB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombreusu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `estado` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombreusu`, `correo`, `celular`, `estado`) VALUES
(1, 'JamesPC', '654321', 'james', 'james@gmail.com', 987654321, 1),
(2, 'epalpac', '123456', 'palpa', 'epalpac@pj.gob.pe', 962662500, 1),
(3, 'admin', 'admin', 'administrador', 'kjaskasjd', 65321, 1),
(4, 'usuario', 'usuario', 'RegistrarDE', 'james@gmail.com', 987654321, 1),
(5, 'externo', 'externo', 'RegDIRECTORIOEX', 'xxx@mp.gob.pe', 54321987, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistenciacursos`
--
ALTER TABLE `asistenciacursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`idcertificado`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correosgenericos`
--
ALTER TABLE `correosgenericos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directorio`
--
ALTER TABLE `directorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directorioexterno`
--
ALTER TABLE `directorioexterno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventarioinformatica`
--
ALTER TABLE `inventarioinformatica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idinscrito`);

--
-- Indices de la tabla `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ponente`
--
ALTER TABLE `ponente`
  ADD PRIMARY KEY (`idDocente`);

--
-- Indices de la tabla `redhuanuco`
--
ALTER TABLE `redhuanuco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT de la tabla `asistenciacursos`
--
ALTER TABLE `asistenciacursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `idcertificado` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `correosgenericos`
--
ALTER TABLE `correosgenericos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `directorio`
--
ALTER TABLE `directorio`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `directorioexterno`
--
ALTER TABLE `directorioexterno`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `inventarioinformatica`
--
ALTER TABLE `inventarioinformatica`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idinscrito` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `players`
--
ALTER TABLE `players`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ponente`
--
ALTER TABLE `ponente`
  MODIFY `idDocente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
