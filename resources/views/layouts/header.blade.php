@if(! Request::is('login') && ! Request::is('register'))

      <div class="nav d-flex justify-content-around">
        <a class="nav-link text-center" href="/partidos"><i class="fas fa-calendar-alt fa-3x"></i><span class="d-block">Reservas</span></a>
        <a class="nav-link text-center" href="/jugadores"><i class="fas fa-users fa-3x"></i><span class="d-block">Clientes</span></a>
        <a class="nav-link text-center" href=""><i class="fas fa-euro-sign fa-3x"></i><span class="d-block">Facturacion</span></a>
        <a class="nav-link text-center" href=""><i class="fas fa-clock fa-3x"></i><span class="d-block">Actividades</span></a>
        <a class="nav-link text-center" href=""><i class="fas fa-info-circle fa-3x"></i><span class="d-block">Informes</span></a>
        <a class="nav-link text-center" href=""><i class="fas fa-server fa-3x"></i><span class="d-block">Configuracion</span></a>
        <a class="nav-link text-center" href=""><i class="fas fa-home fa-3x"></i><span class="d-block">Sistema</span></a>
      </div>


@endif
