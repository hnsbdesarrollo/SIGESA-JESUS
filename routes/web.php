<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EresAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Configuracion\TiposDestacadosController;
use App\Http\Controllers\Configuracion\TiposDocIdentidadController;
use App\Http\Controllers\Configuracion\TiposEmpleadoController;
use App\Http\Controllers\Configuracion\TiposCondicionesTrabajoController;
use App\Http\Controllers\Configuracion\TiposCargoController;
use App\Http\Controllers\Configuracion\TiposSexoController;
use App\Http\Controllers\Configuracion\TurnosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\Configuracion\TiposCamaController;
use App\Http\Controllers\Configuracion\HisColegioController;
use App\Http\Controllers\Configuracion\RolesController;


/*SECCION DE SESION*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index');
});

//DESACTIVAMOS SECCION DE REGISTRO DE USUARIOS
Auth::routes(['register' => false]);

/*GESTION DE MENU*/
Route::controller(MenuController::class)->group(function () {
    Route::get('/menu', 'listado_menu');
    Route::post('/sub_menu', 'listado_sub_menu');
});

/*SECCION DE EMPELADOS*/
Route::controller(EmpleadosController::class)->group(function () {
    Route::get('/get_empleados', 'get_empleados');
    Route::get('/empleados', 'listar_empleados');
    Route::post('/empleado_restablecer_password', 'empleado_restablecer_password');
});

/*SECCION DE PACIENTES*/
Route::controller(PacientesController::class)->group(function () {
    Route::get('/pacientes', 'listar_pacientes');
});

/*TIPOS DOC IDENTIDAD*/
Route::controller(TiposDocIdentidadController::class)->group(function () {
    Route::get('/tipos_documentos_identidad', 'index');
    Route::get('/tipos_documentos_identidad_view/{id}', 'view');
    Route::post('tipos_documentos_identidad_save', 'save');
    Route::get('tipos_documentos_identidad_destroy/{id}', 'destroy');

});

/*TIPOS DE EMPLEADOS*/
Route::controller(TiposEmpleadoController::class)->group(function () {
    Route::get('/tipos_empleados', 'index');
});

/*TIPOS DE CONDICIONES*/
Route::controller(TiposCondicionesTrabajoController::class)->group(function () {
    Route::get('/tipos_condiciones_trabajo', 'index');
});
/*TIPOS DE CARGOS*/
Route::controller(TiposCargoController::class)->group(function () {
    Route::get('/tipos_cargo', 'index');
    Route::get('/tipos_cargo_view/{id}', 'view');
    Route::post('tipos_cargo_save', 'save');
    Route::get('tipos_cargo_destroy/{id}', 'destroy');
});
/*TI
/*TIPOS DESTACADOS*/
Route::controller(TiposDestacadosController::class)->group(function () {
    Route::get('/tipos_destacados', 'index');
});
/*TIPOS SEXO*/
Route::controller(TiposSexoController::class)->group(function () {
    Route::get('/tipos_sexo', 'index');
});
/*TIPOS TURNOS*/
Route::controller(TurnosController::class)->group(function () {
    Route::get('/tipos_turnos', 'index');
});

/*TIPOS CAMAS*/
Route::controller(TiposCamaController::class)->group(function () {
    Route::get('/tipos_cama', 'index');
});

/*TIPOS CAMAS*/
Route::controller(HisColegioController::class)->group(function () {
    Route::get('/his_colegio', 'index');
});


/*TIPOS ROLES*/
Route::controller(RolesController::class)->group(function () {
    Route::get('/roles', 'index');
    Route::get('/roles_view/{id}', 'view');
    Route::post('roles_save', 'save');
    Route::get('roles_destroy/{id}', 'destroy');
});

 
Route::controller(EresAdminController::class)->group(function () {
//Route::get('/', 'dashboard','');
Route::get('/app-calender','app_calender');
Route::get('/app-profile','app_profile');
Route::get('/appointment','appointment');
Route::get('/chart-chartist','chart_chartist');
Route::get('/chart-chartjs','chart_chartjs');
Route::get('/chart-flot','chart_flot');
Route::get('/chart-morris','chart_morris');
Route::get('/chart-peity','chart_peity');
Route::get('/chart-sparkline','chart_sparkline');
Route::get('/doctor-detail','doctor_detail');
Route::get('/doctor-list','doctor_list');
Route::get('/ecom-checkout','ecom_checkout');
Route::get('/ecom-customers','ecom_customers');
Route::get('/ecom-invoice','ecom_invoice');
Route::get('/ecom-product-detail','ecom_product_detail');
Route::get('/ecom-product-grid','ecom_product_grid');
Route::get('/ecom-product-list','ecom_product_list');
Route::get('/ecom-product-order','ecom_product_order');
Route::match(['get','post'],'/email-compose','email_compose');
Route::get('/email-inbox','email_inbox');
Route::get('/email-read','email_read');
Route::get('/form-ckeditor','form_ckeditor');
Route::get('/form-element','form_element');
Route::get('/form-pickers','form_pickers');
Route::get('/form-validation-jquery','form_validation_jquery');
Route::get('/form-wizard','form_wizard');
Route::get('/index-2','dashboard_2');
Route::get('/index','dashboard');
Route::get('/map-jqvmap','map_jqvmap');
Route::get('/page-error-400','page_error_400');
Route::get('/page-error-403','page_error_403');
Route::get('/page-error-404','page_error_404');
Route::get('/page-error-500','page_error_500');
Route::get('/page-error-503','page_error_503');
Route::get('/page-forgot-password','page_forgot_password');
Route::get('/page-lock-screen','page_lock_screen');
Route::get('/page-login','page_login');
Route::get('/page-register','page_register');
Route::get('/page-review','page_review');
Route::get('/patient-details','patient_details');
Route::get('/patient-list','patient_list');
Route::match(['get','post'],'/post-details','post_details');
Route::get('/staff-profile','staff_profile');
Route::get('/staff','staff');
Route::get('/table-bootstrap-basic','table_bootstrap_basic');
Route::get('/table-datatable-basic','table_datatable_basic');
Route::get('/uc-lightgallery','uc_lightgallery');
Route::get('/uc-nestable','uc_nestable');
Route::get('/uc-noui-slider','uc_noui_slider');
Route::get('/uc-select2','uc_select2');
Route::get('/uc-sweetalert','uc_sweetalert');
Route::get('/uc-toastr','uc_toastr');
Route::get('/ui-accordion','ui_accordion');
Route::get('/ui-alert','ui_alert');
Route::get('/ui-badge','ui_badge');
Route::get('/ui-button-group','ui_button_group');
Route::get('/ui-button','ui_button');
Route::get('/ui-card','ui_card');
Route::get('/ui-carousel','ui_carousel');
Route::get('/ui-dropdown','ui_dropdown');
Route::get('/ui-grid','ui_grid');
Route::get('/ui-list-group','ui_list_group');
Route::get('/ui-media-object','ui_media_object');
Route::get('/ui-modal','ui_modal');
Route::get('/ui-pagination','ui_pagination');
Route::get('/ui-popover','ui_popover');
Route::get('/ui-progressbar','ui_progressbar');
Route::get('/ui-tab','ui_tab');
Route::get('/ui-typography','ui_typography');
Route::get('/widget-basic','widget_basic');

});
