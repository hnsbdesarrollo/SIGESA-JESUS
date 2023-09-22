@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Title -->
	<title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
	<meta name="description" content="@yield('page_description', $page_description ?? '')">

	<meta property="og:title" content="ERES - Hospital Admin Dashboard Bootstrap Laravel Templates">
	<meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')">
	<meta property="og:image" content="https://eres.dexignzone.com/laravel/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->


	<!-- seccion variable de CSS -->
    @yield('css')
	<!-- seccion variable de CSS -->


	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}">
	@if(!empty(config('dz.public.pagelevel.css.'.$action)))
		@foreach(config('dz.public.pagelevel.css.'.$action) as $style)
			<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif

	{{-- Global Theme Styles (used by all pages) --}}
	@if(!empty(config('dz.public.global.css')))
		@foreach(config('dz.public.global.css') as $style)
			<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif

</head>
<body>

    <!--*** Preloader start ***-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('index')}}" class="brand-logo">
             <svg class="logo-abbr" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M43.6868 12.7616C40.1151 12.2824 37.3929 9.08842 37.4346 5.5015C37.4378 4.67971 36.7515 3.99084 35.9297 3.99084H16.0768C15.2549 3.99084 14.5686 4.6798 14.5718 5.50176C14.6154 9.2348 11.8602 12.1604 8.27235 12.7689C7.55967 12.8877 7.03203 13.4961 7.01529 14.2184C6.87192 20.3982 7.73739 26.0092 9.58742 30.8954C11.0817 34.8418 13.2159 38.3236 15.9312 41.244C20.5868 46.2516 25.3291 47.8676 25.5287 47.9339C25.8821 48.0512 26.2736 48.0324 26.6139 47.8813C26.8091 47.7946 31.4487 45.6988 36.0396 40.4854L33.7807 38.4962C30.5157 42.204 27.1941 44.1849 25.9274 44.8604C24.6586 44.319 21.3888 42.6938 18.1355 39.1945C12.8056 33.4615 10.0074 25.2828 10.0102 15.4863C13.9686 14.4225 16.9309 11.0547 17.4877 7.00084H34.519C35.0754 11.0521 38.0342 14.4179 41.9885 15.4841C41.9391 21.8543 40.5621 27.6001 37.8898 32.5794L40.5418 34.0028C43.628 28.2524 45.1251 21.5986 44.9916 14.226C44.978 13.4826 44.4237 12.8606 43.6868 12.7616Z" fill="url(#paint0_linear)"/>
					<path d="M27.5047 20.3571H24.4948V23.5551H21.2968V26.565H24.4948V29.763H27.5047V26.565H30.7027V23.5551H27.5047V20.3571Z" fill="#04A547"/>
					<path d="M25.9998 14.7053C20.2948 14.7053 15.6533 19.3504 15.6533 25.0601C15.6533 30.7698 20.2948 35.4149 25.9998 35.4149C31.7048 35.4149 36.3463 30.7698 36.3463 25.0601C36.3463 19.3504 31.7048 14.7053 25.9998 14.7053ZM25.9998 32.405C21.9544 32.405 18.6632 29.11 18.6632 25.0601C18.6632 21.0101 21.9544 17.7151 25.9998 17.7151C30.0452 17.7151 33.3364 21.0101 33.3364 25.0601C33.3364 29.11 30.0452 32.405 25.9998 32.405Z" fill="#CFE9DA"/>
					<defs>
					<linearGradient id="paint0_linear" x1="15" y1="3.99994" x2="45" y2="54.4999" gradientUnits="userSpaceOnUse">
					<stop offset="1" stop-color="#1C9850"/>
					<stop offset="1" stop-color="#73FFAD"/>
					</linearGradient>
					</defs>
				</svg>
				<svg class="brand-title" width="87" height="27" viewBox="0 0 87 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.412 20.816V26H0.448V0.439999H18.088V5.624H6.352V10.592H16.432V15.38H6.352V20.816H18.412ZM21.9988 26V0.439999H33.5188C34.7188 0.439999 35.8228 0.691999 36.8308 1.196C37.8628 1.676 38.7508 2.336 39.4948 3.176C40.2388 3.992 40.8148 4.916 41.2228 5.948C41.6548 6.98 41.8708 8.024 41.8708 9.08C41.8708 10.664 41.4868 12.128 40.7188 13.472C39.9748 14.792 38.9668 15.8 37.6948 16.496L43.3108 26H36.7948L31.8988 17.756H27.9028V26H21.9988ZM27.9028 12.608H33.3028C33.9988 12.608 34.5988 12.284 35.1028 11.636C35.6068 10.964 35.8588 10.112 35.8588 9.08C35.8588 8.048 35.5708 7.22 34.9948 6.596C34.4188 5.948 33.7948 5.624 33.1228 5.624H27.9028V12.608ZM64.08 20.816V26H46.116V0.439999H63.756V5.624H52.02V10.592H62.1V15.38H52.02V20.816H64.08ZM83.0028 7.928C82.9308 7.832 82.6788 7.652 82.2468 7.388C81.8148 7.124 81.2748 6.848 80.6268 6.56C79.9788 6.248 79.2708 5.996 78.5028 5.804C77.7348 5.588 76.9668 5.48 76.1988 5.48C74.0868 5.48 73.0308 6.188 73.0308 7.604C73.0308 8.468 73.4868 9.08 74.3988 9.44C75.3348 9.8 76.6668 10.232 78.3948 10.736C80.0268 11.192 81.4308 11.72 82.6068 12.32C83.8068 12.896 84.7308 13.676 85.3788 14.66C86.0268 15.62 86.3508 16.892 86.3508 18.476C86.3508 19.916 86.0868 21.14 85.5587 22.148C85.0308 23.132 84.3108 23.936 83.3987 24.56C82.4868 25.16 81.4548 25.604 80.3028 25.892C79.1748 26.156 77.9988 26.288 76.7748 26.288C74.8788 26.288 72.9588 26.012 71.0148 25.46C69.0708 24.884 67.3548 24.104 65.8668 23.12L68.4588 17.972C68.5548 18.092 68.8668 18.32 69.3948 18.656C69.9228 18.968 70.5828 19.304 71.3748 19.664C72.1668 20.024 73.0308 20.336 73.9668 20.6C74.9268 20.84 75.8988 20.96 76.8828 20.96C78.9708 20.96 80.0148 20.324 80.0148 19.052C80.0148 18.404 79.7388 17.9 79.1868 17.54C78.6588 17.156 77.9268 16.832 76.9908 16.568C76.0548 16.28 74.9988 15.956 73.8228 15.596C71.4708 14.876 69.7308 14 68.6028 12.968C67.4988 11.936 66.9468 10.46 66.9468 8.54C66.9468 6.74 67.3668 5.228 68.2068 4.004C69.0708 2.756 70.2228 1.82 71.6628 1.196C73.1028 0.547999 74.6748 0.223999 76.3788 0.223999C78.1788 0.223999 79.8828 0.535999 81.4908 1.16C83.0988 1.76 84.4668 2.384 85.5948 3.032L83.0028 7.928Z" fill="#3D9662"/>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		@include('elements.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        @php
            $body_class = '';
            if($page == 'ui_button'){ $body_class = 'btn-page';}
            if($page == 'ui_badge'){ $body_class = 'badge-demo';}
        @endphp
		<div class="content-body  {{ $body_class }}">
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        @stack('modals')
        <!--**********************************
            Footer start
        ***********************************-->
        @include('elements.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @if(!empty(config('dz.public.global.js.top')))
        @foreach(config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
        @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @if(!empty(config('dz.public.global.js.bottom')))
        @foreach(config('dz.public.global.js.bottom') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @stack('scripts')


</body>
</html>
