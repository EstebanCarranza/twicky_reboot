<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="/portafolio?type=IND">Individual</a></li>
  <li class="divider"></li>
  <li><a href="/portafolio?type=COL">Colaborativo</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown1-mobile" class="dropdown-content">
  <li><a href="/portafolio?type=IND">Individual</a></li>
  <li class="divider"></li>
  <li><a href="/portafolio?type=COL">Colaborativo</a></li>
</ul>
<style>
.ec-color-transparent
{
  background-color:rgba(0,0,0,0);
  -webkit-box-shadow: inset 0px 0px 100px 1px rgba(0,0,0,1);
  -moz-box-shadow:    inset 0px 0px 100px 1px rgba(0,0,0,1);
  box-shadow:         inset 0px 0px 100px 1px rgba(0,0,0,1);
}
</style>
<div class="navbar-fixed">
<nav class="blue">
  <div class="container"> 
      <div class="nav-wrapper">
        <a href="/" class="brand-logo">Twicky</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#" data-target="slide-out" class="openSidebarUser sidenav-trigger right"><img id="" src="http://opemo.twicky.com.mx/defaultData/avatar_.png" class=" nav-img-profile" ></a>
        <ul class="right hide-on-med-and-down">
          <!--<li><a href="http://apps.twicky.com.mx">Apps</a></li>-->
          <li><a id="" class="lnkSite modal-trigger" link="http://info.twicky.com.mx">Info Twicky</a></li>
          <!--<li><a link="http://lab.twicky.com.mx">Lab</a></li>-->
          <li><a id="" class="lnkSite modal-trigger" link="http://games.twicky.com.mx">Twicky Games</a></li>
          <li><a id="" href="/portafolio">Portafolio</a></li>
          
          <li class="openSidebarUser sidenav-trigger" data-target="slide-out">
            <img id="" src="http://opemo.twicky.com.mx/defaultData/avatar_.png" class=" nav-img-profile" >
          </li>
          
        </ul>
      </div>
      </div>
  </nav>
</div>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="http://info.twicky.com.mx">Info</a></li>
      <!--<li><a href="http://lab.twicky.com.mx">Lab</a></li>-->
      <li><a href="http://games.twicky.com.mx">Games</a></li>
      <li><a id="" class="" href="/portafolio">Portafolio</a></li>
      
    </ul>

 

  <!-- Modal Structure -->
  <div id="mdlAbrirSitio" class="modal">
    <div class="modal-content">
      <h4 id="mdHeader">Modal Header</h4>
      <p>
        Estás apunto de ir a un nuevo sitio "<pg id="pgTitulo"> </pg>", estás seguro de que quieres abandonar "Twicky"?
      </p>
    </div>
    <div class="modal-footer">
    <a href="#!" class="blue white-text modal-close waves-effect waves-white btn-flat">No</a>
    <a id="mdlRespuestaSi"  target="_blank" href="#!" class="blue white-text modal-close waves-effect waves-white btn-flat">Si</a>
    </div>
  </div>

<script>
  $(document).ready(function(){
    $('.modal').modal();
  $('.sidenav').sidenav();
    $(".lnkSite").click(function(){
      $("#mdHeader").text($(this).text());
      $("#pgTitulo").text($(this).text());
      $("#mdlRespuestaSi").attr('href',$(this).attr("link"));
      $("#mdlAbrirSitio").modal("open");
    });
  });
</script>