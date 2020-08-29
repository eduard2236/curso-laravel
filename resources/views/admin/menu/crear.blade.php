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
            <div class="card card-success">
                <div class="card-header ">
                    <h3 class="card-title">Crear-Menus</h3>
                <div class="card-tools">
                  
                  <a href="{{route('menu')}}" class=" btn btn-secondary btn-sm pull-right">Listado</a>
                </div>
                </div>
                <form action="{{route('guardar_menu')}}" method="POST" id="form-general" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        @include('admin.menu.form')
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