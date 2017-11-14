<a href="javascript:;" class="btn btn-danger delete-btn {{ $id }}">Eliminar</a>
<div class="modal fade delete-modal {{ $id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <form action="{{ url()->current().'/'.$id }}" method="POST" id="delete-form{{$id}}" class="hidden">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" form="delete-form{{$id}}" id="submit{{$id}}" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).on('click', '.delete-btn{{ $id }}', function(event){
    event.preventDefault();
    $(.'delete-modal{{$id}}').modal();
  });
</script>
