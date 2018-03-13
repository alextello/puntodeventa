<div class="form-group">
    <label>Fecha</label>
    <div>
        <div class="input-group">
            {!! Form::date('fecha', $value = null, ['class' => 'form-control', 'placeholder' => 'mm/dd/yyyy', 'required']) !!}
            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
    </div>
</div>

<div class="form-group">
  <label>Hora</label>
  <div class="input-group clockpicker m-b-20" data-placement="bottom" data-align="top" data-autoclose="true">
      {!! Form::text("hora", $value = null, ['class' => 'form-control', 'id' => 'hora', 'required']) !!}
      <span class="input-group-addon"> <span class="zmdi zmdi-time"></span> </span>
  </div>
</div>
