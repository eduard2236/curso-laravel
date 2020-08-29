@extends("theme.$theme.layout")
@section('titulo')
 Usuario
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
@endsection

    @section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Editar usuario</h3>
                    <div class="card-tools">
                        <a href="{{route('usuario')}}" class="btn btn-blok btn-secondary btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                        </a>
                    </div>     
                </div>
            <form action="{{route('actualizar_usuario',['id' =>$data->id])}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf @method("PUT")
                    <div class="card-body">
                        @include('admin.usuario.form')
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-editar')
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>      
    @endsection