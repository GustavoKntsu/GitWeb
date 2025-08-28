<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Selet - Página Inicial</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Pricing.css -->
    <link href="{{ asset('./css/pricing.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand fw-bold" href="#">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3">
            <img src="{{ asset('img/cart_logo.svg') }}" alt="Carrinho" height="30">
            <img src="{{ asset('img/user_logo.svg')}}" alt="Perfil" height="30">
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section py-5" style="margin-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-lg-6 mb-4">
                <h1 class="fw-bold display-4">Descubra Móveis<br>Com Alta Qualidade</h1>
                <p class="lead text-muted mt-3">
                    Conforto, qualidade e design atemporal para transformar seu ambiente.
                </p>
                <form class="d-flex mt-4" role="search">
                    <input class="form-control form-control-lg me-2" type="search" placeholder="Buscar móveis..." aria-label="Search">
                    <button class="btn btn-primary btn-lg" type="submit">Buscar</button>
                </form>
            </div>

            <!-- Imagem -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/Sala_de_Estar.webp') }}" class="img-fluid" alt="Imagem de Móveis">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container text-center">
        <!-- Título -->
        <h6 class="text-warning fw-bold">Benefits</h6>
        <h2 class="fw-bold mb-4">Benefits when using our services</h2>
        <p class="text-muted mb-5">
            Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.
        </p>

        <!-- Cards de benefícios -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body">
                        <img src="{{ asset('img/many_choices_img.svg') }}" alt="Many Choices" class="mb-3" width="50">
                        <h5 class="fw-bold">Many Choices</h5>
                        <p class="text-muted">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body">
                        <img src="{{ asset('img/fast_on_time_img.svg') }}" alt="Fast and On Time" class="mb-3" width="50">
                        <h5 class="fw-bold">Fast and On Time</h5>
                        <p class="text-muted">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body">
                        <img src="{{ asset('img/affordable.svg') }}" alt="Affordable Price" class="mb-3" width="50">
                        <h5 class="fw-bold">Affordable Price</h5>
                        <p class="text-muted">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Produtos -->
<section class="container py-5">
    <h6 class="text-warning fw-semibold mb-1 text-center">Product</h6>
    <h2 class="text-center fw-bold">Our Popular Products</h2>
    <p class="text-muted mx-auto text-center" style="max-width: 600px;">
        Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.
    </p>
    <div class="position-relative">
        <!-- Navigation buttons -->
        <button id="prevBtn" class="carousel-nav-btn prev-btn">‹</button>
        <button id="nextBtn" class="carousel-nav-btn next-btn">›</button>

        <div id="carousel" class="d-flex overflow-hidden gap-4 py-4" style="scroll-snap-type: x mandatory; scroll-behavior: smooth;">


        <div class="card border-0 product-card white-chair">
                <img src="{{ asset('img/Bookshelf.svg') }}" class="card-img-top" alt="White aesthetic chair">
                <div class="card-body text-center">
                    <h5 class="card-title">Bookshelf</h5>
                    <p class="text-muted">$ 72,19</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="card border-0 product-card">
                <img src="{{ asset('img/white_chair.svg') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">White Aesthetic Chair</h5>
                    <p class="text-muted">$ 63,47</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="card border-0 product-card">
                <img src="{{ asset('img/lamp.svg') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Bardono Smart Lamp</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>


            <div class="card border-0 product-card">
                <img src="{{ asset('img/sofa_img.webp') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Sofa</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>


            <div class="card border-0 product-card">
                <img src="{{ asset('img/Mesa_de_Escritorio.webp') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Office Desk</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="card border-0 product-card">
                <img src="{{ asset('img/Mesa_de_Escritorio.webp') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Office Desk</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="card border-0 product-card">
                <img src="{{ asset('img/Mesa_de_Escritorio.webp') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Office Desk</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="card border-0 product-card">
                <img src="{{ asset('img/Mesa_de_Escritorio.webp') }}" class="card-img-top" alt="Sofa">
                <div class="card-body text-center">
                    <h5 class="card-title">Office Desk</h5>
                    <p class="text-muted">$ 62,23</p>
                    <a href="{{ url('/comprar') }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Copiar para mais produtos -->
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0">&copy; {{ date('Y') }} 4Selet. Todos os direitos reservados.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    nextBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: 300, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: -300, behavior: 'smooth' });
    });
</script>

</body>
</html>
