@extends('plantilla')

@section('titulo1')
{{'Usuario'}}
@stop

@section('titulo2')
{{'Suite Usuario registrar'}}
@stop


@section('seccion')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">módulo <small>registrar usuarios</small></h1>
    </div>
</div>
<div class="conteiner-fluid">
    <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
       
        <li role="presentation"  class="active"><a href="registrar_trabajador.html">Usuarios</a></li>

    </ul>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset('img/user02.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevos Usuarios . Para registrar un Usuario debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de Usuarios registrados
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li class="active">Nuevo usuario</li>
              <li><a href="listausuarios">Listado de usuarios</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Registrar un nuevo Usuario</div>
        <form class="form-padding" method="post" action=""> 
            <div class="row">
                <div class="col-xs-12">
                    <legend><i class="zmdi zmdi-account-box"></i>  Datos básicos</legend><br>
                </div>
                <div class="col-xs-12">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general"  id="inputcc" name="CC" placeholder="Escribe aquí el número de CC" pattern="[0-9-]{1,10}" required="" maxlength="10"   title="número de CC">
                        <label>Número de CC</label>
                    </div>
                </div>
                <div class="col-xs-12">
                   <legend><i class="zmdi zmdi-group"></i> Tipo de documento</legend><br>
                </div>
                <div class="col-xs-12">
                            <div class="group-material">
                                <span>Tipo de Documento</span>
                                <select class="tooltips-general material-control" id="Tipodocumento"  title="Elige los productos">
                                    <option value="Tipodocumento" disabled="" selected="">Tipo Documento</option>
                                    <option value="1">CC</option>
                                    <option value="2">Cedula Extranjeria</option>
                                </select>
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
                   <legend><i class="zmdi zmdi-group"></i> Rol</legend><br>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <span>Rol</span>
                        <select id="Rol" class="material-control tooltips-general"   title="Elige el rol encargado">
                            <option value="Rol" selected="">Selecciona un rol</option>
                            <option value="1">Vendedor</option>
                            <option value="2">Cliente</option>
                            <option value="3">Administrador</option>
                        </select>
                    </div>
                <div class="col-xs-12">
                    <legend><i class="zmdi zmdi-lock"></i> Datos de la cuenta</legend><br>
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
                
               <div class="col-xs-12">
                    <p class="text-center">
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p> 
                </div>
            </div>
        </form>
    </div>
</div>
@stop