@extends('layouts.menu')

@section('cuerpo')
  <div class="page">
    <div class="content-fluid">
      <div class="row">
        <button class="btn btn-success" onclick="location.href='/usuarios/create';" >Registrar nuevo usuario</button>
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
            <td><p data-placement="top" data-toggle="tooltip" title="Ver"><button class="btn btn-info btn-sm open-AddBookDialog" data-title="Ver" data-toggle="modal" data-target="#ver" data-nombre="{{ $user->first_name }}" data-apellido="{{ $user->last_name}}"
              data-username="{{ $user->username }}" data-rol='{{ $user->rol }}'>
           <span class="glyphicon glyphicon-eye-open"></span></button></p></td>
            <td>{!!  link_to_route('usuarios.edit', $title = "Editar", $parameters = [$user->id], $attributes = ['class'=>'btn btn-primary btn-sm']); !!}</td>
            <!-- <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-sm open-delete" data-title="Eliminar" data-toggle="modal" data-target="#eliminar" data-id={{ $user->id }} ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
            <td> {!! Form::open(['route' => ['usuarios.destroy', $user->id], 'method' => 'DELETE']) !!}
                      {!! Form::submit('Eliminar', ['class'=>'btn btn-danger btn-sm'  ]) !!}
                  {!! Form::close() !!}</td>
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
        <h4 class="modal-title custom_align" id="Heading">Datos del usuario</h4>
      </div>
          <div class="modal-body">
            <center>
                 <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                 <h3 class="media-heading">Empleado</h3>
                 <h3><small>Rol</small></h3>
                 </center>
                 <hr>
                 <center>
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
        <!-- <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Actualizar</button> -->
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar usuario?</h4>
          </div>
          <div class="modal-body">
            <h3>Esta a punto de eliminar al usuario, desea continuar?</h3>
            <input type="hidden" name="id" id="id" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            {!! link_to_route('usuarios.destroy', $title = "Eliminar", $parameters = [$user->id], $attributes = ['class'=>'btn btn-danger']); !!}
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function () {
    $(document).on("click", ".open-AddBookDialog", function () {
        var myBookId = $(this).data('nombre');
         $(".modal-body #nombre").val( myBookId );
          myBookId = $(this).data('apellido');
          $(".modal-body #apellido").val( myBookId );
          myBookId = $(this).data('username');
          $(".modal-body #nick").val( myBookId );
    });

    $(document).on("click", ".open-delete", function () {
        var id = $(this).data('id');
         $(".modal-body #id").val( id );
    });


});
</script>
