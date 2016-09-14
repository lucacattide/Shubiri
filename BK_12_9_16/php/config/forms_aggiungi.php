<?php 

 include("../connessione_sql.php");
 
 /* CONDIZIONI RISPOSTE AJAX */
 $pag = $_POST["pag"];
 $id = $_POST["id"];
 
/* PAGE *****************************************************/
 
if($pag == "pagina" || $pag == ""):
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
                  <i class="zmdi"></i>
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
/* END PAGE *****************************************************/		 /* ARTICOLO *****************************************************/	
if($pag == "crea-pagina"): 
?>
<div class="modal-content">
  <div class="modal-header">
    <button aria-hidden="true" data-dismiss="modal" class="bootbox-close-button close" type="button">×</button>
    <h4 class="modal-title">Aggiungi Articolo</h4>
  </div>
  <div class="modal-body">
    <div class="bootbox-body">
      <div class="col-md-12">
        <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
          <input type="hidden" name="nuovoArticolo" />
          <input type="hidden" name="articolo_pagina_id" value="<?php echo $id; ?>" />
          <div class="form-content"> 
            
            <!-- start text password -->
            <div class="row col-md-6">
              <div class="col-md-12 unit">
                <label class="label">Titolo</label>
                <div class="input">
                  <label for="text" class="icon-left"> <i class="fa fa-edit"></i> </label>
                  <textarea name="articolo_titolo"  spellcheck="false" placeholder="Inserire il titolo" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12 unit">
                <label class="label">Sottotitolo</label>
                <div class="input">
                  <label for="password" class="icon-left"> <i class="fa fa-edit"></i> </label>
                  <textarea name="articolo_sottotitolo"  spellcheck="false" placeholder="Inserire il sottotitolo" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12 unit">
                <label class="label">URL SEF</label>
                <div class="input">
                  <label for="url" class="icon-left"> <i class="fa fa-globe"></i> </label>
                  <input name="articolo_url" type="text" placeholder="Inserire l'URL" class="form-control">
                </div>
              </div>
            </div>
            <!-- end text password --> 
            
            <!-- start email url -->
            <div class="row col-md-6">
              
              <div class="col-md-12 unit">
                <label class="label">Data Articolo</label>
                <div class="input-group date addon-datepicker">
                    <input name="articolo_data_modifica" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
              </div>
              <div class="col-md-12 unit">
                <label class="label">Testo</label>
                <div class="input">
                  <label for="password" class="icon-left"> <i class="fa fa-edit"></i> </label>
                  <textarea name="articolo_testo"  spellcheck="false" placeholder="Inserire il testo" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input prepend-small-btn">
                    <div class="file-button">
                        Browse
                        <input type="file" name="file" class="btn btn-success" multiple>
                    </div>
                    <input type="text" placeholder="no file selected" readonly="" id="prepend-small-btn" class="form-control">
                </div>
              </div>
             <div class="col-md-12">
                <div class="col-md-4">
                  <label class="radio">
                    <input type="radio" name="articolo_visibile" value="1">
                    <i></i>Pubblica</label>
                </div>
                <div class="col-md-4">
                  <label class="radio">
                    <input type="radio" checked="" name="articolo_visibile" value="2">
                    <i></i>Bozza</label>
                </div>
                <div class="col-md-4">
                  <label class="radio">
                    <input type="radio" name="articolo_visibile" value="3">
                    <i></i>Archivia</label>
                </div>
              </div>
            </div>
            <!-- end email url -->
            
            
            <!--  <div class="row col-md-12">
                   <div class="Gal col-md-12 unit">
                     <form action="../../upload.php" class="dropzone" id="my-awesome-dropzone">
                      <input type="hidden" name="param" value="1" />
                        <div class="fallback">
                         <input name="file" type="file" multiple>
                        </div>
                        <div class="dz-message">
                          <h3>Trascina le immagini oppure clicca qui per selezionarle</h3>
                          <h4>FILE MAX SIZE: 1 MB | Larghezza:1280px | Altezza: 720px | FORMATI: JPG, PNG, GIFF </h4>
                         !-- <p class="lead">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</p> --
                        </div>
                     </form>
                  </div>
             </div> -->
           
       
              <div class="row col-md-12">
                <div style="clear:both;"></div>
                <div class="col-md-12 col-sm-12">
                  <div class="btn-ex-container">
                    <button class="btn btn-primary" type="submit">Crea articolo</button>
                    <i class="zmdi"></i>
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
endif;
/* END ARTICOLO *****************************************************/		   
?>
