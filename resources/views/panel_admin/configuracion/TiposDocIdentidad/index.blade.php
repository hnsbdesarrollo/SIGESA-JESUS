@extends('layouts.default')

@section('css')
<!-- SECCION DE CSS -->
<link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css')}}">
<!-- SECCION DE CSS -->
@endsection


@section('content')
            <div class="container-fluid">
               <!--
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                -->
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-success" href="javascript:void(0)" id="crearTiposDocIdentidad" data-bs-toggle="modal"
                                    data-bs-target="#modalTiposDocIdentidad"> NUEVO REGISTRO
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered dt-responsive nowrap" id="listaTiposDocIdentidad" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DESCRIPCION</th>
                                                <th>DESCRIPCION LARGA</th>
                                                <th style="width: 30px;">PROCESOS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>


@include('panel_admin.configuracion.TiposDocIdentidad.modal.create')

@endsection

@push('scripts')
<!-- SECCION DE JS -->
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/plugins-init/datatables.init.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js')}}"></script>
<!-- SECCION DE JS -->


@include('panel_admin.configuracion.TiposDocIdentidad.function.listar')
@include('panel_admin.configuracion.TiposDocIdentidad.function.editar')
@include('panel_admin.configuracion.TiposDocIdentidad.function.create')
@include('panel_admin.configuracion.TiposDocIdentidad.function.eliminar')


@endpush
