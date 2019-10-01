<?php

function listaLog () 
{
  echo '<option selected value="">--- nenhuma ---</option>';
  $path = "logqrcode/";
  $diretorio = dir($path);
  while($arquivo = $diretorio -> read()){
    if ($arquivo == '.' || $arquivo == '..') {
      continue;
    }
    echo "<option value=".$arquivo.">".$arquivo."</option>";
  }
  $diretorio -> close();
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="images/favicon.ico" type="image/ico" />
      <title>CMM</title>
      <!-- Bootstrap -->
      <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="../build/css/custom.min.css" rel="stylesheet">
   </head>
   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>CEINTEL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img2.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem vindo,</span>
                <h2>Leandro Leal</h2>
              </div>
            </div>
        
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
				
				<ul class="nav side-menu">
				
		    <li><a><i class="fa fa-desktop"></i> Monitor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="monitor.php">Monitor I/O</a></li>
		      <li><a href="log.php">Log CMM</a></li>
		      <li><a href="log_qrcode.php">Log QR Code</a></li>					  
		     </ul>
                  </li>	
                                
                  <li><a><i class="fa fa-wrench"></i> Configurações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="io.php">CMM I/O</a></li>
		      <li><a href="qrcode.php">QR Code</a></li>                     				  
		     </ul>
                  </li>					  
			
		    	                   
                  <li><a><i class="fa fa-clone"></i> Diagramas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="diagrama.html">Diagrama de ligação CMM</a></li>					  
		            </ul>
                  </li>

		          <li><a><i class="fa fa-folder-open"></i> Manuais <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="manual_CMM.html">CMM</a></li>
		              <li><a href="manual_QR.html">QR Code</a></li>					  
		            </ul>
                  </li>			
                   
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
               <a data-toggle="tooltip" data-placement="top" title="Settings">
               <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="FullScreen">
               <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Lock">
               <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
               <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
               </a>
            </div>
            <!-- /menu footer buttons -->
         </div>
      </div>
      <!-- page content -->
      <div class="right_col" role="main">
      <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Monitor I/O</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
      <div class="col-md-16 col-sm-16 col-xs-16">
         <div class="x_panel">
            <div class="x_title">
               <h2>Log QR Code</h2>
               <ul class="nav navbar-right panel_toolbox">                    
               </ul>
               <div class="clearfix"></div>
            </div>
            <div id="mensagem_alert">
            </div>
            <div class="form-group">
            <center><label class="control-label col-md-2"><h2>Mensagem</h2></a></label></center>
            <div class="col-sm-3">
            <select class="select2_group form-control" id="log_antigo" name="log_antigo"> 
            <?php	 listaLog(); ?>                            
            </select>
            </div>
            </div>
            <textarea name="conteudo_log" id="conteudo_log" style="width:100%" rows="20"></textarea>
            <br><br>
            <button type="submit" onClick="limpaLog();" class="btn btn-success btn-lg">Limpar Log</button>
            <!-- footer content -->
            <footer>
               <div class="pull-right">
                  CMM CEINTEL - Admin Template by <a href="https://www.facebook.com/leandro.lopesleal.1">Leandro Leal</a>
               </div>
               <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="../vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="../vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="../vendors/nprogress/nprogress.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="../build/js/custom.min.js"></script>
      <script>
      function limpaLog() {
        $.ajax({
              url: "limpa_log_qr_code.php",
          }).done(function(data) {
              $('#conteudo_log').val('');
              $('#mensagem_alert').html('Log Salvo com Sucesso!');
              $('#mensagem_alert').addClass("alert alert-success");
              setTimeout(function() {
                  $('#mensagem_alert').html("");
                  $('#mensagem_alert').removeClass("alert alert-success");
              }, 2000);
          });
      }
      $(document).ready(function() {
          function getData() {
              var dados = $('#log_antigo').val();
                $.ajax({
                    url: "controla_log_qrcode.php",
                    data: "arquivo="+dados
                }).done(function(data) {
                    var data = JSON.parse(data);
                    $('#conteudo_log').val(data.conteudo);
                });
            }
            getData();
            setInterval(getData, 1000);
        });
        </script>
   </body>
</html>