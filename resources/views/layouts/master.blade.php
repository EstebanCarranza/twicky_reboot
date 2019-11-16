
<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> Twicky! </title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <link rel="stylesheet" href="{{asset('css/helpers.css')}}">
      
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  </head>   
  <body class="white">    
    @include('inc.header')
    @include('inc.sidenav')
    @yield('body')
    <span class="ir-arriba material-icons">arrow_upward</span>
    @include('inc.footer')
    <script>
    $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
        $('.ir-arriba').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });   
        $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
                $('.ir-arriba').slideDown(300);
            } else {
                $('.ir-arriba').slideUp(300);
            }
        });

      });
    </script>
    </body>
  </html>