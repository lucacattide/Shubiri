<?php 

 include("../connessione_sql.php");
 
 /* CONDIZIONI RISPOSTE AJAX */
 $pag = $_POST["pag"];
 /* ACCOUNT PAGE *****************************************************/
 if($pag == "account"):
	$sqlAccount = "SELECT * FROM `admin`"; 
	$rAccount = $mysqli->query($sqlAccount);
	$countAccount =  $rAccount->num_rows;
	/*  LOOP ACCOUNT ADMIN  */
	if($countAccount >= 1):      
    	while ( $rowAccount = $rAccount->fetch_array() ):
        	if( $rowAccount["admin_accesso"] == 1 ):
            else:
			
				if( $rowAccount["admin_accesso"] == 2 ):
					
					$livello = "Amministratore";
					$livelloContainer = "bg".$livello;
					
				elseif( $rowAccount["admin_accesso"] == 3 ):
					
						$livello = "Utente";
						$livelloContainer = "bg".$livello;
										
				endif;
						
			?>
			 <tr>
			  <td><?php echo $rowAccount["admin_user"];  ?></td>
			  <td><label class="label label-info <?php echo $livelloContainer; ?>"><?php echo $livello;  ?></label></td>
			  <td class="td-center">
			   <div class="btn-toolbar" role="toolbar">
				<div class="btn-group" role="group"> 
				 <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
				  <a class="btn btn-default btn-sm m-user-edit modifica"><i class="zmdi zmdi-edit"></i></a> 
				  <input type="hidden" name="eliminAccount" />
				  <input type="hidden" class="idSelection" name="admin_id" value="<?php echo $rowAccount["admin_id"]; ?>" />
				  <button class="btn btn-default btn-sm m-user-delete"><i class="zmdi zmdi-close"></i></button>
				 </form>
				</div>
			   </div>
			  </td>
			</tr>
			<?php 
            endif; 
	  endwhile;            
   endif; 
endif; 	
/* END ACCOUNT PAGE *****************************************************/		

/* PAGE *****************************************************************/
 if($pag == "pagina" || $pag == ""):
	$sqlPagina = "SELECT * FROM `pagina`"; 
	$rPagina = $mysqli->query($sqlPagina);
	$countPagina =  $rPagina->num_rows;
	/*  LOOP ACCOUNT ADMIN  */
	if($countPagina >= 1):      
    	while ( $rowPagina = $rPagina->fetch_array() ):
			?>
			 <tr>
              <td><?php echo $rowPagina["pagina_riferimento"]; ?></td>
              <td><?php echo $rowPagina["pagina_url"]; ?></td>
              <td>
			   <?php 
                 /* RICHIAMO PAGINA PRIMARIA*/
                 if($rowPagina["pagina_dipendenza_id"] == 0): echo "Pagina Primaria"; else:  
                    $sqlPagina2 = "SELECT * FROM `pagina` WHERE pagina_id = '".$rowPagina["pagina_dipendenza_id"]."'"; 
                    $rPagina2 = $mysqli->query($sqlPagina2);
                    while ( $rowPagina2 = $rPagina2->fetch_array() ):  echo $rowPagina2["pagina_url"]; endwhile;
                  endif; 
                ?>
              </td>
              <td class="td-center">
               <div class="btn-toolbar" role="toolbar">
                <div class="btn-group" role="group"> 
                 <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
                  <a  class="btn btn-default btn-sm m-user-edit modifica" href="#"><i class="zmdi zmdi-edit"></i></a> 
                  <input type="hidden" name="eliminPagina" />
                  <input class="idSelection" type="hidden" name="pagina_id" value="<?php echo $rowPagina["pagina_id"]; ?>" />
                  <button class="btn btn-default btn-sm m-user-delete"><i class="zmdi zmdi-close"></i></button>
                 </form>
                </div>
               </div>
              </td>
            </tr>
			<?php 
	  endwhile;            
   endif; 
endif; 	
/* PAGE ****************************************************************/	   
?> 