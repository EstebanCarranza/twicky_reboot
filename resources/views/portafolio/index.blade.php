@extends('layouts.master')
@section('body')
        <?php 
          if(isset($_GET['type']))
            $type = $_GET['type'];
          else
            $type = "IND";
          ?>
          
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
              <?php
                switch($type)
                {
                  case "IND":
                    echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/twicky.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Twicky<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://twicky.com.mx'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Twicky<i class='material-icons right'>close</i></span>
                          <p>
                            Tanto twicky como portafolio fueron creados por el creador de éste sitio, la página utiliza php adaptado a framework y materializecss para el uso de Material Design
                          </p>
                           <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador web fullstack</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                     echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2019/01/Lab-2.jpg'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Proyecto Laberinto<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/proyecto-laberinto/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Proyecto Laberinto<i class='material-icons right'>close</i></span>
                          <p>
                            El videojuego de plataformas proyecto laberinto fue creado con GameMaker solamente por ocio y su fin es solamente el de divertir un rato al jugador.
                          </p>
                           <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador de motor gráfico (GameMaker)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                     echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2019/01/Nave.jpg'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Proyecto Nave<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/proyecto-nave/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Proyecto Nave<i class='material-icons right'>close</i></span>
                          <p>
                            El videojuego de plataformas proyecto nave fue creado con GameMaker solamente por ocio y su fin es solamente el de divertir un rato al jugador.
                          </p>
                           <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador (GameMaker)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                    echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2018/04/banner-1200x228.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Crystal Burn<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/crystal-burn/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Crystal Burn<i class='material-icons right'>close</i></span>
                          <p>
                            Videojuego creado para la materia Multimedia Interactiva FCFM-UANL-LMAD el proyecto quedó incompleto por falta de tiempo. Trata sobre un juego para navegador de carreras para 4 jugadores en donde ganará el primero que cruce la meta o el que tenga más cristales obtenidos en la pista.
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador fullstack (JS, jQuery, PHP Nativo, WebGL, ThreeJs)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                     echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2018/10/banner_01-1200x354.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Crystal Bit<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/crystal-bit/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Crystal Bit<i class='material-icons right'>close</i></span>
                          <p>
                            Videojuego creado para la materia Multimedia Interactiva FCFM-UANL-LMAD el proyecto fue completado y está disponible para su uso. Trata sobre un juego para navegador en el que dos jugadores pelearán por obtener la mayor puntuación, el videojuego consta con varios powerUps que hacen divertida la experiencia.
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador fullstack (JS, jQuery, PHP Nativo, WebGL, ThreeJs)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                     echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2019/01/taptap_02.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>TapTap<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/proyecto-taptap/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>TapTap<i class='material-icons right'>close</i></span>
                          <p>
                            TapTap es un juego muy sencillo creado por ocio en donde el objetivo encontrar los pares para obtener la mayor puntuación posible con la menor cantidad de intentos, el juego es prácticamente infinito gracias a su algoritmo que reubica los cuadros del color que se necesitan.
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador C# (Visual Studio)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";

                     echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/catbox.jpg'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>OPEMO<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://opemo.herokuapp.com'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>OPEMO<i class='material-icons right'>close</i></span>
                          <p>
                            Objetos perdidos monterrey mejor conocida como 'OPEMO' es una aplicación web sin fines de lucro donde se podrán encontrar pertenencias perdidas de los turistas o personas locales de monterrey y su área metropolitana
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador fullstack (Laravel + Materialized)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";

                      echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/infoTwicky.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Info Twicky<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://info.twicky.com.mx'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Info Twicky<i class='material-icons right'>close</i></span>
                          <p>
                            Éste sitio web utiliza el CMS Wordpress para la administración de los distintos blogs y permite a un usuario
                            el registro y publicación en el mismo sitio
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador fullstack (WordPress)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";

                      echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/twickyGames.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Twicky Games<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Twicky Games<i class='material-icons right'>close</i></span>
                          <p>
                            Twicky Games es un sitio donde se muestran los videojuegos en donde el desarrollador de ésta página ha participado o desarrollado de manera individual.
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador fullstack (WordPress)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                       echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/sis_filr.PNG'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>sisFilR<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://twicky.com.mx/download/sisFilR.iso'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>sisFilR<i class='material-icons right'>close</i></span>
                          <p>
                            Sistema de Filtrado y Reconocimiento de Imagen, permite realizar distintos filtros 
                            tanto a imagenes, como video desde archivos en la lap y desde la cámara. Se pueden reconocer personas 
                            de cuerpo completo a distancias cortas
                            permitiendo guardar el resultado
                          </p>
                          <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador (C++)</li>
                                <li>•&nbsp;Programador (OpenCV)</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                  break;
                  case "COL":
                    echo 
                    "
                      <div class='col l4 m6 s12'>
                        <div class='card small hoverable'>
                          <div class='card-image waves-effect waves-block waves-light'>
                            <img class='activator' src='img/social.png'>
                          </div>
                          <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>Twicky Social!<i class='material-icons right'>more_vert</i></span>
                            <p><a target='_blank' href='http://social.twicky.com.mx'>Ir al sitio</a></p>
                          </div>
                          <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>Twicky Social<i class='material-icons right'>close</i></span>
                            <p>
                              Este sitio fue hecho en modo colaborativo de 2 integrantes para la materia Base de datos 
                              Multimedia (BDM) de LMAD FCFM, hecho con php, css y js puros, usando como base de datos MySQL, 
                              ésta es la pre-versión final, no se encontraron todos los procedimientos almacenados por lo 
                              cual está un poco inestable al momento de hacer búsquedas, pero más del 70% del proyecto que 
                              fue entregado está aqui para demostración.
                            <p>
                            <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador web front end (CSS Nativo)</li>
                              </ul>
                          </p>
                          </div>
                        </div>
                      </div>
                      
                      <div class='col l4 m6 s12'>
                        <div class='card small hoverable'>
                          <div class='card-image waves-effect waves-block waves-light'>
                            <img class='activator' src='img/twickyTube.png'>
                          </div>
                          <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>TwickyTube<i class='material-icons right'>more_vert</i></span>
                            <p><a target='_blank' href='http://video.twicky.com.mx'>Ir al sitio</a></p>
                          </div>
                          <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>TwickyTube<i class='material-icons right'>close</i></span>
                            <p>TwickyTube fue hecho en modo colaborativo de 2 integrantes para la materia de Programación 
                            Aplicada para la Web (PAPW) de LMAD FCFM, hecho con Java Web, css y js puros, usando como base 
                            de datos MySQL, ésta versión solamente es el pre-front de la misma página, 
                            ya que éste servicio de hosting no soporta Java Web</p>
                            <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador web front end (CSS Nativo)</li>
                              </ul>
                          </p>
                          </div>
                        </div>
                      </div>
                      
                      <div class='col l4 m6 s12'>
                        <div class='card small hoverable'>
                          <div class='card-image waves-effect waves-block waves-light'>
                            <img class='activator' src='img/prospectos.png'>
                          </div>
                          <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>Aplicación de prospectos<i class='material-icons right'>more_vert</i></span>
                            <p><a target='_blank' href='http://pm.twicky.com.mx'>Ir al sitio</a></p>
                          </div>
                          <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>Aplicación de prospectos<i class='material-icons right'>close</i></span>
                            <p>
                              Éste sitio fue hecho en modo colaborativo de 5 integrantes para la materia de Programación Multimedia (PM) 
                              FCFM - LMAD - UANL, la aplicación de prospectos tiene como fin hacer el registro de solicitudes de los 
                              prospectos interesados en asistir a cursos sobre distintas aplicaciones, también cuenta con la 
                              plataforma para que se registre como cliente y para que un operador del sitio pueda ponerse en 
                              contacto y resolver las dudas que sean necesarias
                            </p>
                            <p>
                              <strong>Rol desarrollado</strong>
                              <ul>
                                <li>•&nbsp;Programador web backend (PHP Nativo)</li>
                              </ul>
                          </p>
                          </div>
                        </div>
                      </div>
                    ";
                      echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2019/01/CoffeeBreak.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Coffee Break<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/coffee-break/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Coffee Break<i class='material-icons right'>close</i></span>
                          <p>
                            El videojuego de plataformas coffee break fue creado de modo coperativo con Unreal Engine para el evento 48toPlay 2017
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Programador de motor gráfico (Unreal Engine)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                      echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2018/04/LIF_MENU-1200x633.jpg'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>LIF The Game<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/LIF/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>LIF The Game<i class='material-icons right'>close</i></span>
                          <p>
                            Videojuego fps creado por 3 integrantes para la materia Videojuegos 2 (VJ2-FCFM-UANL)
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Programador de motor gráfico (Unreal Engine)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                    echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://games.twicky.com.mx/wp-content/uploads/2018/04/Start.bmp'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>LTGM<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://games.twicky.com.mx/lif-multiplayer-the-game/'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>LTGM<i class='material-icons right'>close</i></span>
                          <p>
                            El videojuego fps LIF The Multiplayer Game creado por 3 integrantes para la materia Videojuegos 3 (VJ2-FCFM-UANL)
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Programador de motor gráfico (Unreal Engine)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                  echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://twicky.com.mx/img/dangoslife.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Dango's Life<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='https://www.youtube.com/watch?v=xOHEsNR3sD8'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Dango's Life<i class='material-icons right'>close</i></span>
                          <p>
                            Dango's Life es un pequeño video claymotion creado por 4 integrantes para la materia de Técnologías Multimedia (FCFM-UANL-LMAD)
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Co-creador del guión</li>
                              <li>•&nbsp;Camarógrafo ayudante</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                  echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='http://twicky.com.mx/img/claudicacion.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Claudicación<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='https://www.youtube.com/watch?v=5DoTCN8O-bE'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Claudicación<i class='material-icons right'>close</i></span>
                          <p>
                            Claudicación es un pequeño video stopmotion creado por 4 integrantes para la materia de Diseño de Escenarios (FCFM-UANL-LMAD) 
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>: 
                            <ul>
                              <li>•&nbsp;Co-creador del guión</li>
                              <li>•&nbsp;Camarógrafo ayudante</li>
                              <li>•&nbsp;Edición de video (After Effects CS6)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                    echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/seafe.png'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>Seafe<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='https://www.youtube.com/watch?v=wr8Ym0EP-S4'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>Seafe<i class='material-icons right'>close</i></span>
                          <p>
                            Seafe es un proyecto realizado para la materia de Realidad Virtual (LMAD-FCFM-UANL) trata de un simulador para tratar la talaslofobia una fobia al mar abierto.
                            El total de integrantes para éste proyecto fue de 6 miembros.
                          </p>
                          <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Programador del motor gráfico (Unreal Engine)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                    echo 
                    "<div class='col l4 m6 s12 animated-card'>
                      <div class='card small hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                          <img class='activator' src='img/lighton.PNG'>
                        </div>
                        <div class='card-content'>
                          <span class='card-title activator grey-text text-darken-4'>LightOn<i class='material-icons right'>more_vert</i></span>
                          <p><a target='_blank' href='http://lighton.twicky.com.mx'>Ir al sitio</a></p>
                        </div>
                        <div class='card-reveal'>
                          <span class='card-title grey-text text-darken-4'>LightOn<i class='material-icons right'>close</i></span>
                          <p>
                            El sitio fue creado para publicitar el videojuego ficticio llamado 'LightOn', creado con una plantilla de WordPress y 
                            personalizado para coincidir con la temática del videojuego.
                          </p>
                           <p>
                            <strong>Rol desarrollado</strong>
                            <ul>
                              <li>•&nbsp;Fullstack de la página web (WordPress)</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>";
                    
                  break;
                  default: 
                    echo "
                      <div class='container'>
                        <h1>No hay datos</h1>
                      </div>
                    ";
                  break;
                }


?>


  
                </div>
              </div>
            </div>

  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
  @stop