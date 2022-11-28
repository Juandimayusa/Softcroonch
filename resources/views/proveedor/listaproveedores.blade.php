@extends('plantilla')

@section('titulo1')
{{'Proveedor'}}
@stop

@section('titulo2')
{{'Suite Proveedor Lista'}}
@stop


@section('seccion')
<!--INICIO CONTENIDO PAGINA-->
<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">módulo <small>Administración proveedores</small></h1>
    </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
        <li role="presentation" class="active"><a href="crear_proveedor.html">Proveedores</a></li>
    </ul>
</div>
<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset('img/proveedores.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección donde se encuentra el listado de proveedores de insumos y productos. Puedes actualizar o eliminar los datos del proveedor, si hay insumos o productos asociados al proveedor no podrás eliminarlo.
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li><a href="crearproveedor">Nuevo proveedor</a></li>
                <li class="active">Listado de proveedores</li>
            </ol>
        </div>
    </div>
</div>
<form class="pull-right" style="width: 30% !important;" autocomplete="off">
    <div class="group-material">
        <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Proovedor" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, o el ID del Proveedor">
        <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
        </button>
    </div>
</form>
<div class="container-fluid">
    <h2 class="text-center all-tittles">listado de proveedores</h2>
    <div class="div-table">
        <div>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Nit</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($lista_proveedores as $Proveedores)
                        <td>{{$Proveedores ->id}}</td>
                        <td>{{$Proveedores->Nombre}}</td>
                        <td>{{$Proveedores->Email}}</td>
                        <td>{{$Proveedores->Nit}}</td>
                        <td>{{$Proveedores->Telefono}}</td>
                        <td>{{$Proveedores->Direccion}}</td>
                        <td>
                            <div class="div-table-cell">
                                <a href="{{route ('modificar-proveedor',$Proveedores)}}"><button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button></a>
                            </div>
                        </td>
                        <td>
                            <div class="div-table-cell">
                                <a href="{{route ('eliminar-proveedor',$Proveedores)}}"><button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="div-table-row">
            <div class="div-table-cell"></div>
            <div class="div-table-cell"> </div>
            <div class="div-table-cell"></div>
            <div class="div-table-cell"></div>
            <div class="div-table-cell"></div>
            <div class="div-table-cell"></div>

        </div>
    </div>
</div>
<!--FINAL CONTENIDO PAGINA-->
@stop