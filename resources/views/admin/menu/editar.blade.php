@extends("theme.$theme.layout")
@section('titulo')
  Sistema Menus
@endsection

@section("scripts")
<script src="{{asset("Assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

    @section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar-Menus</h3>
                  <a href="{{route('menu')}}" class=" btn btn-info btn-sm pull-right">Listado</a>
                </div>
            <form action="{{route('actualizar_menu',['id' =>$data->id])}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf @method("PUT")
                    <div class="box-body">
                        @include('admin.menu.form')
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