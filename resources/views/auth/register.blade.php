@extends('layouts.app')
<style type="text/css">
body{
    background:#DCEDF9 !important;
    font-family: 'Oswald', sans-serif !important;
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

.container .row .panel-body div.botonera .botones__sociales-login{
    display:block;
    width:200px;
    border:none;
    margin:5px;
    padding:10px;
    border-radius:3px;
    color:#fff;
    background:#fd5c63;
}
.container .row .panel-body div.botonera .botones__sociales-login span{
  color:#000;
}

</style>
@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-12 col-sm-12 text-center titulo_principal_login">
            <h2>Registrate con Tio Ven</h2>
        </div>
        <div class="col-md-8 col-md-offset-2" style="margin-top:40px;">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group botonera">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="botones__sociales-login">
                                    <span class="fa fa-btn fa-user"></span> Register
                                </button>
                                 <div class="botonera_sociales">
                                    <a href="{{url('redirect/facebook')}}" style="background:#3b5998;" class="botones__sociales botones__sociales-facebook">
                                        <span class="fa fa-facebook"></span>Facebook
                                    </a>
                                    <a href="{{url('redirect/twitter')}}" style="background:#55acee;" class="botones__sociales botones__sociales-twitter">
                                        <span class="fa fa-twitter"></span> Twitter
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
