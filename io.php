<?php$server = 'localhost';$host = 'leandro';$senha = '5510';$bd = 'CMM';$mysqli = new mysqli($server, $host, $senha, $bd);if(mysqli_connect_errno()){echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;exit();}$sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 1";$entradas = $mysqli->query($sql);$entrada = $entradas->fetch_array(MYSQLI_ASSOC);$sql = "SELECT * FROM saidas ORDER BY id DESC LIMIT 1";$saidas = $mysqli->query($sql);$saida = $saidas->fetch_array(MYSQLI_ASSOC);function escolheOpcao1 ($opcao1) {	echo '<option selected value="">--- nenhuma ---</option>';	if ($opcao1 == 'pm_social_externo') {		echo '<option selected value="pm_social_externo">PM Social Externo</option>';	} else {		echo '<option value="pm_social_externo">PM Social Externo</option>';	}	if ($opcao1 == 'pm_social_interno') {		echo '<option selected value="pm_social_interno">PM Social Interno</option>';	} else {		echo '<option value="pm_social_interno">PM Social Interno</option>';	}	if ($opcao1 == 'pm_social_acesso') {		echo '<option selected value="pm_social_acesso">PM Social Acesso</option>';	} else {		echo '<option value="apm_social_acesso">PM Social Acesso</option>';	}	if ($opcao1 == 'pm_quadro_comando') {		echo '<option selected value="pm_quadro_comando">PM Quadro Comando</option>';	} else {		echo '<option value="pm_quadro_comando">PM Quadro Comando</option>';	}	if ($opcao1 == 'pmg') {		echo '<option selected value="pmg">PM Garagem Externo</option>';	} else {		echo '<option value="pmg">PM Garagem Externo</option>';	}	if ($opcao1 == 'abre_social_externo') {		echo '<option selected value="abre_social_externo">Abre Social Externo</option>';	} else {		echo '<option value="abre_social_externo">Abre Social Externo</option>';	}	if ($opcao1 == 'abre_social_interno') {		echo '<option selected value="abre_social_interno">Abre Social Interno</option>';	} else {		echo '<option value="abre_social_interno">Abre Social Interno</option>';	}		if ($opcao1 == 'abre_social_acesso') {		echo '<option selected value="abre_social_acesso">Abre Social Acesso</option>';	} else {		echo '<option value="abre_social_acesso">Abre Social Acesso</option>';	}	if ($opcao1 == 'abre_garagem') {		echo '<option selected value="abre_garagem">Abre Garagem</option>';	} else {		echo '<option value="abre_garagem">Abre Garagem</option>';	}	if ($opcao1 == 'quebra_vidro_interno_eclusa') {		echo '<option selected value="quebra_vidro_interno_eclusa">Quebra de vidro Eclusa</option>';	} else {		echo '<option value="quebra_vidro_interno_eclusa">Quebra de vidro Eclusa</option>';	}	if ($opcao1 == 'quebra_vidro_dentro_predio') {		echo '<option selected value="quebra_vidro_dentro_predio">Quebra de vidro Prédio</option>';	} else {		echo '<option value="quebra_vidro_dentro_predio">Quebra de vidro Prédio</option>';	}	if ($opcao1 == 'queda_energia_eletrica') {		echo '<option selected value="queda_energia_eletrica">Queda de energia elétrica</option>';	} else {		echo '<option value="queda_energia_eletrica">Queda de energia elétrica</option>';	}	if ($opcao1 == 'mudanca_sociais') {		echo '<option selected value="mudanca_sociais">Chave de mudança Sociais</option>';	} else {		echo '<option value="mudanca_sociais">Chave de mudança Sociais</option>';	}	if ($opcao1 == 'mudanca_garagem') {		echo '<option selected value="mudanca_garagem">Chave de mudança Garagem</option>';	} else {		echo '<option value="mudanca_garagem">Chave de mudança Garagem</option>';	}		if ($opcao1 == 'barreira') {		echo '<option selected value="barreira">Barreira óptica Garagem</option>';	} else {		echo '<option value="barreira">Barreira óptica Garagem</option>';	}	}function escolheOpcao2 ($opcao2) {	echo '<option selected value="">--- nenhuma ---</option>';	if ($opcao2 == 'abre_social_externo') {		echo '<option selected value="abre_social_externo">Abre Social Externo</option>';	} else {		echo '<option value="abre_social_externo">Abre Social Externo</option>';	}	if ($opcao2 == 'abre_social_interno') {		echo '<option selected value="abre_social_interno">Abre Social Interno</option>';	} else {		echo '<option value="abre_social_interno">Abre Social Interno</option>';	}	if ($opcao2 == 'abre_social_acesso') {		echo '<option selected value="abre_social_acesso">Abre Social Acesso</option>';	} else {		echo '<option value="abre_social_acesso">Abre Social Acesso</option>';	}		if ($opcao2 == 'abre_garagem') {		echo '<option selected value="abre_garagem">Abre Garagem</option>';	} else {		echo '<option value="abre_garagem">Abre Garagem</option>';	}	if ($opcao2 == 'impede_abertura_externo') {		echo '<option selected value="impede_abertura_externo">Impede Abre Social Externo</option>';	} else {		echo '<option value="impede_abertura_externo">Impede Abre Social Externo</option>';	}	if ($opcao2 == 'impede_abertura_interno') {		echo '<option selected value="impede_abertura_interno">Impede Abre Social Interno</option>';	} else {		echo '<option value="impede_abertura_interno">Impede Abre Social Interno</option>';	}	if ($opcao2 == 'iluminacao_sociais') {		echo '<option selected value="iluminacao_sociais">Iluminação Sociais</option>';	} else {		echo '<option value="iluminacao_sociais">Iluminação Sociais</option>';	}	if ($opcao2 == 'iluminacao_externa') {		echo '<option selected value="iluminacao_externa">Iluminação Externa</option>';	} else {		echo '<option value="iluminacao_externa">Iluminação Externa</option>';	}	if ($opcao2 == 'sinaleira') {		echo '<option selected value="sinaleira">Sinaleira verde/vermelho</option>';	} else {		echo '<option value="sinaleira">Sinaleira verde/vermelho</option>';	}	if ($opcao2 == 'sirene') {		echo '<option selected value="sirene">Sirene alarme</option>';	} else {		echo '<option value="sirene">Sirene </option>';	}	if ($opcao2 == 'foto_sociais') {		echo '<option selected value="foto_sociais">Foto Sociais</option>';	} else {		echo '<option value="foto_sociais">Foto Sociais</option>';	}	if ($opcao2 == 'foto_garagem') {		echo '<option selected value="foto_garagem">Foto Garagem</option>';	} else {		echo '<option value="foto_garagem">Foto Garagem</option>';	}		if ($opcao2 == 'exaustor1') {		echo '<option selected value="exaustor1">Exaustor 1</option>';	} else {		echo '<option value="exaustor1">Exaustor 1</option>';	}	if ($opcao2 == 'exaustor2') {		echo '<option selected value="exaustor2">Exaustor 2</option>';	} else {		echo '<option value="exaustor2">Exaustor 2</option>';	}			if ($opcao2 == 'bomba1') {		echo '<option selected value="bomba1">Bomba 1</option>';	} else {		echo '<option value="bomba1">Bomba 1</option>';	}	if ($opcao2 == 'bomba2') {		echo '<option selected value="bomba2">Bomba 2</option>';	} else {		echo '<option value="bomba2">Bomba 2</option>';	}	if ($opcao2 == 'aux1') {		echo '<option selected value="aux1">AUX 1</option>';	} else {		echo '<option value="aux1">AUX 1</option>';	}		if ($opcao2 == 'aux2') {		echo '<option selected value="aux2">AUX 2</option>';	} else {		echo '<option value="aux2">AUX 2</option>';	}}function escolheOpcao3 ($opcao3) {	echo '<option selected value="">--- nenhuma ---</option>';	if ($opcao3 == 'sociais1') {		echo '<option selected value="sociais1">Sociais 1</option>';	} else {		echo '<option value="sociais1">Sociais 1</option>';	}	if ($opcao3 == 'sociais2') {		echo '<option selected value="sociais2">Sociais 2</option>';	} else {		echo '<option value="sociais2">Sociais 2</option>';	}	if ($opcao3 == 'porta1') {		echo '<option selected value="porta1">Porta 1</option>';	} else {		echo '<option value="porta1">Porta 1</option>';	}	if ($opcao3 == 'porta2') {		echo '<option selected value="porta2">Porta 2</option>';	} else {		echo '<option value="porta2">Porta 2</option>';	}	if ($opcao3 == 'porta3') {		echo '<option selected value="porta3">Porta 3</option>';	} else {		echo '<option value="porta3">Porta 3</option>';	}	if ($opcao3 == 'porta4') {		echo '<option selected value="porta4">Porta 4</option>';	} else {		echo '<option value="porta4">Porta 4</option>';	}	if ($opcao3 == 'garagem1') {		echo '<option selected value="garagem1">Garagem 1</option>';	} else {		echo '<option value="garagem1">Garagem 1</option>';	}		if ($opcao3 == 'garagem2') {		echo '<option selected value="garagem2">Garagem 2</option>';	} else {		echo '<option value="garagem2">Garagem 2</option>';	}		if ($opcao3 == 'garagem3') {		echo '<option selected value="garagem1">Garagem 3</option>';	} else {		echo '<option value="garagem3">Garagem 3</option>';	}		if ($opcao3 == 'hall1') {		echo '<option selected value="hall1">Porta Hall 1</option>';	} else {		echo '<option value="hall1">Porta Hall 1</option>';	}	if ($opcao3 == 'hall2') {		echo '<option selected value="hall2">Porta Hall 2</option>';	} else {		echo '<option value="hall2">Porta Hall 2</option>';	}	if ($opcao3 == 'alarme1') {		echo '<option selected value="alarme1">Alarme 1</option>';	} else {		echo '<option value="alarme1">Alarme 1</option>';	}	if ($opcao3 == 'alarme2') {		echo '<option selected value="alarme2">Alarme 2</option>';	} else {		echo '<option value="alarme2">Alarme 2</option>';	}	if ($opcao3 == 'alarme3') {		echo '<option selected value="alarme3">Alarme 3</option>';	} else {		echo '<option value="alarme3">Alarme 3</option>';	}	}?><!DOCTYPE html><html lang="en">  <head>    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    <!-- Meta, title, CSS, favicons, etc. -->    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">	<link rel="icon" href="images/favicon.ico" type="image/ico" />    <title>CMM</title>    <!-- Bootstrap -->    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    <!-- Font Awesome -->    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">    <!-- NProgress -->    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">        <!-- Custom Theme Style -->    <link href="../build/css/custom.min.css" rel="stylesheet">  </head>  <body class="nav-md">    <div class="container body">      <div class="main_container">        <div class="col-md-3 left_col">          <div class="left_col scroll-view">            <div class="navbar nav_title" style="border: 0;">              <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>CEINTEL</span></a>            </div>            <div class="clearfix"></div>            <!-- menu profile quick info -->            <div class="profile clearfix">              <div class="profile_pic">                <img src="images/img2.jpg" alt="..." class="img-circle profile_img">              </div>              <div class="profile_info">                <span>Bem vindo,</span>                <h2>Leandro Leal</h2>              </div>            </div>                   <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">              <div class="menu_section">                								<ul class="nav side-menu">						    <li><a><i class="fa fa-desktop"></i> Monitor <span class="fa fa-chevron-down"></span></a>                    <ul class="nav child_menu">				                                              <li><a href="monitor.php">Monitor I/O</a></li>		      <li><a href="log.php">Log CMM</a></li>		      <li><a href="log_qrcode.php">Log QR Code</a></li>					  		     </ul>                  </li>	                                                  <li><a><i class="fa fa-wrench"></i> Configurações <span class="fa fa-chevron-down"></span></a>                    <ul class="nav child_menu">				                                              <li><a href="io.php">CMM I/O</a></li>		      <li><a href="qrcode.php">QR Code</a></li>                     				  		     </ul>                  </li>					  					    	                                     <li><a><i class="fa fa-clone"></i> Diagramas <span class="fa fa-chevron-down"></span></a>                    <ul class="nav child_menu">				                                              <li><a href="diagrama.html">Diagrama de ligação CMM</a></li>					  		            </ul>                  </li>		          <li><a><i class="fa fa-folder-open"></i> Manuais <span class="fa fa-chevron-down"></span></a>                    <ul class="nav child_menu">				                                              <li><a href="manual_CMM.html">CMM</a></li>		              <li><a href="manual_QR.html">QR Code</a></li>					  		            </ul>                  </li>			                                   </ul>              </div>            </div>			            <!-- /sidebar menu -->            <!-- /menu footer buttons -->            <div class="sidebar-footer hidden-small">              <a data-toggle="tooltip" data-placement="top" title="Settings">                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="FullScreen">                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="Lock">                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>              </a>            </div>            <!-- /menu footer buttons -->          </div>        </div>                <!-- /top navigation -->        <!-- page content -->        <div class="right_col" role="main">          <div class="">            <div class="page-title">              <div class="title_left">                <h3> Configurações CMM Portaria Remota </h3>              </div>                          </div>            <div class="clearfix"></div>                      <div class="col-md-12 col-sm-12 col-xs-12">                <div class="x_panel">                  <div class="x_title">                    <h2>Entradas / Saídas <small>Passe o mouse por cima do nome para mais detalhes</small></h2>                                        <div class="clearfix"></div>                  </div>                  <?php                  if (!empty($_REQUEST['retorno']) && $_REQUEST['retorno'] == 'reinicia') {                  ?>                  <div id="mensagem_alert">                    Reiniciando sistema, aguarde...                  </div>                  <?php                  }                  ?>                  <div class="x_content">				  			<form method="post" action="setup_back_update.php">				                    <form class="form-horizontal form-label-left">                      <p>Configure as entradas <code>IN</code> e as saidas <code>OUT</code> da controladora, ou use a configuração padrão.</p>                                         <div class="clearfix"></div>					<div class="clearfix"></div>					                  </div>				  				                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN1</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in1" name="in1">                            							<?php							escolheOpcao1($entrada['in1']);							?>                          </select>                        </div>                      </div>					  					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 1</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp1" name="exp1">                            							<?php							escolheOpcao3($entrada['exp1']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 1</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out1" name="out1">                            							<?php							escolheopcao2($saida['out1']);							?>                          </select>                        </div>                      </div>					                        					  					<div class="clearfix"></div>										<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN2</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in2" name="in2">                            							<?php							escolheOpcao1($entrada['in2']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 2</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp2" name="exp2">                            							<?php							escolheOpcao3($entrada['exp2']);							?>                          </select>                        </div>                      </div>			 <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 2</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out2" name="out2">                            							<?php							escolheOpcao2($saida['out2']);							?>                          </select>                        </div>                      </div>					                        					  					  <div class="clearfix"></div>					  						  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN3</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in3" name="in3">                            							<?php							escolheOpcao1($entrada['in3']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 3</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp3" name="exp3">                            							<?php							escolheOpcao3($entrada['exp3']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 3</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out3" name="out3">                            							<?php							escolheOpcao2($saida['out3']);							?>                          </select>                        </div>                      </div>					  					  					  <div class="clearfix"></div>											  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN4</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in4" name="in4">                            							<?php							escolheOpcao1($entrada['in4']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 4</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp4" name="exp4">                            							<?php							escolheOpcao3($entrada['exp4']);							?>                          </select>                        </div>                      </div>			 <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 4</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out4" name="out4">                            							<?php							escolheOpcao2($saida['out4']);							?>                          </select>                        </div>                      </div>					                        					  					  <div class="clearfix"></div>										  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN5</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in5" name="in5">                            							<?php							escolheOpcao1($entrada['in5']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 5</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp5" name="exp5">                            							<?php							escolheOpcao3($entrada['exp5']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 5</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out5" name="out5">                            							<?php							escolheOpcao2($saida['out5']);							?>                          </select>                        </div>                      </div>					                        					  					  <div class="clearfix"></div>											  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN6</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in6" name="in6">                            							<?php							escolheOpcao1($entrada['in6']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 6</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp6" name="exp6">                            							<?php							escolheOpcao3($entrada['exp6']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 6</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out6" name="out6">                            							<?php							escolheopcao2($saida['out6']);							?>                          </select>                        </div>                      </div>					                       					  					  <div class="clearfix"></div>					  					  						  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN7</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in7" name="in7">                            							<?php							escolheOpcao1($entrada['in7']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 7</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp7" name="exp7">                            							<?php							escolheOpcao3($entrada['exp7']);							?>                          </select>                        </div>                      </div>			                      <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 7</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out7" name="out7">                            							<?php							escolheopcao2($saida['out7']);							?>                          </select>                        </div>                      </div>					                        					  					  <div class="clearfix"></div>					  						  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN8</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="in8" name="in8">                            							<?php							escolheOpcao1($entrada['in8']);							?>                          </select>                        </div>                      </div>					                        <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 8</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="exp8" name="exp8">                            							<?php							escolheOpcao3($entrada['exp8']);							?>                          </select>                        </div>                      </div>								  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 8</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out8" name="out8">                            							<?php							escolheopcao2($saida['out8']);							?>                          </select>                        </div>                      </div>					  		     <div class="clearfix"></div>					                      <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>A</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="a" name="a">                            							<?php							escolheOpcao1($entrada['a']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 9</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out9" name="out9">                            							<?php							escolheOpcao2($saida['out9']);							?>                          </select>                        </div>                      </div>		<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 10</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out10" name="out10">                            							<?php							escolheopcao2($saida['out10']);							?>                          </select>                        </div>                      </div>							 <div class="clearfix"></div> 					  <div class="clearfix"></div>					  					  <div class="clearfix"></div>										  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>B</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="b" name="b">                            							<?php							escolheOpcao1($entrada['b']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 11</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out11" name="out11">                            							<?php							escolheopcao2($saida['out11']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 12</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out12" name="out12">                            							<?php							escolheopcao2($saida['out12']);							?>                          </select>                        </div>                      </div>					  					  <div class="clearfix"></div>					  					  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>C</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="c" name="c">                            							<?php							escolheOpcao1($entrada['c']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 13</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out13" name="out13">                            							<?php							escolheopcao2($saida['out13']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 14</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out14" name="out14">                            							<?php							escolheopcao2($saida['out14']);							?>                          </select>                        </div>                      </div>					  <div class="clearfix"></div>					  					  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>D</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="d" name="d">                            							<?php							escolheOpcao1($entrada['d']);							?>                          </select>                        </div>                      </div>			<div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 15</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out15" name="out15">                            							<?php							escolheopcao2($saida['out15']);							?>                          </select>                        </div>                      </div>						  <div class="form-group">                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 16</h2></label></center>                        <div class="col-md-2 col-sm-2 col-xs-2">                          <select class="select_group form-control" id="out16" name="out16">                            							<?php							escolheopcao2($saida['out16']);							?>                          </select>                        </div>                      </div><div class="clearfix"></div>					  				<!-- Start to do list 1-->            <div class="col-md-6 col-sm-6 col-xs-12">              <div class="x_panel">                <div class="x_title">                  <h2>Audio<small>Configurações de saida de audio</small></h2>                                    <div class="clearfix"></div>                </div>                <div class="x_content">                  <div class="">                    <ul class="to_do">                      <li>                        <p>                          <input type="checkbox" class="flat" title="Ideal para utilização durante a instalação ou realização de testes."> Audio de abertura dos portoes sociais </p>                      </li>                      <li>                        <p>                          <input type="checkbox" class="flat" title="Sauda o morador ou visitante ao entrar no condomínio"> Saudação Bom dia, Boa tarde e Boa noite</p>                      </li>                      <li>                        <p>                          <input type="checkbox" class="flat" title="Notifica caso haja alguma anormalidade como portão aberto, arrombamento, quebra de vidro, etc."> Notificações de alarmes e violações</p>                      </li>                                          </ul>                  </div>                </div>              </div>            </div>            <!-- End to do list 1 -->	<!-- Start to do list 2-->            <div class="col-md-6 col-sm-6 col-xs-12">              <div class="x_panel">                <div class="x_title">                  <h2>Audio<small>Configurações de saida de audio</small></h2>                                    <div class="clearfix"></div>                </div>                <div class="x_content">                  <div class="">                    <ul class="to_do">                      <li>                        <p>                          <input type="checkbox" class="flat" title="Os setores para serem configurados no Moni, estão na página Manuais"> Envio de eventos para o Moni </p>                      </li>                      <li>                        <p>                          <input type="checkbox" class="flat" title="Caso o portão abra manualmente através de fechadura magnética não selecione"> Portões abrem através de atuador mecânico (motor)</p>                      </li>                      <li>                        <p>                          <input type="checkbox" class="flat" title= "Notifica o Condfy para ser avisado através do aplicativo (necessário internet)"> Notificar o Condfy dos qrcodes utilizados</p>                      </li>                                          </ul>                  </div>                </div>              </div>            </div>            <!-- End to do list 2 -->					  					 	 </div>					  	<center><button type="submit" class="btn btn-success btn-lg ">Salvar Alterações</button></center>		</form>                </div>              </div>            </div>          </div>		  		         </div>					        <!-- /page content -->        <!-- footer content -->        <footer>          <div class="pull-right">            CMM CEINTEL - Admin Template by <a href="https://www.facebook.com/leandro.lopesleal.1">Leandro Leal</a>          </div>          <div class="clearfix"></div>        </footer>        <!-- /footer content -->      </div>    </div>    <!-- jQuery -->    <script src="../vendors/jquery/dist/jquery.min.js"></script>    <!-- Bootstrap -->    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>    <!-- FastClick -->    <script src="../vendors/fastclick/lib/fastclick.js"></script>    <!-- NProgress -->    <script src="../vendors/nprogress/nprogress.js"></script>    <!-- validator -->    <script src="../vendors/validator/validator.js"></script>    <!-- Custom Theme Scripts -->    <script src="../build/js/custom.min.js"></script>    <script>          $('#mensagem_alert').addClass("alert alert-success");      setTimeout(function() {          $('#mensagem_alert').html("");          $('#mensagem_alert').removeClass("alert alert-success");      }, 5000);    </script>	  </body></html>