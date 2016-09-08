<?php 
 
 include("../connessione_sql.php");
 
 /* DATA FUSO ORARIO */
  date_default_timezone_set('Europe/Rome');
 
 /*CREAZIONE DI NUOVO AMMINISTRATORE DB BACKEND*/
 
 /*ACCOUNT PAGE ***************************************************************/
 
 /* CREA AMMINISTRATORE DB BACKEND ***************/
 if(isset($_POST["account"])):
   /* PERMESSI DI ACCESSO */
   $liv = $_POST["liv"];
   $livello = $_POST["livello"];
   /* SET LIVELLO SE LIVELLO NON E' CORRETTO */
   if( $liv <= $livello ): $livello = $liv+1; endif;
   /* SET QUERY */
   $sqlAccount = "INSERT INTO `admin`(`admin_id`, `admin_user`, `admin_password`, `admin_accesso`, `admin_data_creazione`) VALUES (NULL,'".$mysqli->real_escape_string($_POST["username2"])."','".$mysqli->real_escape_string($_POST["password2"])."','".$livello."','".date("Y-m-d H:i:s")."' )";  
   if($mysqli->query($sqlAccount)): 
	  echo "Utente creato";
	else:
	  echo "Errore! Riprova";   
    endif;  	 
  endif;
  /* END CREA AMMINISTRATORE DB BACKEND ***************/
  
  /* MODIFICA AMMINISTRATORE DB BACKEND ***************/
  if(isset($_POST["modificAccount"])):
   /* PERMESSI DI ACCESSO */
   $liv = $_POST["liv"];
   $livello = $_POST["livello"];
   $id = $_POST["admin_id"];
   /* SET LIVELLO SE LIVELLO NON E' CORRETTO */
   if( $livello < $liv ): $livello = $liv+1; endif;
   /* SET QUERY */
   $sqlAccount = "UPDATE `admin` SET `admin_accesso`='".$livello."' WHERE `admin_id` = $id ";  
   if($mysqli->query($sqlAccount)): 
	  echo "Modifiche salvate";
	else:
	  echo "Errore! Riprova";      
    endif;  	 
  endif;
  /* END MODIFICA AMMINISTRATORE DB BACKEND ***************/
  
  /* ELIMINA AMMINISTRATORE DB BACKEND ***************/
  if(isset($_POST["eliminAccount"])):
	$id = $_POST["admin_id"];
	$sqlElAccount = "DELETE FROM `admin` WHERE admin_id = $id";
	if($mysqli->query($sqlElAccount)): 
	  echo "Account eliminato"; 
	else:
	 echo "Errore! Riprova";   
    endif; 
  endif;
  /* END ELIMINA AMMINISTRATORE DB BACKEND ***************/
  
  /* ENDACCOUNT PAGE ***********************************************************/ 
  
  
  /* PAGE **********************************************************************/ 
  
  /* AGGIUNGI NUOVA PAGINA DB BACKEND ***************/
  if(isset($_POST["nuovaPagina"])):
	$sqlPagina = "INSERT INTO `pagina`(`pagina_id`, `pagina_url`, `pagina_riferimento`, `pagina_meta_title`, `pagina_meta_description`, `pagina_meta_tag`, `pagina_immagine_id`, `pagina_gallery_id`, `pagina_lingua`, `pagina_data_creazione`, `pagina_data_modifica`, `pagina_dipendenza_id`, `pagina_ordinamento`, `pagina_categoria_id`) VALUES (NULL,'".$mysqli->real_escape_string($_POST["pagina_url"])."','".$mysqli->real_escape_string($_POST["pagina_riferimento"])."','".$mysqli->real_escape_string($_POST["pagina_meta_title"])."','".$mysqli->real_escape_string($_POST["pagina_meta_description"])."','".$mysqli->real_escape_string($_POST["pagina_meta_tag"])."','','','','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','".$mysqli->real_escape_string($_POST["pagina_dipendenza_id"])."','0','0')";
	if($mysqli->query($sqlPagina)): 
	  echo "Pagina creata"; 
	else:
	  echo "Errore! Riprova";   
	endif; 
  endif;
  /* END AGGIUNGI NUOVA PAGINA DB BACKEND ***************/
  
  /* MODIFICA PAGINA DB BACKEND ***************/
  if(isset($_POST["modificaPagina"])):
    $sqlPagina = "UPDATE `pagina` SET `pagina_url`='".$mysqli->real_escape_string($_POST["pagina_url"])."',`pagina_riferimento`='".$mysqli->real_escape_string($_POST["pagina_riferimento"])."',`pagina_meta_title`='".$mysqli->real_escape_string($_POST["pagina_meta_title"])."',`pagina_meta_description`='".$mysqli->real_escape_string($_POST["pagina_meta_description"])."',`pagina_meta_tag`='".$mysqli->real_escape_string($_POST["pagina_meta_tag"])."',`pagina_data_modifica`='".date("Y-m-d H:i:s")."',`pagina_dipendenza_id`='".$mysqli->real_escape_string($_POST["pagina_dipendenza_id"])."' WHERE `pagina_id` = '".$mysqli->real_escape_string($_POST["pagina_id"])."' ";
	if($mysqli->query($sqlPagina)): 
	  echo "Pagina modificata"; 
	else:
	  echo "Errore! Riprova";     
	endif; 
  endif;
  /* END MODIFICA PAGINA DB BACKEND ***************/ 
  
  
  /* ELIMINA PAGINA DB BACKEND *******************/
  if(isset($_POST["eliminPagina"])):
    $sqlPagina = "DELETE FROM `pagina` WHERE `pagina_id` = '".$mysqli->real_escape_string($_POST["pagina_id"])."' ";
	if($mysqli->query($sqlPagina)): 
	  echo "Pagina eliminata"; 
	else:
	 echo "Errore! Riprova";   
	endif; 
  endif;
  /* END ELIMINA PAGINA DB BACKEND ***************/ 
  
  /* END PAGE ******************************************************************/ 

?>