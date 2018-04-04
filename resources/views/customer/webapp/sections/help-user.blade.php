@extends('customer.layout.master')
@section('title', 'Ayuda')

@section('content')
<div class="page-content">
	<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">Inicio</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
            	<a href="{{ route('perfil') }}">Perfil</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Ayuda</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm">
                <span class="thin uppercase hidden-xs">February 14, 2018 - March 15, 2018</span>&nbsp;
            </div>
        </div>
    </div>
    <br>
	<div class="profile-content">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="portlet light ">
	                <div class="portlet-title tabbable-line">
	                    <div class="caption caption-md">
	                        <i class="icon-globe theme-font hide"></i>
	                        <span class="caption-subject font-blue-madison bold uppercase">Ayuda</span>
	                    </div>
	                    <ul class="nav nav-tabs">
	                        <li class="active">
	                            <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Preguntas generales</a>
	                        </li>
	                        <li class="">
	                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Proveedor</a>
	                        </li>
	                        <li class="">
	                            <a href="#tab_1_3" data-toggle="tab" aria-expanded="false">Términos y uso</a>
	                        </li>
	                    </ul>
	                </div>
	                <div class="portlet-body">
	                    <div class="tab-content">
	                        <!-- GENERAL QUESTION TAB -->
	                        <div class="tab-pane active" id="tab_1_1">
	                            <div id="accordion1" class="panel-group">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1" aria-expanded="false"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
	                                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
	                                            you probably haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2" aria-expanded="false"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-success">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3" aria-expanded="false"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-warning">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4" aria-expanded="false"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-danger">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5" aria-expanded="false"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6" aria-expanded="false"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7" aria-expanded="false"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion1_7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- END GENERAL QUESTION TAB -->
	                        <!-- MEMBERSHIP TAB -->
	                        <div class="tab-pane" id="tab_1_2">
	                            <div id="accordion2" class="panel-group">
	                                <div class="panel panel-warning">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_1" class="panel-collapse collapse in">
	                                        <div class="panel-body">
	                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
	                                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
	                                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
	                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
	                                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
	                                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-danger">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_2" class="panel-collapse collapse">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-success">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_3" class="panel-collapse collapse">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_4" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_5" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_6" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion2_7" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- END MEMBERSHIP TAB -->
	                        <!-- TERMS OF USE TAB -->
	                        <div class="tab-pane" id="tab_1_3">
	                            <div id="accordion3" class="panel-group">
	                                <div class="panel panel-danger">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_1" class="panel-collapse collapse in">
	                                        <div class="panel-body">
	                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
	                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
	                                            <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
	                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
	                                                synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-success">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_2" class="panel-collapse collapse">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_3" class="panel-collapse collapse">
	                                        <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche
	                                            reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
	                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
	                                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
	                                            haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_4" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_5" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_6" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
	                                        </h4>
	                                    </div>
	                                    <div id="accordion3_7" class="panel-collapse collapse">
	                                        <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
	                                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
	                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
	                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- END TERMS OF USE TAB -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection