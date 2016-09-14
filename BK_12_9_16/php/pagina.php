<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>Pagine</h2>
            <p>Gestione pagine</p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="index.php" title="Home">Home<i class="zmdi"></i></a> | <a href="index.php?pag=pagina" title="Pagine"><i class="zmdi"></i>Pagine</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="btnAdd-page btn-primary">
 <a class="aggiungi" title="Aggiungi Pagina"  href="#"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></a>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
        <h3>Pagine attive</h3>
        <p>Gestione pagine pubblicate</p>
        </div>
        <div class="pull-right w-action">
          <ul class="widget-action-bar">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
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
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nome file</th>
                  <th>URL SEF</th>
                  <th>Livello pagina</th>
                  <th class="td-center">Azioni</th>
                </tr>
              </thead>
              <tbody class="insertContentQuery">
			  <?php 
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
				     if($rowPagina["pagina_dipendenza_id"] == 0): echo "Pagina primaria"; else:  
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
				 
			  else:
		
              endif;  
              ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>