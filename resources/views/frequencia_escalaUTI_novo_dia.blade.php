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
	<?php $qtd = sizeof($escala);  ?>
	<script>
		function mudar(valor){ 
			<?php for($a = 1; $a <= $qtd; $a++){ ?> 
				if(<?php echo $a ?> == valor) { 
					var x = document.getElementById('<?php echo $dia ?>_<?php echo $a ?>'); 
					var y = x.options[x.selectedIndex].text; 
					if(y == "Atestado"){ 
						document.getElementById('qtdDias_<?php echo $a ?>').hidden = false; 
						document.getElementById('substituto_<?php echo $a ?>').hidden = false; 
						document.getElementById('tipo_func_<?php echo $a ?>').hidden = true; 
					} else if(y == "Permuta") { 
						document.getElementById('substituto_<?php echo $a ?>').hidden = false; 
						document.getElementById('qtdDias_<?php echo $a ?>').hidden = true; 
						document.getElementById('tipo_func_<?php echo $a ?>').hidden = true; 
					} else if(y == "Falta" || y == "Suspensão") { 
						document.getElementById('tipo_func_<?php echo $a ?>').hidden = false; 
						document.getElementById('qtdDias_<?php echo $a ?>').hidden = true; 
					} else { document.getElementById('tipo_func_<?php echo $a ?>').hidden = true; 
						document.getElementById('substituto_<?php echo $a ?>').hidden = true; 
						document.getElementById('qtdDias_<?php echo $a ?>').hidden = true; 
						document.getElementById('substituto_<?php echo $a ?>').hidden = true; 
						document.getElementById('substitutorpa_<?php echo $a ?>').hidden = true; 
					} 
				} 
	  <?php } ?> 
		};

		function mudarFalta(valor) { 
			<?php for($a = 1; $a <= $qtd; $a++){ ?> 
				if(<?php echo $a ?> == valor){ 
					var c = document.getElementById('tipo_func_<?php echo $a ?>'); 
					var z = c.options[c.selectedIndex].text; 
					if(z == "FUNC.") { 
						document.getElementById('substituto_<?php echo $a ?>').hidden = false; 
						document.getElementById('substitutorpa_<?php echo $a ?>').hidden = true; 
					} else if (z == "RPA") { 
						document.getElementById('substituto_<?php echo $a ?>').hidden = true; 
						document.getElementById('substitutorpa_<?php echo $a ?>').hidden = false; 
					} else if (z == "Selecione...") { 
						document.getElementById('substituto_<?php echo $a ?>').hidden = true; 
						document.getElementById('substitutorpa_<?php echo $a ?>').hidden = true; 
					} 
				} 
	  <?php } ?> 
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
										      <a href="javascript:history.back();" class="btn btn-warning btn-sm">Voltar</a>
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
														 <form action="{{\Request::route('storeFrequenciaEscalaUTI_novo', $idEs)}}" method="POST">
													     @endif
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header" style="width:500px">
                                                                  <tr>
																   <td style="width:300px"> Mês: 
																   <select readonly="true" id="mes" name="mes" class="form-control" width="300px">
																    <option id="mes" name="mes" value="<?php echo $escala[0]->mes ?>">{{ $escala[0]->mes }}</option>
																   </select>
																   </td>
																   <td width="200px"> Ano: 
																    <select readonly="true" id="ano" name="ano" class="form-control" width="200px">
																	 <option id="ano" name="ano" value="<?php echo $escala[0]->ano ?>">{{ $escala[0]->ano }}</option>
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
																  <td><center> <?php echo $dia; ?> </center></td>
																<tr>  
																@foreach($escala as $func) <?php $b += 1; ?>
																  </tr> 
																  <tr>
																    <td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="dia" name="dia" value="<?php echo $dia; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo_id" name="centro_custo_id" value="<?php echo $func->centro_custo_id; ?>" />
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
																	<td>  
																	@if($func->$dia == "DIA" || $func->$dia == "NOITE" || $func->$dia == "12x60")  
																	 <select class="form-control" id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" style="width:120px" onchange="mudar(<?php echo $b ?>)">
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="<?php echo $dia ?>_<?php echo $b ?>" name="<?php echo $dia ?>_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias_<?php echo $b ?>" name="qtdDias_<?php echo $b ?>" class="form-control" style="width: 120px" />
																	 <select hidden id="tipo_func_<?php echo $b ?>" name="tipo_func_<?php echo $b ?>" style="width: 120px" class="form-control" onchange="mudarFalta(<?php echo $b ?>)">
																	  <option id="tipo_func_<?php echo $b ?>" name="tipo_func_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func_<?php echo $b ?>" name="tipo_func_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func_<?php echo $b ?>" name="tipo_func_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto_<?php echo $b ?>" name="substituto_<?php echo $b ?>" class="form-control" style="width: 120px">
																	 @foreach($funcT as $fT)
																	   <option id="substituto_<?php echo $b ?>" name="substituto_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa_<?php echo $b ?>" name="substitutorpa_<?php echo $b ?>" class="form-control" style="width: 120px">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa_<?php echo $b ?>" name="substitutorpa_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" readonly="true" style="width:40px" class="form-control" id='<?php echo $dia ?>_<?php echo $b ?>' name='<?php echo $dia ?>_<?php echo $b ?>' value="" /></center>
																	 @endif
																	</td>
																@endforeach
																@endif
															   </tr>
															   <br>

																<?php for($c = 1; $c < 32; $c++){ ?>
																	<input hidden type="text" readonly="true" style="width:40px" class="form-control" id='<?php echo 'dia'.$c ?>' name='<?php echo 'dia'.$c ?>' value="-" />
																<?php } ?>

															   <tr> 
															   @if($qtd > 0)
																<td colspan="35"><p align="right"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Salvar" id="Salvar" name="Salvar" /> </p></td>
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