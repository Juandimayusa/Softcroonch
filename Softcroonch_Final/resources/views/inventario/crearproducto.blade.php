@extends('plantilla')

@section('titulo1')
{{'Iventario'}}
@stop

@section('titulo2')
{{'Suite Producto crear'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>crear producto</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/producto.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para crear nuevos productos del inventario, deberas de llenar todos los campos para poder crear el producto
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Nuevo producto</div>
                <form class="form-padding" method="post" action="">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i>  Información básica</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="inputnombre" name="Nombre" placeholder="Escribe aquí el Nombre del producto" pattern="[0-9]{1,20}" required="" maxlength="20"   title="código del producto">
                                <label>Nombre</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="inputCantidad" name="Cantidad" placeholder="Escribe aquí la cantidad del producto" required="" maxlength="70"  >
                                <label>Cantidad</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="inputfecha" name="FechaVencimiento"  placeholder="Escribe aquí la fecha de vencimiento" required="" maxlength="70"  >
                                <label>Fecha De Vencimiento</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control"  id="inputlote" name="Lote" placeholder="Escribe aquí el lote del producto" required="" maxlength="50"  >
                                <label>Lote</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="group-material">
                                <span>Categoría</span>
                                <select id="Categoría"  class="tooltips-general material-control"   title="Elige la categoría del producto" >
                                    <option value="Categoría" selected="">Selecciona una categoría</option>
                                    <option value="Insumo">Insumo</option>
                                    <option value="Productofinal">Producto Final</option>
                                    <option value="Bebida">Bebida</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-map"></i>  Precio</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" id="inputprecio" name="Precio"  placeholder="Escribe aquí el precio del producto" required="" pattern="[0-9.]{1,7}" maxlength="7"   title="Sólo números y un punto si el valor posee decimales. Ejemplo: 7.79">
                                <label>Precio</label>
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
       