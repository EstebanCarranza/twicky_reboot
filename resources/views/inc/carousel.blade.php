<style>

  .inner-shadow-background:
    {
       -webkit-box-shadow: inset 0px 0px 500px 72px rgba(0,0,0,1);
      -moz-box-shadow:    inset 0px 0px 500px 72px rgba(0,0,0,1);
      box-shadow:         inset 0px 0px 500px 72px rgba(0,0,0,1);
    }
    .ec-cover-style
    {
      position:absolute; width:100%; padding:0%;
    }
    .ec-cover-effects
    {
      width:100%;
      background-color:green;
      z-index:10;
      position:absolute;
    }
    .cover-image-container
    {
      -webkit-box-shadow: inset 0px 0px 500px 72px rgba(0,0,0,1);
      -moz-box-shadow:    inset 0px 0px 500px 72px rgba(0,0,0,1);
      box-shadow:         inset 0px 0px 500px 72px rgba(0,0,0,1);
      background-color:none;
      width:100%;
    }
    .cover-image
    {
      
      opacity: 0.8;
      filter: alpha(opacity=80);
      width:100%;
      object-fit: cover; 
       height:600px;
      
    }
    .cover-text 
    {
      z-index:1;
        text-shadow:0px 0px 5px #454545;, -1px 0 #454545, 1px 0 #454545, 0 1px #454545, 0 -1px #454545;
    }
    .carousel
    {
      margin-top: 0%;
      margin-bottom: 1%;
      /*max-height:300px;*/
    }
    .carousel-arrows
    {
      z-index:2;
      position:absolute;
      height:100%;
      display: flex; 
      justify-content: center; 
      align-items: center;
      width:20%;
      color:white;
      font-size:64px;
      cursor:pointer;
      
    }
    .carousel-arrows:hover
    {
      background-color:rgba(0,0,0,0.1);
    }
    .ec-carousel-left 
    {
      left:0px;
    }
    .ec-carousel-right
    {
      right:0px;
    }
   
</style>

<div class="carousel carousel-slider center" style="">
<div class="carousel-arrows ec-carousel-left">
 <h1 class="material-icons center-align"> chevron_left</h1>
</div>
<div class="carousel-arrows ec-carousel-right">
 <h1 class="material-icons center-align"> chevron_right</h1>
</div>
    <div class="carousel-item blue white-text center" href="#one!">
      <div class="ec-cover-style cover-text">
        <h1 >Twicky</h1>
        <p class="center white-text flow-text" style="">Twicky es un multisitio creado principalmente por estudiantes, primeramente para explotar proyectos web pero hoy en día se pueden mostrar todo tipo de aplicaciones y programas  </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/cyber.jpg">
      </div>
    </div>
    <div class="carousel-item blue darken-1 white-text" href="#one!">
      <div class="ec-cover-style cover-text">
        <h1 >Info Twicky</h1>
        <p class="center white-text flow-text" style="">
          En info Twicky podrás encontrar una biblioteca con distinta información muy útil en su mayoría enfocada a programación y un poco menos, pero ¿por qué no? diseño
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/network.jpg">
      </div>
      
    </div>
    
    <div class="carousel-item grey darken-4 blue-text" href="#three!">
      <div class="ec-cover-style cover-text">
        <h1 >Twicky Games</h1>
        <p class="center white-text flow-text" style="">
          Sitio en el que podrás disfrutar de una cartelera de juegos completamente finalizados en distintas plataformas.
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/games.jpg">
      </div>
      
    </div>
    <div class="carousel-item grey white-text" href="#four!">
       <div class="ec-cover-style cover-text">
        <h1>Portafolio</h1>
        <p class="center white-text flow-text" style="">
          Portafolio del creador de éste sitio, se muestran los proyectos individuales y los colaborativos en los que ha participado.
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/portafolio.jpg">

      </div>
      
    </div>
  </div>
  <script>
  $(document).ready(function(){
 $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true
                });
    var carVel = 6;
    function mover_carousel()
    {
      $('.carousel').carousel('next');
    }
    setInterval(mover_carousel, carVel*1000);

    $(".ec-carousel-left").click(function()
    {
      $('.carousel').carousel('prev');
    });
    
    $(".ec-carousel-right").click(function()
    {
      $('.carousel').carousel('next');
    });
  });
  </script>