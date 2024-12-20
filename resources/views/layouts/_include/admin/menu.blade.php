<a href="{{route('index')}}"><i class="fas fa-home"></i> Feed</a>
<a href="#videos"><i class="fas fa-video"></i> Vídeos</a>
<a href="#fotos"><i class="fas fa-camera"></i> Fotos</a>
<a href="{{route('perfil.index')}}"><i class="fas fa-user"></i> Perfil</a>

<a href="{{ route('logout') }}" 
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Terminar Sessão
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
