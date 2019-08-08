<?php

$server = 'localhost';
$host = 'leandro';
$senha = '5510';
$bd = 'CMM';

$mysqli = new mysqli($server, $host, $senha, $bd);

if(mysqli_connect_errno()){
	echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
	exit();
}

$sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 1";
$entradas = $mysqli->query($sql);
$entrada = $entradas->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT * FROM saidas ORDER BY id DESC LIMIT 1";
$saidas = $mysqli->query($sql);
$saida = $saidas->fetch_array(MYSQLI_ASSOC);

function escolheOpcao1 ($opcao1) 
{
	echo '<option selected value="">--- nenhuma ---</option>';
	if ($opcao1 == 'IN1') {
		echo '<option selected value="IN1">IN1</option>';
	} else {
		echo '<option value="IN1">IN1</option>';
	}

	if ($opcao1 == 'IN2') {
		echo '<option selected value="IN2">IN2</option>';
	} else {
		echo '<option value="IN2">IN2</option>';
	}

	if ($opcao1 == 'IN3') {
		echo '<option selected value="IN3">IN3</option>';
	} else {
		echo '<option value="IN3">IN3</option>';
	}

	if ($opcao1 == 'IN4') {
		echo '<option selected value="IN4">IN4</option>';
	} else {
		echo '<option value="IN4">IN4</option>';
	}

	if ($opcao1 == 'IN5') {
		echo '<option selected value="IN5">IN5</option>';
	} else {
		echo '<option value="IN5">IN5</option>';
	}

	if ($opcao1 == 'IN6') {
		echo '<option selected value="IN6">IN6</option>';
	} else {
		echo '<option value="IN6">IN6</option>';
	}

	if ($opcao1 == 'IN7') {
		echo '<option selected value="IN7">IN7</option>';
	} else {
		echo '<option value="IN7">IN7</option>';
	}
	
	if ($opcao1 == 'IN8') {
		echo '<option selected value="IN8">IN8</option>';
	} else {
		echo '<option value="IN8">IN8</option>';
	}

	if ($opcao1 == 'A') {
		echo '<option selected value="A">A</option>';
	} else {
		echo '<option value="A">A</option>';
	}

	if ($opcao1 == 'B') {
		echo '<option selected value="B">B</option>';
	} else {
		echo '<option value="B">B</option>';
	}

	if ($opcao1 == 'C') {
		echo '<option selected value="C">C</option>';
	} else {
		echo '<option value="C">C</option>';
	}
	
	if ($opcao1 == 'D') {
		echo '<option selected value="D">D</option>';
	} else {
		echo '<option value="D">D</option>';
	}
}

