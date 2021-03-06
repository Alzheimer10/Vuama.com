@extends('customer.layout.master')
@section('title', 'inicio')

@section('styles')
	<style>
		#header1 {
		    background: #355c7d;
		    background: /* gradient overlay */ linear-gradient( to left, rgba(229, 84, 51, 0.72), /* #171616 */ rgba(74, 59, 67, 0.61) /* #4a3b44 */ ), /* bottom image */ url({{ asset('img/call-to-action-bg.jpg') }}) no-repeat left top;
		    background-size: cover;
		    z-index: 0;
		    border-radius: 0px;
		}
	</style>
	<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
@stop

@section('content')
    <div class="jumbotron" id="header1">
        <div class="container">
            <div class="row align-items-center h-100 h-100">
	            <div class="col-10 mx-auto">
	                <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
	                <h1 class="mb-0" style="color: white"><b>Bienvenido a Vuama, {{ Auth::guard('customer')->user()->name }}</b></h1>
	                <p class="mt-0" style="color: white">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
	            </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
	<!-- END PAGE HEADER-->	
	<section class="container">
		<div class="row">
			<div class="col-12 mt-5 pl-0 pr-0">
				<div class="jumbotron pt-4 pb-4">
	                <p class="mb-0 mt-0 text-center">Haga frente a su proyecto donde sea que esté con nuestra aplicación móvil..</p>
	            </div>
			</div>
			<div class="col row">
				<div class="col-12 col-md-8 mb-4">
					<project-pagination-component route='{!! route('api.projects.filter') !!}' :limit="1"></project-pagination-component>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="jumbotron pt-5 pb-5 mb-3 text-center">
			            <h3 class="mb-0">ANUNCIO</h3>
			        </div>
					<div class="jumbotron pt-5 pb-5 mb-3 text-center">
			            <h3 class="mb-0">ANUNCIO</h3>
			        </div>
					<div class="jumbotron pt-5 pb-5 mb-3 text-center">
			            <h3 class="mb-0">ANUNCIO</h3>
			        </div>
					<hr>
					<div class="row ml-1">				
						@component('customer.webapp.components.tagsServices')@endcomponent
					</div>
					<hr>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection

@section('scripts')
@endsection
