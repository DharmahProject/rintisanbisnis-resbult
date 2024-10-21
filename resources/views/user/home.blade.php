@extends('layouts.template')

@section('content')

<section style="background-image: url('{{ url('assets/img/new/banner5.jpg')}}');background-size: cover; background-repeat: no-repeat;min-width: 100vh;">
    <div class="container-lg">
        <div class="row" style="min-height: 580px; align-items: flex-end;">
            <div class="col-lg-6 pt-5 mt-5">
                <!-- <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Organic</span> Foods at your <span class="fw-bold">Doorsteps</span></h2>
            <p class="fs-4">Dignissim massa diam elementum.</p> -->
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Start Repair</a>
                    <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
                </div>
                <div class="row my-5" style=" align-items: flex-end;">
                    <div class="col">
                        <div class="row text-light">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">100+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Product Varieties</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-light">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">100+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-light">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">5</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Store <br>Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center ">
            <div class="col">
                <div class="card border-0 bg-primary rounded-0 p-4 text-light" style="background-color: #37A667 !important;">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#medal"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Prioritas</h5>
                                <p class="card-text">Daftar menjadi member untuk mendapatkan prioritas reparasi raket anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-secondary rounded-0 p-4 text-light" style="background-color: #377BA6 !important;">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#time"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Waktu</h5>
                                <p class="card-text">Hemat waktu anda dengan melihat jadwal repair di berbagai toko terlebih dahulu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-danger rounded-0 p-4 text-light" style="background-color: #37A69B !important;">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#warranty"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Garansi</h5>
                                <p class="card-text">Garansi 30 Hari jika mengalami kendala setelah perbaikan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="py-5 overflow-hidden" style="padding-bottom: 0px !important">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">

                <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                    <h2 class="section-title">Resbult</h2>

                    <!-- <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">View All</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                  <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                </div>
              </div> -->
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services-container">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="service-title">Perbaikan Frame</div>
                        <div class="service-description">
                            Perbaikan frame raket yang retak atau patah
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="service-title">Pemasangan Senar</div>
                        <div class="service-description">
                            Penggantian dan pemasangan senar baru dengan teknisi ahli dan mesin digital
                        </div>
                    </div>
                    <p>Serahkan raket Anda kepada kami, dan rasakan performa terbaik di lapangan. Hubungi kami sekarang untuk konsultasi gratis dan nikmati raket yang siap kembali beraksi!</p>
                    <img src="{{ url('assets/img/new/logo2.png') }}" alt="Placeholder Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="row detailed-section">
                    <img src="{{ url('assets/img/banner-ad-2.jpg') }}" alt="Placeholder Image">

                    <div class="detailed-description">
                        <br> Apakah raket bulu tangkis Anda patah, senar putus, atau grip rusak? Jangan khawatir! Kami hadir dengan layanan reparasi bulu tangkis terbaik untuk mengembalikan raket Anda seperti baru. Dengan tim yang berpengalaman dan
                        menggunakan bahan-bahan berkualitas, kami menjamin hasil yang tahan lama dan memuaskan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pb-5">
    <div class="container-lg">

        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between my-4">

                    <h2 class="section-title">Store</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary rounded-1">View All</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">

                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ url('storedetail') }}">
                            <img src="{{ url('assets/img/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <span class="rating">
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-half"></use>
                                    </svg>
                                </span>

                            </div>

                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ url('storedetail') }}" class="text-decoration-none">Toko Badminton Surya Sport</a>
                            </h3>
                            <p><b>Alamat</b> Cilandak Town Square, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia<br>
                                <b>Telp.</b> <br> 0897-0920-0020
                            </p>
                            <div class="col">
                                <div class="row text-light">
                                    <div class="col-auto" style="background-color: #37A667; border-radius: 5px">
                                        <p class="fs-1 fw-bold lh-sm mb-0">5</p>
                                    </div>
                                    <div class="col" style="color: #377BA6;">
                                        <p class="text-uppercase lh-sm mb-0">Antrian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            <div class="col-md-6 mb-3">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ url('storedetail') }}">
                            <img src="{{ url('assets/img/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <span class="rating">
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                </span>

                            </div>

                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ url('storedetail') }}" class="text-decoration-none">Toko Badminton Yan Sport</a>
                            </h3>
                            <p><b>Alamat</b> Cilandak Town Square, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia<br>
                                <b>Telp.</b> <br> 0897-0920-0020
                            </p>
                            <div class="col">
                                <div class="row text-light">
                                    <div class="col-auto" style="background-color: #37A667; border-radius: 5px">
                                        <p class="fs-1 fw-bold lh-sm mb-0">3</p>
                                    </div>
                                    <div class="col" style="color: #377BA6;">
                                        <p class="text-uppercase lh-sm mb-0">Antrian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 mb-3">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ url('storedetail') }}">
                            <img src="{{ url('assets/img/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <span class="rating">
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                </span>

                            </div>

                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ url('storedetail') }}" class="text-decoration-none">Toko Badminton Margonda Sport</a>
                            </h3>
                            <p><b>Alamat</b> Cilandak Town Square, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia<br>
                                <b>Telp.</b> <br> 0897-0920-0020
                            </p>
                            <div class="col">
                                <div class="row text-light">
                                    <div class="col-auto" style="background-color: #37A667; border-radius: 5px;">
                                        <p class="fs-1 fw-bold lh-sm mb-0">2</p>
                                    </div>
                                    <div class="col" style="color: #377BA6;">
                                        <p class="text-uppercase lh-sm mb-0">Antrian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>


            <div class="col-md-6 mb-3">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ url('storedetail') }}">
                            <img src="{{ url('assets/img/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <span class="rating">
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href="#star-full"></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href=""></use>
                                    </svg>
                                    <svg width="18" height="18" class="text-warning">
                                        <use xlink:href=""></use>
                                    </svg>
                                </span>

                            </div>

                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ url('storedetail') }}" class="text-decoration-none">Toko Badminton Demian Sport</a>
                            </h3>
                            <p><b>Alamat</b> Cilandak Town Square, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia<br>
                                <b>Telp.</b> <br> 0897-0920-0020
                            </p>
                            <div class="col">
                                <div class="row text-light">
                                    <div class="col-auto" style="background-color: #37A667; border-radius: 5px">
                                        <p class="fs-1 fw-bold lh-sm mb-0">5</p>
                                    </div>
                                    <div class="col" style="color: #377BA6;">
                                        <p class="text-uppercase lh-sm mb-0">Antrian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- <section class="py-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-md-12">

            <div class="banner-blocks">
            
              <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
                <div class="banner-content p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Items on SALE</h3>
                    <p>Discounts up to 30%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>
              
              <div class="banner-ad bg-success-subtle block-2" style="background:url('images/banner-ad-2.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Combo offers</h3>
                    <p>Discounts up to 50%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

              <div class="banner-ad bg-danger block-3" style="background:url('images/banner-ad-3.jpg') no-repeat;background-size: cover">
                <div class="banner-content align-items-center p-5">
                  <div class="content-wrapper text-light">
                    <h3 class="banner-title text-light">Discount Coupons</h3>
                    <p>Discounts up to 40%</p>
                    <a href="#" class="btn-link text-white">Shop Now</a>
                  </div>
                </div>
              </div>

            </div>
           
              
          </div>
        </div>
      </div>
    </section> -->

<section id="popular-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">

                    <h2 class="section-title">Testimoni</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#package"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                </a>
                            </figure>
                            <div class="d-flex flex-column">
                                <div class="col">
                                    <div class="card mb-3 border border-dark-subtle p-3">
                                        <div class="text-dark mb-3">
                                            <svg width="32" height="32">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </div>
                                        <div class="card-body p-0">
                                            <h5>John Doe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / products-carousel -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-lg">

        <div class="bg-secondary text-light py-5 my-5" style="background: url('{{ url('assets/img/banner-newsletter.jpg')}}') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 p-3">
                        <div class="section-header">
                            <h2 class="section-title display-5 text-light">Get 25% Discount on your first purchase</h2>
                        </div>
                        <p>Just Sign Up & Register it now to become member.</p>
                    </div>
                    <div class="col-md-5 p-3">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label d-none">Name</label>
                                <input type="text" class="form-control form-control-md rounded-0" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label d-none">Email</label>
                                <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-md rounded-0">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

@endsection