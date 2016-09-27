@extends('layouts.app')
<<<<<<< HEAD
<style type="text/css">
body{
    background:#DCEDF9 !important;
    font-family: 'Oswald', sans-serif !important;
}

.container .row .titulo_principal_login h2{
    text-transform:uppercase;
}


.container .row .panel .panel-heading{
        text-align:center;
        font-size:1.4em;
   } 


.container .row .panel-body div.botonera{
    display:block;

}
.container .row .panel-body div.botonera .botones__sociales{
    display:inline-block;
    width:200px;
    border:none;
    margin:5px;
    padding:10px;
    border-radius:3px;
    color:#fff;
    text-align:center;
}
.container .row .panel-body div.botonera .botones__sociales span{
    position:relative;
    right:5px;
    color:#000;
}


.container .row .panel-body .botonera .botonera_sociales{
    width:500px;
    position:relative;
    left:-28%;
}

@media screen and (max-width: 800px){

    .container .row .panel-body .botonera .botonera_sociales{
           position:relative;
           left:18%;
    }

     .container .row .panel-body .botonera .botones__sociales-login{
        position:relative;
        left:33%;
     }

.container .row .panel-body div.botonera .botones__sociales{
        display:block;
        width:100px;
        border:none;
        margin:5px;
        padding:10px;
        text-align:center;
 }

}


.container .row .panel-body .botonera .botonera_sociales button{
    display:inline-block;
}
.container .row .panel-body .botonera .botonera_sociales button.botones__sociales-login,
.container .row .panel-body .botonera .botonera_sociales button.botones__sociales-facebook,
.container .row .panel-body .botonera .botonera_sociales button.botones__sociales-twitter{
    transition:.4s all;
}

.container .row .panel-body .botonera .botonera_sociales button.botones__sociales-facebook:hover{
    background:rgba(59,89,152,.9) !important;
}
.container .row .panel-body .botonera .botonera_sociales button.botones__sociales-facebook:hover{
        background:rgba(85,172,238,6) !important;
}

.container .row .panel .panel-body form div.form-group div.col-md-6 input.input{
    display: inline-block;
    background: none;
    border: 1.5px solid #BBBBBB;
    width: 100%;
    outline: none;
    padding: 10px 15px 10px 15px;
    font-size: .9em;
    color: #BBBBBB;
    margin: 0 0 1.5em 0;
}

</style>
@section('content')
<div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-md-12 col-sm-12 text-center titulo_principal_login">
            <h2>Inicia Sesion con Tio Ven</h2>
        </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
        <div class="col-md-8 col-md-offset-2" style="position:relative;top:10px;">
            <div class="panel panel-defaul">
                <div class="panel-heading" style="border-bottom:1px solid rgba(0,0,0,.4);">Login</div>
                <div class="panel-body">
                    <form style="margin-top:10px;" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Introduce tu Correo</label>

                            <div class="col-md-6">
                                <input  id="email" type="email" name="email" class="input" value="{{ old('email') }}">
=======

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 control-label">Introduce tu Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  name="password"class="input" >
=======
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
<<<<<<< HEAD
                                        <input type="checkbox" name="remember">Recuerdame
=======
                                        <input type="checkbox" name="remember"> Remember Me
>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
                                    </label>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group botonera">
                            <div class="col-md-6 col-md-offset-4">
                                <button  type="submit" style="background:#fd5c63;" class="botones__sociales botones__sociales-login">
                                    <span class="fa fa-btn fa-sign-in"></span> Entrar
                                </button>
                                <div class="botonera_sociales">
                                    <a href="{{ url('redirect/facebook') }}"  style="background:#3b5998;" class="botones__sociales botones__sociales-facebook">
                                        <span href="" class="fa fa-facebook"></span>Facebook
                                    </a>
                                    <a  href="{{ url('redirect/twitter') }}" style="background:#55acee;" class="botones__sociales botones__sociales-twitter">
                                        <span  class="fa fa-twitter"></span> Twitter
                                    </a>
                                </div>  
=======
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

>>>>>>> 24bc3e2da133fb2ab3e75b7fe006c4151ce426d1
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
