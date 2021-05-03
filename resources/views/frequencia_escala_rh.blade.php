@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Frequência Escala - RH</title>
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
                                            <h5 class="m-b-10">Frequência Escala</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('frequenciaEscalaRH', $escala[0]->id) }}">Frequência Escala</a>
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
										      <a href="{{ route('frequenciaEscalaRH_cadastro') }}" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Frequência da Escala - RH:</h5>
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
														 <?php $qtd = sizeof($escala); ?>
														    <table class="table table-hover m-b-0 without-header" style="width:500px">
                                                                  <tr>
																   <td style="width:300px"> Mês: 
																   <select readonly="true" id="mes" name="mes" class="form-control" width="300px">
																   @foreach($escala as $es)  
																	 <option id="mes" name="mes" value="<?php echo $es->mes ?>">{{ $es->mes }}</option>
																	 <?php break; ?>
																   @endforeach
																   </select>
																   </td>
																   <td width="200px"> Ano: 
																    <select readonly="true" id="ano" name="ano" class="form-control" width="200px">
																	 @foreach($escala as $es)
																	 <option id="ano" name="ano" value="<?php echo $es->ano ?>">{{ $es->ano }}</option>
																	 <?php break; ?>
																	 @endforeach
																	</select>
																   </td>			
																   <td colspan="2"> 
																   <a class="text-success" href="{{ route('frequenciaEscalaExport', $escala[0]->id) }}" title="Download"><img src="{{asset('assets/images/csv.png')}}" alt="" width="60"></a>	
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
																  <td width="80px"><center>DIÁRIAS</center></td><?php $diarias = 0; ?>
																  <td width="200px" title="PLANTÕES DIURNOS"><center>P. DIURNOS</center></td><?php $diurno = 0; ?>
																  <td width="200px" title="PLANTÕES NOTURNOS COM ADICIONAL NOTURNO"><center>P. NOTURNOS <br>ADD NOTURNO</center></td><?php $noturno = 0; ?>
																  <td><center>DIAS DE SUSPENSÃO</center></td> <?php $suspensao = 0; ?>
																  <td><center>FALTAS</center></td> <?php $faltas = 0; ?>
																  <td width="200px"><center>DIAS DE ATESTADO</center></td> <?php $atm = 0; ?>
																 <?php $b = 0; ?> <?php $nome = ""; ?>
																@foreach($escala_frequencia as $func) <?php $b += 1; ?>
																  </tr> 
																  <tr>
																    @if($func->centro_custo == "ENFERMAGEM")
																    <td>{{ $func->centro_custo }}</td>
																	@else
																	<td>{{ $func->centro_custo .$func->centro_custo_id }}</td>
																	@endif
																    <td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo_id_<?php echo $b ?>" name="centro_custo_id_<?php echo $b ?>" value="<?php echo $func->centro_custo_id; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo" name="centro_custo" value="<?php echo $func->centro_custo; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="escala_id" name="escala_id" value="<?php echo $idEs; ?>" />
																	</td>
																	<td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="funcionario_id_<?php echo $b ?>" name="funcionario_id_<?php echo $b ?>" value="<?php echo $func->funcionario_id; ?>" />
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
																	<td> <?php $nome = strtoupper(substr($func->dia1, 0, 2)); ?>
																	  @if($nome == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																      @elseif($nome == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome == "DE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value=" DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia1, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia1, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value=" ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia1, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia1, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia1, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome2 = strtoupper(substr($func->dia2, 0, 2)); ?>
																	  @if($nome2 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome2 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome2 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome2 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia2, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome2 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia2, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome2 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia2, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia2, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome2 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia2, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome3 = strtoupper(substr($func->dia3, 0, 2)); ?>
																	  @if($nome3 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome3 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome3 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome3 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia3, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome3 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia3, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome3 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia3, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia3, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome3 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia3, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome4 = strtoupper(substr($func->dia4, 0, 2)); ?>
																	  @if($nome4 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome4 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome4 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome4 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia4, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome4 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia4, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome4 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia4, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia4, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome4 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia4, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome5 = strtoupper(substr($func->dia5, 0, 2)); ?>
																	  @if($nome5 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome5 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome5 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome5 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia5, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome5 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia5, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome5 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia5, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia5, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome5 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia5, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome6 = strtoupper(substr($func->dia6, 0, 2)); ?>
																	  @if($nome6 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																	  <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																      @elseif($nome6 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome6 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome6 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia6, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome6 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia6, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome6 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia6, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia6, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome6 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia6, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome7 = strtoupper(substr($func->dia7, 0, 2)); ?>
																	  @if($nome7 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome7 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome7 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome7 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia7, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome7 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia7, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome7 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia7, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia7, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome7 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia7, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome8 = strtoupper(substr($func->dia8, 0, 2)); ?>
																	  @if($nome8 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome8 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome8 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome8 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia8, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome8 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia8, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome8 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia8, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia8, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome8 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia8, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome9 = strtoupper(substr($func->dia9, 0, 2)); ?>
																	  @if($nome9 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome9 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome9 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome9 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia9, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome9 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia9, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome9 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia9, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia9, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome9 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia9, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome10 = strtoupper(substr($func->dia10, 0, 2)); ?>
																	  @if($nome10 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome10 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome10 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome10 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia10, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome10 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia10, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome10 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia10, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia10, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome10 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia10, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome11 = strtoupper(substr($func->dia11, 0, 2)); ?>
																	  @if($nome11 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome11 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome11 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome11 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia11, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome11 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia11, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome11 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia11, 12, 1); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia11, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome11 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia11, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome12 = strtoupper(substr($func->dia12, 0, 2)); ?>
																	  @if($nome12 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome12 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome12 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome12 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia12, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome12 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia12, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome12 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia12, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia12, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome12 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia12, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome13 = strtoupper(substr($func->dia13, 0, 2)); ?>
																	  @if($nome13 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome13 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome13 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome13 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia13, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome13 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia13, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome13 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia13, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia13, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome13 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia13, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome14 = strtoupper(substr($func->dia14, 0, 2)); ?>
																	  @if($nome14 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome14 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome14 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome14 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia14, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome14 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia14, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome14 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia14, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia14, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome14 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia14, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome15 = strtoupper(substr($func->dia15, 0, 2)); ?>
																	  @if($nome15 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome15 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome15 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome15 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia15, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome15 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia15, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome15 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia15, 11, 2); ?> <?php $atm += $nomeF2; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia15, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome15 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia15, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome16 = strtoupper(substr($func->dia16, 0, 2)); ?>
																	  @if($nome16 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome16 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome16 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome16 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia16, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome16 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia16, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome16 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia16, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia16, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome16 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia16, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome17 = strtoupper(substr($func->dia17, 0, 2)); ?>
																	  @if($nome17 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome17 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome17 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome17 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia17, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome17 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia17, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome17 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia17, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia17, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome17 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia17, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome18 = strtoupper(substr($func->dia18, 0, 2)); ?>
																	  @if($nome18 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome18 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome18 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome18 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia18, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome18 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia18, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome18 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia18, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia18, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome18 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia18, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome19 = strtoupper(substr($func->dia19, 0, 2)); ?>
																	  @if($nome19 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome19 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome19 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome19 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia19, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome19 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia19, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome19 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia19, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia19, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome19 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia19, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome20 = strtoupper(substr($func->dia20, 0, 2)); ?>
																	  @if($nome20 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome20 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome20 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome20 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia20, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome20 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia20, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome20 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia20, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia20, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome20 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia20, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome21 = strtoupper(substr($func->dia21, 0, 2)); ?>
																	  @if($nome21 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome21 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome21 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome21 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia21, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome21 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia21, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome21 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia21, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia21, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome21 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia21, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome22 = strtoupper(substr($func->dia22, 0, 2)); ?>
																	  @if($nome22 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome22 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome22 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome22 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia22, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome22 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia22, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome22 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia22, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia22, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome22 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia22, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome23 = strtoupper(substr($func->dia23, 0, 2)); ?>
																	  @if($nome23 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome23 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome23 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome23 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia23, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome23 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia23, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome23 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia23, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia23, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome23 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia23, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome24 = strtoupper(substr($func->dia24, 0, 2)); ?>
																	  @if($nome24 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome24 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome24 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome24 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia24, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome24 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia24, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome24 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia24, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia24, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome24 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia24, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome25 = strtoupper(substr($func->dia25, 0, 2)); ?>
																	  @if($nome25 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome25 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome25 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome25 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia25, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome25 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia25, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome25 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia25, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia25, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome25 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia25, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome26 = strtoupper(substr($func->dia26, 0, 2)); ?>
																	  @if($nome26 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome26 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome26 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome26 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia26, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome26 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia26, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome26 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia26, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia26, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome26 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia26, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome27 = strtoupper(substr($func->dia27, 0, 2)); ?>
																	  @if($nome27 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome27 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome27 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome27 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia27, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome27 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia27, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome27 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia27, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia27, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome27 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia27, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome28 = strtoupper(substr($func->dia28, 0, 2)); ?>
																	  @if($nome28 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome28 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome28 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome28 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia28, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome28 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia28, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome28 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia28, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia28, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome28 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia28, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome29 = strtoupper(substr($func->dia29, 0, 2)); ?>
																	  @if($nome29 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome29 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome29 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome29 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia29, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome29 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia29, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome29 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia29, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia29, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome29 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia29, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome30 = strtoupper(substr($func->dia30, 0, 2)); ?>
																	  @if($nome30 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome30 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome30 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome30 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia30, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome30 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia30, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome30 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia30, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia30, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome30 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia30, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <?php $nome31 = strtoupper(substr($func->dia31, 0, 2)); ?>
																	  @if($nome31 == "PR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PRESENTE" title="PRESENTE" />
																      <?php $diarias += 1; ?> <?php if($func->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; }  ?>
																	  @elseif($nome31 == "FO")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	 FOLGA" title="FOLGA" />
																	  @elseif($nome31 == "DR")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="DESLIGAMENTO" title="DESLIGAMENTO" />
																	  @elseif($nome31 == "FA")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="	  FALTA" title="FALTA" />
																	  <?php  $nomeF = substr($func->dia31, 8); ?> <?php $faltas += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF; ?>" title="<?php echo $nomeF; ?>" />
																	  @elseif($nome31 == "SU")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="    SUSPENSÃO" title="SUSPENSÃO" />
																	  <?php  $nomeF1 = substr($func->dia31, 13); ?> <?php $suspensao += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF1; ?>" title="<?php echo $nomeF1; ?>" />
																	  @elseif($nome31 == "AT")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="ATESTADO MÉD." title="ATESTADO MÉDICO" />
																	  <?php  $nomeF2 = substr($func->dia31, 11, 2); ?> <?php $atm += 1; ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF2; ?>" title="<?php echo $nomeF2; ?>" />
																	  <?php  $nomeF3 = substr($func->dia31, 15); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF3; ?>" title="<?php echo $nomeF3; ?>" />
																	  @elseif($nome31 == "PE")
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="      PERMUTA" title="PERMUTA" />
																	  <?php  $nomeF4 = substr($func->dia31, 10); ?>
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="<?php echo $nomeF4; ?>" title="<?php echo $nomeF4; ?>" />
																	  @else
																	  <input class="form-control" style="width: 140px" readonly="true" type="text" value="               -  " />
																	  @endif
																	</td>
																	<td> <input type="text" readonly="true" style="width:140px" id="diarias" name="diarias" class="form-control" value="<?php echo "              ". $diarias;  $diarias = 0; ?>" /> </td>
																	<td> <input type="text" readonly="true" style="width:140px" id="diurno" name="diurno" class="form-control" value="<?php echo "              ". $diurno; $diurno = 0; ?>" /> </td>
																	<td> <input type="text" readonly="true" style="width:140px" id="noturno" name="noturno" class="form-control" value="<?php echo "              ". $noturno; $noturno = 0; ?>" /> </td>
																	<td> <input type="text" readonly="true" style="width:140px" id="suspensao" name="suspensao" class="form-control" value="<?php echo "              ". $suspensao; $suspensao = 0; ?>" /> </td>
																	<td> <input type="text" readonly="true" style="width:140px" id="faltas" name="faltas" class="form-control" value="<?php echo "              ". $faltas; $faltas = 0; ?>" />	</td>
																	<td> <input type="text" readonly="true" style="width:140px" id="atm" name="atm" class="form-control" value="<?php echo "              ". $atm; $atm = 0; ?>" /> </td>
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