function escolheOpcao2 ($opcao2) 
{
	echo '<option selected value="">--- nenhuma ---</option>';
	if ($opcao2 == 'OUT1') {
		echo '<option selected value="OUT1">OUT1</option>';
	} else {
		echo '<option value="OUT1">OUT1</option>';
	}

	if ($opcao2 == 'OUT2') {
		echo '<option selected value="OUT2">OUT2</option>';
	} else {
		echo '<option value="OUT2">OUT2</option>';
	}

	if ($opcao2 == 'OUT3') {
		echo '<option selected value="OUT3">OUT3</option>';
	} else {
		echo '<option value="OUT3">OUT3</option>';
	}

	if ($opcao2 == 'OUT4') {
		echo '<option selected value="OUT4">OUT4</option>';
	} else {
		echo '<option value="OUT4">OUT4</option>';
	}

	if ($opcao2 == 'OUT5') {
		echo '<option selected value="OUT5">OUT5</option>';
	} else {
		echo '<option value="OUT5">OUT5</option>';
	}

	if ($opcao2 == 'OUT6') {
		echo '<option selected value="OUT6">OUT6</option>';
	} else {
		echo '<option value="OUT6">OUT6</option>';
	}

	if ($opcao2 == 'OUT7') {
		echo '<option selected value="OUT7">OUT7</option>';
	} else {
		echo '<option value="OUT7">OUT7</option>';
	}
	
	if ($opcao2 == 'OUT8') {
		echo '<option selected value="OUT8">OUT8</option>';
	} else {
		echo '<option value="OUT8">OUT8</option>';
	}

	if ($opcao2 == 'OUT9') {
		echo '<option selected value="OUT9">OUT9</option>';
	} else {
		echo '<option value="OUT9">OUT9</option>';
	}

	if ($opcao2 == 'OUT10') {
		echo '<option selected value="OUT10">OUT10</option>';
	} else {
		echo '<option value="OUT10">OUT10</option>';
	}

	if ($opcao2 == 'OUT11') {
		echo '<option selected value="OUT11">OUT11</option>';
	} else {
		echo '<option value="OUT11">OUT11</option>';
	}
	
	if ($opcao2 == 'OUT12') {
		echo '<option selected value="OUT12">OUT12</option>';
	} else {
		echo '<option value="OUT12">OUT12</option>';
	}

	if ($opcao2 == 'OUT13') {
		echo '<option selected value="OUT13">OUT13</option>';
	} else {
		echo '<option value="OUT13">OUT13</option>';
	}

	if ($opcao2 == 'OUT14') {
		echo '<option selected value="OUT14">OUT14</option>';
	} else {
		echo '<option value="OUT14">OUT14</option>';
	}

	if ($opcao2 == 'OUT15') {
		echo '<option selected value="OUT15">OUT15</option>';
	} else {
		echo '<option value="OUT15">OUT15</option>';
	}
	
	if ($opcao2 == 'OUT16') {
		echo '<option selected value="OUT16">OUT16</option>';
	} else {
		echo '<option value="OUT16">OUT16</option>';
	}
}

