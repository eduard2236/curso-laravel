@extends("theme.$theme.layout")
@section('titulo')
 Libros
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/libro/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @csrf
        @include('includes.mensaje')
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title"> Libros </h3>
                <div class="card-tools card-success">
                    <a href="{{route('crear_libro')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo Registro
                    </a>
                </div>  
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Cantidad</th>
                            <th>foto</th>
                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                        <td><a href="{{route('ver_libro', $data)}}" class="ver-libro">{{$data->titulo}}</a></td>
                            <td>{{$data->cantidad}}</td>
                            <td><img src ="{{Storage::url("imagenes/caratulas/$data->foto")}}" alt="Caratula del libro" style="width:150px"></td>
                            <td>
                                <a href="{{route('editar_libro',['id' =>$data->id])}}" class=" btn-accion-tabla float-lg-center tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit text-info"></i>
                                </a>
                                <form action="{{route('eliminar_libro',['id' =>$data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla float-lg-center eliminar tooltipsC" title="Eliminar este registro">
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
<div class="modal fade" id="modal-ver-libro" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection