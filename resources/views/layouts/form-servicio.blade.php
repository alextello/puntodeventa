<div class="form-group">
    <label>Codigo</label>
    <div>
        <div class="input-group">
            {!! Form::text('codigo', $value = null, ['class' => 'form-control', 'placeholder' => 'Codigo', 'required']) !!}
        </div><!-- input-group -->
    </div>
</div>

<div class="form-group">
  <label>Tipo de servicio</label>
  <div class="input-group clockpicker m-b-20" data-placement="bottom" data-align="top" data-autoclose="true">
      {!! Form::text("tipo", $value = null, ['class' => 'form-control', 'id' => 'tipo', 'required']) !!}
  </div>
</div>

<div class="form-group">
  <label>Costo</label>
  <div class="input-group clockpicker m-b-20" data-placement="bottom" data-align="top" data-autoclose="true">
      {!! Form::number("costo", $value = null, ['class' => 'form-control', 'id' => 'costo', 'required']) !!}
  </div>
</div>

<div class="form-group">
  <label>Descripcion</label>
  <div class="input-group clockpicker m-b-20" data-placement="bottom" data-align="top" data-autoclose="true">
      {!! Form::textarea("descripcion", $value = null, ['class' => 'form-control', 'id' => 'descripcion', 'required', 'rows'=>'5']) !!}
  </div>
</div>
