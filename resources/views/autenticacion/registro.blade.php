<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heding">
          <h3 class="panel-title">Registro</h3>
        </div>
            <div class="panel-body">
              <form action="/registro" method="post">
                {{ csrf_field() }}

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" name="email" id="email" class="from-control" placeholder="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" name="username" id="username" class="from-control" placeholder="username">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="first_name" id="first_name" class="from-control" placeholder="first_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="last_name" id="last_name" class="from-control" placeholder="last_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="number" name="phone" id="phone" class="from-control" placeholder="phone">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="password" name="password" id="password" class="from-control">
                    </div>
                  </div>

                  <div class="form-group">
                      <input type="submit" value="Registrar" class="btn btn-success">
                  </div>

              </form>
            </div>
          </div>
       </div>
  </div>
</div>
