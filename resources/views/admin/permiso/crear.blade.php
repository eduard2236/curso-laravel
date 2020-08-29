@extends("theme.$theme.layout")
@section('titulo')
  permisos
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="card card-success">
                <div class="card-header with-border">
                        <h3 class="card-title">Crear-permisos</h3>
                    <div class="card-tools">
                        <a href="{{route('permiso')}}" class=" btn btn-secondary btn-sm pull-right">Listado</a>
                    </div>
                </div>
                <form action="{{route('guardar_permiso')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        @include('admin.permiso.form')
                    </div>
                    <div class="card-footer">
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