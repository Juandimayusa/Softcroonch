
    @extends('plantilla')

    @section('titulo1')
    {{'Home'}}
    @stop

    @section('titulo2')
    {{'Suite Home'}}
    @stop

    
    @section('seccion')
    <!--INICIO CONTENIDO PAGINA-->
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">suite <small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">usuarios</div>
                <div class="tile-num full-reset"></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-o"></i></div>
                <div class="tile-name all-tittles">inventario</div>
                <div class="tile-num full-reset"></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-truck"></i></div>
                <div class="tile-name all-tittles">proveedores</div>
                <div class="tile-num full-reset"></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-store"></i></div>
                <div class="tile-name all-tittles">ventas</div>
                <div class="tile-num full-reset"></div>
            </article>
            
           
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
                <div class="tile-num full-reset"></div>
            </article>
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                 Softcroonch es un sistema de informacion para el control de ventas y facturacion de la empresa EmpanadasCroonch , todos los derechos de autor reservados @copyright
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        @stop
        <!--FIN CONTENIDO PAGINA-->

 