@extends('layouts.master')
@section('body')
          <div class='container'>
            <div class='row card-panel z-depth-0'>
              <div class="col s12 card-panel">  
              <form>
                <div class="input-field col l10 s12">
                  <select name="type">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="IND">Individual</option>
                    <option value="COL">Colaborativo</option>
                  </select>
                  <label>Categoría</label>
                </div>
                <div class="input-field col l2 s12 row">
                  <button class="btn waves-effect waves-light col s12 blue" type="submit" name="action">
                    Filtrar
                  </button>
                </div>
              </form>
            </div>
            @foreach ($cardPublications as $cardPublication)
               <div class='col l4 m6 s12 animated-card'>
                    <div class='card small hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        <img class='activator' src='{{$cardPublication->pathImagePreview}}'>
                    </div>
                    <div class='card-content'>
                        <span class='card-title activator grey-text text-darken-4'>{{ $cardPublication->title }}<i class='material-icons right'>more_vert</i></span>
                        <p><a href='/portafolio/{{ $cardPublication->id }}'>Ver más</a></p>
                    </div>
                    <div class='card-reveal'>
                        <span class='card-title grey-text text-darken-4'>{{ $cardPublication->title }}<i class='material-icons right'>close</i></span>
                        <p>
                        {{ $cardPublication->description }}
                        </p>
                        <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                            <li>•&nbsp;Por definir</li>
                            </ul>
                        </p>
                    </div>
                    </div>
                </div>
            @endforeach
       </div>
    </div>
</div>
  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
  @stop