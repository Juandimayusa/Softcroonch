@extends('plantilla')

@section('titulo1')
{{'Reportes'}}
@stop

@section('titulo2')
{{'Suite Reportes y Estadisticas'}}
@stop


@section('seccion')
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema softcronnch <small>Reportes y estadísticas</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab">Estadísticas</a></li>
               
                <li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reportes modulos</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="statistics">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="{{asset('img/chart.png')}}" alt="chart" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de estadísticas, aquí puedes ver las diferentes estadísticas del sistema softcronnch.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="page-header">
                          <h2 class="all-tittles">Ventas <small>en general</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">total ventas mes marzo</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Producto</th>
                                                <th class="text-center">Unidades</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Empanada</td>
                                                <td>1.000</td>
                                                <td>$1.600.000</td>
                                            </tr>
                                            <tr>
                                                <td>Combos</td>
                                                <td>500</td>
                                                <td>$2.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>Bebidas</td>
                                                <td>400</td>
                                                <td>$600.000</td>
                                            </tr>
                                            <tr>
                                                <td>Choripan</td>
                                                <td>100</td>
                                                <td>$700.000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total</th>
                                                <th class="text-center">2.000</th>
                                                <th class="text-center">$4.900.000</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para imprimir esta tabla ve a la sección de reportes y selecciona “Ventas”</p>
                            </div>
                        </div>
                        <div class="page-header">
                          <h2 class="all-tittles">Ordenes de pedido <small>por sección</small></h2>
                        </div>
                    
                        
                      
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="bitacora">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="reports">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="{{asset('img/pdf.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de reportes, aquí puedes generar informes en formato pdf, de los modulos del sistema.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
                              <h2 class="all-tittles">modulos <small>suite</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Inventarios</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ventas</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Proveedores</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Usuarios</h3>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="page-header">
                              <h2 class="all-tittles">reportes <small>generales</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Insumos</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Productos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
                </section>
                    </div>
                
        @stop