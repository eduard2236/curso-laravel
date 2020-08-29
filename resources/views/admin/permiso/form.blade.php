<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label requerido">Nombre</label>
    <div class="col-lg-7">
    <input type="text" name="nombre" id="nombre" class="form-control"  value="{{old('nombre', $data->nombre ?? '')}}" required/>
    
    </div>
</div>
<div class="form-group row">
    <label for="slug" class="col-lg-1 control-label requerido">slug</label>
    <div class="col-lg-7">
      <input type="text" name="slug" id="slug" class="form-control"  value="{{old('slug', $data->slug ?? '')}}" required/>
    </div>
</div>