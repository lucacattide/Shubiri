<!doctype html>
<html>
<head>
<!--<meta charset="utf-8">
--><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title>Blanc Desir | Amministrazione</title>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css">
<link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="css/animate.css">
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link type="text/css" rel="stylesheet" href="css/components.css">
<link type="text/css" rel="stylesheet" href="css/widgets.css">
<link rel="stylesheet" type="text/css" href="css/components.css" />
<link type="text/css" rel="stylesheet" href="css/plugins.css">
<link type="text/css" rel="stylesheet" href="css/pages.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
<link type="text/css" rel="stylesheet" href="css/common.css">
<link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/basic.css">
    <link type="text/css" rel="stylesheet" href="css/basic.min.css">
    <link type="text/css" rel="stylesheet" href="css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="css/dropzone.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/style_custom.css">
<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body class="leftbar-view">
<!--Topbar Start Here-->
<header class="topbar clearfix"> 
  <!--Top Search Bar Start Here-->
<!--  <div class="top-search-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="search-input-addon"> <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
            <input type="text" class="form-control top-search-input" placeholder="Cerca">
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!--Top Search Bar End Here--> 
  <!--Topbar Left Branding With Logo Start-->
  <div class="topbar-left pull-left">
    <div class="clearfix">
      <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
        <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span> <span class="logo"> <a href="index.php" title="Blanc Desir"> 
          <!-- <h3 style="margin-top:15px;">Shubiri</h3>--> 
          <img src="../img/logo.png" alt="Blanc Desir" /> </a> </span> </li>
      </ul>
      <!--Mobile Search and Rightbar Toggle-->
      <ul class="branding-right pull-right">
        <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
      </ul>
    </div>
  </div>
  <!--Topbar Left Branding With Logo End--> 
  <!--Topbar Right Start-->
  <div class="topbar-right pull-right">
    <div class="clearfix"> 
      <!--Mobile View Leftbar Toggle-->
      <ul class="left-bar-switch pull-left">
        <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
      </ul>
      <ul class="pull-right top-right-icons">
       <!-- <li><a href="#" class="btn-top-search" title="Cerca"><i class="zmdi zmdi-search"></i></a></li>-->
       <!-- <li><a href="#" class="right-toggle-switch" title="Assistenza"><i class="zmdi zmdi-format-align-left"></i><span class="more-noty"></span></a></li>-->
      </ul>
    </div>
  </div>
  <!--Topbar Right End--> 
</header>
<!--Topbar End Here--> 
<!--Leftbar Start Here-->
<aside class="leftbar material-leftbar">
  <div class="left-aside-container"> 
    <!-- menu liv1 ------------------------------->
    <?php include("menu/barra-menu.php"); ?>
    <!-- end menu liv1 --------------------------->
    <div class="tabby-leftbar">
      <ul class="nav nav-tabs material-tabs" role="tablist">
        <li class="active"><a href="#menu" aria-controls="message" role="tab" data-toggle="tab"> <i class="zmdi zmdi-view-headline"></i></a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="menu">
          <ul class="list-accordion">
            <li class="list-title">Sezioni</li>
            <li class="list-title"><a href="index.php?pag=pagina">Gestisci Pagine</a></li>
            <li class="list-title">Pagine</li>
            <li> <a href="#"><i class="zmdi zmdi-link"></i><span class="list-label">Pagine attive</span></a>
              <ul>
                <?php
							  $sqlListPagina = "SELECT * FROM `pagina`"; 
							  $rListPagina = $mysqli->query($sqlListPagina);
							  $countListPagina =  $rListPagina->num_rows;
							  if( $countListPagina >= 1  ):
							  while ( $rowListPagina = $rListPagina->fetch_array() ):
							 ?>
                <li> <a href="index.php?pag=crea-pagina&id=<?php echo $rowListPagina["pagina_id"];  ?>"><i class="zmdi zmdi-link"></i> <?php echo $rowListPagina["pagina_url"];  ?> </a> </li>
                <?php endwhile; endif;  ?>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>
