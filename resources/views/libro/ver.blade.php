
<div>Titulo: {{$libro->titulo}}</div>
<div>ISBN: {{$libro->isbn}}</div>
<div>Autor: {{$libro->autor}}</div>
<div>Editorial: {{$libro->editorial}}</div>
<div><img src ="{{Storage::url("imagenes/caratulas/$libro->foto")}}" alt="Caratula del libro"></div>