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
	if ($opcao1 == 'pm_social_externo') {
		echo '<option selected value="pm_social_externo">PM Social Externo</option>';
	} else {
		echo '<option value="pm_social_externo">PM Social Externo</option>';
	}

	if ($opcao1 == 'pm_social_interno') {
		echo '<option selected value="pm_social_interno">PM Social Interno</option>';
	} else {
		echo '<option value="pm_social_interno">PM Social Interno</option>';
	}

	if ($opcao1 == 'abre_social_externo') {
		echo '<option selected value="abre_social_externo">Abre Social Externo</option>';
	} else {
		echo '<option value="abre_social_externo">Abre Social Externo</option>';
	}

	if ($opcao1 == 'abre_social_interno') {
		echo '<option selected value="abre_social_interno">Abre Social Interno</option>';
	} else {
		echo '<option value="abre_social_interno">Abre Social Interno</option>';
	}

	if ($opcao1 == 'botao_saida_social_externo') {
		echo '<option selected value="botao_saida_social_externo">Botão saída Social Externo</option>';
	} else {
		echo '<option value="botao_saida_social_externo">Botão saída Social Externo</option>';
	}

	if ($opcao1 == 'botao_saida_social_interno') {
		echo '<option selected value="botao_saida_social_interno">Botão saída Social Interno</option>';
	} else {
		echo '<option value="botao_saida_social_interno">Botão saída Social Interno</option>';
	}

	if ($opcao1 == 'quebra_vidro_interno_eclusa') {
		echo '<option selected value="quebra_vidro_interno_eclusa">Quebra de vidro interior da eclusa</option>';
	} else {
		echo '<option value="quebra_vidro_interno_eclusa">Quebra de vidro interior da eclusa</option>';
	}
	
	if ($opcao1 == 'quebra_vidro_dentro_predio') {
		echo '<option selected value="quebra_vidro_dentro_predio">Quebra de vidro dentro do prédio</option>';
	} else {
		echo '<option value="quebra_vidro_dentro_predio">Quebra de vidro dentro do prédio</option>';
	}

	if ($opcao1 == 'chave_mudanca') {
		echo '<option selected value="chave_mudanca">Chave de mudança</option>';
	} else {
		echo '<option value="chave_mudanca">Chave de mudança</option>';
	}

	if ($opcao1 == 'queda_energia_eletrica') {
		echo '<option selected value="queda_energia_eletrica">Queda de energia elétrica</option>';
	} else {
		echo '<option value="queda_energia_eletrica">Queda de energia elétrica</option>';
	}

	if ($opcao1 == 'pm_quadro_comando') {
		echo '<option selected value="pm_quadro_comando">PM Quadro de comando</option>';
	} else {
		echo '<option value="pm_quadro_comando">PM Quadro de comando</option>';
	}
	
	if ($opcao1 == 'alarme') {
		echo '<option selected value="alarme">Alarme</option>';
	} else {
		echo '<option value="alarme">Alarme</option>';
	}
	if ($opcao1 == 'bloqueia_abre_social_externo') {
		echo '<option selected value="bloqueia_abre_social_externo">Bloqueia Abre Social Externo</option>';
	} else {
		echo '<option value="bloqueia_abre_social_externo">Bloqueia Abre Social Externo</option>';
	}

	if ($opcao1 == 'bloqueia_abre_social_interno') {
		echo '<option selected value="bloqueia_abre_social_interno">Bloqueia Abre Social Interno</option>';
	} else {
		echo '<option value="bloqueia_abre_social_interno">Bloqueia Abre Social Interno</option>';
	}

	if ($opcao1 == 'foto_sociais') {
		echo '<option selected value="foto_sociais">Foto Sociais</option>';
	} else {
		echo '<option value="foto_sociais">Foto Sociais</option>';
	}

	if ($opcao1 == 'sirene_giroflex') {
		echo '<option selected value="sirene_giroflex">Sirene / Giroflex</option>';
	} else {
		echo '<option value="sirene_giroflex">Sirene / Giroflex</option>';
	}

	if ($opcao1 == 'iluminacao_automatica_eclusa') {
		echo '<option selected value="iluminacao_automatica_eclusa">Iluminação automática Eclusa</option>';
	} else {
		echo '<option value="iluminacao_automatica_eclusa">Iluminação automática Eclusa</option>';
	}

	if ($opcao1 == 'exaustor_1') {
		echo '<option selected value="exaustor_1">Exaustor 1</option>';
	} else {
		echo '<option value="exaustor_1">Exaustor 1</option>';
	}

	if ($opcao1 == 'exaustor_2') {
		echo '<option selected value="exaustor_2">Exaustor 2</option>';
	} else {
		echo '<option value="exaustor_2">Exaustor 2</option>';
	}
	
	if ($opcao1 == 'iluminacao_1') {
		echo '<option selected value="iluminacao_1">Iluminação 1</option>';
	} else {
		echo '<option value="iluminacao_1">Iluminação 1</option>';
	}

	if ($opcao1 == 'iluminacao_2') {
		echo '<option selected value="iluminacao_2">Iluminação 2</option>';
	} else {
		echo '<option value="iluminacao_2">Iluminação 2</option>';
	}

	if ($opcao1 == 'bomba_agua') {
		echo '<option selected value="bomba_agua">Bomba d água</option>';
	} else {
		echo '<option value="bomba_agua">Bomba d água</option>';
	}

	if ($opcao1 == 'aux_1') {
		echo '<option selected value="aux_1">AUX 1</option>';
	} else {
		echo '<option value="aux_1">AUX 1</option>';
	}
	
	if ($opcao1 == 'aux_2') {
		echo '<option selected value="aux_2">AUX 2</option>';
	} else {
		echo '<option value="aux_2">AUX 2</option>';
	}

	if ($opcao1 == 'aux_3') {
		echo '<option selected value="aux_3">AUX 3</option>';
	} else {
		echo '<option value="aux_3">AUX 3</option>';
	}
	
	if ($opcao1 == 'aux_4') {
		echo '<option selected value="aux_4">AUX 4</option>';
	} else {
		echo '<option value="aux_4">AUX 4</option>';
	}

	if ($opcao1 == 'saudacao') {
		echo '<option selected value="saudacao">Saudação</option>';
	} else {
		echo '<option value="saudacao">Saudação</option>';
	}

	if ($opcao1 == 'garagem_terreo') {
		echo '<option selected value="garagem_terreo">Garagem Terreo</option>';
	} else {
		echo '<option value="garagem_terreo">Garagem Terreo</option>';
	}

	if ($opcao1 == 'gar_subsolo_1') {
		echo '<option selected value="gar_subsolo_1">Gar. Subsolo 1</option>';
	} else {
		echo '<option value="gar_subsolo_1">Gar. Subsolo 1</option>';
	}

	if ($opcao1 == 'gar_subsolo_2') {
		echo '<option selected value="gar_subsolo_2">Gar. Subsolo 2</option>';
	} else {
		echo '<option value="gar_subsolo_2">Gar. Subsolo 2</option>';
	}

	if ($opcao1 == 'gar_subsolo_3') {
		echo '<option selected value="gar_subsolo_3">Gar. Subsolo 3</option>';
	} else {
		echo '<option value="gar_subsolo_3">Gar. Subsolo 3</option>';
	}

	if ($opcao1 == 'portal_acesso_1') {
		echo '<option selected value="portal_acesso_1">Portão Acesso 1</option>';
	} else {
		echo '<option value="portal_acesso_1">Portão Acesso 1</option>';
	}

	if ($opcao1 == 'portal_acesso_2') {
		echo '<option selected value="portal_acesso_2">Portão Acesso 2</option>';
	} else {
		echo '<option value="portal_acesso_2">Portão Acesso 2</option>';
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
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN1</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in1" name="in1">                            
							<?php
							escolheOpcao1($entrada['in1']);
							?>
                          </select>
                        </div>
                      </div>					  
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 1</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp1" name="exp1">                            
							<?php
							escolheOpcao1($entrada['exp1']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 13</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp13" name="exp13">                            
							<?php
							escolheOpcao1($entrada['exp13']);
							?>
                          </select>
                        </div>
                      </div>
					  
					<div class="clearfix"></div>
					
					<div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN2</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in2" name="in2">                            
							<?php
							escolheOpcao1($entrada['in2']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 2</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp2" name="exp2">                            
							<?php
							escolheOpcao1($entrada['exp2']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 14</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp14" name="exp14">                            
							<?php
							escolheOpcao1($entrada['exp14']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					  	
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN3</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in3" name="in3">                            
							<?php
							escolheOpcao1($entrada['in3']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 3</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp3" name="exp3">                            
							<?php
							escolheOpcao1($entrada['exp3']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 15</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp15" name="exp15">                            
							<?php
							escolheOpcao1($entrada['exp15']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>	
					
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN4</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in4" name="in4">                            
							<?php
							escolheOpcao1($entrada['in4']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 4</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp4" name="exp4">                            
							<?php
							escolheOpcao1($entrada['exp4']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 16</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp16" name="exp16">                            
							<?php
							escolheOpcao1($entrada['exp16']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN5</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in5" name="in5">                            
							<?php
							escolheOpcao1($entrada['in5']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 5</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp5" name="exp5">                            
							<?php
							escolheOpcao1($entrada['exp5']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 1</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out1" name="out1">                            
							<?php
							escolheOpcao1($saida['out1']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>	
					
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN6</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in6" name="in6">                            
							<?php
							escolheOpcao1($entrada['in6']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 6</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp6" name="exp6">                            
							<?php
							escolheOpcao1($entrada['exp6']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 2</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out2" name="out2">                            
							<?php
							escolheOpcao1($saida['out2']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>					  
					  	
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN7</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in7" name="in7">                            
							<?php
							escolheOpcao1($entrada['in7']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 7</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp7" name="exp7">                            
							<?php
							escolheOpcao1($entrada['exp7']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 3</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out3" name="out3">                            
							<?php
							escolheOpcao1($saida['out3']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					  	
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>IN8</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="in8" name="in8">                            
							<?php
							escolheOpcao1($entrada['in8']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 8</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp8" name="exp8">                            
							<?php
							escolheOpcao1($entrada['exp8']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 4</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out4" name="out4">                            
							<?php
							escolheOpcao1($saida['out4']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>A</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="a" name="a">                            
							<?php
							escolheOpcao1($entrada['a']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 9</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp9" name="exp9">                            
							<?php
							escolheOpcao1($entrada['exp9']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 5</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out5" name="out5">                            
							<?php
							escolheOpcao1($saida['out5']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					  
					  <div class="clearfix"></div>
					
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>B</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="b" name="b">                            
							<?php
							escolheOpcao1($entrada['b']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 10</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp10" name="exp10">                            
							<?php
							escolheOpcao1($entrada['exp10']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 6</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out6" name="out6">                            
							<?php
							escolheOpcao1($saida['out6']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>C</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="c" name="c">                            
							<?php
							escolheOpcao1($entrada['c']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 11</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp11" name="exp11">                            
							<?php
							escolheOpcao1($entrada['exp11']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 7</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out7" name="out7">                            
							<?php
							escolheOpcao1($saida['out7']);
							?>
                          </select>
                        </div>
                      </div>
					  
					  <div class="clearfix"></div>
					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>D</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="d" name="d">                            
							<?php
							escolheOpcao1($entrada['d']);
							?>
                          </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>EXPANSOR 12</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="exp12" name="exp12">                            
							<?php
							escolheOpcao1($entrada['exp12']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 8</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out8" name="out8">                            
							<?php
							escolheOpcao1($saida['out8']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="clearfix"></div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 9</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out9" name="out9">                            
							<?php
							escolheOpcao1($saida['out9']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 10</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out10" name="out10">                            
							<?php
							escolheOpcao1($saida['out10']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 11</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out11" name="out11">                            
							<?php
							escolheOpcao1($saida['out11']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="clearfix"></div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 12</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out12" name="out12">                            
							<?php
							escolheOpcao1($saida['out12']);
							?>
                          </select>
                        </div>
                      </div>

					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 13</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out13" name="out13">                            
							<?php
							escolheOpcao1($saida['out13']);
							?>
                          </select>
                        </div>
                      </div>

					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 14</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out14" name="out14">                            
							<?php
							escolheOpcao1($saida['out14']);
							?>
                          </select>
                        </div>
                      </div>

					  <div class="clearfix"></div>

					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 15</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out15" name="out15">                            
							<?php
							escolheOpcao1($saida['out15']);
							?>
                          </select>
                        </div>
                      </div>

					  
					  <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>OUT 16</h2></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <select class="select_group form-control" id="out16" name="out16">                            
							<?php
							escolheOpcao1($saida['out16']);
							?>
                          </select>
                        </div>
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