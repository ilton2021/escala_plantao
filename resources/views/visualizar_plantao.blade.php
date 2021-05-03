@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Nova Troca de Plantão</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="assets/images/favico.png" type="image/x-icon">
</head>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="{{ route('index') }}">
                           <p style="margin-left: 30px"> Escala de Plantão </p>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="{{ asset('assets/images/favico.png') }}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <!--a href="user-profile.html"><i class="ti-user"></i>Visualizar Perfil</a-->
                                            <a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form2').submit();">
												{{ __('Sair') }}
											</a>

											<form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Cadastros</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Cadastros</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('cadastroCentroC') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Centro de Custo</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('cadastroFunc') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Funcionário</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('cadastroEscala') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Escala</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
					
                    <div class="pcoded-content">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Visualizar Troca de Plantão</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('novaTrocaP') }}">Visualizar Troca de Plantão</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
						<!-- Frame Principal -->
						<div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                           <div class="col-xl-12 col-md-12">
										      @if ($errors->any())
											  <div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											  </div>
											  @endif 
											  <a href="{{ route('cadastroTrocaP') }}" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Visualizar de Troca de Plantão:</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
													<?php $dia = date('d', strtotime('now')); $mes = date('m', strtotime('now')); $ano = date('Y', strtotime('now')); ?>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
														 <form action="{{\Request::route('storeTrocaP')}}" method="post">
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-bordered m-b-0 without-header">
															  <tr>
																<td><center><b> <?php echo $mes . '/' . $ano; ?> </b></center></td>
															  </tr>	
															</table>
															<table class="table table-bordered m-b-0 without-header">
                                                        		<thead>
																   <tr>
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 1 && $permutas[$a]->dia > $dia) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 01 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 01 <center></td> <?php } ?>
																   
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 2) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 02 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 02 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 3) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 03 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 03 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 4) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 04 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 04 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 5) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 05 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 05 <center></td> <?php } ?>
																   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 6) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 06 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 06 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 7) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 07 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 07 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 8) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 08 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 08 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 9) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 09 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 09 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 10) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 10 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 10 <center></td> <?php } ?>
																  </tr>
																  <tr>
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 11 && $permutas[$a]->dia > $dia) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"><a href="{{ route('cadastroTPSolicitante', array($permutas[$a]->dia, $escala[0]->id)) }}"> 11 </a> </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 11 <center></td> <?php } ?>
																   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 12) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 12 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 12 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 13) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 13 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 13 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 14) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 14 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 14 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 15) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 15 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 15 <center></td> <?php } ?>
																   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 16) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 16 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 16 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 17) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 17 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 17 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 18) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 18 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 18 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 19) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 19 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 19 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 20 && $permutas[$a]->dia > $dia) { ?>
																 	<td style="border-color: blue;"><center><font style="color: blue"> <a href="{{ route('cadastroTPSolicitante', array($permutas[$a]->dia, $escala[0]->id)) }}"> 20 </a> </font></center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 20 <center></td> <?php } ?>
																		   
																  </tr>
																  <tr>
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 21) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 21 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 21 <center></td> <?php } ?>
																   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 22) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 22 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 22 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 23) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 23 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 23 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 24) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 24 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 24 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 25) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 25 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 25 <center></td> <?php } ?>
																   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 26) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 26 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 26 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 27) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 27 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 27 <center></td> <?php } ?>
																		   
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 28) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 28 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 28 <center></td> <?php } ?>
																	
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 29) { ?>
																 	<td style="border-color: blue;"><center><font style="color: blue"> 29 </font></center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 29 <center></td> <?php } ?>

																	<?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { if($permutas[$a]->dia == 30) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 30 </font> <center></td>
																   <?php   $b = 1; } } if($b == 0) { ?> <td><center> 30 <center></td> <?php } ?>
																  </tr>
																  <tr>
																   <?php $qtd = sizeof($permutas); $b = 0; 
																		 for($a = 0; $a < $qtd; $a++) { 
																		   if($permutas[$a]->dia == 31) { ?>
																 	<td style="border-color: blue;"><center> <font style="color: blue"> 31 </font> <center></td>
																   <?php   $b = 1; } } 
																		   if($b == 0) { ?> <td><center> 31 <center></td> <?php } ?>
																  </tr>
																</thead>
														    </table> <br> <Br>
															<table class="table table-bordered">
															  <tr>
																<td style="border-color: blue;"> AZUL: </td>  
																<td style="border-color: blue;"> DISPONÍVEL PARA TROCA DE PLANTÃO. </td>
															  </tr>
															  <tr>
																<td style="border-color: yellow;"> AMARELO: </td>  
																<td style="border-color: yellow;"> ESPERANDO APROVAÇÃO DO GESTOR. </td>
															  </tr>
															  <tr>
																<td style="border-color: green;"> VERDE: </td>
																<td style="border-color: green;"> TROCA DE PLANTÃO REALIZADA. </td>
															  </tr>
															<table>
														 </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- Fim Frame Principal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>