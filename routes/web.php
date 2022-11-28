<?php

use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*VISTAS HOMRE Y PLANTILLA Y INDEX PRINCIPAL*/

Route::get('/', function () {
    return view('indexprincipal');
});
Route::get('Siute', function () {
    return view('home.index');
});
Route::get('recovery', function () {
    return view('recuperacion.recovery');
});
Route::get('login', function () {
    return view('recuperacion.login');
});



/*VISTAS MODULO PROVEEDORES*/
Route::match(['get', 'post'], 'listarproveedor', [ProveedoresController::class, 'index'])
    ->name('crud-proveedores');
Route::match(['get', 'post'], 'crearproveedor', [ProveedoresController::class, 'create'])
    ->name('crar-proveedor');
Route::match(['get', 'post'], 'crearproveedor/guardar', [ProveedoresController::class, 'store'])
    ->name('guardar-proveedor');
Route::match(['get', 'post'], 'modificarproveedor/{proveedores}', [ProveedoresController::class, 'edit'])
    ->name('modificar-proveedor');
Route::match(['get', 'post'], 'modificarproveedor/actualizar/{proveedores}', [ProveedoresController::class, 'update'])
    ->name('actualizar-proveedor');
Route::match(['get', 'post'], 'modificarproveedor/eliminar/{proveedores}', [ProveedoresController::class, 'destroy'])
    ->name('eliminar-proveedor');


/* VISTAS MODULO USUARIOS*/
Route::get('registrarusuario', function () {
    return view('usuario.registrarusuario');
});
Route::get('listausuarios', function () {
    return view('usuario.listadousuarios');
});
Route::get('modificarusuarios', function () {
    return view('usuario.modificarusuarios');
});

/* VISTAS MODULO INVENTARIOS*/
Route::get('crearproducto', function () {
    return view('inventario.crearproducto');
});
Route::get('registrarproducto', function () {
    return view('inventario.registrarproducto');
});
Route::get('registrarinsumo', function () {
    return view('inventario.registrarinsumo');
});
Route::get('modificarproducto', function () {
    return view('inventario.modificarproducto');
});
Route::get('modificarinsumo', function () {
    return view('inventario.modificarinsumo');
});
Route::get('inventarioprincipal', function () {
    return view('inventario.inventarioprincipal');
});
Route::get('inventarioinsumos', function () {
    return view('inventario.inventarioinsumos');
});

/*VISTA MODULO VENTAS*/
Route::get('listaventas', function () {
    return view('ventas.listaventas');
});
Route::get('ventaslistaprecios', function () {
    return view('ventas.ventaslistaprecios');
});
Route::get('registrarventa', function () {
    return view('ventas.registrarventa');
});
Route::get('modificarventa', function () {
    return view('ventas.modificarventa');
});
Route::get('modificarprecio', function () {
    return view('ventas.modificarprecio');
});


/*VISTAS DE RESPORTES Y ESTADISTICAS*/
Route::get('report', function () {
    return view('reportes.report');
});
Route::get('advancesettings', function () {
    return view('reportes.advancesettings');
});