</aside>
<!--Leftbar End Here--> 
<!--Page Container Start Here-->
<section class="main-container">
  <div class="container-fluid">
    <?php 
			  
		 switch($pag):
		 
		 	case "":
			
				include("pagina.php");
				break;

			case "account":
			 include("account.php");
			break;
			
			case "pagina":
			 include("pagina.php");
			break;
			
			case "crea-pagina":
			 include("crea-pagina.php");
			break;
			 
		 endswitch;	 
				
		?>
  </div>
</section>
<!--Page Container End Here-->

<footer class="footer-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="footer-left"> <a href="http://www.laboratorio-a.it" title="Powered by laboratorio-a" target="new"><img class="img_footer" src="images/logo_lab.svg" alt="laboratorio-a" /></a> </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="footer-right"> <span class="footer-meta"><small>&copy; Shubiri 2016</small></span> </div>
      </div>
    </div>
  </div>
</footer>

<!--Rightbar Start Here-->
<!--<aside class="rightbar">
  <div class="rightbar-container">
    <div class="aside-chat-box">
      <div class="coversation-toolbar">
        <div class="chat-back"> <i class="zmdi zmdi-long-arrow-left"></i> </div>
        <div class="active-conversation">
          <div class="chat-avatar"> <img src="images/avatar/amarkdalen.jpg" alt="user"> </div>
          <div class="chat-user-status">
            <ul>
              <li>Feeling Blessed</li>
              <li>Amarkdalen</li>
            </ul>
          </div>
        </div>
        <div class="conversation-action">
          <ul>
            <li class="dropdown"> <a href="#" class="btn-more dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="zmdi zmdi-attachment-alt"></i>Allega File</a></li>
                <li><a href="#"><i class="zmdi zmdi-mic"></i>Voce</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="conversation-container">
        <div class="conversation-row even">
          <ul class="conversation-list">
            <li>
              <p> Hi! this is mike how can I help you? </p>
            </li>
            <li>
              <p> Hello Sir! </p>
            </li>
          </ul>
        </div>
        <div class="conversation-row odd">
          <ul class="conversation-list">
            <li>
              <p> Hi! Mike I need a support my account is suspended but I don't know why? </p>
            </li>
          </ul>
        </div>
        <div class="conversation-row even">
          <ul class="conversation-list">
            <li>
              <p> Ok Sir! Let me check this issue please wait a min </p>
            </li>
          </ul>
        </div>
        <div class="conversation-row odd">
          <ul class="conversation-list">
            <li>
              <p> Ok sure :) </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="chat-text-input">
        <input type="text" class="form-control">
      </div>
    </div>
    <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
      <li class="active"><a href="#chat" aria-controls="message" role="tab" data-toggle="tab">Ticket</a></li>
      <li><a href="#activities" aria-controls="notifications" role="tab" data-toggle="tab">Attività</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="chat">
        <div class="chat-user-container">
          <h3 class="clearfix"><span class="pull-left">Operatori</span><span class="pull-right online-counter">3 Online</span></h3>
          <ul class="chat-user-list">
            <li>
              <div data-trigger="hover" title="Robertoortiz" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/robertoortiz.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Stato: <span>Online</span></li>
                                        <li>Ruolo: <span>(Ruolo -> Amministratore | Utente)</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left"><span class="chat-avatar"><img src="images/avatar/robertoortiz.jpg" alt="Avatar"></span><span class="chat-u-info">Adellecharles<cite>New York</cite></span> </div>
              <span class="chat-u-status"><i class="fa fa-circle"></i></span> </li>
            <li class="chat-u-online">
              <div data-trigger="hover" title="Kurafire" data-content="<div class='chat-user-info'>
                                         <div class='chat-user-avatar'>
                                        <img src='images/avatar/robertoortiz.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Stato: <span>Online</span></li>
                                        <li>Ruolo: <span>(Ruolo -> Amministratore | Utente)</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left"><span class="chat-avatar"><img src="images/avatar/kurafire.jpg" alt="Avatar"></span><span class="chat-u-info">Kurafire<cite>New York</cite></span> </div>
              <span class="chat-u-status"><i class="fa fa-circle"></i></span> </li>
            <li class="chat-u-busy">
              <div data-trigger="hover" title="Joostvanderree" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/robertoortiz.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Stato: <span>Online</span></li>
                                        <li>Ruolo: <span>(Ruolo -> Amministratore | Utente)</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left"> <span class="chat-avatar"><img src="images/avatar/joostvanderree.jpg" alt="Avatar"></span><span class="chat-u-info">Joostvanderree<cite>New York</cite></span> </div>
              <span class="chat-u-status"><i class="fa fa-circle"></i></span> </li>
          </ul>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="activities">
        <div class="activities-timeline">
          <h3 class="tab-pane-header">Attività Recenti</h3>
          <ul class="activities-list">
            <li>
              <div class="activities-badge"> <span class="w_bg_amber"><i class="zmdi zmdi-ticket-star"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Resolved Tickets #LTK7865</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> 30 min ago </div>
              </div>
            </li>
            <li>
              <div class="activities-badge"> <span class="w_bg_cyan"><i class="zmdi zmdi-file-plus"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Files Uploaded</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> 1 hour ago </div>
                <div class="activities-post">
                  <ul class="new-file-lists">
                    <li><a href="#"><i class="fa fa-file-text"></i> change-log.txt</a></li>
                    <li><a href="#"><i class="fa fa-file-audio-o"></i> skype-conversation.mp3</a></li>
                    <li><a href="#"><i class="fa fa-file-powerpoint-o"></i> presentation.ppt</a></li>
                    <li><a href="#"><i class="fa fa-file-video-o"></i> howtouse.avi</a></li>
                    <li><a href="#"><i class="fa fa-file-image-o"></i> screenshot.jpg</a></li>
                    <li><a href="#"><i class="fa fa-file-word-o"></i> nda.doc</a></li>
                    <li><a href="#"><i class="fa fa-file-pdf-o"></i> resume.pdf</a></li>
                    <li><a href="#"><i class="fa fa-file-archive-o"></i> all-files.zip</a></li>
                    <li><a href="#"><i class="fa fa-file-excel-o"></i> bill.xls</a></li>
                    <li><a href="#">+10</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="activities-badge"> <span class="w_bg_light_blue"><i class="zmdi zmdi-image"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Images Uploaded</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> July 22 at 1:12pm </div>
                <div class="activities-post">
                  <ul class="new-image-lists">
                    <li><a href="#"><img src="images/img-1-thumb.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="images/img-2-thumb.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="images/img-3-thumb.jpg" alt="image"></a></li>
                    <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="activities-badge"> <span class="w_bg_green"><i class="zmdi zmdi-accounts-alt"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Users Approved</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> July 22 at 1:12pm </div>
                <div class="activities-post">
                  <ul class="new-user-lists">
                    <li><a href="#"><img src="images/avatar/oykun.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="images/avatar/mds.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="images/avatar/robertoortiz.jpg" alt="image"></a></li>
                    <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="activities-badge"> <span class="w_bg_deep_purple"><i class="zmdi zmdi-file-text"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Post New Article</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> July 22 at 1:12pm </div>
                <div class="activities-post">
                  <ul class="new-post-lists">
                    <li><a href="#">Man in the Verde Valley</a></li>
                    <li><a href="#">Sinagua Pueblo Life</a></li>
                    <li><a href="#">Montezuma Well</a></li>
                    <li><a href="#">The Natural Scene</a></li>
                    <li><a href="#">+6</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="activities-badge"> <span class="w_bg_teal"><i class="zmdi zmdi-comments"></i></span> </div>
              <div class="activities-details">
                <h3 class="activities-header"><a href="#">Comments Replied</a></h3>
                <div class="activities-meta"> <i class="fa fa-clock-o"></i> July 22 at 1:12pm </div>
                <div class="activities-post">
                  <ul class="new-comments-lists">
                    <li><a href="#">As long as you are reasonably careful about where you step and avoid putting ...</a></li>
                    <li><a href="#">Montezuma Castle is 5 miles north of Camp Verde, 60 miles south...</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</aside>
