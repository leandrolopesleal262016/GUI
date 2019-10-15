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

$sql = "SELECT * FROM intertravamento ORDER BY id DESC LIMIT 1";
$monitor = $mysqli->query($sql);
$monitor = $monitor->fetch_array(MYSQLI_ASSOC);

function escolheOpcao($opcao)
{
  if ($opcao == 1) {
    echo '<option selected value="1">Ativado</option>';
  } else {
    echo '<option value="1">Ativado</option>';
  }
  if ($opcao == 0) {
    echo '<option selected value="0">Desativado</option>';
  } else {
    echo '<option value="0">Desativado</option>';
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
              <a href="index.php" class="site_title"><i class="fa fa-globe"></i> <span>CEINTEL</span></a>
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

                       <div class="container body">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    

                                    <div class="x_content">
                                        <form action="intertravamento.php" method="post">
                                            <div class="form-group">
                                                <center>
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-4">
                                                        <h2>Intertravamento </h2></label>
                                                </center>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <select class="select_group form-control" id="habilitado" name="habilitado">
                                                    <?php escolheOpcao($monitor['habilitado']);?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Atualizar</button>
                                        </form>

                                        <div class="col-md-14 col-sm-14 col-xs-14">

                                            <style='position:relative; top:0px; left:0px;'>
                                            <img src="images/monitor.jpeg" />

                                            <!-- leds out -->

                                            <div style='position:absolute; top:144px; left:54px;'>
                                            <img src="images/led_ligado.jpeg" id="out1" name="out1" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out2" name="out2" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out3" name="out3" />

                                            <div style='position:absolute; top:0px; left:31px;'>
                                            <img src="images/led_ligado.jpeg" id="out4" name="out4" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out5" name="out5" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out6" name="out6" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out7" name="out7" />

                                            <div style='position:absolute; top:0px; left:32px;'>
                                            <img src="images/led_ligado.jpeg" id="out8" name="out8" />

                                            <!-- leds out out1 - out8-->

                                            <div style='position:absolute; top:-1px; left:78px;'>
                                            <img src="images/led_ligado.jpeg" id="out14" name="out14" />

                                            <div style='position:absolute; top:-14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out13" name="out13" />

                                            <div style='position:absolute; top:-14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out12" name="out12" />

                                            <div style='position:absolute; top:-14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out11" name="out11" />

                                            <div style='position:absolute; top:-14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out10" name="out10" />

                                            <div style='position:absolute; top:-14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out9" name="out9" />

                                            <div style='position:absolute; top:83px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out15" name="out15" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="out16" name="out16" />

                                            <!-- leds entradas IN8 - IN1 -->

                                            <div style='position:absolute; top:39px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in8" name="in8" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in7" name="in7" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in6" name="in6" />

                                            <div style='position:absolute; top:13px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in5" name="in5" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in4" name="in4" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in3" name="in3" />

                                            <div style='position:absolute; top:14px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in2" name="in2" />

                                            <div style='position:absolute; top:13px; left:0px;'>
                                            <img src="images/led_ligado.jpeg" id="in1" name="in1" />

                                            <!-- leds entradas A B C D -->

                                            <div style='position:absolute; top:-5px; left:-151px;'>
                                            <img src="images/led_ligado.jpeg" id="inD" name="inD" />

                                            <div style='position:absolute; top:0px; left:-29px;'>
                                            <img src="images/led_ligado.jpeg" id="inC" name="inC" />

                                            <div style='position:absolute; top:0px; left:-28px;'>
                                            <img src="images/led_ligado.jpeg" id="inB" name="inB" />

                                            <div style='position:absolute; top:0px; left:-29px;'>
                                            <img src="images/led_ligado.jpeg" id="inA" name="inA" />

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

	<!-- CARD ACIONAMENTOS   --!>	

          <div class="col-md-1 col-xs-1 widget widget_tally_box">
            <div class="x_panel fixed_height_390">
              <div class="x_content">

                <center><div class="flex"></center>                 
		   <form action="comandos.php" method="post">
                    <ul class="list-inline count2"> 
                    <center><input id="botao" name="botao" type="submit" class="btn btn-success" value="Abre Social Externo"></center>
                    </ul>
		   </form>
                

                <center><div class="flex"></center>                  
		   <form action="comandos.php" method="post">
		    <ul class="list-inline count2">                   
                    <center><input id="botao" name="botao" type="submit" class="btn btn-success" value="Abre Social Interno"></center>
                   </ul>
		   </form>		  
                
                
                <center><div class="flex"></center>                  
		   <form action="comandos.php" method="post">
		    <ul class="list-inline count2">
                    <center><input id="botao" name="botao" type="submit" class="btn btn-success" value="Abre Garagem"></center>
                   </ul>
		   </form>		 
                

              <center><div class="flex"></center>                 
		   <form action="comandos.php" method="post">                   
                    <ul class="list-inline count2"> 
                    <center><input id="botao" name="botao" type="submit" class="btn btn-success" value="Abre Subsolo"></center>
                   </ul>
		   </form>		 
                

		<center><div class="flex"></center>		
                 
		   <form action="comandos.php" method="post">                    
                    <ul class="list-inline count2"> 
                    <center><input id="botao" name="botao" type="submit" class="btn btn-danger" value="Reset do Sistema"></center>
                   </ul>
		   </form>

            </div>
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

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

        <script>
            $(document).ready(function() {
                function getData() {
                    $.ajax({
                        url: "controla_monitor.php",
                    }).done(function(data) {
                        var data = JSON.parse(data);
                        if (data.out1 == '0') {
                            $('#out1').hide();
                        } else {
                            $('#out1').show();
                        }
                        if (data.out2 == '0') {
                            $('#out2').hide();
                        } else {
                            $('#out2').show();
                        }
                        if (data.out3 == '0') {
                            $('#out3').hide();
                        } else {
                            $('#out3').show();
                        }
                        if (data.out4 == '0') {
                            $('#out4').hide();
                        } else {
                            $('#out4').show();
                        }
                        if (data.out5 == '0') {
                            $('#out5').hide();
                        } else {
                            $('#out5').show();
                        }
                        if (data.out6 == '0') {
                            $('#out6').hide();
                        } else {
                            $('#out6').show();
                        }
                        if (data.out7 == '0') {
                            $('#out7').hide();
                        } else {
                            $('#out7').show();
                        }
                        if (data.out8 == '0') {
                            $('#out8').hide();
                        } else {
                            $('#out8').show();
                        }
                        if (data.out9 == '0') {
                            $('#out9').hide();
                        } else {
                            $('#out9').show();
                        }
                        if (data.out10 == '0') {
                            $('#out10').hide();
                        } else {
                            $('#out10').show();
                        }
                        if (data.out11 == '0') {
                            $('#out11').hide();
                        } else {
                            $('#out11').show();
                        }
                        if (data.out12 == '0') {
                            $('#out12').hide();
                        } else {
                            $('#out12').show();
                        }
                        if (data.out13 == '0') {
                            $('#out13').hide();
                        } else {
                            $('#out13').show();
                        }
                        if (data.out14 == '0') {
                            $('#out14').hide();
                        } else {
                            $('#out14').show();
                        }
                        if (data.out15 == '0') {
                            $('#out15').hide();
                        } else {
                            $('#out15').show();
                        }
                        if (data.out16 == '0') {
                            $('#out16').hide();
                        } else {
                            $('#out16').show();
                        }
                        if (data.in1 == '0') {
                            $('#in1').hide();
                        } else {
                            $('#in1').show();
                        }
                        if (data.in2 == '0') {
                            $('#in2').hide();
                        } else {
                            $('#in2').show();
                        }
                        if (data.in3 == '0') {
                            $('#in3').hide();
                        } else {
                            $('#in3').show();
                        }
                        if (data.in4 == '0') {
                            $('#in4').hide();
                        } else {
                            $('#in4').show();
                        }
                        if (data.in5 == '0') {
                            $('#in5').hide();
                        } else {
                            $('#in5').show();
                        }
                        if (data.in6 == '0') {
                            $('#in6').hide();
                        } else {
                            $('#in6').show();
                        }
                        if (data.in7 == '0') {
                            $('#in7').hide();
                        } else {
                            $('#in7').show();
                        }
                        if (data.in8 == '0') {
                            $('#in8').hide();
                        } else {
                            $('#in8').show();
                        }
                        if (data.inA == '0') {
                            $('#inA').hide();
                        } else {
                            $('#inA').show();
                        }
                        if (data.inB == '0') {
                            $('#inB').hide();
                        } else {
                            $('#inB').show();
                        }
                        if (data.inC == '0') {
                            $('#inC').hide();
                        } else {
                            $('#inC').show();
                        }
                        if (data.inD == '0') {
                            $('#inD').hide();
                        } else {
                            $('#inD').show();
                        }
                    });
                }
                getData();
                setInterval(getData, 500);
            });
        </script>
    </body>

    </html>
