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
            <div class="card card-info">
                <div class="card-header ">
                  <h3 class="card-title">Editar-permisos {{$data->nombre}}</h3>
                    <div class="card-tools">
                        <a href="{{route('permiso')}}" class=" btn btn-secondary btn-sm pull-right">Listado</a>
                    </div>
                </div>
                <form action="{{route('actualizar_permiso', ['id' =>$data->id])}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf @method("put")
                    <div class="card-body">
                        @include('admin.permiso.form')
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