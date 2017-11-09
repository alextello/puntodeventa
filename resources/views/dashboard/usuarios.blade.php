@extends('layouts.menu')

@section('cuerpo')
  <div class="page">
    <div class="content-fluid">
      <div class="row">
        <button class="btn btn-success" onclick="location.href='/usuario/create';" >Registrar nuevo usuario</button>
      </div>
      <div class="row">
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            @foreach($user->roles as $role)
            <td>{{$role->name}}</td>
            @endforeach
            <td><p data-placement="top" data-toggle="tooltip" title="Ver"><button class="btn btn-info btn-sm open-AddBookDialog" data-title="Ver" data-toggle="modal" data-target="#ver" data-whatever={{ $user->id }} ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
            <td><p title="Editar"><button class="btn btn-primary btn-sm" data-title="Editar" data-toggle="modal" data-target="#editar" data-whatever={{ $user->id }} ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-sm" data-title="Eliminar" data-toggle="modal" data-target="#eliminar" data-whatever={{ $user->id }} ><span class="glyphicon glyphicon-trash"></span></button></p></td>
          </tr>
          @endforeach
        </tbody>
  </div>
      </div>
    </div>
  </div>
@endsection

<div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Editar usuario</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Nombre" id="nombre" name="nombre">
        </div>
        <div class="form-group">
      <input class="form-control " type="text" placeholder="Apellido" id="apellido">
      </div>
        <div class="form-group">
        <input class="form-control " type="text" placeholder="Nick" id="nick">
        </div>
        <div class="form-group">
          <select class="form-control" id="selectRol">
             <option>Cajero</option>
             <option>Moderador</option>
             <option>Administrador</option>
           </select>
      </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Actualizar</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function () {
    $(document).on("click", ".open-AddBookDialog", function () {
        var myBookId = $(this).data('whatever');
         $(".modal-body #nombre").val( myBookId );
         // As pointed out in comments,
         // it is superfluous to have to manually call the modal.
         // $('#addBookDialog').modal('show');
    });
});
</script>
