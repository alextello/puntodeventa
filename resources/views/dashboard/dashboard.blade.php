@extends('layouts.menu')

@section('cuerpo')
<div class="page">
  <div class="container-fluid">
    <!-- @if(!empty($request))
      <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        {{ $request }}
      </div>
      @endif -->
 <div class="row">
   <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Bienvenido!</strong> has sido logueado exitosamente!
</div>
 </div>
  <div class="row">
    <a href="/usuarios">  <div class="col-md-2">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
        <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 3 </h2>
          <p class="text-muted">Usuarios</p>
        </div>
       </div></a>
    </div>
    <div class="col-md-2">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 5 </h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>
    <div class="col-md-2">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 1 </h2>
          <p class="text-muted">Productos</p>
        </div>
       </div>
    </div>
    <div class="col-md-2">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-purple">
          <i class="glyphicon glyphicon-paperclip"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 2 </h2>
          <p class="text-muted">Plantillas</p>
        </div>
       </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-left bg-yellow">
         <i class="glyphicon glyphicon-th"></i>
       </div>
       <div class="panel-value pull-right">
         <h2 class="margin-top"> 3 </h2>
         <p class="text-muted">Puntos de venta</p>
       </div>
      </div>
   </div>

</div>

  <div class="row">
   <div class="col-md-4">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Productos más vendidos</span>
         </strong>
       </div>
       <div class="panel-body">
         <table class="table table-striped table-bordered table-condensed">
          <thead>
           <tr>
             <th>Título</th>
             <th>Total vendido</th>
             <th>Cantidad total</th>
           </tr>
          </thead>
          <tbody>

              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>

          </tbody>
         </table>
       </div>
     </div>
   </div>
   <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>ÚLTIMAS VENTAS</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
       <thead>
         <tr>
           <th class="text-center" style="width: 50px;">#</th>
           <th>Producto</th>
           <th>Fecha</th>
           <th>Venta total</th>
         </tr>
       </thead>
       <tbody>

       </tbody>
     </table>
    </div>
   </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Productos recientemente añadidos</span>
        </strong>
      </div>
      <div class="panel-body">

        <div class="list-group">

    </div>
  </div>
 </div>
</div>
 </div>
  <div class="row">

  </div>

</div>
</div>
@endsection
