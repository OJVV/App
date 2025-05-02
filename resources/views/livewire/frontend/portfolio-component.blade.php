<div>
    <section id="portfolio" class="py-20 bg-gray-100 dark:bg-gray-900" style="padding-top: 200px; min-height: 100vh;">
        <div class="portfolio-container" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding: 0 16px;">
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
        <!-- Coloca la paginación aquí -->
       
    </section>


</div>
