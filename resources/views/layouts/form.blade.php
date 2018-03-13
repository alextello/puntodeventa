<div class="form-group">
    <label>Nombres</label>
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Nombres']) !!}
</div>
<div class="form-group">
    <label>Apellidos</label>
  {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
</div>
<div class="form-group">
    <label>Fecha de nacimiento</label>
    {!! Form::date('nacimiento', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'nacimiento']); !!}
    <span class="font-13 text-muted">mes/dia/año/</span>
</div>
<div class="form-group">
    <label>Telefono</label>
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group m-b-0">
    <label>Genero</label>
    {!! Form::select('genero', ['M' => 'Masculino', 'F' => 'Femenino'], 'M', ['class' => 'form-control']) !!}
</div>
</div>
</div>

<div class="col-sm-6 col-xs-12">
<div class="p-20">


<div class="form-group">
    <label>email</label>
    {!! Form::email("email", $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
</div>
<div class="form-group">
    <label>Usuario</label>
    {!! Form::text("username", $value = null, ['class' => 'form-control', 'placeholder' => 'Usuario']) !!}
</div>
<div class="form-group">
    <label>Contraseña</label>
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>Residencia</label>
    {!! Form::text('residencia', null, ['class' => 'form-control', 'placeholder' => 'Residencia']) !!}
</div>
