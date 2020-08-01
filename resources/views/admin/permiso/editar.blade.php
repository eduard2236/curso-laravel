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
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar-permisos {{$data->nombre}}</h3>
                  <a href="{{route('permiso')}}" class=" btn btn-info btn-sm pull-right">Listado</a>
                </div>
                <form action="{{route('actualizar_permiso', ['id' =>$data->id])}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.permiso.form')
                    </div>
                    <div class="box-footer">
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