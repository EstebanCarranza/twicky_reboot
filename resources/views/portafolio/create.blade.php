
    <style>
            /*
        When creating your CSS selector,
        change "brown" to something of your choosing
        */
        .waves-effect.waves-blue .waves-ripple {
        /* The alpha value allows the text and background color
        of the button to still show through. */
            background-color:#2196f3;
        }
            
    </style>
    
    

    <!-- Modal Trigger -->
    <div class="fixed-action-btn">
        <a class="waves-effect waves-light blue btn-floating btn-large modal-trigger" href="#aniadirAlPortafolio"><i class="material-icons white-text">add</i></a>
    </div>

    <!-- Modal Structure -->
    <div id="aniadirAlPortafolio" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <div class="row">
                <div class="card row col s12">
                    <div class="input-field col s12">
                        <input id="txtTitle" type="text" class="validate">
                        <label for="txtTitle">Titulo</label>
                    </div>
                </div>
                <div class="card row col s6">
                    <div class="input-field col s12 center">
                        <i class="material-icons large blue-text">image</i>
                    </div>
                </div>
                <div class="card row col s6">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="input_text" type="text" data-length="10">
                                <label for="input_text">Input text</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $('input#input_text, textarea#textarea2').characterCounter();
        });
    </script>
