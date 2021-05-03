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
                                            <h5 class="m-b-10">Nova Troca de Plantão</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('novaTrocaP') }}">Nova Troca de Plantão</a>
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
                                                        <h5>Cadastro de Troca de Plantão:</h5>
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
														 <form action="{{\Request::route('storeTrocaP')}}" method="post">
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header">
                                                                <thead>
																  <tr>
																 	<td style="width: 500px;"> Colaborador: </td>
																	<td> Matrícula: </td>
																	<td> Setor: </td>
																  </tr>
																  <tr>
																   <td colspan="1"> <input type="text" required="true" class="form-control" id="nome" name="nome" value="<?php echo $funcionario[0]->nome; ?>" readonly="true" /> </td>
																   <td> <input type="text" required="true" class="form-control" id="matricula" name="matricula" value="<?php echo $funcionario[0]->matricula; ?>" readonly="true" /> </td>
																   <td> <input type="text" required="true" class="form-control" id="setor" name="setor" value="<?php echo $funcionario[0]->cargo; ?>" readonly="true" /> </td>
																  </tr>
																</thead>
																<tbody>
																  <tr>
																    <td> Dia: </td>
																	<td> Horário: </td>
																	<td> Mês/Ano: </td>
																  </tr>
																  <tr> <?php $hoje = date('d', strtotime('now')); ?>
																   <td>
																    <select class="form-control" id="dia" name="dia" style="width:200px">
																	 @foreach($escala as $es)
																	  @if($es->dia1 != "" && 1 > $hoje) <option id="dia" name="dia" value="1"> <?php echo 1; ?> </option>  @endif
																	  @if($es->dia2 != "" && 2 > $hoje) <option id="dia" name="dia" value="2"> <?php echo 2; ?> </option>  @endif
																	  @if($es->dia3 != "" && 3 > $hoje) <option id="dia" name="dia" value="3"> <?php echo 3; ?> </option>  @endif
																	  @if($es->dia4 != "" && 4 > $hoje) <option id="dia" name="dia" value="4"> <?php echo 4; ?> </option>  @endif
																	  @if($es->dia5 != "" && 5 > $hoje) <option id="dia" name="dia" value="5"> <?php echo 5; ?> </option>  @endif
																	  @if($es->dia6 != "" && 6 > $hoje) <option id="dia" name="dia" value="6"> <?php echo 6; ?> </option>  @endif
																	  @if($es->dia7 != "" && 7 > $hoje) <option id="dia" name="dia" value="7"> <?php echo 7; ?> </option>  @endif
																	  @if($es->dia8 != "" && 8 > $hoje) <option id="dia" name="dia" value="8"> <?php echo 8; ?> </option>  @endif
																	  @if($es->dia9 != "" && 9 > $hoje) <option id="dia" name="dia" value="9"> <?php echo 9; ?> </option>  @endif
																	  @if($es->dia10 != "" && 10 > $hoje) <option id="dia" name="dia" value="10"> <?php echo 10; ?> </option>  @endif
																	  @if($es->dia11 != "" && 11 > $hoje) <option id="dia" name="dia" value="11"> <?php echo 11; ?> </option>  @endif
																	  @if($es->dia12 != "" && 12 > $hoje) <option id="dia" name="dia" value="12"> <?php echo 12; ?> </option>  @endif
																	  @if($es->dia13 != "" && 13 > $hoje) <option id="dia" name="dia" value="13"> <?php echo 13; ?> </option>  @endif
																	  @if($es->dia14 != "" && 14 > $hoje) <option id="dia" name="dia" value="14"> <?php echo 14; ?> </option>  @endif
																	  @if($es->dia15 != "" && 15 > $hoje) <option id="dia" name="dia" value="15"> <?php echo 15; ?> </option>  @endif
																	  @if($es->dia16 != "" && 16 > $hoje) <option id="dia" name="dia" value="16"> <?php echo 16; ?> </option>  @endif
																	  @if($es->dia17 != "" && 17 > $hoje) <option id="dia" name="dia" value="17"> <?php echo 17; ?> </option>  @endif
																	  @if($es->dia18 != "" && 18 > $hoje) <option id="dia" name="dia" value="18"> <?php echo 18; ?> </option>  @endif
																	  @if($es->dia19 != "" && 19 > $hoje) <option id="dia" name="dia" value="19"> <?php echo 19; ?> </option>  @endif
																	  @if($es->dia20 != "" && 20 > $hoje) <option id="dia" name="dia" value="20"> <?php echo 20; ?> </option>  @endif
																	  @if($es->dia21 != "" && 21 > $hoje) <option id="dia" name="dia" value="21"> <?php echo 21; ?> </option>  @endif
																	  @if($es->dia22 != "" && 22 > $hoje) <option id="dia" name="dia" value="22"> <?php echo 22; ?> </option>  @endif
																	  @if($es->dia23 != "" && 23 > $hoje) <option id="dia" name="dia" value="23"> <?php echo 23; ?> </option>  @endif
																	  @if($es->dia24 != "" && 24 > $hoje) <option id="dia" name="dia" value="24"> <?php echo 24; ?> </option>  @endif
																	  @if($es->dia25 != "" && 25 > $hoje) <option id="dia" name="dia" value="25"> <?php echo 25; ?> </option>  @endif
																	  @if($es->dia26 != "" && 26 > $hoje) <option id="dia" name="dia" value="26"> <?php echo 26; ?> </option>  @endif
																	  @if($es->dia27 != "" && 27 > $hoje) <option id="dia" name="dia" value="27"> <?php echo 27; ?> </option>  @endif
																	  @if($es->dia28 != "" && 28 > $hoje) <option id="dia" name="dia" value="28"> <?php echo 28; ?> </option>  @endif
																	  @if($es->dia29 != "" && 29 > $hoje) <option id="dia" name="dia" value="29"> <?php echo 29; ?> </option>  @endif
																	  @if($es->dia30 != "" && 30 > $hoje) <option id="dia" name="dia" value="30"> <?php echo 30; ?> </option>  @endif
																	  @if($es->dia31 != "" && 31 > $hoje) <option id="dia" name="dia" value="31"> <?php echo 31; ?> </option>  @endif
																	 @endforeach
																	</select>
																   </td>
																   <td> 
																   @if($funcionario[0]->tipo_plantao == "D")
																	<input type="text" readonly="true" class="form-control" id="horario" name="horario" value="07:00 às 19:00" />    
																   @else
																	<input type="text" readonly="true" class="form-control" id="horario" name="horario" value="19:00 às 07:00" /> 
																   @endif
																   </td>
																   <td> <input type="text" class="form-control" readonly="true" id="mes_ano" name="mes_ano" value="<?php echo $mes .'/'. $ano; ?>" /> </td>
																  </tr>
																  <tr>
																   <input hidden type="text" class="form-control" id="colaborador" name="colaborador" value="<?php echo $funcionario[0]->id; ?>" readonly="true" />
																   <input hidden type="text" class="form-control" id="substituto" name="substituto" value="" />
																   <input hidden type="text" class="form-control" id="gestor" name="gestor" value="" />
																   <input hidden type="text" class="form-control" id="escala_id" name="escala_id" value="<?php echo $escala_id[0]->id; ?>" />
																   <td align="right" colspan="3"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Salvar" id="Salvar" name="Salvar" /> </td>
																  </tr>
															    </tbody>
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