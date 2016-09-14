<?php 

include("php/connessione_sql.php");


$sqlArticolo = "SELECT * FROM `articolo` ORDER BY articolo_id DESC LIMIT 0,1 ";
$rArticolo = $mysqli->query($sqlArticolo);
while ( $rowArticolo = $rArticolo->fetch_array()): 

$nextId = $rowArticolo["articolo_id"] + 1;

endwhile;


if(empty($nextId)): $nextId = 1; endif; 



$upload_folder = 'img/';

if (!empty($_FILES)) {
  $temp_file = $_FILES['file']['tmp_name'];
  $target_path = 'img/';
  $target_file =  $target_path . $_FILES['file']['name'];
     
 
  if( file_exists( $target_path ) ) {
    
	move_uploaded_file($temp_file, $target_file);
	
	$sql="INSERT INTO `immagine`(`immagine_id`, `immagine_label`, `immagine_data_creazione`, `immagine_data_modifica`, `immagine_articolo_id`) VALUES (NULL,'".$_FILES['file']['name']."','".date("Y-m-d H:i:s")."','','".$nextId."')";
	
	$mysqli->query($sql); 

	
  } else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
  }
}

?>