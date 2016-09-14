<?php
  $sqlCreaPagina = "SELECT * FROM `pagina` WHERE pagina_id = '".$_GET["id"]."' "; 
  $rCreaPagina = $mysqli->query($sqlCreaPagina);
  $countCreaPagina =  $rCreaPagina->num_rows;
   if( $countCreaPagina >= 1  ):
     while ( $rowCreaPagina = $rCreaPagina->fetch_array() ):  ?>

<div class="page-header filled full-block light">
  <div class="row">
    <div class="col-md-6">
      <h2><?php echo $rowCreaPagina["pagina_url"]; ?></h2>
      <p><?php echo $rowCreaPagina["pagina_riferimento"];  ?></p>
    </div>
    <div class="col-md-6">
      <ul class="list-page-breadcrumb">
        <li><a href="index.php" title="Home">Home<i class="zmdi"></i></a> | <a href="index.php?pag=crea-pagina&id=<?php echo $_GET["id"]; ?>"><i class="zmdi"></i><?php echo $rowCreaPagina["pagina_url"]; ?></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="btnAdd-page btn-primary"> <a class="aggiungi" title="Aggiungi Pagina"  href="#"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></a> </div>
<div class="row">
  <div class="col-md-12 thumbnail-sortable">
  
   <?php 
     if($countArticolo >= 1):
		
		while ( $rowArticolo = $rArticolo->fetch_array()): 
  ?>		
    <div draggable="true" class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <h3><?php echo $rowArticolo["articolo_titolo"]; ?></h3>
          <p><?php echo $rowArticolo["articolo_url"]; ?></p>
        </div>
        <div class="pull-right w-action">
          <ul class="widget-action-bar">
            <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="zmdi zmdi-more"></i></a>
              <ul class="dropdown-menu">
                <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="widget-container">
        <div class="widget-content">
          <div class="row">
            <div class="col-md-12">
              <form novalidate class="j-forms" action="#">
                <div class="form-content"> 
                  
                  <!-- start text password -->
                  <div class="row col-md-6">
                    <div class="col-md-12 unit">
                      <label class="label">Titolo</label>
                      <div class="input">
                        <label for="text" class="icon-left"> <i class="fa fa-edit"></i> </label>
                        <textarea name="articolo_titolo"  spellcheck="false" placeholder="Inserire il titolo" class="form-control"> <?php echo $rowArticolo["articolo_titolo"]; ?> </textarea>
                      </div>
                    </div>
                    <div class="col-md-12 unit">
                      <label class="label">Sottotitolo</label>
                      <div class="input">
                        <label for="password" class="icon-left"> <i class="fa fa-edit"></i> </label>
                        <textarea name="articolo_sottotitolo"  spellcheck="false" placeholder="Inserire il sottotitolo" class="form-control"><?php echo $rowArticolo["articolo_sottotitolo"]; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 unit">
                      <label class="label">URL SEF</label>
                      <div class="input">
                        <label for="url" class="icon-left"> <i class="fa fa-globe"></i> </label>
                        <input type="text" placeholder="Inserire l'URL parlante" class="form-control" value="<?php echo $rowArticolo["articolo_url"]; ?>">
                      </div>
                    </div>
                  </div>
                  <!-- end text password --> 
                  
                  <!-- start email url -->
                  <div class="row col-md-6">
                    
                    <div class="col-md-12 unit">
                      <label class="label">Testo</label>
                      <div class="input">
                        <label for="password" class="icon-left"> <i class="fa fa-edit"></i> </label>
                        <textarea name="articolo_testo"  spellcheck="false" placeholder="Inserire il corpo del testo" class="form-control"><?php echo $rowArticolo["articolo_testo"]; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 unit">
                      <div class="col-md-12">
                          <label class="label">Data Articolo</label>
                          <div class="input-group date addon-datepicker">
                              <input name="articolo_data_modifica" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-4">
                        <label class="radio">
                          <input type="radio" <?php if( $rowArticolo["articolo_visibile"] == 1 ): echo "checked"; endif; ?> name="radio" value="1">
                          <i></i>Pubblica</label>
                      </div>
                      <div class="col-md-4">
                        <label class="radio">
                          <input type="radio" <?php if( $rowArticolo["articolo_visibile"] == 2 ): echo "checked"; endif; ?> name="radio" value="2">
                          <i></i>Bozza</label>
                      </div>
                       <div class="col-md-4">
                        <label class="radio">
                          <input type="radio" <?php if( $rowArticolo["articolo_visibile"] == 3 ): echo "checked"; endif; ?> name="radio" value="3">
                          <i></i>Archivia</label>
                      </div>
                    </div>
                    
                  <!-- end email url --> 
                  
                  
                  
                </div>
                <!-- end /.content -->
                
                <div class="row col-md-12">
                 <div class="col-md-12 unit">
                
                 <?php 
                   
				   $sqlImmagine = "SELECT * FROM `immagine` WHERE immagine_articolo_id = '".$rowArticolo["articolo_id"]."' ";
                   
				   $rImmagine = $mysqli->query($sqlImmagine);
                   
				   $countImmagine =  $rImmagine->num_rows;
				   
				   if( $countImmagine >= 1 ):
				    
					while ( $rowImmagine = $rImmagine->fetch_array() ):
		 
				 ?>
                 
                 
                    <div class="dz-preview dz-file-preview">
                    <form novalidate class="j-forms formElementDimg" action="#">
                      <input type="hidden" name="eliminaImmagine" />
                      <input type="hidden" name="immagine_id" value="<?php echo $rowImmagine["immagine_label"];  ?>" />
                      <div class="dz-details">
                        <img data-dz-thumbnail src="img/<?php echo $rowImmagine["immagine_label"];  ?>" />
                        <div class="dz-filename"><span data-dz-name><?php echo $rowImmagine["immagine_label"]; ?></span></div>
                        <button type="submit">Elimina</button>
                      </div>
                    </div>
                     
                  
                 <?php 
				    
					endwhile;  
				    
				    endif; 
					
				  ?>
                 
                 </div> 
                </div>
                
                <div class="row">
                  <div style="clear:both;"></div>
                  <div class="col-md-4 col-sm-4">
                    <div class="btn-ex-container">
                      <button class="btn btn-primary" type="submit">Aggiungi Articolo</button>
                    </div>
                  </div>
                </div>
                
                
                <!-- end /.footer -->
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
     <?php 
   endwhile; 
   endif; 
 ?> 
  </div>
</div>
<?php 
	 endwhile;
   endif;	 
?>
