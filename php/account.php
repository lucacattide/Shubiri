<div class="page-header filled full-block light">
  <div class="row">
    <div class="col-md-6">
      <h2>Accounts</h2>
      <p>Gestione profili utenti</p>
    </div>
    <div class="col-md-6">
      <ul class="list-page-breadcrumb">
        <li> <a href="index.php" title="Home">Home<i class="zmdi"></i></a> | <a href="index.php?pag=account" title="Accounts"><i class="zmdi"></i>Account</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <h3>Aggiungi profilo</h3>
          <p>Creazione nuovo utente e gestione permessi</p>
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
          <div class="row">
            <div class="col-md-12">
              <form class="j-forms formElement"  method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="account" />
                <input type="hidden" name="liv" value="<?php echo $_SESSION["accesso"]; ?>" />
                <div class="form-content">
                
                <!-- start text password -->
                <div class="row">
                  <div class="col-md-4 unit">
                    <label class="label">Nome utente</label>
                    <div class="input">
                      <label class="icon-left" for="text"> <i class="fa fa-user"></i> </label>
                      <input class="form-control" name="username2" type="text" placeholder="Inserire il nome utente" id="text" required>
                    </div>
                  </div>
                  <div class="col-md-4 unit">
                    <label class="label">Password</label>
                    <div class="input">
                      <label class="icon-left" for="password"> <i class="fa fa-lock"></i> </label>
                      <input class="form-control" name="password2" type="password" placeholder="Inserire la password" id="password" required>
                    </div>
                  </div>
                  <div class="col-md-4 unit">
                    <label class="label">Livello utente</label>
                    <div class="input">
                      <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                      <input required name="livello" class="form-control" type="number" value="<?php $liv = $_SESSION["accesso"] +1;  echo $liv; ?>" min="<?php echo $liv; ?>"  id="livello">
                    </div>
                    <p><small><span class="legenda">2 - Amministratore</span><span class="legenda">3 - Utente</span></small></p>
                  </div>
                  <div style="clear:both;"></div>
                  <div class="col-md-2 col-sm-2">
                    <div class="btn-ex-container">
                      <button class="btn btn-primary" type="submit">Crea profilo</button>
                      <i class="zmdi"></i>
                      <button class="btn" type="reset">Annulla</button>
                    </div>
                  </div>
                   
                </div>
                <!-- end text password -->
               </div>
           </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap">
      <div class="widget-header block-header clearfix">
        <h3>Utenti registrati</h3>
        <p>Gestione profili attivi</p>
      </div>
      <div class="widget-container">
        <div class="widget-content">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nome utente</th>
                  <th>Livelli di accesso</th>
                  <th class="td-center">Azioni</th>
                </tr>
              </thead>
              <tbody class="insertContentQuery">
			  <?php 
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
                      <a  class="btn btn-default btn-sm m-user-edit modifica" href="#"><i class="zmdi zmdi-edit"></i></a> 
                      <input type="hidden" name="eliminAccount" />
                      <input class="idSelection" type="hidden" name="admin_id" value="<?php echo $rowAccount["admin_id"]; ?>" />
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
              ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
