<div>  
  <section id="service" class="service" style="padding-top: 100px;">
    <div class="container">
      <div class="row">
          <a href="#lessons" class="service_border_raund text-center">
              <img src="assets/images/downicon.png" alt="" />
          </a>
          <div class="main_service_area sections text-center">
              <div class="head_title text-center">
                  <h2>SERVICES</h2>
                  <div class="separator"></div>
                  <p>Soy un apasionado de la música con años de experiencia enseñando diversos instrumentos. Ofrezco clases personalizadas de guitarra acústica y eléctrica, piano, ukelele, bajo, batería, cajón, congas y canto. Mi objetivo es ayudarte a descubrir tu talento musical y disfrutar cada paso del aprendizaje..</p>
              </div>

              <!-- Aquí, iteramos a través de los servicios -->
              @foreach($services as $service)
                  <div class="col-sm-3">
                      <div class="single_service">
                          <div class="single_service_icon">
                              <!-- Aquí mostramos el icono almacenado en la base de datos -->
                              <i class="{{ $service->icon }}"></i>
                          </div>
                          <h3>{{ $service->title }}</h3>
                          <div class="separator"></div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section>

</div>
