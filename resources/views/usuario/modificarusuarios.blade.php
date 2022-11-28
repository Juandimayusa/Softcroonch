@extends('plantilla')

@section('titulo1')
{{'Usuario'}}
@stop

@section('titulo2')
{{'Suite Usuario lista'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>modificar usuarios</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation" class="active"><a href="modificarusuarios">Modificar Usuario</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/user05.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para modificar un usuario. Para modificar el usuario debes de llenar todos los campos del siguiente formulario.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo usuario.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Modificar usuario</div>
                <form class="form-padding" method="post" action="">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <div class="col-xs-12">
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general"  id="inputcc" name="CC" placeholder="Escribe aquí el número de CC" pattern="[0-9-]{1,10}" required="" maxlength="10"   title="número de CC">
                            <label>Número de CC</label>
                         </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="inputnombres" name="Nombres" placeholder="Escribe aquí el nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50"   title="Nombre">
                        <label>Nombres</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="inputapellidos" name="Apellidos" placeholder="Escribe aquí los apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50"   title="Apellidos">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Apellidos</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="inputtelefono" name="Telefono" placeholder="Escribe aquí el número de teléfono" pattern="[0-9]{8,8}"  maxlength="8"   title="Número de teléfono">
                        <label>Teléfono (*opcional)</label>
                    </div>
                </div>  
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; Datos de la cuenta</legend><br>
                        </div>
                        <div class="col-xs-12">
                   <div class="group-material">
                        <input type="text" class="material-control tooltips-general input-check-user" id="inputcorreo" name="Correousuario" placeholder="Correo del Usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ@.]{1,20}"   title="Escribe un correo para el usuario sin espacios, que servira para iniciar sesión">
                        <label>Correo del Usuario</label>
                   </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="password" class="material-control tooltips-general"  id="inputcontraseña" name="Contraseña"  placeholder="Contraseña" required="" maxlength="200"   title="Escribe una contraseña">
                        <label>Contraseña</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                   <div class="group-material">
                        <input type="password" class="material-control tooltips-general"  id="inputconfirmarcontraseña" name="confirmarcontraseña" placeholder="Repite la contraseña" required="" maxlength="200"   title="Repite la contraseña">
                        <label>Repetir contraseña</label>
                   </div>
                </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Modificar</button>
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                
                            </p> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @stop