@extends("theme.$theme.layout")
@section('titulo')
 Roles
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Roles</h3>
                <div class="card-tools card-success">
                    <a href="{{route('crear_rol')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo Registro
                    </a>
                </div>  
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70">Accion </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}}</td>
                            <td>
                                <a href="{{route('editar_rol',['id' =>$data->id])}}" class=" btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit text-info"></i>
                                </a>
                                <form action="{{route('eliminar_rol',['id' =>$data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar float-lg-right tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>  
                                </form>      
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection       
                
                