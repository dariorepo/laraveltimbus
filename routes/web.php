<?php

use App\Models\User;
use App\Models\admin;
use App\Models\rutas;
use App\Models\conductores;
use App\Models\transportes;
use App\Models\instituciones;
use App\Models\pago_estudiantes;
use App\Models\pago_instituciones;
use App\Models\registro_vehiculos;
use App\Models\Cart;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\RutasController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\ConductoresController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\TransportesController;
use App\Http\Controllers\InstitucionesController;
use App\Http\Controllers\PagoEstudiantesController;

use App\Http\Controllers\PagoInstitucionesController;
use App\Http\Controllers\RegistroVehiculosController;



//COMANDO -MIGRACION =               php artisan migrate:fresh --seed
                                 //  php artisan serve

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function (){


    $empresas = transportes::join("rutas","transportes.id_ruta", "=", "rutas.id")  //simplePaginate
    // ->where('')
    //  "id_sitio",$site->id
    ->select("transportes.id","transportes.nit","transportes.nombre",
    "transportes.telefono","transportes.direccion","transportes.correo",
    "transportes.imagenT","transportes.id_ruta",

      "rutas.descripcion", "rutas.precio",
      "rutas.horario", "rutas.imagen",)

      //"rutas.id", "rutas.nombre",

    ->get();
    // ->first();

    // return $empresas;

    return view('dashboard', compact('empresas'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::resource('estudiante', EstudiantesController::class);


// Route::get('/perfilEstudiante', function () {
//     return view('estudiante.perfilEstudiante');
// });


// Route::get('perfilEstudiante', [EstudiantesController::class, 'perfil']);

// Route::get('/perfilEstudiante', 'App\Http\Controllers\EstudiantesController@perfil');

// Route::view('dashboard', 'estudiante.index')->name('dashboard');




//USUARIO estudiante
//Route::view('perfilEstudiante', 'estudiante.perfilEstudiante')->name('perfil');
Route::get('perfilEstudiante', [UserController::class, 'perfil'])->name('perfil');

Route::view('rutaEstudiante', 'estudiante.rutaEstudiante')->name('rutaEstudiante');

Route::post('agregarEmpresa/{empresa}',[UserController::class, 'addToEmpresa'] )->name('addToEmpresa');





Route::get('institucionEstudiante', 'App\Http\Controllers\UserController@institucionEstudiante')->name('institucionEstudiante');

Route::view('pagoTransporte','estudiante.pagoTransporte')->name('pagoTransporte');

Route::get('buscarRuta',[RutasController::class, 'buscarRuta'])->name('buscarRuta');

Route::view('vincularce','estudiante.pag024')->name('vincularce');

Route::delete('desvincularEstudiante/{institucion}',[InstitucionesController::class, 'desvincularInst'])->name('desvincularInst.destroy');

Route::post('pagoTranspEstu', [PagoEstudiantesController::class, 'store'])->name('pagoTranspEstu.store');

//Route::put('actualizarPerfil/{estudiantes2}',[UserController::class, 'updatePerfil'])->name('perfilUsuarioYonier.Update');

Route::get('agregarEmpresa/{empresa}', [UserController::class,'addToEmpresa'])->name('addToEmpresa');


Route::get('EmpresasAgregadas', [CartController::class,'cart'])->name('EmpresasAgregadas');






//USUARIO institucion
Route::view('institucion', 'institucion.index')->name('institucion');





//USUARIO empresa
Route::view('empresa', 'empresa.index')->name('empresa');
Route::view('perfilEmpresa', 'empresa.perfil_empresa')->name('perfilEmpresa');
Route::get('rutaEmpresa',  [RutasController::class,'rutasEmpresa'])->name('rutaEmpresa');
Route::get('crearRutaNueva/create', [RutasController::class, 'crearRuta'])->name('crearRuta');
Route::post('createRuta', [RutasController::class, 'store'])->name('createRuta.store');




//Route::view('institucionesVinculadas', 'empresa.inst_vinculadas')->name('institucionesVinculadas');
Route::get('institucionesVinculadas', 'App\Http\Controllers\TransportesController@institucionesVinculadas')->name('institucionesVinculadas');

Route::resource('/empresaInv', 'App\Http\Controllers\InstitucionesController');

Route::put('/eliminarEnv/{institucion}', [InstitucionesController::class, 'destroy'])->name('eliminarEnv.destroy');

Route::delete('/eliminarEnv/{institucion}', [InstitucionesController::class, 'destroy'])->name('eliminarEnv.destroy');

Route::get('editarEnv/{institucion}/edit', [InstitucionesController::class, 'edit'])->name('editarEnv.edit');

Route::put('/instUpdate/{institucion}', [InstitucionesController::class, 'update'])->name('inst.Update');

Route::get('vinInst/create', [InstitucionesController::class, 'create'])->name('vinInst.create');

Route::post('createInst', [InstitucionesController::class, 'store'])->name('createInst.store');

// Route::post('/empresaInv', 'App\Http\Controllers\TransportesController@store')->name('empresaInv.store');

Route::get('pagoInstitucionesE', [PagoInstitucionesController::class, 'pagoInstituciones'])->name('pagoInstitucionesE');

Route::view('registroVehiculo', 'empresa.reg_vehiculo')->name('registroVehiculo');

Route::get('vehiculos', [RegistroVehiculosController::class, 'vehiculos'])->name('Vehiculos');

Route::post('registroVehiculo', [RegistroVehiculosController::class, 'store'])->name('registroVehiculo.store');

Route::get('editarVehiculo/{vehiculo}/edit', [RegistroVehiculosController::class,'edit'])->name('editarVehiculo.edit');

Route::put('vehiculoUpdate/{vehiculo}', [RegistroVehiculosController::class, 'update'] )->name('vehiculo.update');

Route::delete('eliminarVehiculo/{vehiculo}/destroy',[RegistroVehiculosController::class, 'destroy'])->name('eliminarVehiculo.destroy');

Route::delete('eliminarPagoInstitucion/{pagoInstitucion}',[PagoInstitucionesController::class, 'destroy'])->name('eliminarPagoInst.destroy');

Route::view('editarPagoInstituciones','estu')->name('editarPagoInstituciones');

Route::get('ConductoresEmpresa', [ConductoresController::class,'conductoresEmpresa'])->name('conductoresEmpresa');
Route::get('editConductorEmpresa/{conductor}/edit', [ConductoresController::class, 'EditConductorEmpresa'])->name('editConductorEmpresa');
Route::put('conductorUpdateEmpresa/{conductor}', [ConductoresController::class, 'updateConductorEmpresa'])->name('conductorEmpresa.update');
Route::delete('eliminarConductorEmpresa/{conductor}/destroy',[ConductoresController::class, 'conductorEmpresaDestroy'])->name('conductorEmpresa.destroy');
Route::get('detallesEmpresa/{empresa}',[TransportesController::class,'empresa_details'])->name('detallesEmpresa');



Route::get('/-mjh',[CartController::class,'shop'] )->name('shop');

Route::get('/cart',[CartController::class,'cart'] )->name('cart.index');

Route::post('/add', [CartController::class,'add'] )->name('cart.store');

Route::delete('/removeCart/{cartCollectionBB}/delete',[CartController::class,'remove'])->name('cart.remove');












//USUARIO conductor
Route::view('conductor', 'conductor.index')->name('conductor');



Route::get('/vista1', function () {
    return view('estudiante.vista1');
});



//USUARIO Administrador
Route::get('admin', [AdminController::class,'index'])->name('admin');


Route::get('estudiantes', [AdminController::class,'estudiantes'])->name('estudiantes');
Route::get('editEstudiante/{estudiante}/edit', [UserController::class, 'edit'])->name('editEstudiante');
Route::put('/estudianteUpdate/{estudiante}', [UserController::class, 'update'])->name('estudiante.update');
Route::delete('eliminarEstusiante/{estudiante}/destroy',[UserController::class, 'destroy'])->name('eliminarEstudiante.destroy');



Route::get('instituciones', [AdminController::class,'instituciones'])->name('instituciones');
Route::get('editInstitucion/{institucion}/edit', [AdminController::class, 'edit_Institucion'])->name('editInstitucion');
Route::put('/institucionUpdate/{institucion}', [AdminController::class, 'update_institucion'])->name('institucion.update');
Route::delete('eliminarInstitucion/{institucion}/destroy',[AdminController::class, 'destroy_institucion'])->name('eliminarInstitucion.destroy');


Route::get('empresas', [AdminController::class,'empresas'])->name('empresas');
Route::get('editEmpresa/{empresa}/edit', [AdminController::class, 'edit_Empresa'])->name('editEmpresa');
Route::put('/empresaUpdate/{empresa}', [AdminController::class, 'update_empresa'])->name('empresa.update');
Route::delete('eliminarEmpresa/{empresa}/destroy',[AdminController::class, 'destroy_empresa'])->name('eliminarEmpresa.destroy');


Route::get('crearEmpresa', [AdminController::class,'crearEmpresa'])->name('empresa.create');
Route::post('/crearEmpresa/crear', [AdminController::class, 'crear_Empresa'])->name('crear_Empresa');





Route::get('conductores', [AdminController::class,'conductores'])->name('conductores');
Route::get('editconductor/{conductor}/edit', [AdminController::class,'edit_conductor'])->name('editConductor');
Route::put('/conductorUpdate/{conductor}', [AdminController::class, 'update_conductor'])->name('conductor.update');
Route::delete('eliminarConductor/{conductor}/destroy',[AdminController::class, 'destroy_Conductor'])->name('eliminarConductor.destroy');


Route::get('pagoEstudiantes', [AdminController::class,'pagoEstudiantes'])->name('pagoEstudiantes');
Route::get('editPagoEstudiante/{pagoEstudiante}/edit', [AdminController::class,'edit_PagoEstudiante'])->name('editPagoEstudiante');
Route::put('/pagoEstudianteUpdate/{pagoEstudiante}', [AdminController::class, 'update_pagoEstudiante'])->name('pagoEstudiante.update');
Route::delete('eliminarpagoEstudiante/{pagoEstudiante}/destroy',[AdminController::class, 'destroy_pagoEstudiante'])->name('eliminarPagoEstudiante.destroy');



Route::get('pagoInstituciones', [AdminController::class,'pagoInstituciones'])->name('pagoInstituciones');
Route::get('editPagoInstitucion/{pagoInstitucion}/edit', [AdminController::class,'edit_PagoInstitucion'])->name('editPagoInstitucion');
Route::put('/pagoInstitucionUpdate/{pagoInstitucion}', [AdminController::class, 'update_pagoInstitucion'])->name('pagoInstitucion.update');
Route::delete('eliminarpagoInstitucion/{pagoInstitucion}/destroy',[AdminController::class, 'destroy_pagoInstitucion'])->name('eliminarPagoInstitucion.destroy');



Route::get('vehiculosAd', [AdminController::class,'vehiculos'])->name('vehiculos');
Route::get('editVehiculo/{vehiculo}/edit', [AdminController::class,'edit_Vehiculo'])->name('editVehiculo');
Route::put('/RegistroVehiculoUpdate/{vehiculo}', [AdminController::class, 'update_RegistroVehiculo'])->name('registroVehiculo.update');
Route::delete('eliminarRegistroVehiculo/{vehiculo}/destroy',[AdminController::class, 'destroy_RegistroVehiculo'])->name('registroVehiculo.destroy');




Route::get('rutas', [AdminController::class,'rutas'])->name('rutas');
Route::get('editRuta/{ruta}/edit', [AdminController::class,'edit_ruta'])->name('editRuta');
Route::put('/RutaUpdate/{ruta}', [AdminController::class, 'update_Ruta'])->name('ruta.update');
Route::delete('eliminarRuta/{ruta}/destroy',[AdminController::class, 'destroy_Ruta'])->name('eliminarRuta.destroy');



Route::get('crearRuta', [AdminController::class,'crearRuta'])->name('ruta.create');

Route::post('crearRutaFile', [AdminController::class, 'crearRutaFile'])->name('crearRutaFile');












