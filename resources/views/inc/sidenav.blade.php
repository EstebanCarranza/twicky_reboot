
<ul id="slide-out" class="sidenav">
    <li>
    @if(Auth::guest())
      <div class="user-view">
        <div class="background blue">
          <!--<img src="#">-->
        </div>
        <a href="#user"><img class="circle" src="http://opemo.twicky.com.mx/defaultData/avatar_.png"></a>
        <a href="#name"><span class="white-text name">Iniciar sesión</span></a>
        <br>
      </div>
    @else
      <div class="user-view">
        <div class="background blue">
          <!--<img src="#">-->
        </div>
        <a href="#user"><img class="circle" src="http://opemo.twicky.com.mx/defaultData/avatar_.png"></a>
        <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
        <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
      </div>
    @endif
    </li>
    <li class="row"> 
      @if(Auth::guest())
      <form method="post" action="{{route('login')}}">
        {{ csrf_field() }}
        <div class="input-field col s10 offset-s1">
          <input id="txtEmail" type="email" class="validate" name="email">
          <label for="txtEmail">Correo</label>
        </div>
        <div class="input-field col s10 offset-s1">
          <input id="txtPassword" type="password" class="validate" name="password">
          <label for="txtPassword">Contraseña</label>
        </div>
        <div class="col s12 row">
         <button class="btn waves-effect waves-light col s10 offset-s1 blue" type="submit" name="action">
            Iniciar sesión
            <i class="material-icons right">send</i>
          </button>
        </div>
        </form>
      @else
        <li><a class="waves-effect" href="/">Inicio</a></li>
        <li><a class="waves-effect" href="/portafolio">Portafolio</a></li>
        <li><a class="waves-effect" href="#aniadirAlPortafolio">Crear publicación</a></li>
        <li>
        
         <a class="waves-effect" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            Cerrar sesión
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        
        </li>
        
      @endif
    </li>
    <!--
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    -->
  </ul>
  


<script>
    $(document).ready(function(){
        /*
            si la barra lateral hacia la derecha no funciona correctamente, 
            revisar que no esté la clase 'sidenav' inicializada más de una
            vez en la misma vista final contando master, navbar, sidebar, 
            etc como si fueran parte de la misma vista
        */
         $('#slide-out').sidenav(
            {
                edge:'right'
            }
        );
    });
</script>