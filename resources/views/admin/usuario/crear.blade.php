@extends("theme.$theme.layout")
@section('titulo')
 Usuarios
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
@endsection

    @section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Usuario</h3>
                    <div class="box-tolls pull-right">
                        <a href="{{route('usuario')}}" class="btn btn-blok btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                        </a>
                    </div>     
                </div>
            <form action="{{route('guardar_usuario')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.usuario.form')
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