function escolheOpcao3 ($opcao3) 
{
	echo '<option selected value="">--- nenhuma ---</option>';
	if ($opcao3 == 'MDL1') {
		echo '<option selected value="MDL1">EXPANSOR 1</option>';
	} else {
		echo '<option value="MDL1">EXPANSOR 1</option>';
	}

	if ($opcao3 == 'MDL2') {
		echo '<option selected value="MDL2">EXPANSOR 2</option>';
	} else {
		echo '<option value="MDL2">EXPANSOR 2</option>';
	}
	
	if ($opcao3 == 'MDL3') {
		echo '<option selected value="MDL3">EXPANSOR 3</option>';
	} else {
		echo '<option value="MDL3">EXPANSOR 3</option>';
	}

	if ($opcao3 == 'MDL4') {
		echo '<option selected value="MDL4">EXPANSOR 4</option>';
	} else {
		echo '<option value="MDL4">EXPANSOR 4</option>';
	}
	
	if ($opcao3 == 'MDL5') {
		echo '<option selected value="MDL5">EXPANSOR 5</option>';
	} else {
		echo '<option value="MDL5">EXPANSOR 5</option>';
	}

	if ($opcao3 == 'MDL6') {
		echo '<option selected value="MDL6">EXPANSOR 6</option>';
	} else {
		echo '<option value="MDL6">EXPANSOR 6</option>';
	}

	if ($opcao3 == 'MDL7') {
		echo '<option selected value="MDL7">EXPANSOR 7</option>';
	} else {
		echo '<option value="MDL7">EXPANSOR 7</option>';
	}

	if ($opcao3 == 'MDL8') {
		echo '<option selected value="MDL8">EXPANSOR 8</option>';
	} else {
		echo '<option value="MDL8">EXPANSOR 8</option>';
	}

	if ($opcao3 == 'MDL9') {
		echo '<option selected value="MDL9">EXPANSOR 9</option>';
	} else {
		echo '<option value="MDL9">EXPANSOR 9</option>';
	}

	if ($opcao3 == 'MDL10') {
		echo '<option selected value="MDL10">EXPANSOR 10</option>';
	} else {
		echo '<option value="MDL10">EXPANSOR 10</option>';
	}

	if ($opcao3 == 'MDL11') {
		echo '<option selected value="MDL11">EXPANSOR 11</option>';
	} else {
		echo '<option value="MDL11">EXPANSOR 11</option>';
	}

	if ($opcao3 == 'MDL12') {
		echo '<option selected value="MDL12">EXPANSOR 12</option>';
	} else {
		echo '<option value="MDL12">EXPANSOR 12</option>';
	}
	
	if ($opcao3 == 'MDL13') {
		echo '<option selected value="MDL13">EXPANSOR 13</option>';
	} else {
		echo '<option value="MDL13">EXPANSOR 13</option>';
	}

	if ($opcao3 == 'MDL14') {
		echo '<option selected value="MDL14">EXPANSOR 14</option>';
	} else {
		echo '<option value="MDL14">EXPANSOR 14</option>';
	}

	if ($opcao3 == 'MDL15') {
		echo '<option selected value="MDL15">EXPANSOR 15</option>';
	} else {
		echo '<option value="MDL15">EXPANSOR 15</option>';
	}

	if ($opcao3 == 'MDL16') {
		echo '<option selected value="MDL16">EXPANSOR 16</option>';
	} else {
		echo '<option value="MDL16">EXPANSOR 16</option>';
	}
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
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
				
				<ul class="nav side-menu">
				
		          <li><a><i class="fa fa-desktop"></i> Monitor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="monitor.php">Monitor I/O</a></li>					  
		            </ul>
                  </li>	
                                
                  <li><a><i class="fa fa-wrench"></i> Configurações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                        
                      <li><a href="io.php">CMM I/O</a></li>	
		              <li><a href="setup.php">CMM Setup</a></li>				  
		            </ul>
                  </li>					  
			
		           <li><a><i class="fa fa-qrcode"></i> QR Code <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">				                                              
		              <li><a href="qrcode.php">QR Code Setup</a></li>				  
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

        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Configurações CMM Portaria Remota </h3>
              </div>              
            </div>

            <div class="clearfix"></div>

           
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Entradas / Saídas <small>Passe o mouse por cima do nome para mais detalhes</small></h2>                    
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
				  
			<form method="post" action="setup_back_update.php">
				
                    <form class="form-horizontal form-label-left">

                      <p>Configure as entradas <code>IN</code> e as saidas <code>OUT</code> da controladora, ou use a configuração padrão.</p>
                     
                    <div class="clearfix"></div>
		
			<div class="clearfix"></div>
					
                  </div>
				  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor de QR Code aqui Ex. 192.168.0.101"><h2>Leitor 1</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" class="form-control" placeholder="IP QR Code"/>
                        </div>
                      </div>					  
					  
			<div class="form-group">
                         <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Portão que sera acionado por este Leitor"><h2>Portão</h2></a></label></center>
                          <div class="col-md-2 col-sm-2 col-xs-1">
                          <select class="select2_group form-control" id="abre_social_saida" name="abre_social_saida">                            
                          <?php	escolheOpcao2($saida['abre_social']);?>                            
                          </select>
                          </div>
			</div> 
					  
			<div class="form-group">
                          <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Acionamento manual de saida auxiliar"><h2>AUX 1</h2></a></label></center>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                            <select class="select2_group form-control" id="aux_1_saida" name="aux_1_saida"> 
			    <?php escolheOpcao2($saida['aux_1']);?>                            
                          </select>
                        </div>

			<div class="clearfix"></div>
			
		   </div>
                      	  
					 
		</div>
					  
		<center><button type="submit" class="btn btn-success btn-lg">Salvar Alterações</button></center>
	
		</form>

                </div>
              </div>
            </div>
          </div>
		  
		 
        </div>
		
			
        <!-- /page content -->

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
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
	
	
  </body>
</html>