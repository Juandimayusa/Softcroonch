@extends('plantilla')

@section('titulo1')
{{'Ventas'}}
@stop

@section('titulo2')
{{'Suite modificar precio de Ventas'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">módulo <small>modificar precio</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('img/precios.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para modificar la lista de precios, deberas de llenar todos los campos para poder modificar el precio
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Modificar Precios</div>
                <form class="form-padding" method="post" action="">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> Selección de productos</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control"  id="Idproducto" name="codigoproducto"placeholder="Escribe aquí el código del producto" pattern="[0-9]{1,20}" required="" maxlength="20"  >
                                <label>Codigó producto</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" id="Idnombre" name="Nombre" placeholder="Nombre producto" required="" maxlength="70"   >
                                <label>Nombre</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-bookmark-outline"></i>  Precio Final</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material"> 
                                <input type="text" class="tooltips-general material-control" id="Idprecio" name="Precio" placeholder="Escribe aquí el precio" required="" maxlength="50"   >
                                <label>Precio</label>
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>  Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i>  Modificar Precio</button>
                            </p>
                       </div>
                    </div>
               </form>
            </div>
        </div>
        @stop