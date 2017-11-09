<div class="form-row">
  <div class="form-group col-md-6">
    {!! Form::label('first_name', 'Nombre') !!}
    {!! Form::text("first_name", $value = null, $attributes = ['class'=>'form-control col', 'placeholder'=> 'Nombre']); !!}

  </div>
  <div class="form-group col-md-6">
    {!! Form::label('last_name', 'Apellido') !!}
    {!! Form::text("last_name", $value = null, $attributes = ['class'=>'form-control col', 'placeholder'=> 'Apellido']); !!}
  </div>
  <div class="form-group col-md-6">
    {!! Form::label('username', 'Usuario') !!}
    {!! Form::text("username", $value = null, $attributes = ['class'=>'form-control col', 'placeholder'=> 'Usuario']); !!}
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text("email", $value = null, $attributes = ['class'=>'form-control col', 'placeholder'=> 'e-mail']); !!}
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::number("telefono", $value = null, $attributes = ['class'=>'form-control col', 'placeholder'=> 'Telefono']); !!}
  </div>
  <div class="form-group col-md-6">
    {!! Form::label('Password', 'Password') !!}
    {!! Form::password("password",  $attributes = ['class'=>'form-control col', 'placeholder'=> 'Password']); !!}
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-4">
    {!! Form::label('Departamento', 'Departamento') !!}
    <select id="Departamento" class="form-control">
      <option selected>Quetzaltenango</option>
      <option></option>
    </select>
  </div>
  <div class="form-group col-md-4">
    {!! Form::label('Municipio', 'Municipio') !!}
    <select id="Municipio" class="form-control">
      <option selected>Quetzaltenango</option>
      <option></option>
    </select>
  </div>
  <div class="form-group col-md-4">
    {!! Form::label('Rol', 'Rol') !!}
    <select id="Rol" class="form-control">
      <option selected>Cajero</option>
      <option>Gerente</option>
      <option>Administrador</option>
    </select>
  </div>
  <div class="form-group" align="center">
  <p><strong>Foto de perfil</strong></p><input class="btn btn-info" type="file" title="Foto">
</div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>
