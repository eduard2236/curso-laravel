<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label requerido">Nombre</label>
    <div class="col-lg-7">
    <input type="text" name="nombre" id="nombre" class="form-control"  value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="usuarios" class="col-lg-2 control-label requerido">Usuario</label>
    <div class="col-lg-7">
      <input type="text" name="usuarios" id="usuarios" class="form-control"  value="{{old('usuarios', $data->usuarios ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-2 control-label requerido">E-mail</label>
    <div class="col-lg-7">
      <input type="email" name="email" id="email" class="form-control"  value="{{old('email', $data->email ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
<label for="password" class="col-lg-2 control-label {{!isset($data) ? 'requerido' : ''}}">Contraseña</label>
    <div class="col-lg-7">
      <input type="password" name="password" id="password" class="form-control"  value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group row">
    <label for="re_password" class="col-lg-2 control-label {{!isset($data) ? 'requerido' : ''}}">Repita-Contraseña</label>
    <div class="col-lg-7">
      <input type="password" name="re_password" id="re_password" class="form-control"  value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group row">
    <label for="rol_id" class="col-lg-2 control-label requerido ">Rol</label>
    <div class="col-lg-7 select2-purple">
      <select name="rol_id[]" id="rol_id" class=" select2" data-dropdown-css-class="select2-purple" multiple="multiple" data-placeholder=" selecione un rol" style="width: 100%;" required>
        <option value="">Selecione el rol</option>
             @foreach ($rols as $id => $nombre)
                 <option class="form-control select2"
                 value="{{$id}}" 
                 {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '') : (isset($data) ? ($data->roles->firstWhere('id' , $id) ? 'selected' : '') :'')}}>{{$nombre}}</option>
             @endforeach
      </select> 
    </div>
</div>
