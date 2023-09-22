@extends('layouts.default')

@section('content')
             <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">CkEditor</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CkEditor</h4>
                            </div>
                            <div class="card-body custom-ekeditor">
								<div id="ckeditor"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   @endsection
