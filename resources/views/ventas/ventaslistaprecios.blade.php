@extends('plantilla')

@section('titulo1')
{{'Ventas'}}
@stop

@section('titulo2')
{{'Suite Ventas lista de Precios'}}
@stop


@section('seccion')
<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">módulo <small>lista de precios</small></h1>
    </div>
</div>
<div class="conteiner-fluid">
    <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
        <li class="active"><a href="ventaslistaprecios">Precios</a></li>


    </ul>
</div>
<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset('img/precios.png')}}" alt="calendar" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a esta sección, aquí se muestran todos los precios de los productos actuales en el inventario
        </div>
    </div>
</div>
<form class="pull-right" style="width: 30% !important;" autocomplete="off">
    <div class="group-material">
        <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Producto" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, o el ID del Producto">
        <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
        </button>
    </div>
</form>
<div class="container-fluid">
    <h2 class="text-center all-tittles">lista de precios</h2>
    <div class="div-table">
        <div class="div-table-row div-table-head">
            <div class="div-table-cell">ID</div>
            <div class="div-table-cell">Nombre</div>
            <div class="div-table-cell">Cantidad</div>
            <div class="div-table-cell">Precio</div>
            <div class="div-table-cell">Modificar</div>
        </div>
        <div class="div-table-row">
            <div class="div-table-cell"></div>
            <div class="div-table-cell"> </div>
            <div class="div-table-cell"></div>
            <div class="div-table-cell"></div>
            <div class="div-table-cell" style="width: 9%;">
                <a href="modificarprecio"><button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button></a>
            </div>
        </div>

    </div>
    @stop