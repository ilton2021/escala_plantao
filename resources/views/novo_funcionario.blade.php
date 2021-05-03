@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Novo Funcionário</title>
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
                                            <h5 class="m-b-10">Novo Funcionário</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('novoFunc') }}">Novo Funcionário</a>
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
                                           <div class="col-xl-8 col-md-12">
										      @if ($errors->any())
											  <div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											  </div>
											  @endif 
											  <a href="{{ route('cadastroFunc') }}" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Novo Funcionário:</h5>
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
														 <form action="{{\Request::route('storeFunc')}}" method="post">
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header">
                                                                <thead>
																  <tr>
																 	<td colspan="2"> NOME: </td>
																	<td> CARGO: </td>
																  </tr>
																  <tr>
																 	<td colspan="2"><input type="text" class="form-control" id="nome" name="nome" value="" required="true" /></td>
																	<td>
																	 <select id="cargo" name="cargo" class="form-control">
																	   <option id="cargo" name="cargo" value="GERENTE">GERENTE</option>
																	   <option id="cargo" name="cargo" value="COORDENACAO">COORDENAÇÃO</option>
																	   <option id="cargo" name="cargo" value="SUPERVISAO">SUPERVISÃO</option>
																	   <option id="cargo" name="cargo" value="TECNICO">TÉCNICO</option>
																	   <option id="cargo" name="cargo" value="ENFERMEIRO">ENFERMEIRO</option>
																	   <option id="cargo" name="cargo" value="RPA">RPA</option>
																	 </select>
																	</td>
																  </tr>
																  <tr>
																   <td>COREN:</td>
																   <td>MATRÍCULA: </td>
																  </tr>
																  <tr>
																   <td><input type="text" class="form-control" id="coren" name="coren" value="" /></td>
																   <td><input type="text" class="form-control" id="matricula" name="matricula" value="" required="true" /></td>
																  </tr>
																  <tr>
																   <td>CENTRO DE CUSTO:</td>
																   <td>TIPO PLANTÃO: </td>
																   <td>ESCALA:</td>
																  </tr>
																  <tr>
																   <td>
																   <select id="centro_custo_id" name="centro_custo_id" class="form-control">
																   @foreach($centro_custo as $cc)
																     <option id="centro_custo_id" name="centro_custo_id" value="<?php echo $cc->id; ?>">{{ $cc->descricao }}</option>
																   @endforeach
																   </select>
																   </td>
																   <td>
																   <select id="tipo_plantao" name="tipo_plantao" class="form-control">
																	   <option id="tipo_plantao" name="tipo_plantao" value="D">DIURNO  (07/19h)</option>
																	   <option id="tipo_plantao" name="tipo_plantao" value="N">NOTURNO (19/07h)</option>
																	 </select>
																   </td>
																   <td>
																   <select id="escala" name="escala" class="form-control">
																	   <option id="escala" name="escala" value="I">ÍMPAR </option>
																	   <option id="escala" name="escala" value="P">PAR </option>
																	 </select>
																   </td>
																  </tr>
																  <tr>
																   <td colspan="3"> Observação: <textarea class="form-control" id="observacao" name="observacao" rows="10" cols="100" value=""></textarea> </td>
																  </tr>
																  <tr>
																   <td align="right" colspan="3"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Salvar" id="Salvar" name="Salvar" /> </td>
																  </tr>
															    </thead>
                                                            </table>
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