--><!-- MODAL FORM AGGIORNAMENTO -->
<aside>
  <div class="dialogWindowMod">
    <div class="modal-dialog"> </div>
  </div>
</aside>
<!-- END MODAL FORM AGGIORNAMENTO  --> 
<!--Rightbar End Here--> 
<script src="js/lib/jquery.js"></script> 
<script src="js/lib/jquery-migrate.js"></script> 
<script src="js/lib/bootstrap.js"></script> 
<script src="js/lib/jquery.ui.js"></script> 
<script src="js/lib/jRespond.js"></script> 
<script src="js/lib/nav.accordion.js"></script> 
<script src="js/lib/hover.intent.js"></script> 
<script src="js/lib/hammerjs.js"></script> 
<script src="js/lib/jquery.hammer.js"></script> 
<script src="js/lib/jquery.fitvids.js"></script> 
<script src="js/lib/scrollup.js"></script> 
<script src="js/lib/smoothscroll.js"></script> 
<script src="js/lib/jquery.slimscroll.js"></script> 
<script src="js/lib/jquery.syntaxhighlighter.js"></script> 
<script src="js/lib/velocity.js"></script> 
<script src="js/lib/smart-resize.js"></script> 

<!--Ui Elements--> 
<script src="js/lib/jquery.tagsinput.js"></script> 
<script src="js/lib/bootbox.js"></script> 
<script src="js/lib/jquery.mask.js"></script> 
<script src="js/lib/jquery.bootstrap-touchspin.js"></script> 
<script src="js/lib/bootstrap-filestyle.js"></script> 
<script src="js/lib/selectize.js"></script> 
<script src="js/lib/bootstrap-datepicker.js"></script>
<script src="js/lib/icheck.js"></script>

