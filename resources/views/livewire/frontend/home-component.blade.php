<div>
    <main>
     <section id="home" class="home text-right">
         <div class="overlay">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-8 col-sm-offset-4">
                         <div class="main_home_content">
                             <div class="single_home">
                                 <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                     <h1>ANDRES SALAZAR</h1>
                                     <h1 class="subtitle">Singer and Guitarist</h1>
 
                                     <div class="video_play_icon">
                                         <a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                     </div>
 
                                 </div>
                             </div>
                             <div class="single_home">
                                 <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                     <h1>ANDRES SALAZAR</h1>
                                     <h1 class="subtitle">Cantate y Guitarrista</h1>
 
                                     <div class="video_play_icon">
                                         <a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                     </div>
 
                                 </div>
                             </div>
                             <div class="single_home">
                                 <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                     <h1>ANDRES SALAZAR</h1>
                                     <h1 class="subtitle">Singer & Guitarrist</h1>
 
                                     <div class="video_play_icon">
                                         <a href="https://www.youtube.com/embed/_l6CQRHIGyg"><i class="fa fa-play-circle-o"></i></a>
                                     </div>
 
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
 
 
 
 
     <section id="service" class="service">
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
    
    
 
 
     <section id="lessons" class="lessons">
         <div class="container">
             <div class="row">
                 <div class="main_lessons">
                     <div class="col-sm-8 col-sm-offset-1">
                         <div class="main_lessons_area sections">
                             <div class="lesson_title">
                                 <h1>Unsere KURSE</h1>
                                 <p>SIND EINFACH</p>
                             </div>
                             <div class="lesson_content">
                                 <ul class="lessonsborder">
                                     <li> <i class="fa fa-clone"></i> <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                     <li> <i class="fa fa-globe"></i> <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                     <li> <i class="lnr lnr-rocket"></i> <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                     <li> <i class="lnr lnr-volume-high"></i> <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
 
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
     <section id="portfolio" class="py-20 bg-gray-100 dark:bg-gray-900">
        <div class="portfolio-container">
            @foreach($portfolios as $portfolio)
                <div class="portfolio-item">
                    <div class="single_content_item">
                        <!-- Enlace Lightbox para imagen -->
                        <a href="{{ Storage::url($portfolio->file) }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}">
                            @if(in_array(pathinfo($portfolio->file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                <img src="{{ Storage::url($portfolio->file) }}" alt="{{ $portfolio->title }}">
                            @elseif(in_array(pathinfo($portfolio->file, PATHINFO_EXTENSION), ['mp4', 'mov', 'avi']))
                                <video controls class="w-full h-auto">
                                    <source src="{{ Storage::url($portfolio->file) }}" type="video/mp4">
                                    Tu navegador no soporta el video.
                                </video>
                            @endif
                            <div class="single_portfolio_overlay">
                                <span class="portfolio-link">
                                    <i class="fa fa-eye"></i> Ver más
                                </span>
                            </div>
                        </a>
                    </div>
                    <h3>{{ $portfolio->title }}</h3>
                    <p>{{ $portfolio->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
    
    
    
    
    
      
      
      
      
 
 
    
    
    
    
    <section id="callus" class="callus">
     <div class="callus_overlay">
         <div class="container">
             <div class="row">
                 <div class="main_callus">
                     <div class="col-sm-6 col-xs-12">
                         <div class="single_callus">
                             <div class="skypeicon_left">
                                 <i class="fa fa-whatsapp"></i>
                             </div>
                             <div class="skypeicon_right">
                                 <h2>Ruf uns auf WHATSAAP an!</h2>
                                 <h3>UND LERNE, WIE MAN MUSIK SPIELT</h3>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                         <div class="single_callus_right">
                             <a href="" class="btn btn-larg">MEHR DETAILS</a>
                             <a href="" class="btn btn-larg">WÄHLE DEINEN PLAN</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </section>
 
 
    <section id="news-section" class="py-20 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
          <!-- Título -->
          <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white">Últimas Noticias & Eventos</h2>
            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-xl mx-auto">
              Cursos, talleres y novedades de nuestra comunidad creativa.
            </p>
            <div class="mt-2 w-20 h-1 bg-indigo-600 mx-auto rounded"></div>
          </div>
      
          <!-- Grid de noticias -->
          <div class="news-container">
            <!-- Noticia -->
            <div class="news-item">
              <div class="news-image-container">
                <img src="/assets/images/blog1.jpg" alt="Evento 1" class="news-image" />
                <div class="news-overlay">
                  <span><i class="fa fa-eye"></i> Ver más</span>
                </div>
              </div>
              <h3>Curso Avanzado de Producción Electrónica</h3>
              <p>Domina mezcla, mastering y síntesis con herramientas modernas y contenido actualizado.</p>
              <div class="news-meta">
                <span><i class="fa fa-calendar"></i> 10 Junio 2025</span>
                <span><i class="fa fa-folder"></i> Producción</span>
              </div>
            </div>
      
            <!-- Noticia -->
            <div class="news-item">
              <div class="news-image-container">
                <img src="/assets/images/blog1.jpg" alt="Evento 2" class="news-image" />
                <div class="news-overlay">
                  <span><i class="fa fa-eye"></i> Ver más</span>
                </div>
              </div>
              <h3>Taller Gratuito de DJ para Principiantes</h3>
              <p>Aprende a mezclar música y dominar las tornamesas en solo 3 días.</p>
              <div class="news-meta">
                <span><i class="fa fa-calendar"></i> 5 Julio 2025</span>
                <span><i class="fa fa-folder"></i> DJ Workshop</span>
              </div>
            </div>
      
            <!-- Noticia -->
            <div class="news-item">
              <div class="news-image-container">
                <img src="/assets/images/blog1.jpg" alt="Evento 3" class="news-image" />
                <div class="news-overlay">
                  <span><i class="fa fa-eye"></i> Ver más</span>
                </div>
              </div>
              <h3>Conferencia: El futuro del sonido digital</h3>
              <p>Una charla con expertos sobre inteligencia artificial y música electrónica.</p>
              <div class="news-meta">
                <span><i class="fa fa-calendar"></i> 22 Agosto 2025</span>
                <span><i class="fa fa-folder"></i> Conferencias</span>
              </div>
            </div>

            <div class="news-item">
                <div class="news-image-container">
                  <img src="/assets/images/blog1.jpg" alt="Evento 3" class="news-image" />
                  <div class="news-overlay">
                    <span><i class="fa fa-eye"></i> Ver más</span>
                  </div>
                </div>
                <h3>Conferencia: El futuro del sonido digital</h3>
                <p>Una charla con expertos sobre inteligencia artificial y música electrónica.</p>
                <div class="news-meta">
                  <span><i class="fa fa-calendar"></i> 22 Agosto 2025</span>
                  <span><i class="fa fa-folder"></i> Conferencias</span>
                </div>
              </div>

              <div class="news-item">
                <div class="news-image-container">
                  <img src="/assets/images/blog1.jpg" alt="Evento 3" class="news-image" />
                  <div class="news-overlay">
                    <span><i class="fa fa-eye"></i> Ver más</span>
                  </div>
                </div>
                <h3>Conferencia: El futuro del sonido digital</h3>
                <p>Una charla con expertos sobre inteligencia artificial y música electrónica.</p>
                <div class="news-meta">
                  <span><i class="fa fa-calendar"></i> 22 Agosto 2025</span>
                  <span><i class="fa fa-folder"></i> Conferencias</span>
                </div>
              </div>
              <div class="news-item">
                <div class="news-image-container">
                  <img src="/assets/images/blog1.jpg" alt="Evento 3" class="news-image" />
                  <div class="news-overlay">
                    <span><i class="fa fa-eye"></i> Ver más</span>
                  </div>
                </div>
                <h3>Conferencia: El futuro del sonido digital</h3>
                <p>Una charla con expertos sobre inteligencia artificial y música electrónica.</p>
                <div class="news-meta">
                  <span><i class="fa fa-calendar"></i> 22 Agosto 2025</span>
                  <span><i class="fa fa-folder"></i> Conferencias</span>
                </div>
              </div>
          </div>
      
          <!-- Botón -->
            <div class="text-center mt-12">
            <a href="#" 
               class="relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-500">
                <i class="fa fa-calendar-check text-white text-lg"></i>
                <span>Ver Todos los Eventos</span>
            </a>
            </div>
        </div>
    </section>
      
      
      
    
    
 


 
     <section id="testimonial" class="testimonial">
         <div class="container">
             <div class="row">
                 <div class="main_testimonial_area sections text-center">
                     <div class="head_title">
                         <h2>Referenzen</h2>
                         <div class="separator"></div>
                     </div>
                     <div class="main_testimonial_content">
                         <div class="single_testimonial">
                             <div class="single_test_thumbnail">
                                 <img class="img-circle img-responsive" src="assets/images/man3.png" alt="" />
                             </div>
                             <div class="single_test_content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus,
                                     at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. 
                                     Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
 
                                 <div class="single_author_content">
                                     <h2>Andreea Koronikova</h2>
                                     <p>Musikschüler</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_testimonial">
                             <div class="single_test_thumbnail">
                                 <img class="img-circle img-responsive" src="assets/images/man3.png" alt="" />
                             </div>
                             <div class="single_test_content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus,
                                     at bibendum neque faucibus quis. Sed vel facilisis elit. Nullam fringilla pharetra diam non accumsan. 
                                     Morbi eget aliquam mauris. Etiam vehicula efficitur mi.</p>
 
                                 <div class="single_author_content">
                                     <h2>Andreea Koronikova</h2>
                                     <p>Musikschüler</p>
                                 </div>
                             </div>
                         </div>
 
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
 
 
    </main>
 </div>
 