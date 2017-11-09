
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    <!-- {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />') !!} -->
    {!! Html::style('css/main.css') !!}
  </head>
  <body>

    <header id="header">
      <div class="logo pull-left"> Sistema de inventario </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php echo date("d/m/Y  g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="{{URL::asset('/images/user.png')}}" alt="user-image" class="img-circle img-inline">
              <span>Mi cuenta<i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=">
                      <i class="glyphicon glyphicon-user"></i>
                      Perfil
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Configuración
                 </a>
             </li>
             <li class="last">
                 <a href="/logout">
                     <i class="glyphicon glyphicon-off"></i>
                     Salir
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
    <div class="sidebar">
      <ul>
        <li>
          <a href="/">
            <i class="glyphicon glyphicon-home"></i>
            <span>Panel de control</span>
          </a>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-user"></i>
            <span>Accesos</span>
          </a>
          <ul class="nav submenu">
            <li><a href="group.php">Administrar grupos</a> </li>
            <li><a href="users.php">Administrar usuarios</a> </li>
         </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-th-large"></i>
            <span>Compras y Stock</span>
          </a>
          <ul class="nav submenu">
             <li><a href="product.php">submenu 1</a> </li>
             <li><a href="add_product.php">submenu 2</a> </li>
         </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-th-large"></i>
            <span>Herramientas</span>
          </a>
          <ul class="nav submenu">
             <li><a href="product.php">submenu 1</a> </li>
             <li><a href="add_product.php">submenu 2</a> </li>
         </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-list-alt"></i>
            <span>Informes</span>
          </a>
          <ul class="nav submenu">
             <li><a href="product.php">submenu 1</a> </li>
             <li><a href="add_product.php">submenu 2</a> </li>
         </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-th-list"></i>
             <span>Ventas</span>
            </a>
            <ul class="nav submenu">
               <li><a href="sales.php">Administrar ventas</a> </li>
               <li><a href="add_sale.php">Agregar venta</a> </li>
           </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-signal"></i>
             <span>Reporte de ventas</span>
            </a>
            <ul class="nav submenu">
              <li><a href="sales_report.php">Ventas por fecha </a></li>
              <li><a href="monthly_sales.php">Ventas mensuales</a></li>
              <li><a href="daily_sales.php">Ventas diarias</a> </li>
            </ul>
        </li>
      </ul>


   </div>

@yield('cuerpo')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
</body>
</html>
