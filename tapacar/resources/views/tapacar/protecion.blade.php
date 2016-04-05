<!-- ABOUT
    ============================== -->
    <div class="site-wrapper" id="proteccion">
      <div class="container">
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-10">
          <div id="carousel-banner" class="carousel slide espacio" data-ride="carousel">
                <?php $img=\tapacar\imagenes::all(); ?>
               
                <ol class="carousel-indicators">
                  <?php $conta=0;?>
                   @foreach($img as $i)
                    <?php $clase=($conta==0)?"class='active'":""  ?>
                    <li data-target="#carousel-banner" data-slide-to="{{$conta}}" "{{$clase}}"></li>
                    <?php $conta++; ?>
                   @endforeach
                </ol>
                 
                  <div class="carousel-inner" role="listbox">
                    <?php $conta=0;?>
                    @foreach($img as $i)
                    <?php 
                       $clase=($conta==0)?"active":""
                    ?>
                    <div class="item {{$clase}}" id="center-img">
                      <img id="galery-center" src="{{'/storage/'.$i->ruta}}" alt="...">
                      <div class="carousel-caption">
                        <h1>Tapacar</h1>
                        <h3>{{$i->descripcion}}</h3>
                      </div>
                    </div>
                    <?php $conta++; ?>
                    @endforeach
                  </div>

              <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
        <div class="col-xs-1"></div>
       </div> 
       </div>
    </div> <!-- / .site-wrapper_classic -->
