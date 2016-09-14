-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Set 14, 2016 alle 15:29
-- Versione del server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amministrazione`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(255) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_accesso` int(255) NOT NULL DEFAULT '0',
  `admin_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_password`, `admin_accesso`, `admin_data_creazione`) VALUES
(1, 'admin', 'laboratorio2016', 1, '2016-08-22 13:17:31'),
(7, 'admin3', 'laboratorio3', 3, '2016-08-31 08:09:58'),
(8, 'admin4', 'lab4', 2, '2016-09-06 09:52:29');

-- --------------------------------------------------------

--
-- Struttura della tabella `articolo`
--

CREATE TABLE IF NOT EXISTS `articolo` (
`articolo_id` int(255) NOT NULL,
  `articolo_pagina_id` int(255) NOT NULL,
  `articolo_titolo` text COLLATE latin1_general_ci NOT NULL,
  `articolo_sottotitolo` text COLLATE latin1_general_ci NOT NULL,
  `articolo_testo` text COLLATE latin1_general_ci NOT NULL,
  `articolo_url` text COLLATE latin1_general_ci NOT NULL,
  `articolo_img_id` text COLLATE latin1_general_ci NOT NULL,
  `articolo_gallery_id` int(255) NOT NULL,
  `articolo_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articolo_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `articolo_lingua` text COLLATE latin1_general_ci NOT NULL,
  `articolo_ordinamento` int(255) NOT NULL,
  `articolo_categoria_id` int(255) NOT NULL,
  `articolo_visibile` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`articolo_id`, `articolo_pagina_id`, `articolo_titolo`, `articolo_sottotitolo`, `articolo_testo`, `articolo_url`, `articolo_img_id`, `articolo_gallery_id`, `articolo_data_creazione`, `articolo_data_modifica`, `articolo_lingua`, `articolo_ordinamento`, `articolo_categoria_id`, `articolo_visibile`) VALUES
(1, 2, '<p>Pianificare il sogno</p>', '', '<p>Pianificare il proprio matrimonio &egrave; un po'' come prendersi del tempo per se, chiudere gli occhi, respirare l''aria leggera che ci circonda e immaginare le cose pi&ugrave; belle.<br /><br />In Blanc Desir, questo &egrave; uno dei momenti che amiamo di pi&ugrave;.<br /><br /> Perch&egrave;?<br /><br />Perch&egrave; incontrare la coppia, coglierne gli sguardi, sentirne le vibrazioni che passano attraverso le voci, raccogliere i fremiti delle mani che si stringono emozionate, ascoltare i desideri che finalmente possono realizzarsi &egrave; uno degli aspetti pi&ugrave; emozionanti che questo percorso ci regala.<br /><br />Dopo aver fissato un primo appuntamento, la fase di pianificazione del sogno inizier&agrave;&nbsp; con una chiacchierata durante la quale gli sposi potranno raccontarsi in tutte le loro sfumature, svelarsi, aprire i loro cassetti pieni di sogni ben custoditi, esprimere grandi desideri, dare dei colori alle loro emozioni e tracciare le tappe della propria storia d''amore.<br /><br />Noi appuntiamo sempre tutti questi particolari per scriverne un percorso composito e articolato che si svilupper&agrave;&nbsp; durante la consulenza e la realizzazione di tutte le fasi successive.<br /><br />I sogni che si pianificano sono desideri che si realizzano.</p>', 'pianificare-il-sogno', '', 0, '2016-09-09 07:04:56', '2016-09-14 10:18:52', '', 0, 0, 1),
(2, 1, '', '', '<p>Blanc Desir &egrave; <span>il brand italiano</span> <span>specializzato</span> <span>nell''organizzazione</span> <span>dei matrimoni</span> <span>e degli eventi luxury.</span> <span><br />Con noi</span> <span>i vostri sogni</span> <span>diventano realt&agrave;.</span></p>', 'home', '', 0, '2016-09-13 16:40:15', '2016-09-14 10:09:52', '', 0, 0, 1),
(3, 2, '<h1 class="animated fadeInLeft">La progettazione grafica &amp;</h1>\r\n<h2>IL FIL ROUGE DEL MATRIMONIO</h2>', '', '<p>Organizzare un matrimonio &egrave; un po&rsquo; come scrivere una storia.<br /><br /> In Blanc Desir ne siamo fermamente convinti. Ogni dettaglio ha una sua collocazione, una sua struttura, una vita che si libra tra sogno e realt&agrave;.<br /><br /> Il primo di questi &egrave; senza dubbio il fil rouge che legher&agrave; a s&eacute; tutti gli altri.<br /><br /> Cosa vuol dire?<br /><br /> Che insieme,una volta scritta la trama della storia della coppia, individueremo il tema principale della giornata che, a partire dalla progettazione grafica, caratterizzer&agrave; l&rsquo;evento.<br /><br /> Penseremo allo stile, ai colori, ai caratteri, alla grammatura della carta, la sua consistenza, planeremo sulle parole, daremo un&rsquo;impronta distintiva che lasci la sua traccia sul sentiero che poi tutti gli altri aspetti del matrimonio seguiranno. Esalteremo le particolarit&agrave; della coppia in base alle sue peculiarit&agrave; e ne sceglieremo la giusta sfumatura.<br /><br /> In questa fase delicata e importante per la coppia, avremo modo di trovare il significato pi&ugrave; profondo di una storia d&rsquo;amore e di delinearne i tratti pi&ugrave; emozionanti.<br /><br /> La meraviglia di dare forma ad un sogno inizia da qui.</p>', 'progettazione-grafica-e-fil-rouge-del-matrimonio', '', 0, '2016-09-14 10:21:47', '2016-09-14 10:28:04', '', 0, 0, 1),
(4, 2, '<h1 class="animated fadeInLeft">La consulenza di <span>immagine</span></h1>', '', '<p>Progettare un matrimonio, per noi, vuol dire offrire meraviglia, regalare splendore, illuminare uno scorcio.<br /><br /> Rendere indimenticabile anche il dettaglio che potrebbe sfuggire.<br /><br /> Il nostro servizio di consulenza di immagine, tappa importantissima di tutto il percorso di organizzazione, si prefigge lo scopo di migliorare la coesione di tutti gli aspetti visivi legati all&rsquo;immagine dell&rsquo;evento in s&eacute; e di ci&ograve; che la coppia desidera che emerga.<br /><br /> Parliamo di dress code, etichetta, tono, messaggi che si spieghino attraverso una precisa disposizione, struttura e immagine. Scegliamo ci&ograve; che vogliamo esploda ai nostri occhi, ci&ograve; che si mostri attraverso la fusione di linee, colori, tessuti, disposizioni, geometrie e paesaggi.<br /><br /> Vogliamo raccontare una storia che parli ma che si lasci anche guardare e che sveli qualcosa di s&eacute; attraverso la morbidezza di una piega, l&rsquo;austerit&agrave; di una simmetria, la tenerezza di un fiore, l&rsquo;eleganza di un velo prezioso, la classe di monili unici e la personalit&agrave; di accessori scelti con cura. Gli Sposi hanno a disposizione esperti che sapranno consigliare ogni dettaglio, dai capelli, l&rsquo;acconciatura, il colore, al make up, alla scelta del vestito da sogno, definendo assieme un percorso mirato ad arrivare impeccabili al giorno del per sempre.<br /><br /> Progettiamo armonia.</p>', 'consulenza-di-immagine', '', 0, '2016-09-14 10:29:16', '2016-09-14 10:30:31', '', 0, 0, 1),
(5, 2, '<h1 class="animated fadeInLeft">La scelta dell&rsquo;abito da <span>Sogno</span></h1>', '', '<p>Ogni sposa porta con s&eacute; le proprie sfumature. Lavanda, camelia, lill&agrave;, non ti scordar di me, mughetto, peonia... Ci piace pensare alla sua anima un po&rsquo; come un giardino e scegliere insieme le sfumature del suo abito attingendo dai colori della natura.<br /><br /> Ci dedichiamo ad essa nella sua unicit&agrave; mettendola al centro del suo universo. Le dedichiamo ogni nostro momento e ogni nostro pensiero, scegliamo per lei un percorso da seguire, fatto di coccole, ascolto, lunghi incontri, piccoli vizi, esperti d&rsquo;immagine, affinch&eacute; arrivi al suo giorno radiosa e sicura della sua scelta, ma soprattutto serena e felice.<br /><br /> L&rsquo;abito da sposa &egrave; l&rsquo;innamoramento che muta in amore, &egrave; il per sempre che si indossa e con cui si sfila lungo la navata andando incontro al proprio sposo.<br /><br /> Ci fidiamo dei nostri atelier, scelti con cura, e di chi fa questo lavoro da decenni. Ci fidiamo dei nostri consulenti d&rsquo;immagine che sapranno rispondere a qualsiasi domanda e condurre la sposa dritta al suo sogno bella pi&ugrave; che mai.</p>', 'scelta-dell-abito-da-sogno', '', 0, '2016-09-14 10:31:50', '2016-09-14 10:35:04', '', 0, 0, 1),
(6, 2, '<h1 class="animated fadeInLeft">La ricerca della <span>location</span></h1>', '', '<p>Ogni fiaba ha il suo castello, ogni nave il suo oceano, ogni orchestra il suo teatro.<br /><br /> Ogni matrimonio la sua location ideale.<br /><br /> Scegliere il luogo che custodisca uno tra i ricordi pi&ugrave; importanti della vita di una coppia rappresenta un momento topico dell&rsquo;organizzazione del matrimonio. A volte gli sposi arrivano da noi con le idee chiare sulla sua collocazione geografica, magari legata alla famiglia d&rsquo;appartenenza, e vogliono soloessere guidati alla scoperta delle strutture che non conoscono. Altre volte, invece, hanno bisogno diun luogo che ancora non sanno che esiste e che racchiuda, nella sua particolarit&agrave;, tutti i dettagli chedesiderano far emergere.<br /><br /> Proprio per questo, Blanc Desir, attraverso uno studio attento e diretto delle location pi&ugrave; belle, riesce a guidare ogni coppia alla scoperta dei luoghi pi&ugrave; incantevoli del nostro territorio, cos&igrave; che possano rappresentarne al meglio la storia legandosi, con trame fitte e preziose, al fil rouge scelto per l&rsquo;occasione.<br /><br /> Ogni magia, per accadere, ha bisogno della sua bacchetta.<br /><br /> Ogni bacchetta, aspetta nel suo giardino incantato solo di essere trovata.</p>', 'ricerca-della-location', '', 0, '2016-09-14 10:36:17', '2016-09-14 10:37:26', '', 0, 0, 1),
(7, 2, '<h1 class="animated fadeInLeft">La scelta del <span>Catering</span></h1>', '', '<p>Ogni momento prezioso della nostra vita viene festeggiato attorno a un banchetto.<br /><br /> Ogni banchetto importante ci ricorda di quanto sia bello percorrere insieme ai nostri ospiti sentieri, vicoli, salite e discese attraverso i sapori dei nostri territori scegliendo con cura i piatti da assaporare e i vini da degustare.<br /><br /> Blanc Desir, grazie a un&rsquo;attenta ricerca tra i servizi di catering pi&ugrave; accreditati del territorio, negli anni &egrave; riuscita ad avvalersi di aziende e chef capaci di realizzare vere e proprie magie gastronomiche unendo la bellezza della composizione alla qualit&agrave; delle materie prime.<br /><br /> I catering a cui ci affidiamo e a cui affidiamo soprattutto la storia dei nostri sposi, si muovono sinuosi tra i gusti della tradizione e quelli pi&ugrave; contemporanei esibendosi in un vero spettacolo gustativo che appaga anche lo sguardo grazie ai meravigliosi allestimenti che di volta in volta vengono creati insieme ai nostri stilisti della mise en place. L&rsquo;ampia scelta che ci caratterizza fa s&igrave;che le nostre proposte siano sempre in grado di dar vita anche ai sogni delle nostre coppie pi&ugrave; esigenti.<br /><br /> Un viaggio emozionante parte sempre dal cuore.<br /><br /> Ed &egrave; ancora pi&ugrave; bello quando profuma e si lascia assaporare.</p>', 'scelta-del-catering', '', 0, '2016-09-14 10:38:48', '2016-09-14 10:39:51', '', 0, 0, 1),
(8, 2, '<h1 class="animated fadeInLeft"><span>Mise</span> en place</h1>', '', '<p>Vestire il banchetto e i tavoli che accoglieranno l&rsquo;allegro chiacchiericcio e la felicit&agrave; degli ospiti, &egrave;un momento delicato e importante. Rappresenta il nostro gusto, colora i nostri desideri, caratterizzai nostri tratti e ci presenta allo sguardo degli invitati.<br /><br /> Un po &lsquo;un gran cabaret, un po&rsquo; silenziosa cattedrale, la mise en place del banchetto nuziale racconta molto della nostra storia e del messaggio che vogliamo arrivi ai nostri ospiti.<br /><br /> Noi in Blanc Desir adoriamo tutto ci&ograve; che rappresenta questo momento, ed &egrave; per questo che ogni anno visitiamo le botteghe artigiane pi&ugrave; rinomate, le esposizioni pi&ugrave; importanti dove i tessuti, i cristalli e le porcellane si lasciano scegliere da noi, i brand pi&ugrave; esclusivi del settore per poter avere solo le cose pi&ugrave; belle.<br /><br /> Ogni nostro tavolo diventa un&rsquo;isola felice che accoglie e lascia partire le avventure che si raccontano, custodisce storie e segreti, i cristalli brillano alla luce delle candele, i calici tintinnano, gli argenti riflettono sorrisi e la gioia esplode pacatamente, morbida come una mousse e gaia come una bollicina.<br /><br /> Ci piace la Bellezza</p>', 'mise-en-place ', '', 0, '2016-09-14 10:41:17', '2016-09-14 10:42:23', '', 0, 0, 1),
(9, 2, '<h1 class="animated fadeInLeft"><span>Flower</span> design</h1>', '', '<p>C&rsquo;&egrave; un mondo dove tutto pu&ograve; succedere, in cui basta seguire la scia di un profumo o lasciarsi cullare dalla morbidezza di una corolla per capire che le magie, a volte, accadono.<br /><br /> Noi in Blanc Desir lo sappiamo, perch&eacute; abbiamo scelto di regalare questa magia a tutti i nostri sposi, disegnando con essi gli allestimenti e i bouquet pi&ugrave; belli grazie alle abili mani e alla fervida fantasia dei designer pi&ugrave; creativi, moderni e raffinati.<br /><br /> Raccontare una storia d&rsquo;amore e celebrarla nel suo giorno pi&ugrave; importante, richiede sensibilit&agrave;, delicatezza ma anche audacia, &egrave; qualcosa che si avvicina al sogno ma che si deve poter vedere, sentire e toccare.<br /><br /> Partendo da un&rsquo;idea, i nostri artisti dell&rsquo;addobbo floreale conducono gli sposi nel loro giardino ideale, scelgono con essi i fiori che raccontino al meglio la loro storia e le geometrie che pi&ugrave; si confanno al tema scelto e all&rsquo;immagine dell&rsquo;occasione.<br /><br /> A volte non si trova la scintilla perfetta solo perch&eacute; &egrave; ancora nascosta nella corolla di un fiore che non abbiamo ancora scoperto.</p>', 'flower-design ', '', 0, '2016-09-14 10:43:13', '2016-09-14 10:51:54', '', 0, 0, 1),
(10, 2, '<h1 class="animated fadeInLeft"><span>Light</span> design</h1>', '', '<p>Ogni palcoscenico ha bisogno delle luci perfette, ogni spettacolo vive dei fasci di luce che avvolgono e valorizzano i protagonisti.<br /><br /> Blanc Desir vive cos&igrave; la scelta delle luci che faranno risplendere gli sposi ed &egrave; per questo che ci avvaliamo della collaborazione dei migliori creativi del light design, esperti che sanno valorizzare location, allestimenti, volti e figure.<br /><br /> Ogni coppia ha una sua luce e splende di essa; noi vogliamo renderla perfetta e far sognare.<br /><br /> Vogliamo che ogni angolo si sfumi di colore al pulviscolo del tramonto, che ogni foto abbia il suo set ideale, che ogni ricordo venga custodito da piccole ampolle luminescenti.<br /><br /> Attraverso un percorso vissuto insieme alla wedding planner, il light designer progetter&agrave; allestimento di luci studiato per armonizzare ogni dettaglio della location scelta dagli sposi creando giochi di ombre, punti luminosi, allestimenti scenografici con le tecnologie pi&ugrave; moderne.<br /><br /> Creiamo visioni per esplorare emozioni.</p>', 'light-design ', '', 0, '2016-09-14 10:52:50', '2016-09-14 10:54:03', '', 0, 0, 1),
(11, 2, '<h1 class="animated fadeInLeft">Il progetto <span>scenografico</span></h1>', '', '<p>Il matrimonio &egrave; un evento, e ogni evento necessita di un progetto scenografico e di una direzione artistica che ne esalti le caratteristiche e che ne valorizzi ogni dettaglio.<br /><br /> In Blanc Desir abbiamo scelto la meraviglia. Abbiamo scelto di realizzare i sogni degli sposi e di offrirgli le performance pi&ugrave; belle. Seguiamo il matrimonio in ogni sua fase, perch&eacute; il solo planning vorrebbe dire non garantire agli sposi un progetto all''altezza di un vero sogno.<br /><br /> Partendo dalla progettazione scenografica, facciamo in modo che gli sposi si lascino guidare alla scoperta di un mondo fatto di luci, profumi, colori, simmetrie e armonie; realizziamo l&rsquo;intera regia del matrimonio cos&igrave; che la coppia non perda un solo frammento della bellezza di quel giorno godendone la bellezza nella maniera pi&ugrave; libera possibile.<br /><br /> Stendiamo la trama di una storia, diamo voce ai personaggi, visualizziamo le luci perfette, coloriamo gli ambienti, coordiniamo gli allestimenti.<br /><br /> Per noi &egrave; la magia di offrire bellezza, per gli sposi &egrave; la bellezza della propria magia d&rsquo;amore.</p>', 'progetto-scenografico', '', 0, '2016-09-14 11:08:22', '2016-09-14 11:16:12', '', 0, 0, 1),
(12, 2, '<h1 class="animated fadeInLeft">La colonna <span>sonora</span></h1>', '', '<p>La musica &egrave; senza dubbio uno degli elementi pi&ugrave; importanti nella vita di ogni persona.<br /><br /> Ci riporta ricordi lontani, evoca emozioni, crea nella nostra memoria delle nicchie nelle quali sono custoditi tutti i momenti della nostra vita.<br /><br /> Quanto &egrave; importante la scelta della colonna sonora in un matrimonio?<br /><br /> In Blanc Desir pensiamo che la scelta della musica per il proprio matrimonio sia uno dei dettagli pi&ugrave; importanti, perch&egrave; dar&agrave; un suono e un ritmo alla giornata, parler&agrave; di momenti d&rsquo;amore e accompagner&agrave; gli invitati in un viaggio emozionale che racconter&agrave; un po&rsquo; della storia della coppia.<br /><br /> La colonna sonora &egrave; parte integrante della scenografia.<br /><br /> Ogni coppia di sposi ha la sua musica dentro e noi la usiamo per completare il sogno.<br /><br /> Non potremmo mai pensare ad un progetto d&rsquo;insieme senza la sua musica, nella sua unicit&agrave;.</p>', 'colonna-sonora', '', 0, '2016-09-14 11:19:13', '2016-09-14 11:23:23', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`categoria_id` int(255) NOT NULL,
  `categoria_nome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria_url` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria_articolo_id` int(255) NOT NULL,
  `categoria_immagine_id` int(255) NOT NULL,
  `categoria_gallery_id` int(255) NOT NULL,
  `categoria_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_data_modific` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`cliente_id` int(255) NOT NULL,
  `cliente_nome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_cognome` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_ragione_sociale` text NOT NULL,
  `cliente_indirizzo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_cap` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cilente_citta` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_provincia` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_stato` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_telefono` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_fax` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_partita_iva` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_codice_fiscale` int(11) NOT NULL,
  `cliente_tipologia` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cliente_data_modifica` datetime NOT NULL,
  `cliente_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cliente_note` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`gallery_id` int(255) NOT NULL,
  `gallery_articolo_id` int(255) NOT NULL,
  `gallery_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gallery_data_ficamodi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE IF NOT EXISTS `immagine` (
`immagine_id` int(255) NOT NULL,
  `immagine_label` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `immagine_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `immagine_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `immagine_articolo_id` int(255) NOT NULL,
  `immagine_tipo` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=18 ;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`immagine_id`, `immagine_label`, `immagine_data_creazione`, `immagine_data_modifica`, `immagine_articolo_id`, `immagine_tipo`) VALUES
(5, '64019.jpg', '2016-09-14 10:09:52', '0000-00-00 00:00:00', 2, 'image/jpeg'),
(6, '97819.jpg', '2016-09-14 10:18:52', '0000-00-00 00:00:00', 1, 'image/jpeg'),
(8, '42117.jpg', '2016-09-14 10:25:17', '0000-00-00 00:00:00', 3, 'image/jpeg'),
(9, '92889.jpg', '2016-09-14 10:29:16', '0000-00-00 00:00:00', 4, 'image/jpeg'),
(10, '39337.jpg', '2016-09-14 10:31:50', '0000-00-00 00:00:00', 5, 'image/jpeg'),
(11, '57978.jpg', '2016-09-14 10:36:17', '0000-00-00 00:00:00', 6, 'image/jpeg'),
(12, '99100.jpg', '2016-09-14 10:38:48', '0000-00-00 00:00:00', 7, 'image/jpeg'),
(13, '17564.jpg', '2016-09-14 10:41:17', '0000-00-00 00:00:00', 8, 'image/jpeg'),
(14, '83816.jpg', '2016-09-14 10:43:13', '0000-00-00 00:00:00', 9, 'image/jpeg'),
(15, '14661.jpg', '2016-09-14 10:52:50', '0000-00-00 00:00:00', 10, 'image/jpeg'),
(16, '80209.jpg', '2016-09-14 11:08:22', '0000-00-00 00:00:00', 11, 'image/jpeg'),
(17, '92998.jpg', '2016-09-14 11:19:13', '0000-00-00 00:00:00', 12, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struttura della tabella `lingua`
--

CREATE TABLE IF NOT EXISTS `lingua` (
`lingua_id` int(255) NOT NULL,
  `lingua_label` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lingua_short` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
`pagina_id` int(255) NOT NULL,
  `pagina_url` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_riferimento` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_meta_title` text NOT NULL,
  `pagina_meta_description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_meta_tag` text NOT NULL,
  `pagina_immagine_id` int(255) NOT NULL,
  `pagina_gallery_id` int(255) NOT NULL,
  `pagina_lingua` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pagina_data_creazione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pagina_data_modifica` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pagina_dipendenza_id` int(255) NOT NULL,
  `pagina_ordinamento` int(255) NOT NULL,
  `pagina_categoria_id` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=15 ;

--
-- Dump dei dati per la tabella `pagina`
--

INSERT INTO `pagina` (`pagina_id`, `pagina_url`, `pagina_riferimento`, `pagina_meta_title`, `pagina_meta_description`, `pagina_meta_tag`, `pagina_immagine_id`, `pagina_gallery_id`, `pagina_lingua`, `pagina_data_creazione`, `pagina_data_modifica`, `pagina_dipendenza_id`, `pagina_ordinamento`, `pagina_categoria_id`) VALUES
(1, 'home', 'home.php', 'Blac Desir | Wedding & event production', 'Blanc Desir ?ï¿½ il brand italiano specializzato nell''organizzazione dei matrimoni e degli eventi luxury.\r\nCon noi i vostri sogni diventano realt?ï¿½.', 'Wedding,event,production,organizzazione matrimonio,matrimonio', 0, 0, '', '2016-09-05 07:06:40', '2016-09-14 11:24:42', 0, 0, 0),
(2, 'services', 'services.php', '', '', '', 0, 0, '', '2016-09-05 07:37:56', '2016-09-05 07:37:56', 0, 0, 0),
(13, 'press', 'press.php', 'Press area', '', 'press,about us,ufficio stampa', 0, 0, '', '2016-09-05 16:45:19', '2016-09-05 16:45:19', 0, 0, 0),
(14, 'contatti', 'contatti.php', 'Contatti', 'Via Balicco nÂ° 61 23900, Lecco (LC);\r\nVia Vincenzo Monti nÂ° 8 20123, Milano (MI);\r\nVia San Camillo nÂ° 20 55042, Forte Dei Marmi (LU) ;', 'contatti,Via Balicco nÂ° 61 23900,Lecco (LC);,info@blancdesir.eu', 0, 0, '', '2016-09-05 16:47:04', '2016-09-06 07:23:02', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `articolo`
--
ALTER TABLE `articolo`
 ADD PRIMARY KEY (`articolo_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cliente_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `immagine`
--
ALTER TABLE `immagine`
 ADD PRIMARY KEY (`immagine_id`);

--
-- Indexes for table `lingua`
--
ALTER TABLE `lingua`
 ADD PRIMARY KEY (`lingua_id`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
 ADD PRIMARY KEY (`pagina_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `articolo`
--
ALTER TABLE `articolo`
MODIFY `articolo_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
MODIFY `categoria_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
MODIFY `cliente_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `gallery_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `immagine`
--
ALTER TABLE `immagine`
MODIFY `immagine_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `lingua`
--
ALTER TABLE `lingua`
MODIFY `lingua_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagina`
--
ALTER TABLE `pagina`
MODIFY `pagina_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
