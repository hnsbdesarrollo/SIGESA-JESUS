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
                            <!--
                            <div class="card-header">
                                <h4 class="card-title">Patient</h4>
                            </div>
                            -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered dt-responsive nowrap" id="listaEmpelados" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>APE.PATERNO</th>
                                                <th>EMPLEADO</th>
                                                <th>TIPO DE EMPLEADO</th>
                                                <th>DEPARTAMENTO</th>
                                                <th>ESTADO</th>
                                                <th>PROCESOS</th>
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
@endsection

@push('scripts')
<!-- SECCION DE JS -->
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/plugins-init/datatables.init.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js')}}"></script>
<!-- SECCION DE JS -->


@include('panel_admin.empleados.function.listar')
@include('panel_admin.empleados.function.restablecer_password')

@endpush
