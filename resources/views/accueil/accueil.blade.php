<x-header></x-header>
 <!-- Carousel -->
 <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('composants/assets/banner.png') }}');">
            <div class="carousel-caption d-none d-md-block">
                <h2>Découvrez la beauté du Sénégal avec nous</h2>
                <p>Découvrez le pays de Teranga</p>
            </div>
        </div>
    </div>
</div>

<!-- Forfait Section -->
<div class="container mt-5">
    <div class="section-header">
        <h2>Choisissez votre forfait</h2>
        <p>Sélectionnez le meilleur forfait pour votre voyage</p>
    </div>
    <div class="row">
        @foreach ($lieux as $lieu)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $lieu->photo }}" class="card-img-top" alt="Image de {{ $lieu->libelle }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lieu->libelle }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($lieu->description, 160, '...') }}</p>
                        <a href="#" class="btn btn-detail">En savoir plus</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>

<!-- Destinations Populaires -->
<div class="container mt-5">
    <div class="section-header">
        <h2>Destinations populaires</h2>
        <p>Sélectionnez nos meilleures destinations populaires</p>
    </div>
    <div class="row">
        @foreach ($lieux as $lieu)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $lieu->photo }}" class="card-img-top" alt="Image de {{ $lieu->libelle }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lieu->libelle }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($lieu->description, 160, '...') }}</p>
                        <a href="#" class="btn btn-detail">En savoir plus</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>

<!-- Pourquoi nous Section -->
<div class="container mt-5">
    <div class="section-header">
        <h2>Pourquoi nous</h2>
        <p>Pourquoi choisir Baol Tours?</p>
    </div>
    <div class="row">
        <div class="col-md-3 d-flex">
          <div class="feature-card flex-fill">
            <div class="icon">
              <i class="fas fa-car"></i>
            </div>
            <p>100+ circuits autour du Sénégal</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="feature-card flex-fill">
            <div class="icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <p>Agence de tourisme 100% fiable</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="feature-card flex-fill">
            <div class="icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <p>Une approche très moderne</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="feature-card flex-fill">
            <div class="icon">
              <i class="fas fa-thumbs-up"></i>
            </div>
            <p>90% de nos clients sont satisfaits</p>
          </div>
        </div>
      </div>
</div>

<!-- Témoignages -->
<div class="container mt-5">
    <div class="section-header">
        <h2>Nos clients ont dit</h2>
        <p>Ce que nos clients disent de nous</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="https://via.placeholder.com/100" alt="Default Profile Picture">
            <h5>Bineta Dieye</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab iusto quas fugit maiores velit veritatis modi totam consectetur vitae, ipsum deserunt nostrum mollitia illum deleniti exercitationem, inventore tenetur facilis. Molestiae.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="https://via.placeholder.com/100" alt="Default Profile Picture">
            <h5>Daouda Dione</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur, modi sapiente mollitia nemo voluptatem nesciunt omnis temporibus et enim at odio facilis, sint voluptatum. Quidem minima numquam atque at.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="https://via.placeholder.com/100" alt="Default Profile Picture">
            <h5>Mamadou Ngom</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ratione porro doloribus quo numquam voluptatibus error. Eos perspiciatis ipsam aspernatur fuga eaque, soluta totam sunt deserunt modi quasi culpa reiciendis.</p>
          </div>
        </div>
      </div>
</div>
<x-footer></x-footer>