<?php
  /* CONNETTI IL DB */
  include("php/connessione_sql.php");
  
  /* AVVIA LA SESSIONE*/
  session_start();
  $log = "";
  
  /*  PAGINA  VARIABILI  */
  if( isset($_GET["pag"]) ): $pag = $_GET["pag"]; else:  $pag = "";  endif;
  
  /* DATA FUSO ORARIO */
  date_default_timezone_set('Europe/Rome');
  
  /* FUNZIONI DI SISTEMA  */
  include("php/config/funzioni.php");
  
  
  /* Verifica crdenziali login e crea id_utente per accedere al gestionale. */
  if(isset($_POST["login"])):
  
  	/* PRENDI USER E PASSWORD  */
  	$user = $_POST["user"];
  	$password = $_POST["password"];
	
	/* QUERY DI CONVALIDA DATI */
	$result = $mysqli->query("SELECT * FROM `admin` WHERE `admin_user` = '".$mysqli->real_escape_string($user)."' AND `admin_password` = '".$mysqli->real_escape_string($password)."' ");
    
	/* SE LE CREDENZIALI SONO CORRETTE */    
    if($result->num_rows > 0):

	    $_SESSION["id_sessione"] = session_id();
    
        $_SESSION["lang"] = 'ita';
	     
		while ($row = $result->fetch_array()) { $_SESSION["accesso"] = $row['admin_accesso']; }
		
	endif;
	
  endif;
  /* condizione di logoff per uscire dall' admin */
  if(isset($_GET["logoff"])):
    
    // Desetta tutte le variabili di sessione.
	session_unset();
	// Infine , distrugge la sessione.
	session_destroy();
   
  endif;
  /* condizione che verifica se l'id utente è valido oppure no */
  if(empty($_SESSION["id_sessione"])):
    include("php/login.php");
  else: 
    include("php/home.php");
  endif;
?>