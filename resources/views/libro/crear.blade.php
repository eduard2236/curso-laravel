@extends("theme.$theme.layout")
@section('titulo')
 Libro
@endsection

@section("styles")
<link href="{{asset("Assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
<script src="{{asset("Assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("Assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("Assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/libro/crear.js")}}" type="text/javascript"></script>
@endsection


    @section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Libro</h3>
                  <a href="{{route('libro')}}" class="btn btn-info btn-sm pull-right">listado</a>    
                </div>
            <form action="{{route('guardar_libro')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @include('libro.form')
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-crear')
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>        
    @endsection