@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Frequência Escala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="assets/images/favico.png" type="image/x-icon">
	<script>
		function mudar(valor){   
			var x = document.getElementById('dia'); 
			var y = x.options[x.selectedIndex].text; 
			if(y == "Atestado"){ 
				document.getElementById('qtdDias').hidden = false; 
				document.getElementById('substituto').hidden = false; 
				document.getElementById('tipo_func').hidden = true; 
		    } else if(y == "Permuta") { 
				document.getElementById('substituto').hidden = false; 
				document.getElementById('qtdDias').hidden = true; 
				document.getElementById('tipo_func').hidden = true; 
			} else if(y == "Falta" || y == "Suspensão") { 
				document.getElementById('tipo_func').hidden = false; 
				document.getElementById('qtdDias').hidden = true; 
			} else { 
				document.getElementById('tipo_func').hidden = true; 
				document.getElementById('substituto').hidden = true; 
				document.getElementById('qtdDias').hidden = true; 
				document.getElementById('substituto').hidden = true; 
				document.getElementById('substitutorpa').hidden = true; 
			} 
		};

		function mudarFalta(valor) { 
			var c = document.getElementById('tipo_func'); 
			var z = c.options[c.selectedIndex].text; 
			if(z == "FUNC.") { 
				document.getElementById('substituto').hidden = false; 
				document.getElementById('substitutorpa').hidden = true; 
			} else if (z == "RPA") { 
				document.getElementById('substituto').hidden = true; 
				document.getElementById('substitutorpa').hidden = false; 
			} else if (z == "Selecione...") { 
				document.getElementById('substituto').hidden = true; 
				document.getElementById('substitutorpa').hidden = true; 
			} 
		};
	</script>
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
                                            <h5 class="m-b-10">Frequência Escala</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('frequenciaEscala', 0) }}">Frequência Escala</a>
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
										      <a href="javascript:history.back();" class="btn btn-warning btn-sm">Voltar</a> <b>* Para cadastrar clique no dia que deseja *</b>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Frequência da Escala:</h5>
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
														  <div class="alert alert-danger">
															<ul>
																@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																@endforeach
															</ul>
														  </div>
														  @endif
														 <?php $qtd = sizeof($escala); ?>
														 @if($qtd > 0)
														 @endif <?php $qtd = sizeof($escala); ?>
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header" style="width:500px">
                                                                  <tr>
																   <td style="width:300px"> Mês: 
																   <select readonly="true" id="mes" name="mes" class="form-control" width="300px">
																   @if($qtd > 0)
																    <option id="mes" name="mes" value="<?php echo $escala[0]->mes ?>">{{ $escala[0]->mes }}</option>
																   @endif
																   </select>
																   </td>
																   <td width="200px"> Ano: 
																    <select readonly="true" id="ano" name="ano" class="form-control" width="200px">
																	@if($qtd > 0)
																	 <option id="ano" name="ano" value="<?php echo $escala[0]->ano ?>">{{ $escala[0]->ano }}</option>
																	@endif
																	</select>
																   </td>											   
																  </tr>
															</table>
															<?php $qtd = sizeof($escala); ?>
															@if($qtd > 0)
															<table class="table table-hover m-b-0 without-header">	  
																<tr>
																 <td colspan="2">FUNCIONÁRIOS:</td>
																 <td colspan="2"><center><b>Centro de Custo: UTI {{ $funcionarios[0]->centro_custo_id  }}</b></center></td>
																</tr>
																<tr>
																  <td>Nome do Funcionário</td>
																  <td><center>Cargo</center></td>
																  <td><center>Plantão</center></td>
															      <?php $b = 0; ?>
																  <?php for($a = 1; $a < 32; $a++){ ?>
																	<td><center><a href="{{ route('frequenciaEscalaUTI_novo_dia', array($escala[0]->escala_id,$funcionarios[0]->centro_custo_id,$a)) }}">{{ $a }} </a></center></td>
																  <?php } ?> 
																<tr>  
																@foreach($frequencia as $func) <?php $b += 1; ?>
																  </tr> 
																  <tr>
																    <td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo" name="centro_custo" value="<?php echo $func->centro_custo_id; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="escala_id" name="escala_id" value="<?php echo $idEs; ?>" />
																	</td>
																	<td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="funcionario_id_<?php echo $b ?>" name="funcionario_id_<?php echo $b ?>" value="<?php echo $func->funcionario_id; ?>" />
																	</td>
																	<td>
																	@foreach($funcionarios as $fc)
																	@if($func->funcionario_id == $fc->id)
																	<input readonly="true" type="text" style="width:250px" class="form-control" id="funcionario_<?php echo $b ?>" name="funcionario_<?php echo $b ?>" value="<?php echo $fc->nome; ?>" title="<?php echo $fc->nome; ?>" />
																	@endif
																	@endforeach
																	</td>
																	@foreach($funcionarios as $fc)
																	@if($func->funcionario_id == $fc->id)
																	<td>
																	<input readonly="true" type="text" style="width:100px" class="form-control" id="cargo_<?php echo $b ?>" name="cargo_<?php echo $b ?>" value="<?php echo $fc->cargo; ?>" title="<?php echo $fc->cargo; ?>" />
																	</td>
																	@endif
																	@endforeach
																	@foreach($funcionarios as $fc)
																	@if($func->funcionario_id == $fc->id)
																	<td>
																	<input readonly="true" type="text" style="width:50px" class="form-control" id="tipo_plantao_<?php echo $b ?>" name="tipo_plantao_<?php echo $b ?>" value="<?php echo $fc->tipo_plantao; ?>" />
																	</td>
																	@endif
																	@endforeach
																	<td>
																	 @if($func->dia1 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia1' name='dia1' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia1' name='dia1' value="<?php echo $func->dia1; ?>" title="<?php echo $func->dia1; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia2 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia2' name='dia2' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia2' name='dia2' value="<?php echo $func->dia2; ?>" title="<?php echo $func->dia2; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia3 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia3' name='dia3' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia3' name='dia3' value="<?php echo $func->dia3; ?>" title="<?php echo $func->dia3; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia4 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia4' name='dia4' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia4' name='dia4' value="<?php echo $func->dia4; ?>" title="<?php echo $func->dia4; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia5 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia5' name='dia5' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia5' name='dia5' value="<?php echo $func->dia5; ?>" title="<?php echo $func->dia5; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia6 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia6' name='dia6' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia6' name='dia6' value="<?php echo $func->dia6; ?>" title="<?php echo $func->dia6; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia7 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia7' name='dia7' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia7' name='dia7' value="<?php echo $func->dia7; ?>" title="<?php echo $func->dia7; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	@if($func->dia8 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia8' name='dia8' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia8' name='dia8' value="<?php echo $func->dia8; ?>" title="<?php echo $func->dia8; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia9 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia9' name='dia9' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia9' name='dia9' value="<?php echo $func->dia9; ?>" title="<?php echo $func->dia9; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia10 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia10' name='dia10' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia10' name='dia10' value="<?php echo $func->dia10; ?>" title="<?php echo $func->dia10; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia11 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia11' name='dia11' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia11' name='dia11' value="<?php echo $func->dia11; ?>" title="<?php echo $func->dia11; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia12 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia12' name='dia12' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia12' name='dia12' value="<?php echo $func->dia12; ?>" title="<?php echo $func->dia12; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia13 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia13' name='dia13' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia13' name='dia13' value="<?php echo $func->dia13; ?>" title="<?php echo $func->dia13; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia14 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia14' name='dia14' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia14' name='dia14' value="<?php echo $func->dia14; ?>" title="<?php echo $func->dia14; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia15 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia15' name='dia15' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia15' name='dia15' value="<?php echo $func->dia15; ?>" title="<?php echo $func->dia15; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia16 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia16' name='dia16' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia16' name='dia16' value="<?php echo $func->dia16; ?>" title="<?php echo $func->dia16; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia17 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia17' name='dia17' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia17' name='dia17' value="<?php echo $func->dia17; ?>" title="<?php echo $func->dia17; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia18 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia18' name='dia18' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia18' name='dia18' value="<?php echo $func->dia18; ?>" title="<?php echo $func->dia18; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia19 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia19' name='dia19' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia19' name='dia19' value="<?php echo $func->dia19; ?>" title="<?php echo $func->dia19; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia20 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia20' name='dia20' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia20' name='dia20' value="<?php echo $func->dia20; ?>" title="<?php echo $func->dia20; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia21 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia21' name='dia21' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia21' name='dia21' value="<?php echo $func->dia21; ?>" title="<?php echo $func->dia21; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia22 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia22' name='dia22' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia22' name='dia22' value="<?php echo $func->dia22; ?>" title="<?php echo $func->dia22; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia23 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia23' name='dia23' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia23' name='dia23' value="<?php echo $func->dia23; ?>" title="<?php echo $func->dia23; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia24 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia24' name='dia24' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia24' name='dia24' value="<?php echo $func->dia24; ?>" title="<?php echo $func->dia24; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia25 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia25' name='dia25' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia25' name='dia25' value="<?php echo $func->dia25; ?>" title="<?php echo $func->dia25; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia26 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia26' name='dia26' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia26' name='dia26' value="<?php echo $func->dia26; ?>" title="<?php echo $func->dia26; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia27 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia27' name='dia27' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia27' name='dia27' value="<?php echo $func->dia27; ?>" title="<?php echo $func->dia27; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia28 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia28' name='dia28' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia28' name='dia28' value="<?php echo $func->dia28; ?>" title="<?php echo $func->dia28; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia29 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia29' name='dia29' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia29' name='dia29' value="<?php echo $func->dia29; ?>" title="<?php echo $func->dia29; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia30 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia30' name='dia30' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia30' name='dia30' value="<?php echo $func->dia30; ?>" title="<?php echo $func->dia30; ?>" /></center>	
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia31 == "")
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia31' name='dia31' value="" /></center>	
																	 @else
																	 <center><input type="text" disabled="true" style="width:100px" class="form-control" id='dia31' name='dia31' value="<?php echo $func->dia31; ?>" title="<?php echo $func->dia31; ?>" /></center>	
																	 @endif
																	</td>
																@endforeach
																@endif
															   </tr>
															   <br>
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