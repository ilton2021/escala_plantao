<!DOCTYPE html>
<html lang="en">
<head>
    <title>Escala de Plantão</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="{{ asset('assets/images/favico.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
	@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
	  @endif
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
			    <img src="{{ asset('../public/assets/images/marca-site-hcp.png') }}" height="120" style="margin-top: 100px; margin-left: 140px">
			  </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Escala de Plantão</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('store') }}">
				  @csrf
				    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="name" name="name" aria-describedby="emailHelp" placeholder="Nome...">
                    </div>
					<div class="form-group">
                      <input type="email" class="form-control form-control-email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Senha...">
                    </div>
					<div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Senha...">
                    </div>
					<div class="form-group">
                      <select class="form-control form-control-user" id="perfil" name="perfil">
					    <option id="perfil" name="perfil" value="Administrador">Administrador</option>
						<option id="perfil" name="perfil" value="Usuario">Usuário</option>
						<option id="perfil" name="perfil" value="Supervisao">Supervisão</option>
						<option id="perfil" name="perfil" value="RH">RH</option>
					  </select>
                    </div>
					<input type="submit" class="btn btn-primary btn-user btn-block" style="margin-top: 10px;" value="Cadastrar" id="Cadastrar" name="Cadastrar" /> 				 
					<center><a href="{{url('/home')}}" id="Voltar" name="Voltar" type="button" class="btn btn-warning btn-sm" style="margin-top: 10px; color: #FFFFFF;"> Voltar <i class="fas fa-undo-alt"></i> </a></center>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>