<div class="page-header filled full-block light">
  <div class="row">
    <div class="col-md-6">
      <h2>Accounts</h2>
      <p>Crea nuovo amministratore</p>
    </div>
    <div class="col-md-6">
      <ul class="list-page-breadcrumb">
        <li><a href="index.php?pag=account">Account<i class="zmdi"></i></a></li>
        <!--<li><a href="#">Layout <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Tabby Leftbar</li> -->
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
          <h3>Aggiungi amministratore</h3>
          <p>Crea nuovo user, password e gestisci permessi</p>
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
                    <label class="label">USER</label>
                    <div class="input">
                      <label class="icon-left" for="text"> <i class="fa fa-user"></i> </label>
                      <input class="form-control" name="username2" type="text" placeholder="USERNAME" id="text" required>
                    </div>
                  </div>
                  <div class="col-md-4 unit">
                    <label class="label">PASSWORD</label>
                    <div class="input">
                      <label class="icon-left" for="password"> <i class="fa fa-lock"></i> </label>
                      <input class="form-control" name="password2" type="password" placeholder="PASSWORD" id="password" required>
                    </div>
                  </div>
                  <div class="col-md-4 unit">
                    <label class="label">Livello di gestione</label>
                    <div class="input">
                      <label class="icon-left" for="text"> <i class="fa fa-terminal"></i> </label>
                      <input required name="livello" class="form-control" type="number" value="<?php $liv = $_SESSION["accesso"] +1;  echo $liv; ?>" min="<?php echo $liv; ?>" id="livello">
                    </div>
                  </div>
                  <div style="clear:both;"></div>
                  <div class="col-md-4 col-sm-4">
                    <div class="btn-ex-container">
                      <button class="btn btn-primary" type="submit">Aggiungi Amministratore</button>
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
        <h3>Lista utenti admin</h3>
        <p>Gestisci gli utenti</p>
      </div>
      <div class="widget-container">
        <div class="widget-content">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Livelli di Accesso</th>
                  <th class="td-center">Action</th>
                </tr>
              </thead>
              <tbody class="insertContentQuery">
			  <?php 
               /*  LOOP ACCOUNT ADMIN  */
               if($countAccount >= 1):
               
                  while ( $rowAccount = $rAccount->fetch_array() ):
                  
                   	 if( $rowAccount["admin_accesso"] == 1 ):
                   
                     else:
                 ?>
                 <tr>
                  <td><?php echo $rowAccount["admin_user"];  ?></td>
                  <td><label class="label label-info"><?php echo $rowAccount["admin_accesso"];  ?></label></td>
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
