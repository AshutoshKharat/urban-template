<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Ambika Urban Cooperative Credit Society</title>
  <meta content="Ambika Urban Cooperative Credit Society is a leading financial institution with 38+ years of experience, offering a wide range of banking services including loans, deposits, and community support." name="description" />
  <meta content="Ambika Urban Cooperative Credit Society, Ambika Urban, Cooperative Credit Society, Banking, Loans, Deposits, Financial Services" name="keywords" />
  <!-- Favicon -->
  <link href="assets/images/ambika_urban_logo.png" rel="icon" />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Custom Font: Open Sans (closest match) -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="assets/css/style.css?<?php echo time(); ?>" rel="stylesheet" />
</head>

<body class="bg-white">
  <!-- BEGIN: TopHeader -->
  <header class="site-header shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between gap-8">
      <div class="flex items-center gap-6 md:gap-10">
        <img alt="Ambika Urban Logo" class="h-14 md:h-16" src="assets/images/ambika_urban_logo.png" />
        <nav class="site-nav" aria-label="Primary navigation">
          <a class="site-nav__link is-active" href="#home" data-i18n="nav.home">Home</a>
          <a class="site-nav__link" href="#about" data-i18n="nav.about">About</a>
          <a class="site-nav__link" href="#services" data-i18n="nav.services">Services</a>
          <a class="site-nav__link" href="#management" data-i18n="nav.management">Management</a>
          <a class="site-nav__link" href="#projects" data-i18n="nav.projects">Projects</a>
          <a class="site-nav__link" href="#contact" data-i18n="nav.contact">Contact</a>
        </nav>
      </div>
      <div class="language-toggle" aria-label="Language selector">
        <button class="language-toggle__btn is-active" type="button" data-lang-switch="en">EN</button>
        <button class="language-toggle__btn" type="button" data-lang-switch="mr">मर</button>
      </div>
      <!-- <div class="flex items-center space-x-4">
        <button class="header-cta text-white px-4 py-2 rounded-full text-sm font-bold transition-colors">
          E-PPT
        </button>
      </div> -->
    </div>
  </header>
  <!-- END: TopHeader -->
  <!-- BEGIN: HeroCarousel -->
  <section id="home" class="hero-slider relative bg-gray-100" data-purpose="hero-slider" aria-label="Hero image slider">
    <div class="hero-slider__viewport">
      <div class="hero-slider__slide is-active" data-slide>
        <img alt="Hero Banner 1" class="hero-slider__image" src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" />
      </div>
      <div class="hero-slider__slide" data-slide>
        <img alt="Hero Banner 2" class="hero-slider__image" src="https://images.pexels.com/photos/8292854/pexels-photo-8292854.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" />
      </div>
      <div class="hero-slider__slide" data-slide>
        <img alt="Hero Banner 3" class="hero-slider__image" src="https://images.pexels.com/photos/6969933/pexels-photo-6969933.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" />
      </div>
      <div class="hero-slider__overlay absolute inset-0 bg-black/20 flex items-center">
        <div class="container mx-auto px-4 text-white">
          <!-- Floating Montage Area (represented by image placeholder) -->
        </div>
      </div>
    </div>
  </section>
  <!-- END: HeroCarousel -->
  <!-- BEGIN: AboutSection -->
  <section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
      <div class="relative">
        <!-- Collage of images represented by a grid -->
        <div class="grid grid-cols-2 gap-4">
          <img alt="About 1" class="rounded-lg shadow-lg" src="https://images.pexels.com/photos/5816296/pexels-photo-5816296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
          <img alt="About 2" class="rounded-lg shadow-lg mt-8" src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
        </div>
      </div>
      <div>
        <span class="text-gray-500 text-sm font-bold uppercase tracking-widest" data-i18n="about.eyebrow">ABOUT US</span>
        <h2 class="text-4xl font-bold text-primary mt-2" data-i18n="about.title">We are here to serve with <span class="text-accent italic">38+ years of experience</span></h2>
        <p class="mt-6 text-gray-600 leading-relaxed" data-i18n="about.copy">
          Ambika Urban was established in 1986 with a mere capital of Rs. 12,000/- with 72 members initially. Today, we have 475+ Branches in 4 states of India. Furthermore, we have 300+ warehouses at various locations.
        </p>
        <div class="grid grid-cols-2 gap-4 mt-8">
          <div class="flex items-center space-x-2"><span class="w-3 h-3 rounded-full bg-emerald-500"></span><span class="text-sm font-semibold">EDUCATION</span></div>
          <div class="flex items-center space-x-2"><span class="w-3 h-3 rounded-full bg-blue-500"></span><span class="text-sm font-semibold">INNOVATION</span></div>
          <div class="flex items-center space-x-2"><span class="w-3 h-3 rounded-full bg-purple-500"></span><span class="text-sm font-semibold">INDUSTRY</span></div>
          <div class="flex items-center space-x-2"><span class="w-3 h-3 rounded-full bg-orange-500"></span><span class="text-sm font-semibold">MSSC SUPPORT</span></div>
        </div>
        <div class="mt-10 flex space-x-4">
          <button class="bg-primary text-white px-6 py-3 rounded text-sm font-bold">Know About Us &gt;</button>
          <button class="bg-accent text-white px-6 py-3 rounded text-sm font-bold">Ayodhya Bhakt Niwas Booking &gt;</button>
        </div>
      </div>
    </div>
  </section>
  <!-- END: AboutSection -->
  <!-- BEGIN: StatsBar -->
  <section class="stats-slider bg-light-blue py-10 border-y border-blue-100" data-purpose="stats-slider" aria-label="Company statistics slider">
    <div class="container mx-auto px-4">
      <div class="stats-slider__viewport">
        <div class="stats-slider__track" data-stats-track>
          <article class="stats-slider__card">
            <div class="stats-slider__icon text-sky-600">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 10.5 12 4l9 6.5V20H3v-9.5Zm2 1.02V18h4v-5H9v5h6v-5h-1v5h4v-6.48L12 6.52 5 11.52Z"/></svg>
            </div>
            <div class="text-2xl font-bold text-primary">50+</div>
            <div class="text-xs text-gray-500 uppercase font-bold" data-i18n="stats.branches">Branches</div>
            <div class="stats-slider__popup">
              <span class="stats-slider__tile" data-i18n="stats.branch.tile1">Branch</span>
              <span class="stats-slider__tile" data-i18n="stats.branch.tile2">Coverage</span>
              <span class="stats-slider__tile" data-i18n="stats.branch.tile3">Network</span>
            </div>
          </article>
          <article class="stats-slider__card">
            <div class="stats-slider__icon text-emerald-600">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 11c1.66 0 3-1.57 3-3.5S17.66 4 16 4s-3 1.57-3 3.5 1.34 3.5 3 3.5Zm-8 0c1.66 0 3-1.57 3-3.5S9.66 4 8 4 5 5.57 5 7.5 6.34 11 8 11Zm0 2c-2.67 0-8 1.34-8 4v3h10v-3c0-1.24.39-2.34 1.01-3.25C10.16 13.33 9.11 13 8 13Zm8 0c-.82 0-1.6.1-2.34.27A6.9 6.9 0 0 1 16 19v1h8v-3c0-2.66-5.33-4-8-4Z"/></svg>
            </div>
            <div class="text-2xl font-bold text-primary">1L+</div>
            <div class="text-xs text-gray-500 uppercase font-bold" data-i18n="stats.customers">Customers</div>
            <div class="stats-slider__popup">
              <span class="stats-slider__tile" data-i18n="stats.customer.tile1">Customers</span>
              <span class="stats-slider__tile" data-i18n="stats.customer.tile2">Community</span>
              <span class="stats-slider__tile" data-i18n="stats.customer.tile3">Trust</span>
            </div>
          </article>
          <article class="stats-slider__card">
            <div class="stats-slider__icon text-blue-600">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm0 4v10h16V8H4Zm2 2h6v6H6v-6Z"/></svg>
            </div>
            <div class="text-2xl font-bold text-primary">₹500Cr+</div>
            <div class="text-xs text-gray-500 uppercase font-bold" data-i18n="stats.deposits">Deposits</div>
            <div class="stats-slider__popup">
              <span class="stats-slider__tile" data-i18n="stats.deposit.tile1">Deposits</span>
              <span class="stats-slider__tile" data-i18n="stats.deposit.tile2">Savings</span>
              <span class="stats-slider__tile" data-i18n="stats.deposit.tile3">Growth</span>
            </div>
          </article>
          <article class="stats-slider__card">
            <div class="stats-slider__icon text-amber-500">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 3h4v2h3a2 2 0 0 1 2 2v2H5V7a2 2 0 0 1 2-2h3V3Zm-5 8h14v8a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-8Zm4 2v2h2v-2H9Zm0 4v2h6v-2H9Z"/></svg>
            </div>
            <div class="text-2xl font-bold text-primary">₹350Cr+</div>
            <div class="text-xs text-gray-500 uppercase font-bold" data-i18n="stats.loans">Loans</div>
            <div class="stats-slider__popup">
              <span class="stats-slider__tile" data-i18n="stats.loan.tile1">Loans</span>
              <span class="stats-slider__tile" data-i18n="stats.loan.tile2">Flexible</span>
              <span class="stats-slider__tile" data-i18n="stats.loan.tile3">Support</span>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- END: StatsBar -->
  <!-- BEGIN: OurServices -->
  <section id="services" class="services-slider py-20 bg-[#eaf1fb]" data-purpose="services-slider" aria-label="Services slider">
    <div class="container mx-auto px-4">
      <div class="services-slider__layout">
        <div class="services-slider__intro">
          <span class="text-gray-800 text-sm font-bold uppercase tracking-[0.18em]" data-i18n="services.eyebrow">OUR SERVICES</span>
          <h2 class="services-slider__title" data-i18n="services.title">We run all <span class="text-teal-500">kinds of services</span> in the form of</h2>
          <p class="services-slider__copy" data-i18n="services.copy">With a strong portfolio of services ranging from member savings and affordable lending to community development and financial inclusion</p>
          <div class="services-slider__controls">
            <button class="services-slider__cta">See All Services <span>↗</span></button>
            <div class="services-slider__arrows">
              <button class="services-slider__arrow" type="button" data-services-prev aria-label="Previous services">←</button>
              <button class="services-slider__arrow" type="button" data-services-next aria-label="Next services">→</button>
            </div>
          </div>
        </div>
        <div class="services-slider__viewport">
          <div class="services-slider__track" data-services-track>
            <article class="services-slider__card">
              <img alt="Home Loan" class="services-slider__bg" src="https://images.pexels.com/photos/8292854/pexels-photo-8292854.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 12 12 4l9 8v8H3v-8Zm2 0v6h4v-5h2v5h6v-6L12 6 5 12Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.home.title">Home Loan</h3>
                <p class="services-slider__card-copy" data-i18n="service.home.copy">Affordable home loans with low interest rates.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
            <article class="services-slider__card">
              <img alt="Gold Loan" class="services-slider__bg" src="https://images.pexels.com/photos/8442337/pexels-photo-8442337.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 4h10l4 7-9 9-9-9 4-7Zm1.1 2-2.6 5h13L15.9 6H8.1ZM8 13l4 4 4-4H8Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.gold.title">Gold Loan</h3>
                <p class="services-slider__card-copy" data-i18n="service.gold.copy">Instant gold loans with secure approval process.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
            <article class="services-slider__card">
              <img alt="Mobile Banking" class="services-slider__bg" src="https://images.pexels.com/photos/6969933/pexels-photo-6969933.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2Zm0 3v14h10V5H7Zm4 15h2v1h-2v-1Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.mobile.title">Mobile Banking</h3>
                <p class="services-slider__card-copy" data-i18n="service.mobile.copy">Bank anytime with digital banking facilities.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
            <article class="services-slider__card">
              <img alt="UPI Banking" class="services-slider__bg" src="https://images.pexels.com/photos/6406691/pexels-photo-6406691.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 4h7v7H4V4Zm2 2v3h3V6H6Zm7-2h7v7h-7V4Zm2 2v3h3V6h-3ZM4 13h7v7H4v-7Zm2 2v3h3v-3H6Zm9-2h2v2h-2v-2Zm3 0h2v4h-2v-4Zm-5 3h2v4h-2v-4Zm3 2h4v2h-4v-2Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.upi.title">UPI Banking</h3>
                <p class="services-slider__card-copy" data-i18n="service.upi.copy">Fast and secure QR &amp; UPI payments.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
            <article class="services-slider__card">
              <img alt="Vehicle Loan" class="services-slider__bg" src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M5 11h14l3 3v2h-2a3 3 0 0 1-6 0H5v-5Zm14 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm-10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM19.92 7A2.99 2.99 0 0 1 22.8 9l-.01.01c-.17.17-.39.29-.63.39L19.92 7ZM5.63 7c-.24-.1-.46-.22-.63-.39L4.99.01A2.99 2.99 0 0 1 .08-1C-.06-1.16-.18-1.39-.28-1.63L5.63-7Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.vehicle.title">Vehicle Loan</h3>
                <p class="services-slider__card-copy" data-i18n="service.vehicle.copy">Easy finance for cars and commercial vehicles.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
            <article class="services-slider__card">
              <img alt="Money Transfer" class="services-slider__bg" src="https://images.pexels.com/photos/210607/pexels-photo-210607.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="services-slider__panel">
                <div class="services-slider__icon services-slider__icon--teal">
                  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 7h13l-3-3 1.4-1.4L20.8 8l-5.4 5.4L14 12l3-3H4V7Zm16 10H7l3 3-1.4 1.4L3.2 16l5.4-5.4L10 12l-3 3h13v2Z"/></svg>
                </div>
                <h3 class="services-slider__card-title" data-i18n="service.transfer.title">Money Transfer</h3>
                <p class="services-slider__card-copy" data-i18n="service.transfer.copy">RTGS, IMPS and NEFT available 24x7.</p>
                <a class="services-slider__readmore" href="#">Read More ↗</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: OurServices -->
  <!-- BEGIN: BankingAspects -->
  <section class="py-20 bg-light-blue">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full uppercase" data-i18n="process.eyebrow">WITH PROFESSIONAL MANAGEMENT</span>
        <h2 class="text-4xl font-bold text-primary mt-4" data-i18n="process.title">We deal with the aspects of<br />professional <span class="text-emerald-500 italic">Banking Services</span></h2>
      </div>
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <!-- Step 1 -->
          <div class="bg-white p-6 rounded-xl shadow-sm flex items-start space-x-6">
            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 text-white flex items-center justify-center rounded-full font-bold">01</div>
            <div>
              <h4 class="font-bold text-lg" data-i18n="process.planning.title">Planning</h4>
              <p class="text-sm text-gray-500" data-i18n="process.planning.copy">Our commitment to security, transparency, and customer centricity ensures that every transaction is safe and reliable.</p>
            </div>
          </div>
          <!-- Step 2 -->
          <div class="bg-amber-50 p-6 rounded-xl shadow-sm flex items-start space-x-6">
            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 text-white flex items-center justify-center rounded-full font-bold">02</div>
            <div>
              <h4 class="font-bold text-lg" data-i18n="process.analysis.title">Analysis</h4>
              <p class="text-sm text-gray-500" data-i18n="process.analysis.copy">Through in-depth analysis, we maintain transparency and accuracy, ensuring every transaction is trustworthy and seamless.</p>
            </div>
          </div>
          <!-- Step 3 -->
          <div class="bg-white p-6 rounded-xl shadow-sm flex items-start space-x-6">
            <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 text-white flex items-center justify-center rounded-full font-bold">03</div>
            <div>
              <h4 class="font-bold text-lg" data-i18n="process.implementation.title">Implementation</h4>
              <p class="text-sm text-gray-500" data-i18n="process.implementation.copy">With strong systems and security, our implementation process guarantees that every transaction is efficient and dependable.</p>
            </div>
          </div>
        </div>
        <div class="relative">
          <img alt="Process Illustration" class="rounded-3xl shadow-2xl" src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
        </div>
      </div>
    </div>
  </section>
  <!-- END: BankingAspects -->
  <!-- BEGIN: ManagementCommittee -->
  <section id="management" class="management-section">
    <div class="container mx-auto px-4">
      <div class="management-section__header">
        <span class="management-section__eyebrow" data-i18n="management.eyebrow">Management Committee</span>
        <h2 class="management-section__title" data-i18n="management.title">Our Leadership Team</h2>
        <p class="management-section__copy" data-i18n="management.copy">Experienced guidance behind Ambika Urban's member-first growth and trusted financial service.</p>
      </div>
      <?php
        $committeeMembers = [
          ['name' => 'Dr. Mrs. Sandhya Vijay Kothari', 'title' => 'Chairperson', 'nameMr' => 'डॉ. सौ. संध्या विजयजी कोठारी', 'titleMr' => 'अध्यक्ष', 'image' => 'Sandhya Kothari.png'],
          ['name' => 'Bhagwandas Gopaldas Nagwani', 'title' => 'Vice Chairperson', 'nameMr' => 'भगवानदास गोपालदासजी नागवानी', 'titleMr' => 'उपाध्यक्ष', 'image' => 'Bhagwandas-Nagwani.png'],
          ['name' => 'Adv. Vijay Gopaldas Kothari', 'title' => 'Director', 'nameMr' => 'अॅड. विजय गोपालदासजी कोठारी', 'titleMr' => 'संचालक', 'image' => 'Vijay-Kothari.png'],
          ['name' => 'Premraj Bhukanaji Bhala', 'title' => 'Director', 'nameMr' => 'प्रेमराज भुकनाजी भाला', 'titleMr' => 'संचालक', 'image' => 'Premraj-Bhala.png'],
          ['name' => 'Shreeram Vinod Kute', 'title' => 'Director', 'nameMr' => 'श्रीराम विनोद कुटे', 'titleMr' => 'संचालक', 'image' => 'Shreeram-Kuthe.png'],
          ['name' => 'Hanumant Mukundji Bhawar', 'title' => 'Director', 'nameMr' => 'हनुमंत मुकुंदजी भवर', 'titleMr' => 'संचालक', 'image' => 'Hanumant-Bhawar.png'],
          ['name' => 'Surendraprasad Pandharinath Pandey', 'title' => 'Director', 'nameMr' => 'सुरेंद्रप्रसाद पंढरिनाथ पांडे', 'titleMr' => 'संचालक', 'image' => 'Surendraprasad-Pandey.png'],
          ['name' => 'Lunkaran Radhakishan Daaga', 'title' => 'Director', 'nameMr' => 'लुंकरण राधाकिशनजी डागा', 'titleMr' => 'संचालक', 'image' => 'Lunkaran-Daaga.png'],
          ['name' => 'Ashok Suresh Kotecha', 'title' => 'Director', 'nameMr' => 'अशोक सुरेश कोटेचा', 'titleMr' => 'संचालक', 'image' => 'Ashok-Kotecha.png'],
          ['name' => 'Mrs. Archana Vinayak Pandey', 'title' => 'Director', 'nameMr' => 'सौ. अर्चना विनायक पांडे', 'titleMr' => 'संचालिका', 'image' => 'Archana-Pandey.png'],
          ['name' => 'Gajanan Dharmchand Pawar', 'title' => 'Director', 'nameMr' => 'गजानन धर्मचंद पवार', 'titleMr' => 'संचालक', 'image' => 'Gajanan-Pawar.png'],
          ['name' => 'Anand Tukaram Hiwale', 'title' => 'Director', 'nameMr' => 'आनंद तुकाराम हिवाळे', 'titleMr' => 'संचालक', 'image' => 'Ananda-Hiwale.png'],
          ['name' => 'Mr. Gajanan Dayaram Gandhi', 'title' => 'Director', 'nameMr' => 'श्री. गजानन दायारामजी गांधी', 'titleMr' => 'संचालक', 'image' => 'Gajanan-Gandhi.png'],
          ['name' => 'Navin Govindram Mantri', 'title' => 'Director', 'nameMr' => 'नवीन गोविंदरामजी मंत्री', 'titleMr' => 'संचालक', 'image' => 'Navin-Mantri.png'],
          ['name' => 'Abhay Ashok Karwa', 'title' => 'Director', 'nameMr' => 'अभय अशोकजी करवा', 'titleMr' => 'संचालक', 'image' => 'Abhay-Karwa.png'],
          ['name' => 'Ravi Madhavrao Vattamwar', 'title' => 'Director', 'nameMr' => 'रवि माधवराव वत्तमवार', 'titleMr' => 'संचालक', 'image' => 'Ravi-Vattamwar.png'],
          ['name' => 'Vinayak Vasantraoji Aauti', 'title' => 'Director', 'nameMr' => 'विनायक वसंतरावजी औटी', 'titleMr' => 'संचालक', 'image' => 'Vinayak-Aauti.png'],
          ['name' => 'Gajanan Bhikshandas Raut', 'title' => 'Chief Executive Officer', 'nameMr' => 'गजानन भिक्षणदास राऊत', 'titleMr' => 'मुख्य कार्यकारी अधिकारी', 'image' => 'Ganjanan-Raut.png'],
        ];
      ?>
      <div class="management-grid">
        <?php foreach ($committeeMembers as $member): ?>
          <article class="management-card">
            <div class="management-card__photo-wrap">
              <img
                alt="<?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?>"
                class="management-card__photo"
                src="assets/images/management-committee/<?php echo htmlspecialchars($member['image'], ENT_QUOTES, 'UTF-8'); ?>"
              />
            </div>
            <div class="management-card__body">
              <h4 class="management-card__name" data-i18n-en="<?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?>" data-i18n-mr="<?php echo htmlspecialchars($member['nameMr'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?></h4>
              <span class="management-card__role" data-i18n-en="<?php echo htmlspecialchars($member['title'], ENT_QUOTES, 'UTF-8'); ?>" data-i18n-mr="<?php echo htmlspecialchars($member['titleMr'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($member['title'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- END: ManagementCommittee -->
  <!-- BEGIN: FourPillarSystem -->
  <section id="pillars" class="py-20 bg-slate-900 text-white overflow-hidden" data-purpose="four-pillar-system" aria-label="Four pillar system toggle">
    <div class="container mx-auto px-4 grid lg:grid-cols-3 gap-12 items-center">
      <div>
        <span class="text-emerald-500 text-xs font-bold uppercase" data-i18n="pillars.eyebrow">What We Do</span>
        <h2 class="text-3xl font-bold mt-4" data-i18n="pillars.title">We help you to grow your business Exponentially</h2>
        <div class="mt-8 space-y-4" data-pillar-buttons>
          <button class="pillar-btn is-active bg-emerald-900/50 p-4 rounded-lg flex justify-between items-center border border-emerald-800 w-full hover:bg-emerald-800 transition-colors cursor-pointer" data-pillar="1" data-pillar-title="FIRST PILLAR" data-pillar-description="WE MADE Ambika Urban STAND ON FOUR PILLARS. DEPOSITORS' MONEY IS GENERATED BY THE TRUST OF MEMBERS. MAINTAINING TRUST IS AN ISSUE SOLVED BY A TRANSPARENT SYSTEM OF WORK." data-pillar-image-url="https://images.pexels.com/photos/5816296/pexels-photo-5816296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
            <span class="font-bold">FIRST PILLAR</span>
            <span class="text-xl">×</span>
          </button>
          <button class="pillar-btn bg-slate-800 p-4 rounded-lg flex justify-between items-center w-full hover:bg-slate-700 transition-colors cursor-pointer" data-pillar="2" data-pillar-title="SECOND PILLAR" data-pillar-description="Building strong member relationships through secure deposit systems. Our second pillar ensures every member's savings are protected with utmost security and transparency for sustainable growth." data-pillar-image-url="https://images.pexels.com/photos/4386373/pexels-photo-4386373.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
            <span class="font-bold">SECOND PILLAR</span>
            <span class="text-xl">×</span>
          </button>
          <button class="pillar-btn bg-slate-800 p-4 rounded-lg flex justify-between items-center w-full hover:bg-slate-700 transition-colors cursor-pointer" data-pillar="3" data-pillar-title="THIRD PILLAR" data-pillar-description="Innovative lending solutions for members. Our third pillar provides flexible and accessible credit facilities tailored to individual and business needs for community empowerment." data-pillar-image-url="https://images.pexels.com/photos/8292854/pexels-photo-8292854.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
            <span class="font-bold">THIRD PILLAR</span>
            <span class="text-xl">×</span>
          </button>
          <button class="pillar-btn bg-slate-800 p-4 rounded-lg flex justify-between items-center w-full hover:bg-slate-700 transition-colors cursor-pointer" data-pillar="4" data-pillar-title="FOURTH PILLAR" data-pillar-description="Sustainable community development and social responsibility. Our fourth pillar supports education, healthcare, and welfare initiatives that strengthen society." data-pillar-image-url="https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
            <span class="font-bold">FOURTH PILLAR</span>
            <span class="text-xl">×</span>
          </button>
        </div>
      </div>
      <div class="relative" data-pillar-image-container>
        <img alt="Team Support" class="rounded-3xl" src="https://images.pexels.com/photos/5816296/pexels-photo-5816296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" data-pillar-img />
      </div>
      <div class="bg-emerald-950 p-8 rounded-3xl border border-emerald-800" data-pillar-card>
        <h3 class="text-emerald-500 text-sm font-bold uppercase mb-4">FOUR PILLAR SYSTEM</h3>
        <p class="text-xs text-gray-400 mb-8 leading-relaxed">
          A NORMAL COOPERATIVE STANDS ON DEPOSITORS' MONEY, BUT Ambika Urban HAS EVOLVED ITS FOUR-PILLAR SYSTEM BASED ON THE PRINCIPLE THAT "ALL THE MONEY IN THE WORLD GOES TO BANKS."
        </p>
        <div class="w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewbox="0 0 20 20">
            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
          </svg>
        </div>
        <h4 class="font-bold text-lg" data-pillar-card-title>FIRST PILLAR</h4>
        <p class="text-xs text-gray-300 mt-2 mb-6" data-pillar-card-description>WE MADE Ambika Urban STAND ON FOUR PILLARS. DEPOSITORS' MONEY IS GENERATED BY THE TRUST OF MEMBERS. MAINTAINING TRUST IS AN ISSUE SOLVED BY A TRANSPARENT SYSTEM OF WORK.</p>
        <a class="text-xs font-bold border-b border-white" href="#">Know More &gt;</a>
      </div>
    </div>
  </section>
  <!-- END: FourPillarSystem -->
  <!-- BEGIN: InnovativeProjects -->
  <section id="projects" class="innovative-slider py-20 bg-white" data-purpose="innovative-slider" aria-label="Innovative projects slider">
    <div class="container mx-auto px-4">
      <div class="innovative-slider__layout">
        <div class="innovative-slider__intro">
          <p class="text-gray-500 text-xs italic" data-i18n="projects.copy">Government-backed financial inclusion and business support schemes for members.</p>
          <h2 class="innovative-slider__title text-4xl font-bold text-primary mt-2" data-i18n="projects.title">Government <span class="text-emerald-500">Financial</span> Schemes</h2>
          <div class="innovative-slider__controls mt-8">
            <button class="innovative-slider__cta bg-gray-800 text-white px-6 py-2 rounded text-sm font-bold">See All Services <span>↗</span></button>
            <div class="innovative-slider__arrows">
              <button class="innovative-slider__arrow" type="button" data-innovative-prev aria-label="Previous projects">←</button>
              <button class="innovative-slider__arrow" type="button" data-innovative-next aria-label="Next projects">→</button>
            </div>
          </div>
        </div>
        <div class="innovative-slider__viewport">
          <div class="innovative-slider__track" data-innovative-track>
            <article class="innovative-slider__card">
              <img alt="PM Jan Dhan Yojana" class="innovative-slider__bg" src="https://images.pexels.com/photos/5816296/pexels-photo-5816296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="absolute bottom-0 inset-x-0 bg-white/90 p-4 text-center rounded-b-2xl">
                <span class="block font-bold text-primary" data-i18n="scheme.jandhan.title">PM Jan Dhan Yojana</span>
                <span class="block mt-1 text-xs text-gray-600" data-i18n="scheme.jandhan.copy">Financial inclusion initiative for citizens.</span>
              </div>
            </article>
            <article class="innovative-slider__card">
              <img alt="PM Mudra Loan" class="innovative-slider__bg" src="https://images.pexels.com/photos/8292854/pexels-photo-8292854.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="absolute bottom-0 inset-x-0 bg-white/90 p-4 text-center rounded-b-2xl">
                <span class="block font-bold text-primary" data-i18n="scheme.mudra.title">PM Mudra Loan</span>
                <span class="block mt-1 text-xs text-gray-600" data-i18n="scheme.mudra.copy">MSME and entrepreneur business loan support.</span>
              </div>
            </article>
            <article class="innovative-slider__card">
              <img alt="Digital India Banking" class="innovative-slider__bg" src="https://images.pexels.com/photos/6969933/pexels-photo-6969933.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200" />
              <div class="absolute bottom-0 inset-x-0 bg-white/90 p-4 text-center rounded-b-2xl">
                <span class="block font-bold text-primary" data-i18n="scheme.digital.title">Digital India Banking</span>
                <span class="block mt-1 text-xs text-gray-600" data-i18n="scheme.digital.copy">Digital banking and UPI financial ecosystem.</span>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: InnovativeProjects -->
  <!-- BEGIN: HistoryVideoSection -->
  <section class="history-video-section relative min-h-[500px] md:h-[500px] py-12 md:py-0 flex items-center justify-center">
    <img alt="History" class="absolute inset-0 w-full h-full object-cover" src="https://images.pexels.com/photos/3184302/pexels-photo-3184302.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" />
    <div class="absolute inset-0 bg-primary/40"></div>
    <div class="relative z-10 container mx-auto px-4 grid md:grid-cols-3 gap-8 items-center">
      <div class="text-white">
        <span class="text-xs font-bold uppercase tracking-widest text-accent">TRUSTED BANKING</span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-4 leading-tight">Ambika Urban history <span class="italic font-light">Promo video</span></h2>
        <div class="flex items-center mt-8 space-x-4">
          <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewbox="0 0 20 20">
              <path clip-rule="evenodd" d="M11.3 1.047a1 1 0 01.897.95V4.69l1.48-1.479a1 1 0 011.414 1.414l-1.479 1.48h2.69a1 1 0 01.95.897 1 1 0 01-.95 1.103h-2.69l1.479 1.48a1 1 0 01-1.414 1.414l-1.48-1.479v2.69a1 1 0 01-1.103.95 1 1 0 01-.897-.95v-2.69l-1.48 1.479a1 1 0 01-1.414-1.414l1.479-1.48h-2.69a1 1 0 01-.95-.897 1 1 0 01.95-1.103h2.69l-1.479-1.48a1 1 0 011.414-1.414l1.48 1.479v-2.69a1 1 0 01.897-.95zM10 10a1 1 0 011 1v2.586l.707-.707a1 1 0 111.414 1.414l-2.414 2.414a1 1 0 01-1.414 0l-2.414-2.414a1 1 0 111.414-1.414l.707.707V11a1 1 0 011-1z" fill-rule="evenodd"></path>
            </svg>
          </div>
          <p class="text-sm font-semibold">First Class Smart Banking Experience</p>
        </div>
      </div>
      <div class="flex justify-center">
        <button class="video-play-btn w-24 h-24 bg-white/20 rounded-full flex items-center justify-center border-4 border-white/50 hover:scale-110 transition-transform" data-video-url="https://www.youtube.com/embed/dQw4w9WgXcQ" type="button" aria-label="Play video">
          <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-2xl">
            <svg class="w-8 h-8 text-primary ml-1" fill="currentColor" viewbox="0 0 20 20">
              <path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path>
            </svg>
          </div>
        </button>
      </div>
      <div class="text-white text-left md:text-right">
        <p class="text-sm leading-relaxed">We are at the forefront of revolutionizing the financial landscape through cutting edge fintech solutions our mission is to bridge the gap between traditional banking.</p>
      </div>
    </div>
  </section>
  <!-- END: HistoryVideoSection -->
  <!-- BEGIN: MobileAppPromo -->
  <section id="app" class="app-promo py-24 relative overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="app-promo__layout">
        <div class="app-promo__visual">
          <div class="app-promo__shape"></div>
          <div class="app-promo__star" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 2.5C12.5 7.6 16.4 11.5 21.5 12C16.4 12.5 12.5 16.4 12 21.5C11.5 16.4 7.6 12.5 2.5 12C7.6 11.5 11.5 7.6 12 2.5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
            </svg>
          </div>
          <img alt="Mobile banking payment" class="app-promo__phone" src="https://images.pexels.com/photos/6969933/pexels-photo-6969933.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" />
          <div class="app-promo__rupee" aria-hidden="true">
            <span class="app-promo__rupee-symbol">₹</span>
          </div>
        </div>
        <div class="app-promo__content">
          <span class="app-promo__eyebrow" data-i18n="app.eyebrow">DOWNLOAD OUR APPS</span>
          <h2 class="app-promo__title" data-i18n="app.title">Banking for All, Payments for Today</h2>
          <p class="app-promo__copy" data-i18n="app.copy">Offering everything from digital banking and payments to investments and cooperative services, BU brings modern finance to every member.</p>
          <img alt="Google Play Store" class="h-14" src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" />
        </div>
      </div>
    </div>
  </section>
  <!-- END: MobileAppPromo -->
  <!-- BEGIN: BankingPartners -->
  <section class="partners-band py-16 overflow-hidden">
    <div class="partners-band__marquee" aria-hidden="true">
      <p class="partners-band__line">Ambika Urban Cooperative Credit Society Ambika Urban Cooperative Credit Society</p>
      <p class="partners-band__line partners-band__line--offset">Ambika Urban Cooperative Credit Society Ambika Urban Cooperative Credit Society</p>
    </div>
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <p class="partners-band__eyebrow" data-i18n="partners.eyebrow">TRUSTED BY LEADING BANKS AND FINANCIAL INSTITUTIONS</p>
      </div>
      <div class="partners-band__logos">
        <img alt="YES Bank" src="https://dummyimage.com/360x120/ffffff/005878.png&amp;text=YES+BANK" />
        <img alt="Central Bank of India" src="https://dummyimage.com/360x120/ffffff/005878.png&amp;text=CENTRAL+BANK" />
        <img alt="SBI" src="https://dummyimage.com/360x120/ffffff/005878.png&amp;text=SBI" />
        <img alt="ICICI Bank" src="https://dummyimage.com/360x120/ffffff/005878.png&amp;text=ICICI+BANK" />
      </div>
    </div>
  </section>
  <!-- END: BankingPartners -->
  <!-- BEGIN: AwardsGallery -->
  <section class="py-20 bg-light-blue">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full mb-4" data-i18n="awards.badge">★ AWARD WINNING</span>
        <h2 class="text-3xl font-bold text-primary" data-i18n="awards.title">Ambika Urban got most prestigious Awards</h2>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <img alt="Award 1" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/32660518/pexels-photo-32660518.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 2" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/7005501/pexels-photo-7005501.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 3" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/35864398/pexels-photo-35864398.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 4" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/35864396/pexels-photo-35864396.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 5" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/32660518/pexels-photo-32660518.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 6" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/7005501/pexels-photo-7005501.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 7" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/35864398/pexels-photo-35864398.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
        <img alt="Award 8" class="w-full aspect-[4/3] object-cover rounded-lg shadow-md grayscale hover:grayscale-0 transition-all" src="https://images.pexels.com/photos/35864396/pexels-photo-35864396.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700" />
      </div>
    </div>
  </section>
  <!-- END: AwardsGallery -->
  <!-- BEGIN: ServiceFeatures -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-end mb-16">
        <div>
          <span class="text-xs font-bold text-emerald-500 uppercase" data-i18n="features.eyebrow">Features</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mt-4" data-i18n="features.title">Get Started And Enjoy Full Service Features</h2>
        </div>
        <p class="text-gray-500 text-sm" data-i18n="features.copy">By integrating advanced technology with financial expertise we provide a comprehensive suite of services that cater to both individuals and businesses.</p>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
        <div class="text-center group">
          <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-transparent group-hover:border-emerald-500 transition-colors">
            <img alt="Mobile Banking" class="w-full h-full rounded-full object-cover" src="https://images.pexels.com/photos/6969933/pexels-photo-6969933.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=500" />
          </div>
          <p class="text-xs font-bold uppercase" data-i18n="features.mobile">MOBILE BANKING</p>
        </div>
        <div class="text-center group">
          <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-transparent group-hover:border-emerald-500 transition-colors">
            <img alt="Net Banking" class="w-full h-full rounded-full object-cover" src="https://images.pexels.com/photos/5816296/pexels-photo-5816296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=500" />
          </div>
          <p class="text-xs font-bold uppercase" data-i18n="features.net">NET BANKING</p>
        </div>
        <div class="text-center group">
          <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-transparent group-hover:border-emerald-500 transition-colors">
            <img alt="UPI/QR" class="w-full h-full rounded-full object-cover" src="https://images.pexels.com/photos/6406691/pexels-photo-6406691.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=500" />
          </div>
          <p class="text-xs font-bold uppercase" data-i18n="features.upi">UPI/QR Code</p>
        </div>
        <div class="text-center group">
          <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-transparent group-hover:border-emerald-500 transition-colors">
            <img alt="RTGS" class="w-full h-full rounded-full object-cover" src="https://images.pexels.com/photos/210607/pexels-photo-210607.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=500" />
          </div>
          <p class="text-xs font-bold uppercase" data-i18n="features.rtgs">RTGS/IMPS/NEFT</p>
        </div>
        <div class="text-center group">
          <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-transparent group-hover:border-emerald-500 transition-colors">
            <img alt="Mobile Van" class="w-full h-full rounded-full object-cover" src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=500" />
          </div>
          <p class="text-xs font-bold uppercase" data-i18n="features.van">MOBILE VAN</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: ServiceFeatures -->
  <!-- BEGIN: InterestRateBar -->
  <section class="bg-primary text-white py-6">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
      <div class="mb-4 md:mb-0">
        <p class="text-xs font-bold text-blue-300 uppercase" data-i18n="rates.eyebrow">Get &amp; Update</p>
        <h3 class="text-xl font-bold" data-i18n="rates.title">Explore Interest <span class="text-emerald-400 italic">Rates</span></h3>
      </div>
      <p class="text-xs text-blue-200 max-w-md mb-4 md:mb-0" data-i18n="rates.copy">Be in updates with the latest Fixed Deposits and Loan Interest rates. Rates are changing without any prior notifications.</p>
      <button class="bg-blue-600 px-6 py-2 rounded font-bold text-xs hover:bg-blue-700" data-i18n="rates.cta">View Details &gt;</button>
    </div>
  </section>
  <!-- END: InterestRateBar -->
  <!-- BEGIN: MainFooter -->
  <footer id="contact" class="bg-slate-900 text-white pt-20 pb-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-start border-b border-slate-800 pb-12 mb-12">
        <div class="mb-8 md:mb-0">
          <p class="text-emerald-500 text-xs font-bold uppercase mb-2" data-i18n="footer.preheader">GET IN TOUCH</p>
          <h2 class="text-4xl font-bold" data-i18n="footer.title">Stay Connected Anywhere</h2>
        </div>
        <div class="flex space-x-4">
          <button class="bg-emerald-500 text-white px-8 py-2 rounded font-bold text-sm" data-i18n="footer.cta1">Get Started &gt;</button>
          <button class="bg-transparent border border-emerald-500 text-emerald-500 px-8 py-2 rounded font-bold text-sm" data-i18n="footer.cta2">Contact Us &gt;</button>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
        <div>
          <img alt="Logo" class="mb-6 h-10 grayscale brightness-200" src="assets/images/ambika_urban_logo.png" />
          <p class="text-white font-semibold text-sm mb-1">Shri Ambika Urban Multistate Co-op. Credit Society Ltd.</p>
          <p class="text-slate-400 text-xs mb-4">Reg. No. 492 &bull; Chikhli, Buldana (Maharashtra) 443 201</p>
          <p class="text-slate-400 leading-relaxed mb-6" data-i18n="footer.mission">Our mission is to bridge the gap between traditional banking and modern technology and seamless financial services.</p>
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/ambikaurban" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-slate-800 hover:bg-emerald-500 rounded-full flex items-center justify-center text-sm text-white transition-colors" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/ambikaurban" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-slate-800 hover:bg-emerald-500 rounded-full flex items-center justify-center text-sm text-white transition-colors" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/ambikaurban" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-slate-800 hover:bg-emerald-500 rounded-full flex items-center justify-center text-sm text-white transition-colors" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@ambikaurban" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-slate-800 hover:bg-emerald-500 rounded-full flex items-center justify-center text-sm text-white transition-colors" title="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/ambikaurban" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-slate-800 hover:bg-emerald-500 rounded-full flex items-center justify-center text-sm text-white transition-colors" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-6 underline decoration-emerald-500 underline-offset-8 decoration-2" data-i18n="footer.quicklinks">Quick Links</h4>
          <ul class="space-y-4 text-slate-400">
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.link.rates">Interest Rates</a></li>
            <li><a class="hover:text-white transition-colors" href="#management" data-i18n="footer.link.contact">Leadership Team</a></li>
            <li><a class="hover:text-white transition-colors" href="#" data-i18n="footer.link.reports">Complaint Redressal</a></li>
            <li><a class="hover:text-white transition-colors" href="#" data-i18n="footer.link.faq">FAQs</a></li>
            <li><a class="hover:text-white transition-colors" href="#" data-i18n="footer.link.rbi">RBI Guidelines</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-6 underline decoration-emerald-500 underline-offset-8 decoration-2" data-i18n="footer.services">Our Services</h4>
          <ul class="space-y-4 text-slate-400">
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.svc.gold">Home Mortgage Loan</a></li>
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.svc.education">Educational Loan</a></li>
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.svc.money">Money Transfer</a></li>
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.svc.vehicle">Vehicle Loan</a></li>
            <li><a class="hover:text-white transition-colors" href="#services" data-i18n="footer.svc.deposit">Fixed Deposits</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-6 underline decoration-emerald-500 underline-offset-8 decoration-2" data-i18n="footer.touch">Get In Touch</h4>
          <div class="space-y-4 text-slate-400">
            <div class="flex items-start space-x-3">
              <span class="text-emerald-500">📍</span>
              <span>Chikhli, Dist. Buldana (Maharashtra) 443 201</span>
            </div>
            <div class="flex items-start space-x-3">
              <span class="text-emerald-500">✉</span>
              <span>auschikhli@gmail.com</span>
            </div>
            <div class="flex items-start space-x-3">
              <span class="text-emerald-500">🌐</span>
              <span>www.ambikaurban.com</span>
            </div>
            <div class="flex items-start space-x-3">
              <span class="text-emerald-500">🪪</span>
              <span>Reg. No. 492</span>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-20 pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
        <p>© 2025 Shri Ambika Urban Multistate Co-op. Credit Society Ltd., Chikhli. All rights reserved.</p>
        <p>Developed by <span class="text-emerald-500">AMFINTECH PRIVATE LIMITED</span></p>
      </div>
    </div>
  </footer>
  <!-- END: MainFooter -->
  <script src="assets/js/main.js" defer></script>
</body>

</html>
