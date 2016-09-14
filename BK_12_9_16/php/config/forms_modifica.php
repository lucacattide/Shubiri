<?php 

 include("../connessione_sql.php");
 
 /* CONDIZIONI RISPOSTE AJAX */
 $pag = $_POST["pag"];
 $id = $_POST["id"];
 
/* ACCOUNT PAGE *****************************************************/
 
if($pag == "account"):
	$sqlAccount = "SELECT * FROM `admin` WHERE admin_id = $id "; 
	$rAccount = $mysqli->query($sqlAccount);
	$countAccount =  $rAccount->num_rows;
	/*  LOOP ACCOUNT ADMIN  */
	if($countAccount >= 1):      
    	while ( $rowAccount = $rAccount->fetch_array() ):
        	if( $rowAccount["admin_accesso"] == 1 ):
            else:
			?>
            <div class="modal-content">
             <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="bootbox-close-button close" type="button">×</button>
              <h4 class="modal-title">Modifica <?php echo $rowAccount["admin_user"]; ?></h4>
             </div>
             <div class="modal-body">
              <div class="bootbox-body">
                            <div class="col-md-12">
                              <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
                                <input type="hidden" name="modificAccount" />
                                <input type="hidden" name="admin_id" value="<?php echo $rowAccount["admin_id"];  ?>" />
                                <input type="hidden" name="liv" value="<?php echo $rowAccount["admin_accesso"];  ?>" />
                                <div class="form-content">
                                
                                <!-- start text password -->
                                <div class="row">
                                  <div class="col-md-4 unit">
                                    <label class="label">Livello utente</label>
                                    <div class="input">
                                      <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                                      <input required name="livello" class="form-control" type="number" value="<?php echo $rowAccount["admin_accesso"];  ?>" min="<?php echo $rowAccount["admin_accesso"];  ?>" id="livello">
                                    </div>
                                    <p><small><span class="legenda">2 - Amministratore</span><span class="legenda">3 - Utente</span></small></p>
                                  </div>
                                  <div style="clear:both;"></div>
                                  <div class="col-md-4 col-sm-4">
                                    <div class="btn-ex-container">
                                      <button class="btn btn-primary" type="submit">Modifica dati</button>
                                      <i class="zmdi"></i>
                                      <button class="chiudi btn bootbox-close-button" data-dismiss="modal" type="button">Chiudi</button>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                
                                <!-- end text password -->
                               </div>
                           </form> 
                          </div>
                          <div style="clear:both;"></div>
              </div>
             </div>
            </div>
			<?php 
            endif; 
	  endwhile;            
   endif; 
endif; 	
/* END ACCOUNT PAGE *****************************************************/	


	

/* PAGE *********************************************************/
if($pag == "pagina" || $pag == ""):
    $sqlPagina = "SELECT * FROM `pagina` WHERE pagina_id = '".$id."' "; 
	$rPagina = $mysqli->query($sqlPagina);
	while ( $rowPagina = $rPagina->fetch_array() ): 
?>
    <div class="modal-content">
     <div class="modal-header">
      <button aria-hidden="true" data-dismiss="modal" class="bootbox-close-button close" type="button">×</button>
      <h4 class="modal-title">Modifica Pagina</h4>
     </div>
     <div class="modal-body">
      <div class="bootbox-body">
       <div class="col-md-12">
        <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
          <input type="hidden" name="modificaPagina" />
          <input type="hidden" name="pagina_id" value="<?php echo $rowPagina["pagina_id"]; ?>" />
          <div class="form-content">
          
           
            <div class="row">
              <!-- URL PAGINA -->
              <div class="col-md-6 unit">
                <label class="label">URL SEF</label>
                <div class="input">
                  <label class="icon-left" for="text"> <i class="zmdi zmdi-globe"></i> </label>
                  <input  name="pagina_url" class="form-control" type="text" placeholder="nome-url-pagina" value="<?php echo $rowPagina["pagina_url"]; ?>" >
                </div>
              </div>
              <!-- END URL PAGINA -->  
              
              <!-- URL PAGINA -->
              <div class="col-md-6 unit">
                <label class="label">Nome file</label>
                <div class="input">
                  <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                  <input name="pagina_riferimento" class="form-control" type="text" placeholder="pagina.php" value="<?php echo $rowPagina["pagina_riferimento"]; ?>">
                </div>
              </div>
              <!-- END URL PAGINA -->  
            </div> 
            
            <div class="row">
             <div class="col-md-6 unit">
               <div class="unit">
                <label class="label">Titolo</label>
                <div class="input">
                    <label for="text" class="icon-left">
                        <i class="fa fa-edit"></i>
                    </label>
                    <input name="pagina_meta_title" type="text" id="text" placeholder="some text" class="form-control" value="<?php echo $rowPagina["pagina_meta_title"]; ?>">
                </div>
               </div>
               <div class="unit">
                <label class="label">Parole chiave</label>
                    <input name="pagina_meta_tag" type="text" class="tags tags-input" data-type="tags" value="<?php echo $rowPagina["pagina_meta_tag"]; ?>"/>
               </div>
             </div>    
             <div class="col-md-6 unit">
              <label class="label">Descrizione</label>
                <div class="input">
                  <label for="textarea" class="icon-left">
                      <i class="fa fa-file-text-o"></i>
                  </label>
                 <textarea name="pagina_meta_description" id="textarea" spellcheck="false" placeholder="your message..." class="form-control"><?php echo $rowPagina["pagina_meta_description"]; ?></textarea>
                </div>
              </div>
              <div class="col-md-6 unit">                      
              <!-- start single select -->
              
                  <label class="input select">
                      <select name="pagina_dipendenza_id" class="form-control">
                          <option value="0">Pagina primaria</option>
                          <?php 
						    $sqlPagina2 = "SELECT * FROM `pagina`"; 
  							$rPagina2 = $mysqli->query($sqlPagina2);
							$countPagina2 =  $rPagina2->num_rows;
							if($countPagina2 >= 1):      
    	                      while ( $rowPagina2 = $rPagina2->fetch_array() ):   
							  
						  ?>
                          <option <?php if( $rowPagina2["pagina_id"] == $rowPagina["pagina_dipendenza_id"] ): echo "selected"; endif; ?>  value="<?php echo $rowPagina2["pagina_id"]; ?>"><?php echo $rowPagina2["pagina_url"]; ?></option>
                          <?php
						    
						     endwhile;
							endif; 
						  ?>
                      </select>
                      <i></i>
                  </label>
            
              <!-- end single select -->
             </div>  
              
            </div>
            
            <div class="row">
                
            </div>
            
            <div class="row">  
              <div style="clear:both;"></div>
              <div class="col-md-4 col-sm-4">
                <div class="btn-ex-container">
                  <button class="btn btn-primary" type="submit">Modifica pagina</button>
                  <i class="zmdi"></i>
                  <button class="btn bootbox-close-button chiudi" data-dismiss="modal" type="button">Chiudi</button>
                </div>
              </div>
             
            </div>
            
          
          </div>
         </form> 
        </div>
        <div style="clear:both;"></div>
       </div>
      </div>
     </div>
<?php 
  endwhile; 
endif; 	
/* END PAGE *****************************************************/		
	
?> 