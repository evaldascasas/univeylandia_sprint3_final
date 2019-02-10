<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 bg-light sidebar collapse show" id="sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('gestio') ? 'active' : '' }}" href="{{URL::route('gestio')}}">
              <span data-feather="home"></span>
              Inici
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('empleats*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('empleats*') ? 'true' : 'false' }}" href="#submenu0">
              <span data-feather="users"></span>
              Gestionar Empleats
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse {{ request()->routeIs('empleats*') ? 'show' : '' }}" id="submenu0" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('empleats.create') ? 'active' : '' }}" href="{{URL::route('empleats.create')}}"><span data-feather="user-plus"></span>Crear Empleat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('empleats.index') ? 'active' : '' }}" href="{{URL::route('empleats.index')}}"><span data-feather="file-text"></span>Gestionar Empleats</a>
            </li>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('clients*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('clients*') ? 'true' : 'false' }}" href="#submenu1">
              <span data-feather="users"></span>
              Gestionar Clients
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse {{ request()->routeIs('clients*') ? 'show' : '' }}" id="submenu1" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('clients.create') ? 'active' : '' }}" href="{{URL::route('clients.create')}}"><span data-feather="user-plus"></span>Crear Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('clients.index') ? 'active' : '' }}" href="{{URL::route('clients.index')}}"><span data-feather="file-text"></span>Gestionar Clients</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('atraccions*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('atraccions*') ? 'true' : 'false' }}" href="#submenu3">
              <span data-feather="trending-down"></span>
              Gestionar Atraccions
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse {{ request()->routeIs('atraccions*') ? 'show' : '' }}" id="submenu3" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('atraccions.create') ? 'active' : '' }}" href="{{URL::route('atraccions.create')}}"><span data-feather="plus-square"></span>Crear Atracció</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('atraccions.index') ? 'active' : '' }}" href="{{URL::route('atraccions.index')}}"><span data-feather="file-text"></span>Gestionar Atraccions</a>
            </li>
          </ul>
          

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('incidencies*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('incidencies*') ? 'true' : 'false' }}" href="#submenu5">
              <span data-feather="alert-triangle"></span>
              Gestionar Incidències
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('incidencies*') ? 'show' : '' }}" id="submenu5" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('incidencies.create') ? 'active' : '' }}" href="{{URL::route('incidencies.create')}}"><span data-feather="plus-square"></span>Crear Inicidència</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('incidencies.index') ? 'active' : '' }}" href="{{URL::route('incidencies.index')}}"><span data-feather="file-text"></span>Gestionar inicidències a assignar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('incidencies.assign') ? 'active' : '' }}" href="{{URL::route('incidencies.assign')}}"><span data-feather="file-text"></span>Gestionar inicidències assignades</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('serveis*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('serveis*') ? 'true' : 'false' }}" href="#submenu6">
              <span data-feather="truck"></span>
              Gestionar Serveis
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('serveis*') ? 'show' : '' }}" id="submenu6" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('serveis.create') ? 'active' : '' }}" href="{{URL::route('serveis.create')}}"><span data-feather="plus-square"></span>Crear Servei</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('serveis.index') ? 'active' : '' }}" href="{{URL::route('serveis.index')}}"><span data-feather="file-text"></span>Gestionar Serveis</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('zones*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('zones*') ? 'true' : 'false' }}" href="#submenu7">
              <span data-feather="truck"></span>
              Gestionar Zones
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('zones*') ? 'show' : '' }}" id="submenu7" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('zones.create') ? 'active' : '' }}" href="{{  URL::route('zones.create')  }}"><span data-feather="plus-square"></span>Crear Zona</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('zones.index') ? 'active' : '' }}" href="{{ URL::route('zones.index') }}"><span data-feather="file-text"></span>Gestionar Zones</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu9">
              <span data-feather="alert-triangle"></span>
              Gestionar Noticies
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse" id="submenu9" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" href="#"><span data-feather="user-plus"></span>Crear Noticia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="#"><span data-feather="file-text"></span>Gestionar Noticia</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('imatges*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('imatges*') ? 'true' : 'false' }}" href="#submenu10">
              <span data-feather="alert-triangle"></span>
              Gestionar Imatges
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('imatges*') ? 'show' : '' }}" id="submenu10" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('imatges.create') ? 'active' : '' }}" href="{{  URL::route('imatges.create')  }}"><span data-feather="user-plus"></span>Afegir Imatge</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="#"><span data-feather="file-text"></span>Veure Imatges</a>
            </li>
          </ul>


        </ul>
      </div>
    </nav>
