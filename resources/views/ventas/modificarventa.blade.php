@extends('plantilla')

@section('titulo1')
{{'Ventas'}}
@stop

@section('titulo2')
{{'Suite modificar Ventas'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>modificar venta</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/clock.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para modificar una venta, deberas de llenar todos los campos para poder registrar la modificación de la venta
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Modificar Venta</div>
                <form class="form-padding" method="post" action="">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i>  Información de la venta</legend><br>
                        </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="group-material">
                                <span>Menu</span>
                                <select class="tooltips-general material-control"   id="productos"title="Elige los productos">
                                    <option value="productos" disabled="" selected="">Producto</option>
                                    <option value="Empanadamaiz">Empanada de maiz</option>
                                    <option value="Choripan">Choripan</option>
                                    <option value="ChorizoArepa">Chorizo con Arepa</option>
                                    <option value="Gaseosa">Gaseosa</option>
                                    <option value="COMBO">COMBO Empanada + Gaseosa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información básica cliente</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control"  id="inputcantidad" name="Cantidad" placeholder="Escribe aquí la cantidad" pattern="[0-9]{1,20}" required="" maxlength="20" >
                                <label>Cantidad</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="inputcc" name="CC"placeholder="Escribe aquí la cedula" pattern="[0-9]{1,20}" required="" maxlength="20"  >
                                <label>Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-bookmark-outline"></i> &nbsp; Selección de productos</legend><br>
                        </div>
                        <div class="col-xs-12">
                        </div>
                        
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-bookmark-outline"></i> Total y Forma de pago</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="inputtotal" readonly name="Total"  placeholder="Precio" required="" maxlength="50" >
                                <label>Total</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="date" class="tooltips-general material-control" id="inputtotal" name="Total"  placeholder="Precio" required="" maxlength="50" >
                                <label>Fecha</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Modificar</button>
                            </p>
                       </div>
                    </div>
               </form>
            </div>
        </div>
       @stop 