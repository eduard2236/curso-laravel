@if ($item["submenu"] == [])
<li class="dd-item dd3-item" data-id="{{$item["id"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        <a href="{{route("editar_menu", ['id' => $item["id"]])}}">{{$item["nombre"] . " | Url -> " . $item["url"]}}  <i style="font-size:20px;" class="fa fa-fw float-lg-left {{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
        <a href="{{route('eliminar_menu', ['id' => $item["id"]])}}" class="eliminar-menu float-lg-right tooltipsC" title="Eliminar este menú"><i class="text-danger fa fa-trash"></i></a>
    </div>
</li>
@else
<li class="dd-item dd3-item" data-id="{{$item["id"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        <a href="{{route("editar_menu", ['id' => $item["id"]])}}">{{ $item["nombre"] . " | Url -> " . $item["url"]}}  <i style="font-size:20px;" class="float-lg-left fa fa-fw {{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
        <a href="{{route('eliminar_menu', ['id' => $item["id"]])}}" class="eliminar-menu float-lg-right tooltipsC" title="Eliminar este menú"><i class="text-danger fa fa-trash"></i></a>
    </div>
    <ol class="dd-list">
        @foreach ($item["submenu"] as $submenu)
        @include("admin.menu.menu-item",[ "item" => $submenu ])
        @endforeach
    </ol>
</li>
@endif