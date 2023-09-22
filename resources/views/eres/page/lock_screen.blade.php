@extends('layouts.fullwidth')

@section('content')
<div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="{{url('index')}}"><img src="{{asset('images/logo-full.png')}}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4">Account Locked</h4>
                    <form action="{{url('index')}}">
                        @csrf
                        <div class="mb-3 position-relative">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input type="password" id="dz-password" class="form-control" value="123456">
                            <span class="show-pass eye">
                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Unlock</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
