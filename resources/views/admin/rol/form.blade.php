<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label requerido">Nombre</label>
    <div class="col-lg-10">
    <input type="text" name="nombre" id="nombre" class="form-control"  value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>