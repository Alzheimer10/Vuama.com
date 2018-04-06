@extends('customer.layout.master')
@section('title', 'Mi cuenta')

@section('styles')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <style>
        .inputFile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputFile + label {
            cursor: pointer; /* "hand" cursor */
        }
        input:disabled {
            background: transparent;
            border: none;
        }
        label{
            position: relative;
            font-size: .7rem;
        }
    </style>
<style>
</style>
    <!-- END PAGE LEVEL PLUGINS -->
@stop

@section('content')

    <section class="prem-5" id="perfil">
        <div class="container-fluid">
            <div class="row">
                <customer-component :user="{{ json_encode(\Auth::user()) }}"></customer-component>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <script>

    </script>
@endsection
