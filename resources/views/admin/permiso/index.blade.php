@extends("theme.$theme.layout")
@section('titulo')
  permisos
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="card card-secondary">
                <div class="card-header ">
                  <h3 class="card-title">Permisos</h3>
                    <div class="card-tools card-success">
                        <a href="{{route('crear_permiso')}}" class=" btn btn-success btn-sm pull-right">Crear permiso</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-bordered table-hover" id="tabla-data">
                        <thead>
                            <tr>
                                <th class="width20">ID</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th class="width70">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $permiso)
                                <tr>
                                    <td>{{ $permiso ->id}}</td>
                                    <td>{{ $permiso ->nombre}}</td>
                                    <td>{{ $permiso ->slug}}</td>
                                    <td>
                                        <a href="{{route('editar_permiso',['id' =>$permiso->id])}}" class=" btn-accion-tabla tooltipsC" title="Editar este registro">
                                            <i class="fa fa-edit text-info"></i>
                                        </a>
                                        <form action="{{route('eliminar_permiso',['id' =>$permiso->id])}}" class="d-inline form-eliminar" method="POST">
                                            @csrf @method("delete")
                                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
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