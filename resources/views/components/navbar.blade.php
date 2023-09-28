  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('index')}}"><i class="fas fa-plus-circle fa-2x"></i></a>
    
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{request()->routeIs('index') ? 'active underline' : ''}}">
            <a class="nav-link" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item {{request()->routeIs('usuarios') ? 'active underline' : ''}}">
          <a class="nav-link" href="{{route('usuarios')}}">Usuários</a>
        </li>
        <li class="nav-item {{request()->routeIs('produtos') ? 'active underline' : ''}}">
          <a class="nav-link" href="{{route('produtos')}}">Produtos</a>
        </li>
      </ul>
      <span class="navbar-text">
        
      </span>
    </div>
  </nav>