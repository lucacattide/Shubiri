<?php 

 include("../connessione_sql.php");
 
 /* CONDIZIONI RISPOSTE AJAX */
 $pag = $_POST["pag"];
 
/* PAGE *****************************************************/
 
if($pag == "pagina"):
    $sqlPagina = "SELECT * FROM `pagina`"; 
	$rPagina = $mysqli->query($sqlPagina);
	while ( $rowPagina = $rPagina->fetch_array() ):
?>
    <div class="modal-content">
     <div class="modal-header">
      <button aria-hidden="true" data-dismiss="modal" class="bootbox-close-button close" type="button">×</button>
      <h4 class="modal-title">Aggiungi Pagina</h4>
     </div>
     <div class="modal-body">
      <div class="bootbox-body">
       <div class="col-md-12">
        <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
          <input type="hidden" name="nuovaPagina" />
          <div class="form-content">
          
           
            <div class="row">
              <!-- URL PAGINA -->
              <div class="col-md-6 unit">
                <label class="label">URL SEF</label>
                <div class="input">
                  <label class="icon-left" for="text"> <i class="zmdi zmdi-globe"></i> </label>
                  <input required name="pagina_url" class="form-control" type="text" placeholder="nome-url-pagina" >
                </div>
              </div>
              <!-- END URL PAGINA -->  
              
              <!-- URL PAGINA -->
              <div class="col-md-6 unit">
                <label class="label">Nome file</label>
                <div class="input">
                  <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                  <input required name="pagina_riferimento" class="form-control" type="text" placeholder="pagina.php">
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
                    <input name="pagina_meta_title" type="text" id="text" placeholder="Titolo pagina" class="form-control">
                </div>
               </div>
               <div class="unit">
                <label class="label">Parole chiave</label>
                    <input name="pagina_meta_tag" type="text" class="tags tags-input" data-type="tags" value=""/>
               </div>
             </div>    
             <div class="col-md-6 unit">
              <label class="label">Descrizione</label>
                <div class="input">
                  <label for="textarea" class="icon-left">
                      <i class="fa fa-file-text-o"></i>
                  </label>
                 <textarea name="pagina_meta_description" id="textarea" spellcheck="false" placeholder="Descrizione pagina" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-6 unit">                      
              <!-- start single select -->
              
                  <label class="input select">
                      <select name="pagina_dipendenza_id" class="form-control">
                          <option value="0">Pagina primaria</option>
                          <?php 
						    $sqlPagina = "SELECT * FROM `pagina`"; 
  							$rPagina = $mysqli->query($sqlPagina);
							$countPagina =  $rPagina->num_rows;
							if($countPagina >= 1):      
    	                      while ( $rowPagina = $rPagina->fetch_array() ):   
							  
						  ?>
                          <option value="<?php echo $rowPagina["pagina_id"]; ?>"><?php echo $rowPagina["pagina_url"]; ?></option>
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
                  <button class="btn btn-primary" type="submit">Aggiungi Pagina</button>
                  <button class="btn" type="reset">Annulla</button>
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