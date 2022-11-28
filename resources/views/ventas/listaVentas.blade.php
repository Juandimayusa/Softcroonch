@extends('plantilla')

@section('titulo1')
{{'Ventas'}}
@stop

@section('titulo2')
{{'Suite lista de Ventas'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>ventas totales</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li class="active"><a href="listaventas">Ventas</a></li>
                >
            </ul>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/calendar_book.png')}}" alt="calendar" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a esta sección, aquí se muestran todas las ventas del mes.
                </div>
                
            </div>
            <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Venta" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, o el ID de la Venta">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            
        </div>
        
        
        <div class="container-fluid">
            <h2 class="text-center all-tittles">lista de ventas</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#f8bb02; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">ID</div>
                        <div class="div-table-cell" style="width: 22%;">Producto</div>
                        <div class="div-table-cell" style="width: 22%;">Cantidad</div>
                        <div class="div-table-cell" style="width: 10%;">Cliente</div>
                        <div class="div-table-cell" style="width: 10%;">Total</div>
                        <div class="div-table-cell" style="width: 10%;">Fecha venta</div>
                        <div class="div-table-cell" style="width: 8%;">Modificar</div>
                        <div class="div-table-cell" style="width: 8%;">Ver Factura</div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;"> </div>
                        <div class="div-table-cell" style="width: 22%;"></div>
                        <div class="div-table-cell" style="width: 22%;"></div>
                        <div class="div-table-cell" style="width: 10%;"></div>
                        <div class="div-table-cell" style="width: 10%;"></div>
                        <div class="div-table-cell" style="width: 10%;"></div>
                        <div class="div-table-cell" style="width: 9%;">
                                <a href="modificarventa"><button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button></a>
                            </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-info" ><i class="zmdi zmdi-file-text"></i></button>
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
        @stop