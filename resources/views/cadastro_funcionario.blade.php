@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Cadastro Funcionário</title>
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
								<div class="pcoded-navigation-label">Escala</div>
								<ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route('frequenciaEscalaRH_cadastro') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Escala RH</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
							    </ul>
                            </ul>
                        </div>
                    </nav>
					
                    <div class="pcoded-content">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Cadastro Funcionário</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('cadastroFunc') }}">Cadastro Funcionário</a>
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
                                           <div class="col-xl-12 col-md-18">
												@if (Session::has('mensagem'))
													@if ($text == true)
													<div class="container">
													 <div class="alert alert-danger {{ Session::get ('mensagem')['class'] }} ">
														  {{ Session::get ('mensagem')['msg'] }}
													 </div>
													</div>
													@endif
												@endif
                                                <table>
												<form action="{{ route('pesqFunc') }}" method="POST">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<tr>
												 <td align="left">
													<a href="{{ route('novoFunc') }}" class="btn btn-sm btn-success">Novo Funcionário +</a>
												 </td>
												 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												 <td>
													<input type="text" placeholder="" id="pesq" name="pesq" style="width:400px" class="form-control" />  
												 </td>
												 <td>
													<select id="tipo" name="tipo" class="form-control" style="width: 150px">
													  <option id="tipo" name="tipo" value="NOME">NOME</option>
													  <option id="tipo" name="tipo" value="CARGO">CARGO</option>
													  <option id="tipo" name="tipo" value="CENTRO_CUSTO">CENTRO CUSTO</option>
													  <option id="tipo" name="tipo" value="PLANTAO">PLANTÃO</option>
													</select>
												 </td>
												 <td align="right">
													<input type="submit" class="btn btn-warning btn-sm" value="Pesquisar" id="Salvar" name="Salvar" />
												 </td>
												</tr>
												
												</table> <br>
												<div class="card table-card">
                                                   <div class="card-header">
                                                        <h5>Funcionário:</h5>
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
														    <table class="table table-hover m-b-0 without-header">
                                                                <thead>
																  <tr>
																	<td width="300px"> NOME: </td>
																	<td> MATRÍCULA: </td>
																	<td> CARGO: </td>
																	<td width="200px"> CENTRO DE CUSTO: </td>
																	<td> PLANTÃO: </td>
																	<td> ESCALA: </td>
																	<td>  </td>
																	<td>  </td>
																  </tr>
																</thead>
																<tbody>
																<?php $qtd = sizeof($funcionario); ?>
																@if($qtd > 0)
																 @foreach($funcionario as $f)
																  <tr>
																   <td width="350px" title="<?php echo $f->nome ?>">{{ substr($f->nome, 0, 30) }}</td>
																   <td><center>{{ $f->matricula }} </center></td>
																   <td><center>{{ $f->cargo }} </center></td>
																   @foreach($centro_custo as $cc)
																   @if($cc->id == $f->centro_custo_id)
																   <td><center>{{ $cc->descricao }}</center></td>
																   @endif
																   @endforeach
																   <td><center><?php if($f->tipo_plantao == "D"){ ?>{{ 'DIA' }}<?php }else{ ?> {{ 'NOITE' }} <?php } ?></center></td>
																   <td><center><?php if($f->escala == "I"){ ?>{{ 'ÍMPAR' }}<?php }else{ ?> {{ 'PAR' }} <?php } ?></center></td>
																   <td><a href="{{ route('alterarFunc', $f->id) }}" class="btn btn-sm btn-info">ALTERAR</a></td>
																   <td><a href="{{ route('excluirFunc', $f->id) }}" class="btn btn-sm btn-danger">EXCLUIR</a></td>
																  </tr> 
																 @endforeach
																@endif
                                                                </tbody>
                                                            </table>
															   {{ $funcionario->appends(['pesq' => isset($pesq) ? $pesq : ''])->render("pagination::bootstrap-4") }}
														</div>
														</form>
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