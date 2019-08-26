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
   
   $sql = "SELECT * FROM qrcode ORDER BY id DESC LIMIT 1";
   $qrcode = $mysqli->query($sql);
   $qrcode = $qrcode->fetch_array(MYSQLI_ASSOC);
   
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
   	if ($opcao2 == 'social') {
   		echo '<option selected value="social">Social Externo</option>';
   	} else {
   		echo '<option value="social">Social Externo</option>';
   	}
   
   	if ($opcao2 == 'eclusa') {
   		echo '<option selected value="eclusa">Social Interno</option>';
   	} else {
   		echo '<option value="eclusa">Social Interno</option>';
   	}
   
   	if ($opcao2 == 'acesso') {
   		echo '<option selected value="acesso">Acesso</option>';
   	} else {
   		echo '<option value="acesso">Acesso</option>';
   	}
   
   	if ($opcao2 == 'academia') {
   		echo '<option selected value="academia">Academia</option>';
   	} else {
   		echo '<option value="academia">Academia</option>';
   	}
   
   	if ($opcao2 == 'brinquedoteca') {
   		echo '<option selected value="brinquedoteca">Brinquedoteca</option>';
   	} else {
   		echo '<option value="brinquedoteca">Brinquedoteca</option>';
   	}
   
   	if ($opcao2 == 'bicicletario') {
   		echo '<option selected value="bicicletario">Bicicletario</option>';
   	} else {
   		echo '<option value="bicicletario">Bicicletario</option>';
   	}
   
   	if ($opcao2 == 'churrasqueira') {
   		echo '<option selected value="churrasqueira">Churrasqueira</option>';
   	} else {
   		echo '<option value="churrasqueira">Churrasqueira</option>';
   	}
   	
   	if ($opcao2 == 'hall_1') {
   		echo '<option selected value="hall_1">Hall 1</option>';
   	} else {
   		echo '<option value="hall_1">Hall 1</option>';
   	}
   
   	if ($opcao2 == 'hall_2') {
   		echo '<option selected value="hall_2">Hall 2</option>';
   	} else {
   		echo '<option value="hall_2">Hall 2</option>';
   	}
   
   	if ($opcao2 == 'jogos') {
   		echo '<option selected value="jogos">Sala de Jogos</option>';
   	} else {
   		echo '<option value="jogos">Sala de Jogos</option>';
   	}
   
   	if ($opcao2 == 'festa') {
   		echo '<option selected value="festa">Salão de Festa</option>';
   	} else {
   		echo '<option value="festa">Salão de Festa</option>';
   	}
   	
   	if ($opcao2 == 'restrita') {
   		echo '<option selected value="restrita">Sala Restrita</option>';
   	} else {
   		echo '<option value="restrita">Sala Restrita</option>';
   	}
   
   	if ($opcao2 == 'reuniao') {
   		echo '<option selected value="reuniao">Sala de Reunião</option>';
   	} else {
   		echo '<option value="reuniao">Sala de Reunião</option>';
   	}
   
   	if ($opcao2 == 'garagem_1') {
   		echo '<option selected value="garagem_1">Garagem 1</option>';
   	} else {
   		echo '<option value="garagem_1">Garagem 1</option>';
   	}
   
   	if ($opcao2 == 'garagem_2') {
   		echo '<option selected value="garagem_2">Garagem 2</option>';
   	} else {
   		echo '<option value="garagem_2">Garagem 2</option>';
   	}
   	
   	if ($opcao2 == 'garagem_3') {
   		echo '<option selected value="garagem_3">Garagem 3</option>';
   	} else {
   		echo '<option value="garagem_3">Garagem 3</option>';
   	}
   }
   
   function escolheOpcao3 ($opcao3) 
   {
     echo '<option selected value="">--- nenhuma ---</option>';
     $path = "arquivos/";
     $diretorio = dir($path);
     while($arquivo = $diretorio -> read()){
       if ($arquivo == '.' || $arquivo == '..') {
         continue;
       }
       if ($opcao3 == $arquivo) {
         echo "<option selected value=".$arquivo.">".$arquivo."</option>";
       } else {
         echo "<option value=".$arquivo.">".$arquivo."</option>";
       }
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
                  <!-- /menu profile quick info -->
                  <br />
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                           <li>
                              <a><i class="fa fa-desktop"></i> Monitor <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="monitor.php">Monitor I/O</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-wrench"></i> Configurações <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="io.php">CMM I/O</a></li>
                                 <li><a href="setup.php">CMM Setup</a></li>
                                 <li><a href="log.php">Log</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-qrcode"></i> QR Code <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="qrcode.php">QR Code Setup</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-clone"></i> Diagramas <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="diagrama.html">Diagrama de ligação CMM</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-folder-open"></i> Manuais <span class="fa fa-chevron-down"></span></a>
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
                        <h3> Configurações QR Code </h3>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                        <div class="x_title">
                           <h2>Leitor de QR Code </h2>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <form method="post" action="qrcode_back_update.php">
                           <form class="form-horizontal form-label-left">
                              <p>Configure o <code>Leitor</code> e a saída correspondente ao <code>Portão</code> que será acionado.</p>
                              <div class="clearfix"></div>
                              <!-- /Leitores de 1 a 16 -->  
                        </div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 1</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_1" name="leitor_1" value="<?=$qrcode["leitor_1"]?>" placeholder="IP leitor"/>
                        </div>
                        </div>	  
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_1" name="portao_1"> 
                        <?php	 escolheOpcao2($qrcode['portao_1']); ?>                            
                        </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_1" name="mensagem_1"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_1']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.102"><h2>Leitor 2</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_2" name="leitor_2" value="<?=$qrcode["leitor_2"]?>" placeholder="IP leitor"/>
                        
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_2" name="portao_2"> 
                        <?php	 escolheOpcao2($qrcode['portao_2']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_2" name="mensagem_2"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_2']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 3</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_3" name="leitor_3" value="<?=$qrcode["leitor_3"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_3" name="portao_3"> 
                        <?php	 escolheOpcao2($qrcode['portao_3']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_3" name="mensagem_3"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_3']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 4</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_4" name="leitor_4" value="<?=$qrcode["leitor_4"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_4" name="portao_4"> 
                        <?php	 escolheOpcao2($qrcode['portao_4']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem </h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_4" name="mensagem_4"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_4']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 5</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_5" name="leitor_5" value="<?=$qrcode["leitor_5"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_5" name="portao_5"> 
                        <?php	 escolheOpcao2($qrcode['portao_5']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_5" name="mensagem_5"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_5']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 6</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_6" name="leitor_6" value="<?=$qrcode["leitor_6"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_6" name="portao_6"> 
                        <?php	 escolheOpcao2($qrcode['portao_6']); ?>                            
                        </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_6" name="mensagem_6"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_6']); ?>                            
                        </select>
                        </div>
                        </div>  
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 7</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_7" name="leitor_7" value="<?=$qrcode["leitor_7"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_7" name="portao_7"> 
                        <?php	 escolheOpcao2($qrcode['portao_7']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_7" name="mensagem_7"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_7']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 8</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_8" name="leitor_8" value="<?=$qrcode["leitor_8"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_8" name="portao_8"> 
                        <?php	 escolheOpcao2($qrcode['portao_8']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_8" name="mensagem_8"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_8']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 9</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_9" name="leitor_9" value="<?=$qrcode["leitor_9"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_9" name="portao_9"> 
                        <?php	 escolheOpcao2($qrcode['portao_9']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_9" name="mensagem_9"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_9']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 10</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_10" name="leitor_10" value="<?=$qrcode["leitor_10"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_10" name="portao_10"> 
                        <?php	 escolheOpcao2($qrcode['portao_10']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_10" name="mensagem_10"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_10']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 11</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_11" name="leitor_11" value="<?=$qrcode["leitor_11"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_11" name="portao_11"> 
                        <?php	 escolheOpcao2($qrcode['portao_11']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_11" name="mensagem_11"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_11']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 12</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_12" name="leitor_12" value="<?=$qrcode["leitor_12"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_12" name="portao_12"> 
                        <?php	 escolheOpcao2($qrcode['portao_12']); ?>                            
                        </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_12" name="mensagem_12"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_12']); ?>                            
                        </select>
                        </div>
                        </div>  
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 13</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_13" name="leitor_13" value="<?=$qrcode["leitor_13"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_13" name="portao_13"> 
                        <?php	 escolheOpcao2($qrcode['portao_13']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_13" name="mensagem_13"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_13']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 14</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_14" name="leitor_14" value="<?=$qrcode["leitor_14"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_14" name="portao_14"> 
                        <?php	 escolheOpcao2($qrcode['portao_14']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_14" name="mensagem_14"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_14']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 15</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_15" name="leitor_15" value="<?=$qrcode["leitor_15"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_15" name="portao_15"> 
                        <?php	 escolheOpcao2($qrcode['portao_15']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_15" name="mensagem_15"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_15']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="form-group">                        
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><a title="Insira o IP do leitor Exemplo:  192.168.0.101"><h2>Leitor 16</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" class="form-control" id="leitor_16" name="leitor_16" value="<?=$qrcode["leitor_16"]?>" placeholder="IP leitor"/>
                        </div>
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Portão</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="portao_16" name="portao_16"> 
                        <?php	 escolheOpcao2($qrcode['portao_16']); ?>                            
                        </select>
                        </div>
                        </div> 	
                        <div class="form-group">
                        <center><label class="control-label col-md-2 col-sm-2 col-xs-2"><h2>Mensagem</h2></a></label></center>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                        <select class="select2_group form-control" id="mensagem_16" name="mensagem_16"> 
                        <?php	 escolheOpcao3($qrcode['mensagem_16']); ?>                            
                        </select>
                        </div>
                        </div> 
                        <div class="clearfix"></div>
                        </div> 
                        </div> 
                        </div> 
                        </div>
                        </div> 
                        </div> 
                        </div> 
                        </div>  
                        </div> 
                        </div> 
                        </div> 
                        </div>  
                        </div> 
                        </div> 
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