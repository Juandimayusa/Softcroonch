@extends('plantilla')

@section('titulo1')
{{'Proveedor'}}
@stop

@section('titulo2')
{{'Suite Proveedor Crear'}}
@stop


@section('seccion')
<!--INICIO CONTENIDO PAGINA-->
<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">módulo <small>crear proveedor</small></h1>
    </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
        <li role="presentation" class="active"><a href="Proveedor/crear">Proveedores</a></li>
    </ul>
</div>
<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset('img/proveedores.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar un nuevo proveedor, debes de llenar todos los campos del siguiente formulario para poder registrar un proveedor
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nuevo proveedor</li>
                <li><a href="listarproveedor">Listado de proveedores</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar un nuevo proveedor</div>

       


        
        <form class="form-padding" method="post" action="{{route('guardar-proveedor')}}">
           @csrf
        <div class="row">
                <div class="col-xs-12">
                    <legend>Datos del proveedor</legend><br>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general"  id="Nombre" name="Nombre" placeholder="Nombre de proveedor"  maxlength="50" title="Escribe el nombre del proveedor">
                        <label>Nombre del proveedor</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="email" class="material-control tooltips-general" id="Email" name="Email" placeholder="Email de proveedor"  maxlength="50" title="Escribe el Email del proveedor">
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="Nit" name="Nit" placeholder="Dirección de proveedor"   maxlength="9" title="Escribe el nit del proveedor">
                        <label>NIT</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="Telefono" name="Telefono" placeholder="Teléfono de proveedor"   maxlength="10" title="Solo números, mínimo 10 dígitos">
                        <label>Teléfono</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" id="Direccion" name="Direccion" placeholder="Dirección del proveedor" Name="Direccion "   maxlength="10" title="Digite la direccion">
                        <label>Direccion</label>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="col-xs-12">
                <p class="text-center">
                    <a >
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </a>
                    <a href="Siute">
                        <button type="button" class="btn btn-info" style="margin-right: 20px;"> Limpiar</button>
                    </a>


                </p>
            </div>
    </div>
    </form>
</div>
</div>

@stop
<!--FIN CONTENIDO PAGINA-->