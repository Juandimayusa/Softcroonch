@extends('plantilla')

@section('titulo1')
{{'Iventario'}}
@stop

@section('titulo2')
{{'Suite Iventario insumos'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>productos inventario</small></h1>
            </div>
        </div>
         <div class="container-fluid"  style="margin: 40px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/inventario.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido al inventario, selecciona una categoría de la lista para empezar, si deseas buscar un insumo por nombre o código has click en el icono &nbsp; <i class="zmdi zmdi-search"></i> &nbsp; que se encuentra en la barra superior
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="inventarioprincipal">Producto Final</a></li>
                        <li class="active">Insumos</li>
                    </ol>
                </div>
            </div>
        </div>
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Insumo" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, o el ID del Insumo">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">inventario insumos</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Cantidad</div>
                    <div class="div-table-cell">Lote</div>
                    <div class="div-table-cell">F.V</div>
                    <div class="div-table-cell">Proveedor</div>    
                    <div class="div-table-cell">Modificar</div>
                    <div class="div-table-cell">Eliminar</div>
                </div>  
                <div class="div-table-row">
                    <div class="div-table-cell" ></div>
                    <div class="div-table-cell"> </div>
                    <div class="div-table-cell"></div>
                    <div class="div-table-cell"></div>
                    <div class="div-table-cell"></div>
                    <div class="div-table-cell"></div>
                    <div class="div-table-cell">
                        <a href="modificarinsumo"><button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button></a>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                </div>
            </div>                  
        </div>
   @stop     