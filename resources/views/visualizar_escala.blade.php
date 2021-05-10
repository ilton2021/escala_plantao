@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Visualizar Escala</title>
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
										<li class=" ">
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
                                            <h5 class="m-b-10">Visualizar Escala</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li> <?php $qtd = sizeof($escala); ?>
											@if($qtd > 0)
                                            <li class="breadcrumb-item"><a href="{{ route('visualizarEscala', $escala[0]->escala_id) }}">Visualizar Escala</a>
											@endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
						<!-- Frame Principal -->
						<div class="pcoded-inner-content" style="width: 100%; overflow: scroll;">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                           <div class="col-xl-30 col-md-20">
										     <a href="javascript:history.back();" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Visualizar Escala:</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
														@if ($errors->any())
														  <div class="alert alert-success">
															<ul>
																@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																@endforeach
															</ul>
														  </div>
														  @endif 
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header" style="width:500px">
                                                                  <tr>
																   <td style="width:300px"> Mês: 
																   <select id="mes" name="mes" class="form-control" width="300px">
																   @foreach($escala as $es)  
																	 <option id="mes" name="mes" value="<?php echo $es->mes ?>">{{ $es->mes }}</option>
																   @endforeach
																   </select>
																   </td>
																   <td width="200px"> Ano: 
																    <select id="ano" name="ano" class="form-control" width="200px">
																	 @foreach($escala as $es)
																	 <option id="ano" name="ano" value="<?php echo $es->ano ?>">{{ $es->ano }}</option>
																	 @endforeach
																	</select>
																   </td>											   
																  </tr>
															</table>
															<?php $qtd = sizeof($escala); ?>
															@if($qtd > 0)
															<table class="table table-hover m-b-0 without-header">	  
																<tr>
																 <td colspan="3">FUNCIONÁRIO:</td>
																</tr>
																<tr>
																  <td></td>
																  <td><center>Nome do Funcionário</center></td>
																  <td><center>Cargo</center></td>
																  <td><center>Plantão</center></td>
															      <?php for($a = 1; $a < 32; $a++){ ?>
															   	   <td><center>{{ $a }}</center></td>
																  <?php } ?>
																@foreach($escala as $func)
																  </tr> 
																  <tr>
																    @if($func->centro_custo == "ENFERMAGEM")
																    <td>{{ $func->centro_custo }}</td>
																	@else
																	<td>{{ $func->centro_custo .$func->centro_custo_id }}</td>
																	@endif
																    <td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo" name="centro_custo" value="<?php echo $func->centro_custo; ?>" />
																	</td>
																	<td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="funcionario_id" name="funcionario_id" value="<?php echo $func->funcionario_id; ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:350px" class="form-control" id="nome" name="nome" value="<?php echo $func->nome; ?>" title="<?php echo $func->nome; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:150px" class="form-control" id="cargo" name="cargo" value="<?php echo $func->cargo; ?>" title="<?php echo $func->cargo; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:70px" class="form-control" id="tipo_plantao" name="tipo_plantao" value="<?php if($func->tipo_plantao == "D"){ echo "DIA"; }else{ echo "NOITE"; }  ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia1' name='dia1' value="<?php echo strtoupper(substr($func->dia1, 0, 1)); ?>" />	
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia2' name='dia2' value="<?php echo strtoupper(substr($func->dia2, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia3' name='dia3' value="<?php echo strtoupper(substr($func->dia3, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia4' name='dia4' value="<?php echo strtoupper(substr($func->dia4, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia5' name='dia5' value="<?php echo strtoupper(substr($func->dia5, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia6' name='dia6' value="<?php echo strtoupper(substr($func->dia6, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia7' name='dia7' value="<?php echo strtoupper(substr($func->dia7, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia8' name='dia8' value="<?php echo strtoupper(substr($func->dia8, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia9' name='dia9' value="<?php echo strtoupper(substr($func->dia9, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia10' name='dia10' value="<?php echo strtoupper(substr($func->dia10, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia11' name='dia11' value="<?php echo strtoupper(substr($func->dia11, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia12' name='dia12' value="<?php echo strtoupper(substr($func->dia12, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia13' name='dia13' value="<?php echo strtoupper(substr($func->dia13, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia14' name='dia14' value="<?php echo strtoupper(substr($func->dia14, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia15' name='dia15' value="<?php echo strtoupper(substr($func->dia15, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia16' name='dia16' value="<?php echo strtoupper(substr($func->dia16, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia17' name='dia17' value="<?php echo strtoupper(substr($func->dia17, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia18' name='dia18' value="<?php echo strtoupper(substr($func->dia18, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia19' name='dia19' value="<?php echo strtoupper(substr($func->dia19, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia20' name='dia20' value="<?php echo strtoupper(substr($func->dia20, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia21' name='dia21' value="<?php echo strtoupper(substr($func->dia21, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia22' name='dia22' value="<?php echo strtoupper(substr($func->dia22, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia23' name='dia23' value="<?php echo strtoupper(substr($func->dia23, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia24' name='dia24' value="<?php echo strtoupper(substr($func->dia24, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia25' name='dia25' value="<?php echo strtoupper(substr($func->dia25, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia26' name='dia26' value="<?php echo strtoupper(substr($func->dia26, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia27' name='dia27' value="<?php echo strtoupper(substr($func->dia27, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia28' name='dia28' value="<?php echo strtoupper(substr($func->dia28, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia29' name='dia29' value="<?php echo strtoupper(substr($func->dia29, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia30' name='dia30' value="<?php echo strtoupper(substr($func->dia30, 0, 1)); ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:40px" class="form-control" id='dia31' name='dia31' value="<?php echo strtoupper(substr($func->dia31, 0, 1)); ?>" />
																	</td>
																@endforeach
																@endif
															   </tr>
															  </table>
															  </thead>
                                                            </table>
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