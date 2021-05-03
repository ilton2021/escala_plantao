@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Nova Escala</title>
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
                                            <h5 class="m-b-10">Nova Escala</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('novaEscala', $escala[0]->id) }}">Nova Escala</a>
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
										      @if ($errors->any())
											  <div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											  </div>
											  @endif 
											  <a href="{{ route('cadastroEscala') }}" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Nova Escala:</h5>
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
															<ul>00
																@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																@endforeach
															</ul>
														  </div>
														  @endif 
														 <form action="{{\Request::route('storeEscala', $escala[0]->id)}}" method="POST">
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
															<?php $qtd = sizeof($funcionarios); ?>
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
																<?php $b = 0; ?>
																@foreach($funcionarios as $func)
																   <?php $b += 1; ?>
																  </tr> 
																  <tr>
																    @if($func->centro_custo == "ENFERMAGEM")
																    <td>{{ $func->centro_custo }}</td>
																	@else
																	<td>{{ $func->centro_custo .$func->centro_custo_id }}</td>
																	@endif
																    <td hidden>
																	 <input type="text"  style="width:350px" class="form-control" id="centro_custo_<?php echo $b ?>" name="centro_custo_<?php echo $b ?>" value="<?php echo $func->centro_custo_id; ?>" />
																	</td>
																	<td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="funcionario_id_<?php echo $b ?>" name="funcionario_id_<?php echo $b ?>" value="<?php echo $func->id; ?>" />
																	</td>
																	<td>
																	 <input type="text" readonly="true" style="width:350px" class="form-control" id="nome" name="nome" value="<?php echo $func->nome; ?>" title="<?php echo $func->nome; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" readonly="true" style="width:150px" class="form-control" id="cargo" name="cargo" value="<?php echo $func->cargo; ?>" title="<?php echo $func->cargo; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" readonly="true" style="width:70px" class="form-control" id="tipo_plantao_<?php echo $b ?>" name="tipo_plantao_<?php echo $b ?>" value="<?php if($func->tipo_plantao == "D"){ echo "DIA"; }else{ echo "NOITE"; }  ?>" required="true" />
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia1_<?php echo $b ?>' name='dia1_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia2_<?php echo $b ?>' name='dia2_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia3_<?php echo $b ?>' name='dia3_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia4_<?php echo $b ?>' name='dia4_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia5_<?php echo $b ?>' name='dia5_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia6_<?php echo $b ?>' name='dia6_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia7_<?php echo $b ?>' name='dia7_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia8_<?php echo $b ?>' name='dia8_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia9_<?php echo $b ?>' name='dia9_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia10_<?php echo $b ?>' name='dia10_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia11_<?php echo $b ?>' name='dia11_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia12_<?php echo $b ?>' name='dia12_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia13_<?php echo $b ?>' name='dia13_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia14_<?php echo $b ?>' name='dia14_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia15_<?php echo $b ?>' name='dia15_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia16_<?php echo $b ?>' name='dia16_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia17_<?php echo $b ?>' name='dia17_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia18_<?php echo $b ?>' name='dia18_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia19_<?php echo $b ?>' name='dia19_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia20_<?php echo $b ?>' name='dia20_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia21_<?php echo $b ?>' name='dia21_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia22_<?php echo $b ?>' name='dia22_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia23_<?php echo $b ?>' name='dia23_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia24_<?php echo $b ?>' name='dia24_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia25_<?php echo $b ?>' name='dia25_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia26_<?php echo $b ?>' name='dia26_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia27_<?php echo $b ?>' name='dia27_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia28_<?php echo $b ?>' name='dia28_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia29_<?php echo $b ?>' name='dia29_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia30_<?php echo $b ?>' name='dia30_<?php echo $b ?>' />	
																	</td>
																	<td>
																	 <input type="checkbox" style="width:40px" class="form-control" id='dia31_<?php echo $b ?>' name='dia31_<?php echo $b ?>' />	
																	</td>
																@endforeach
																@endif
															   </tr>
															  </table>
															  <br>
																  <tr> 
																   <td><p align="right"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Salvar" id="Salvar" name="Salvar" /> </p></td>
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