<!--Forms--> 
<script src="js/lib/jquery.maskedinput.js"></script> 
<script src="js/lib/jquery.validate.js"></script> 
<script src="js/lib/jquery.form.js"></script> 
<script src="js/lib/j-forms.js"></script> 
<script src="js/lib/jquery.loadmask.js"></script> 
<script src="js/apps.js"></script> 
<script src="js/lib/dropzone-amd-module.js"></script>
<script src="js/lib/dropzone.js"></script>
<script src="js/lib/jquery.sortable.min.js" type="text/javascript"></script>


<!--AJAX--> 
<script type="text/javascript">

/* DOCUMENT READY */
$(document).ready(function(e) {
	
	
	 

	  $(".Gal2").dropzone({ url: "upload2.php"});
	  
	  $('.addon-datepicker').DatePicker({
            orientation: "bottom",
            daysOfWeekDisabled: "1",
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
			format:"yyyy-mm-dd"
       });
    

	  /* VARIABILE PASSAGGIO VALORI FORM DI MODIFICA */
	  $(document).on("click", 'a.modifica', function(e){
			 e.preventDefault(); 
			 var modId = $(this).parents();
			 var ID = modId.children(".formElement .idSelection").val();
			 $(".dialogWindowMod .modal-dialog").addClass("mWidth"); 
			 $.post("php/config/forms_modifica.php", { pag: "<?php echo $pag; ?>", id:ID  }, function(data){
			  $(".dialogWindowMod .modal-dialog").empty();	
			  $(".dialogWindowMod .modal-dialog").html(data);
			  $(".dialogWindowMod .modal-header .bootbox-close-button, .chiudi").on("click", function(){
				  $(".dialogWindowMod").fadeOut(1000);
				  $(".dialogWindowMod").removeClass("mWidth"); 
				  
			  });
			     /**
				   * Tags Input
				   * jquery.tagsinput.js
				   * tagsinput.css
				   * */
				  if ($.fn.tagsInput) {
					  $('.tags-input').each(function() {
						  var tagsType = $(this).data('type')
						  var highlightColor = $(this).data('highlight-color')
						  if (tagsType === 'tags') {
							  $(this).tagsInput({
								  width: 'auto'
							  });
						  }
						  if (tagsType === 'highlighted-tags') {
							  $(this).tagsInput({
								  width: 'auto',
								  onChange: function(elem, elem_tags) {
									  var languages = ['php', 'ruby', 'javascript'];
									  $('.tag', elem_tags).each(function() {
										  if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
									  });
								  }
							  });
						  }
					  });
				  }
			 });
			 $(".dialogWindowMod").fadeToggle(1000);
			  
					 
	  });
	  
	  
	  
	  /* VARIABILE PASSAGGIO VALORI FORM DI AGGIUNTA */
	  $(document).on("click", 'a.aggiungi', function(e){
			 e.preventDefault();
			 $(".dialogWindowMod .modal-dialog").addClass("mWidth"); 
			 $.post("php/config/forms_aggiungi.php", { pag: "<?php echo $pag; ?>", id: "<?php if(empty($_GET["id"])):  else: echo $_GET["id"]; endif; ?>" }, function(data){
			  $(".dialogWindowMod .modal-dialog").empty();	
			  $(".dialogWindowMod .modal-dialog").html(data);
			  //$(".Gal").dropzone({ url: "upload.php" });
			  $('.addon-datepicker').DatePicker({
					orientation: "bottom",
					daysOfWeekDisabled: "1",
					calendarWeeks: true,
					autoclose: true,
					todayHighlight: true,
					format:"yyyy-mm-dd"
			  });
			  $(".dialogWindowMod .modal-header .bootbox-close-button").on("click", function(){
				  $(".dialogWindowMod").fadeOut(1000);
				  $(".dialogWindowMod").removeClass("mWidth"); 
			  });
		
			  
			     
			     /**
				   * Tags Input
				   * jquery.tagsinput.js
				   * tagsinput.css
				   * */
				  if ($.fn.tagsInput) {
					  $('.tags-input').each(function() {
						  var tagsType = $(this).data('type')
						  var highlightColor = $(this).data('highlight-color')
						  if (tagsType === 'tags') {
							  $(this).tagsInput({
								  width: 'auto'
							  });
						  }
						  if (tagsType === 'highlighted-tags') {
							  $(this).tagsInput({
								  width: 'auto',
								  onChange: function(elem, elem_tags) {
									  var languages = ['php', 'ruby', 'javascript'];
									  $('.tag', elem_tags).each(function() {
										  if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0) $(this).css('background-color', highlightColor);
									  });
								  }
							  });
						  }
					  });
				  }				   
			 });
			 $(".dialogWindowMod").fadeToggle(1000);
					 
	  });

	  // SUBMIT FORM
	  $(document).on("submit", '.formElement', function(e) {
			e.preventDefault(); 
			// $(".dialogWindowMod").fadeOut(1000);
			var data = new FormData(this); 
			$.ajax({
				url: 'php/config/ajax.php',
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "html",
				type: 'POST',
				success: function(data) {
				  bootbox.alert(""+data+"", function () {});
				  $.post("php/config/caricamento.php", {pag: "<?php echo $pag; ?>"}, function(data){
					$(".insertContentQuery").empty();	
					$(".insertContentQuery").html(data);
					$(".dialogWindowMod").removeClass("mWidth"); 
					$(".dialogWindowMod").fadeOut(1000);	
				  });
				}
		   });
	   }); 
	   
	   //SORTABLE TAB
	   $('.thumbnail-sortable').sortable({
           placeholderClass: 'col-md-12 margin-auto-sortable',
       });
	   
	   
	   // ELIMINA IMMAGINE
	   $(document).on("submit", '.formElementDimg', function(e){
	        e.preventDefault(); 
			var data = new FormData(this); 
			$.ajax({
				url: 'php/config/ajax.php',
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "html",
				type: 'POST',
				success: function(data) {
				  bootbox.alert(""+data+"", function () {});
				}
		   });
		
	   });
	      
  });	
 

</script>
</body>
</html>