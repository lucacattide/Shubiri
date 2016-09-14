<?php 
 
 include("../connessione_sql.php");
 
 /* DATA FUSO ORARIO */
  date_default_timezone_set('Europe/Rome');
 
 /* CARICA IMMAGINI ***********************************/
function imgUp($img){
	
  //imposta directory img 
  $target_pathA = "../img/";
  $temp = explode(".",$img['name']);
  $newfilename = rand(1,99999) . '.' .end($temp);
  $target_pathA = $target_pathA.basename($newfilename);	 
 
   //upload img
   if( is_uploaded_file($img["tmp_name"]) ) {
	  move_uploaded_file($img["tmp_name"], $target_pathA) or die("Impossibile spostare il file, controlla l'esistenza o i permessi della directory dove fare l'upload. ");
	  $img = $newfilename;
   }
   else{
	  $img = ""; 
   }
 return $img;
} 
/* END CARICA IMMA
 
 
 /*CREAZIONE DI NUOVO AMMINISTRATORE DB BACKEND*/
 
 /*ACCOUNT PAGE ***************************************************************/
 
 /* CREA AMMINISTRATORE DB BACKEND ***************/

 if(isset($_POST["account"])):
 
 	 if((!empty($_POST["username2"])) && (!empty($_POST["password2"]))):
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
		
	  else: 
	 
	 	echo "Errore! Compila tutti i campi";    
	 
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
  
  	if((!empty($_POST["username2"])) && (!empty($_POST["password2"]))):
	
		$sqlPagina = "INSERT INTO `pagina`(`pagina_id`, `pagina_url`, `pagina_riferimento`, `pagina_meta_title`, `pagina_meta_description`, `pagina_meta_tag`, `pagina_immagine_id`, `pagina_gallery_id`, `pagina_lingua`, `pagina_data_creazione`, `pagina_data_modifica`, `pagina_dipendenza_id`, `pagina_ordinamento`, `pagina_categoria_id`) VALUES (NULL,'".$mysqli->real_escape_string($_POST["pagina_url"])."','".$mysqli->real_escape_string($_POST["pagina_riferimento"])."','".$mysqli->real_escape_string($_POST["pagina_meta_title"])."','".$mysqli->real_escape_string($_POST["pagina_meta_description"])."','".$mysqli->real_escape_string($_POST["pagina_meta_tag"])."','','','','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','".$mysqli->real_escape_string($_POST["pagina_dipendenza_id"])."','0','0')";
		if($mysqli->query($sqlPagina)): 
		  echo "Pagina creata"; 
		else:
		  echo "Errore! Riprova";   
		endif; 
		
	 else: 
	 
	 	echo "Errore! Compila tutti i campi";    
	 
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
  
    /* ARTICOLO **********************************************************************/
  
  /* AGGIUNGI ARTICOLO DB BACKEND *******************/
  if(isset($_POST["nuovoArticolo"])): 
	// query insert nuovo articolo 
	$sqlArticolo = "INSERT INTO `articolo`(`articolo_id`,`articolo_pagina_id`,`articolo_titolo`,`articolo_sottotitolo`,`articolo_testo`,`articolo_url`,`articolo_img_id`,`articolo_gallery_id`,`articolo_data_creazione`,`articolo_data_modifica`,`articolo_lingua`,`articolo_ordinamento`,`articolo_categoria_id`,`articolo_visibile`) VALUES ( NULL,'".$mysqli->real_escape_string($_POST["articolo_pagina_id"])."','".$mysqli->real_escape_string($_POST["articolo_titolo"])."','".$mysqli->real_escape_string($_POST["articolo_sottotitolo"])."','".$mysqli->real_escape_string($_POST["articolo_testo"])."','".$mysqli->real_escape_string($_POST["articolo_url"])."','','','".date("Y-m-d H:i:s")."','".date("Y-m-d", strtotime($_POST["articolo_data_modifica"]))."','','','','".$mysqli->real_escape_string($_POST["articolo_visibile"])."')";
	if($mysqli->query($sqlArticolo)): 
         echo "Articolo Inserito!";  
	 
	else:
	  echo "ERRORE: RIPROVA";   
	endif;  
	
  endif;
  /* END AGGIUNGI ARTICOLO DB BACKEND *******************/
  
  /* END ARTICOLO **********************************************************************/


?>