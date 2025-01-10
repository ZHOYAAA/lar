<x-layout :$menu :$submenu :$categories :$appname>

    <div class="container mt-lg-5 py-5">
        <div class="row pt-lg-5">
            <!-- Product Images -->
            <div class="col-md-6 mb-4">
                <div class="product-gallery position-relative">
                    <img src="{{ url('storage/'.$product->image) }}" alt="{{ $product->title }}" class="img-fluid rounded shadow-sm mb-3 product-image w-100" id="mainImage">
                    <div class="zoom-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                        <button class="btn btn-light btn-sm" onclick="zoomImage()">
                            <i class="bi bi-zoom-in"></i>
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Product Details -->
            <div class="col-md-6">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">{{ $product->category->title }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
                    </ol>
                </nav>

                <h1 class="h2 fw-bold mb-3">{{ $product->title }}</h1>
                <div class="d-flex align-items-center mb-4">
                    <span class="badge bg-primary me-2">{{ $product->category->title }}</span>
                    <div class="vr me-2"></div>
                    <div class="text-warning">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>

                <div class="pricing mb-4">
                    <div class="h3 fw-bold text-primary mb-2">
                        Rp {{ number_format($product->saleprice,0,',','.') }}
                    </div>
                    <div class="text-muted">
                        <s>Rp {{ number_format($product->price,0,',','.') }}</s>
                        <span class="ms-2 badge bg-danger">Save {{ round((($product->price - $product->saleprice) / $product->price) * 100) }}%</span>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex mb-4">
                    <button class="btn btn-success btn-lg flex-grow-1">
                        <i class="bi bi-whatsapp me-2"></i>Order Via WhatsApp
                    </button>
                    <button class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-heart"></i>
                    </button>
                </div>

                <div class="product-description p-4 rounded-3 bg-light">
                    <h5 class="fw-bold mb-3">Product Description</h5>
                    <div class="description-content">
                        <?= $product->description ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>