@extends('layouts.main')

@section('container')

<div class="container1">
  <center><h3>Event Terpopuler</h3></center>
  <br>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <center><h5>Lomba Hack The Game</h5>
          <img src="img/poster5.jpeg" class="d-block w-50" alt="..."></center>
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <center><h5>Skill Training</h5>
          <img src="img/poster2.jpeg" class="d-block w-50" alt="..."></center>
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item">
          <center><h5>Sekolah UI/UX</h5>
          <img src="img/poster3.jpeg" class="d-block w-50" alt="..."></center>
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

<section id="more-services" class="more-services">
  <div class="container">
    <center><h2>Kategori Event</h2></center><br>
    <div class="row">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card" style='background-image: url("img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <h5 class="card-title"><a href="">Seminar</a></h5>
            <p class="card-text"><b>Seminar</b> diartikan sebagai pertemuan atau persidangan untuk membahas suatu masalah di bawah pimpinan ahli.

            </p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="card" style='background-image: url("img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h5 class="card-title"><a href="">Webinar</a></h5>
            <p class="card-text"><b>Webinar</b> adalah singkatan dari Web Seminar, yaitu seminar yang dilakukan melalui situs web atau aplikasi berbasis internet.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>

      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4">
        <div class="card" style='background-image: url("img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <h5 class="card-title"><a href="">Lomba</a></h5>
            <p class="card-text"><b>Perlombaan</b> adalah kegiatan untuk meningkatkan kemampuan atau prestasinya dalam bentuk karya maupun hasil yang yang mereka telah buat.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4">
        <div class="card" style='background-image: url("img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h5 class="card-title"><a href="">Workshop</a></h5>
            <p class="card-text"><b>Workshop</b> adalah diskusi atau kerja praktek mengenai subjek tertentu yang dilakukan oleh sekelompok orang kemudian mereka membagikan pengetahuan dan pengalamannya.</p>
            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <br><br><br>
      <center><strong><h2>Daftar Event</h2></strong></center>
      <center><p>Daftar event yang tersedia sekarang</p></center>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-12 d-flex justify-content-center">
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/postertr1.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Data Engineer and Analyst</h4>
            <p>Workshop</p>
            <div class="portfolio-links">
              <a href="img/poster1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/poster2.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Skill Training Software Development</h4>
            <p>Workshop</p>
            <div class="portfolio-links">
              <a href="img/poster2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/poster3.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Sekolah UI UX</h4>
            <p>Seminar</p>
            <div class="portfolio-links">
              <a href="img/poster3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/poster4.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CRETENTION 2021</h4>
            <p>Webinar</p>
            <div class="portfolio-links">
              <a href="img/poster4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/poster5.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Hack The Game</h4>
            <p>Lomba</p>
            <div class="portfolio-links">
              <a href="img/poster5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/poster6.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Soul of Nation 2021</h4>
            <p>Lomba</p>
            <div class="portfolio-links">
              <a href="img/poster6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/workshop.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Workshop IT Expo</h4>
            <p>Lomba</p>
            <div class="portfolio-links">
              <a href="img/postertr1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/postertr2.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>TOEFL Akbar Online</h4>
            <p>Workshop</p>
            <div class="portfolio-links">
              <a href="img/postertr2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/webinar.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Webinar IT EXPO</h4>
            <p>Webinar</p>
            <div class="portfolio-links">
              <a href="img/webinar.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/postertr3.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Lomba Video Kreatif</h4>
            <p>Lomba</p>
            <div class="portfolio-links">
              <a href="img/postertr3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/dekan.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dekan Cup 2021</h4>
            <p>Lomba</p>
            <div class="portfolio-links">
              <a href="img/dekan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/seminar.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Seminar Nasional Genre Genius Vol.IV</h4>
            <p>Seminar</p>
            <div class="portfolio-links">
              <a href="img/seminar.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              <a href="/registrasi" class="btn btn-outline-warning" type="button">Register Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<link rel="stylesheet" href="css/styleevent.css">

@endsection