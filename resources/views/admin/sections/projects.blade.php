@extends('admin.layout.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
        		<h1 class="panel-heading">Proyectos</h1>
				<projects-component></projects-component>
            </div>
        </div>
    </div>
</div>
@endsection
