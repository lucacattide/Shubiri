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
                <li><a href="index.php?pag=crea-pagina&id=<?php echo $_GET["id"]; ?>"><?php echo $rowCreaPagina["pagina_url"]; ?><i class="zmdi"></i></a></li>
                <!--<li><a href="#">Layout <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Tabby Leftbar</li> -->
            </ul>
        </div>
    </div>
</div>

<div class="btnAdd-page">
 <a class="aggiungi" title="Aggiungi Pagina"  href="#"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></a>
</div>


<div class="row">
  <div class="col-md-12">
   
   <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Nuovo articolo</h3>
       						<p>url articolo</p>
                        </div>
                        <div class="pull-right w-action">
                            <ul class="widget-action-bar">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="zmdi zmdi-more"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="widget-reload"><a href="#"></a></li>
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
                                <form novalidate="" class="j-forms" action="#">

                                <div class="form-content">

                                <!-- start text password -->
                                <div class="row col-md-6">
                                    <div class="col-md-12 unit">
                                        <label class="label">Titolo</label>
                                        <div class="input">
                                            <label for="text" class="icon-left">
                                                <i class="fa fa-edit"></i>
                                            </label>
                                            <textarea name="articolo_titolo"  spellcheck="false" placeholder="Titolo" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 unit">
                                        <label class="label">Sottotitolo</label>
                                        <div class="input">
                                            <label for="password" class="icon-left">
                                                <i class="fa fa-edit"></i>
                                            </label>
                                            <textarea name="articolo_sottotitolo"  spellcheck="false" placeholder="Sottotitolo" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- end text password -->

                                <!-- start email url -->
                                <div class="row col-md-6">
                                    <div class="col-md-12 unit">
                                        <label class="label">Url Parlante</label>
                                        <div class="input">
                                            <label for="url" class="icon-left">
                                                <i class="fa fa-globe"></i>
                                            </label>
                                            <input type="text" placeholder="url parlante" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 unit">
                                        <label class="label">Testo</label>
                                        <div class="input">
                                            <label for="password" class="icon-left">
                                                <i class="fa fa-edit"></i>
                                            </label>
                                            <textarea name="articolo_testo"  spellcheck="false" placeholder="Testo" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-6">
                                        <label class="radio">
                                            <input type="radio" checked="" name="radio" value="1">
                                            <i></i>
                                            Visibile
                                        </label>
                                       </div> 
                                       <div class="col-md-6">
                                        <label class="radio">
                                            <input type="radio" name="radio" value="2">
                                            <i></i>
                                            Non Visibile
                                        </label>
                                       </div>  
                                  </div>
                                </div>
                                <!-- end email url -->

                             

                               

                                </div>
                                <!-- end /.content -->
                                
                                <div class="row col-md-12">  
                                  <div style="clear:both;"></div>
                                  <div class="col-md-4 col-sm-4">
                                    <div class="btn-ex-container">
                                      <button class="btn btn-primary" type="submit">Modifica Pagina</button>
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
  
  
  
  
  
  
  
  
  
    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
        <h3>Nuovo articolo</h3>
        <p>url articolo</p>
        </div>
        <div class="pull-right w-action">
          <ul class="widget-action-bar">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
              <ul class="dropdown-menu">
                <li class="widget-reload"><a href="#"><i class="zmdi "></i></a></li>
                <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
              </ul>
            </li>
          </ul>
        </div>
       
       <div class="row">
        <div class="widget-container">
         <div class="widget-content">
       
              <div class="col-md-12">
              <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="modificaPagina" />
                <input type="hidden" name="pagina_id" value="" />
                <div class="form-content">

                  <div class="row">
                    <!-- TITOLO ARTICOLO -->
                    <div class="col-md-6 unit">
                      <label class="label">Titolo</label>
                      <div class="input">
                        <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                        <textarea name="articolo_titolo"  spellcheck="false" placeholder="Titolo" class="form-control"></textarea>
                      </div>
                    </div>
                    <!-- END TITOLO ARTICOLO -->  
                    
                    <!-- SOTTOTITOLO ARTICOLO -->
                    <div class="col-md-6 unit">
                      <label class="label">Sottotitolo</label>
                      <div class="input">
                        <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                        <textarea name="articolo_sottotitolo"  spellcheck="false" placeholder="Sottotitolo" class="form-control"></textarea>
                      </div>
                    </div>
                    <!-- END SOTTOTITOLO ARTICOLO -->  
                  </div> 
                  
                  <div class="row">
                   <!-- SOTTOTITOLO ARTICOLO -->
                    <div class="col-md-6 unit">
                      <label class="label">Testo</label>
                      <div class="input">
                        <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                        <textarea name="articolo_testo"  spellcheck="false" placeholder="Testo" class="form-control"></textarea>
                      </div>
                    </div>
                    <!-- END OTTOTITOLO ARTICOLO -->  
                  </div>
                  
                  <div class="row">  
                    <div style="clear:both;"></div>
                    <div class="col-md-4 col-sm-4">
                      <div class="btn-ex-container">
                        <button class="btn btn-primary" type="submit">Modifica Pagina</button>
                      </div>
                    </div>
                  </div>
  
                </div>
               </form>
              </div>
        </div>
       </div> 
       
      </div> 
     </div>
    </div>
   </div>
</div>

 <?php 
	 endwhile;
   endif;	 
?>
