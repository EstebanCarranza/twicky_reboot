<footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"></h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contacto</h5>
                <ul>                
                  @foreach ($infoCompany->infoFooterContact as $infoData)
                    <li><a class="grey-text text-lighten-3"> {{ $infoData }} </a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © {{ date('Y') }}  Twicky
            <a class="grey-text text-lighten-4 right" href="/?action=politica">Política de privacidad</a>
            </div>
          </div>
        </footer>