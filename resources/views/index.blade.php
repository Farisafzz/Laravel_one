@extends('layouts.app')
@section('title', 'Page Title')
@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">Accelerating business growth through innovative technology</h1>

            <p class="hero-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">Discover More</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="/Invent/assets/img/illustration/illustration-16.webp" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
            <x-data-aos title="Judul Bagian Pertama" icon="gear">
              <b>Ini adalah konten</b> untuk bagian pertama yang akan dianimasikan dengan AOS.
            </x-data-aos>
            <x-data-aos title="Judul Bagian Pertama" icon="airplane">
              <b>Ini adalah konten</b> untuk bagian pertama yang akan dianimasikan dengan AOS.
            </x-data-aos>
            <x-data-aos title="Judul Bagian Pertama" icon="airplane">
              <b>Ini adalah konten</b> untuk bagian pertama yang akan dianimasikan dengan AOS.
            </x-data-aos>
      </div>


      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Unleashing Potential with Creative Strategy</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="/Invent/assets/img/about/about-portrait-1.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="/Invent/assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="/Invent/assets/img/about/about-12.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How We Work</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

          <x-process-step step="01" icon="pencil-square" title="Project Planning" delay="200">
          Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
          </x-process-step>

          <x-process-step step="02" icon="gear" title="Development Phase" delay="300">
          Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.
          </x-process-step>

          <x-process-step step="03" icon="search" title="Testing & QA" delay="400">
          Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus.
          </x-process-step>

          <x-process-step step="04" icon="bi bi-rocket-takeoff" title="Testing & QA" delay="400">
          Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus.
          </x-process-step>
  </div>
</div>

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <x-end-service-item icon="laptop" title="Web Development" delay="100">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
          </x-end-service-item>

          <x-end-service-item icon="phone-fill" title="Mobile App Solutions" delay="100">
          Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.
          </x-end-service-item>

          <x-end-service-item icon="palette" title="UI/UX Design" delay="200">
          Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
          </x-end-service-item>

          <x-end-service-item icon="bar-chart-line" title="Digital Marketing" delay="200">
          Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
          </x-end-service-item>

          <x-end-service-item icon="cloud-check" title="Cloud Computing" delay="300">
          Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.
          </x-end-service-item>

          <x-end-service-item icon="shield-lock" title="Cybersecurity Solutions" delay="300">
          Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et. Proin eget tortor risus.
          </x-end-service-item>
<!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


       <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="content-block">
              <h6 class="subtitle">Our innovative services</h6>
              <h2 class="title">Our customers excel in technology management</h2>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt diam et gravida consequat. Sed nec mauris quis lacus commodo lobortis. Suspendisse euismod commodo sem, in finibus purus bibendum et. Morbi eu neque sed velit convallis vestibulum a vel odio.
              </p>
              <div class="button-wrapper">
                <a class="btn" href="services.html"><span>Explore All Services</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
        <div class="services-list">

          <x-end-service-item2m 
            icon="code-square" 
            title="Software Engineering" 
            link="service-details.html" 
            delay="200" 
            description="Lorem ipsum dolor sit amet consectetur adipiscing." />

          <x-end-service-item2m 
            icon="graph-up" 
            title="Business Analytics" 
            link="service-details.html" 
            delay="300" 
            description="Lorem ipsum dolor sit amet consectetur adipiscing." />

          <x-end-service-item2m 
            icon="phone" 
            title="Mobile Solutions" 
            link="service-details.html" 
            delay="400" 
            description="Lorem ipsum dolor sit amet consectetur adipiscing." />

          <x-end-service-item2m 
            icon="gear" 
            title="Tech Infrastructure" 
            link="service-details.html" 
            delay="500" 
            description="Lorem ipsum dolor sit amet consectetur adipiscing." />

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Services Alt Section -->
  <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="cta-image-wrapper">
              <img src="/Invent/assets/img/cta/cta-4.webp" alt="Call to Action" class="img-fluid rounded-4">
              <div class="cta-pattern"></div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="cta-content">
              <h2>Transform Your Vision Into Reality Today</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

              <div class="cta-features">
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Lorem ipsum dolor sit amet consectetur</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="450">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Praesent eget risus vitae massa</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Aenean pretium nisi vel pulvinar</span>
                </div>
              </div>

              <div class="cta-action mt-5">
                <a href="#" class="btn btn-primary btn-lg me-3">Get Started</a>
                <a href="#" class="btn btn-outline-primary btn-lg">Learn More</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action 2 Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-1.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>Modern Dashboard Interface</h3>
                  <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-7.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Motion</span>
                  <h3>Product Animation Reel</h3>
                  <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-4.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Branding</span>
                  <h3>Luxury Brand Package</h3>
                  <p>Aenean lacinia bibendum nulla sed consectetur elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-2.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>E-commerce Platform</h3>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="/Invent/assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="/Invent/assets/img/portfolio/portfolio-11.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Digital Art Collection</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <!-- Basic Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>Basic Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">9.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Duis aute irure dolor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Excepteur sint occaecat
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nemo enim ipsam voluptatem
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Standard Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">Most Popular</div>
              <h3>Standard Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">19.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Lorem ipsum dolor sit amet
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Consectetur adipiscing elit
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Sed do eiusmod tempor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Ut labore et dolore magna
                </li>
              </ul>

              <a href="#" class="btn btn-light">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>Premium Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">39.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Temporibus autem quibusdam
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Saepe eveniet ut et voluptates
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nam libero tempore soluta
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Cumque nihil impedit quo
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Maxime placeat facere possimus
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum.</p>
                <div class="contact-options">
                  <a href="#" class="contact-option">
                    <i class="bi bi-envelope"></i>
                    <span>Email Support</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-telephone"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>Vivamus suscipit tortor eget felis porttitor volutpat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.
                  </p>
                </div>
              </div><!-- End FAQ Item-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card">
              <div class="team-image">
                <img src="/Invent/assets/img/person/person-m-1.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Daniel Mitchell</h4>
                <span class="position">Creative Director</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image">
                <img src="/Invent/assets/img/person/person-f-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Rebecca Taylor</h4>
                <span class="position">Lead Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image">
                <img src="/Invent/assets/img/person/person-m-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Cras ornare tristique elit. Integer in dui quis est placerat ornare. Phasellus a lacus a risus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Marcus Johnson</h4>
                <span class="position">UI/UX Designer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image">
                <img src="/Invent/assets/img/person/person-f-3.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Jessica Parker</h4>
                <span class="position">Marketing Strategist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-m-8.webp" alt="Profile Image">
                    <div>
                      <h3>Robert Johnson</h3>
                      <h4>Marketing Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et maecenas aliquam.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-f-3.webp" alt="Profile Image">
                    <div>
                      <h3>Lisa Williams</h3>
                      <h4>Product Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-f-10.webp" alt="Profile Image">
                    <div>
                      <h3>Emma Parker</h3>
                      <h4>UX Designer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-m-5.webp" alt="Profile Image">
                    <div>
                      <h3>David Miller</h3>
                      <h4>Senior Developer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-m-2.webp" alt="Profile Image">
                    <div>
                      <h3>Michael Davis</h3>
                      <h4>CEO &amp; Founder</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="/Invent/assets/img/person/person-f-7.webp" alt="Profile Image">
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Art Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>2847 Rainbow Road, Springfield, IL 62701, USA</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Mobile: +1 (555) 123-4567<br>
                Email: info@example.com</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Monday - Saturday: 9:00 - 18:00<br>
                Sunday: Closed</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

@endsection
