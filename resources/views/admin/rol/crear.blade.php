@extends("theme.$theme.layout")
@section('titulo')
 Roles
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

    @section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Rol</h3>
                    <div class="box-tolls pull-right">
                        <a href="{{route('rol')}}" class="btn btn-blok btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                        </a>
                    </div>     
                </div>
            <form action="{{route('guardar_rol')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.rol.form')
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