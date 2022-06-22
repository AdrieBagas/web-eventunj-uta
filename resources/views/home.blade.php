@extends('layouts.main')

@section('container')

<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <article class="mb-5">
        <h1 data-aos="fade-up">EventUNJ</h1><br>
        <p class="lead">
        <i><b>EventUNJ</b></i> adalah Platform pembelajaran online dengan  kategori pelatihan  (training skill), webinar, maupun 
        info lomba menarik lainnya yang membantu kamu  dalam menguasai skill maupun ilmu baru yang bisa
        kalian terapkan di dunia kerja  maupun kehidupan sehari-hari.
        </p>
      </article>
        <div data-aos="fade-up" data-aos-delay="800">
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="img/vektor1.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section>


  <section id="counts" class="counts">
    <div class="container">
      <article class="mb-5">
      <div class="row">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
        <img src="img/counts-img.svg" alt="" class="img-fluid">
        </div>
        <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
          <div class="content d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>10.000 Partisipan</strong> dalam semua acara eventUNJ, baik partisipan dari dalam maupun luar lingkup Universitas Negeri Jakarta.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>500 Event Terdaftar</strong> yang bisa kamu ikuti dalam daftar eventUNJ mulai dari seminar, webinar, lomba, workshop, dan lainnya.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>50 Profesional Mentor</strong> yang akan membantu kamu dalam memperoleh informasi dan arahan.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Sertifikat</strong> dengan berbagai jenis dan tingkatan yang bisa kamu dapatkan dengan ikut berpartisipasi.</p>
                  <article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    
@endsection
