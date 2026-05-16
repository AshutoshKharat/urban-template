document.addEventListener('DOMContentLoaded', function () {
  var slider = document.querySelector('[data-purpose="hero-slider"]');
  var statsTrack = document.querySelector('[data-stats-track]');
  var statsSlider = document.querySelector('[data-purpose="stats-slider"]');
  var servicesTrack = document.querySelector('[data-services-track]');
  var servicesPrev = document.querySelector('[data-services-prev]');
  var servicesNext = document.querySelector('[data-services-next]');
  var navLinks = Array.prototype.slice.call(document.querySelectorAll('.site-nav__link[href^="#"]'));
  var langButtons = Array.prototype.slice.call(document.querySelectorAll('[data-lang-switch]'));
  var translations = {
    en: {
      'nav.home': 'Home',
      'nav.about': 'About',
      'nav.services': 'Services',
      'nav.management': 'Management',
      'nav.projects': 'Projects',
      'nav.contact': 'Contact',
      'about.eyebrow': 'ABOUT US',
      'about.title': 'We are here to serve with <span class="text-accent italic">38+ years of experience</span>',
      'about.copy': 'Ambika Urban was established in 1986 with a mere capital of Rs. 12,000/- with 72 members initially. Today, we have 475+ Branches in 4 states of India. Furthermore, we have 300+ warehouses at various locations.',
      'stats.branches': 'Branches',
      'stats.customers': 'Customers',
      'stats.deposits': 'Deposits',
      'stats.loans': 'Loans',
      'stats.branch.tile1': 'Branch',
      'stats.branch.tile2': 'Coverage',
      'stats.branch.tile3': 'Network',
      'stats.customer.tile1': 'Customers',
      'stats.customer.tile2': 'Community',
      'stats.customer.tile3': 'Trust',
      'stats.deposit.tile1': 'Deposits',
      'stats.deposit.tile2': 'Savings',
      'stats.deposit.tile3': 'Growth',
      'stats.loan.tile1': 'Loans',
      'stats.loan.tile2': 'Flexible',
      'stats.loan.tile3': 'Support',
      'services.eyebrow': 'OUR SERVICES',
      'services.title': 'We run all <span class="text-teal-500">kinds of services</span> in the form of',
      'services.copy': 'With a strong portfolio of services ranging from member savings and affordable lending to community development and financial inclusion',
      'service.home.title': 'Home Loan',
      'service.home.copy': 'Affordable home loans with low interest rates.',
      'service.gold.title': 'Gold Loan',
      'service.gold.copy': 'Instant gold loans with secure approval process.',
      'service.mobile.title': 'Mobile Banking',
      'service.mobile.copy': 'Bank anytime with digital banking facilities.',
      'service.upi.title': 'UPI Banking',
      'service.upi.copy': 'Fast and secure QR & UPI payments.',
      'service.vehicle.title': 'Vehicle Loan',
      'service.vehicle.copy': 'Easy finance for cars and commercial vehicles.',
      'service.transfer.title': 'Money Transfer',
      'service.transfer.copy': 'RTGS, IMPS and NEFT available 24x7.',
      'process.eyebrow': 'WITH PROFESSIONAL MANAGEMENT',
      'process.title': 'We deal with the aspects of<br />professional <span class="text-emerald-500 italic">Banking Services</span>',
      'process.planning.title': 'Planning',
      'process.planning.copy': 'Our commitment to security, transparency, and customer centricity ensures that every transaction is safe and reliable.',
      'process.analysis.title': 'Analysis',
      'process.analysis.copy': 'Through in-depth analysis, we maintain transparency and accuracy, ensuring every transaction is trustworthy and seamless.',
      'process.implementation.title': 'Implementation',
      'process.implementation.copy': 'With strong systems and security, our implementation process guarantees that every transaction is efficient and dependable.',
      'management.eyebrow': 'Management Committee',
      'management.title': 'Our Leadership Team',
      'management.copy': "Experienced guidance behind Ambika Urban's member-first growth and trusted financial service.",
      'management.role': 'Committee Member',
      'pillars.eyebrow': 'What We Do',
      'pillars.title': 'We help you to grow your business Exponentially',
      'projects.copy': 'Government-backed financial inclusion and business support schemes for members.',
      'projects.title': 'Government <span class="text-emerald-500">Financial</span> Schemes',
      'scheme.jandhan.title': 'PM Jan Dhan Yojana',
      'scheme.jandhan.copy': 'Financial inclusion initiative for citizens.',
      'scheme.mudra.title': 'PM Mudra Loan',
      'scheme.mudra.copy': 'MSME and entrepreneur business loan support.',
      'scheme.digital.title': 'Digital India Banking',
      'scheme.digital.copy': 'Digital banking and UPI financial ecosystem.',
      'app.eyebrow': 'DOWNLOAD OUR APPS',
      'app.title': 'Banking for All, Payments for Today',
      'app.copy': 'Offering everything from digital banking and payments to investments and cooperative services, BU brings modern finance to every member.',
      'partners.eyebrow': 'TRUSTED BY LEADING BANKS AND FINANCIAL INSTITUTIONS',
      'awards.badge': '★ AWARD WINNING',
      'awards.title': 'Ambika Urban got most prestigious Awards',
      'features.eyebrow': 'Features',
      'features.title': 'Get Started And Enjoy Full Service Features',
      'features.copy': 'By integrating advanced technology with financial expertise we provide a comprehensive suite of services that cater to both individuals and businesses.',
      'features.mobile': 'MOBILE BANKING',
      'features.net': 'NET BANKING',
      'features.upi': 'UPI/QR Code',
      'features.rtgs': 'RTGS/IMPS/NEFT',
      'features.van': 'MOBILE VAN',
      'rates.eyebrow': 'Get & Update',
      'rates.title': 'Explore Interest <span class="text-emerald-400 italic">Rates</span>',
      'rates.copy': 'Be in updates with the latest Fixed Deposits and Loan Interest rates. Rates are changing without any prior notifications.',
      'rates.cta': 'View Details >',
      'footer.preheader': 'GET IN TOUCH',
      'footer.title': 'Stay Connected Anywhere',
      'footer.cta1': 'Get Started >',
      'footer.cta2': 'Contact Us >',
      'footer.mission': 'Our mission is to bridge the gap between traditional banking and modern technology and seamless financial services.',
      'footer.quicklinks': 'Quick Links',
      'footer.link.rates': 'Interest Rate Chart',
      'footer.link.contact': 'Contact Branch',
      'footer.link.reports': 'Complaint Redressal',
      'footer.link.faq': 'FAQs',
      'footer.link.rbi': 'RBI Guidelines',
      'footer.svc.education': 'Educational Loan',
      'footer.svc.money': 'Money Transfer',
      'footer.svc.vehicle': 'Vehicle Loan',
      'footer.svc.deposit': 'Fixed Deposits',
      'footer.services': 'Our Services',
      'footer.svc.gold': 'Gold/Silver Loan',
      'footer.svc.personal': 'Personal Loan',
      'footer.svc.rtgs': 'RTGS/NEFT/DD',
      'footer.touch': 'Get In Touch'
    },
    mr: {
      'nav.home': 'मुख्यपृष्ठ',
      'nav.about': 'आमच्याबद्दल',
      'nav.services': 'सेवा',
      'nav.management': 'व्यवस्थापन',
      'nav.projects': 'प्रकल्प',
      'nav.contact': 'संपर्क',
      'about.eyebrow': 'आमच्याबद्दल',
      'about.title': '<span class="text-accent italic">३८+ वर्षांच्या अनुभवासह</span> आम्ही सेवेसाठी तत्पर',
      'about.copy': 'अंबिका अर्बनची स्थापना १९८६ मध्ये केवळ रु. १२,०००/- भांडवल आणि ७२ सभासदांसह झाली. आज संस्था कर्ज, ठेवी आणि आधुनिक वित्तीय सेवांद्वारे सभासदांची सेवा करते.',
      'stats.branches': 'शाखा',
      'stats.customers': 'ग्राहक',
      'stats.deposits': 'ठेवी',
      'stats.loans': 'कर्जे',
      'stats.branch.tile1': 'शाखा',
      'stats.branch.tile2': 'व्याप्ती',
      'stats.branch.tile3': 'जाळे',
      'stats.customer.tile1': 'ग्राहक',
      'stats.customer.tile2': 'समुदाय',
      'stats.customer.tile3': 'विश्वास',
      'stats.deposit.tile1': 'ठेवी',
      'stats.deposit.tile2': 'बचत',
      'stats.deposit.tile3': 'वाढ',
      'stats.loan.tile1': 'कर्जे',
      'stats.loan.tile2': 'लवचिक',
      'stats.loan.tile3': 'सहाय्य',
      'services.eyebrow': 'आमच्या सेवा',
      'services.title': 'आम्ही विविध <span class="text-teal-500">वित्तीय सेवा</span> पुरवतो',
      'services.copy': 'सभासद बचत, परवडणारे कर्ज, डिजिटल बँकिंग आणि आर्थिक समावेशन यांसाठी मजबूत सेवा पोर्टफोलिओ.',
      'service.home.title': 'गृहकर्ज',
      'service.home.copy': 'कमी व्याजदरात परवडणारे गृहकर्ज.',
      'service.gold.title': 'सुवर्ण कर्ज',
      'service.gold.copy': 'सुरक्षित मंजुरी प्रक्रियेसह तत्काळ सुवर्ण कर्ज.',
      'service.mobile.title': 'मोबाईल बँकिंग',
      'service.mobile.copy': 'डिजिटल बँकिंग सुविधांसह कधीही बँकिंग.',
      'service.upi.title': 'UPI बँकिंग',
      'service.upi.copy': 'जलद आणि सुरक्षित QR व UPI पेमेंट्स.',
      'service.vehicle.title': 'वाहन कर्ज',
      'service.vehicle.copy': 'कार आणि व्यावसायिक वाहनांसाठी सोपी वित्त सुविधा.',
      'service.transfer.title': 'मनी ट्रान्सफर',
      'service.transfer.copy': 'RTGS, IMPS आणि NEFT सुविधा २४x७ उपलब्ध.',
      'process.eyebrow': 'व्यावसायिक व्यवस्थापनासह',
      'process.title': 'व्यावसायिक <span class="text-emerald-500 italic">बँकिंग सेवांचे</span><br />महत्त्वाचे पैलू',
      'process.planning.title': 'नियोजन',
      'process.planning.copy': 'सुरक्षा, पारदर्शकता आणि ग्राहक-केंद्रिततेमुळे प्रत्येक व्यवहार सुरक्षित आणि विश्वासार्ह ठरतो.',
      'process.analysis.title': 'विश्लेषण',
      'process.analysis.copy': 'सखोल विश्लेषणाद्वारे आम्ही पारदर्शकता आणि अचूकता राखतो, त्यामुळे व्यवहार सुलभ आणि विश्वासार्ह होतात.',
      'process.implementation.title': 'अंमलबजावणी',
      'process.implementation.copy': 'मजबूत प्रणाली आणि सुरक्षेमुळे प्रत्येक व्यवहार कार्यक्षम आणि विश्वासार्ह राहतो.',
      'management.eyebrow': 'व्यवस्थापन समिती',
      'management.title': 'आमची नेतृत्व टीम',
      'management.copy': 'अंबिका अर्बनच्या सभासद-केंद्रित वाढीसाठी अनुभवी मार्गदर्शन.',
      'management.role': 'समिती सदस्य',
      'pillars.eyebrow': 'आमचे कार्य',
      'pillars.title': 'आपल्या व्यवसायाच्या वाढीसाठी मजबूत आधार',
      'projects.copy': 'सभासदांसाठी शासनाच्या आर्थिक समावेशन आणि व्यवसाय सहाय्य योजना.',
      'projects.title': 'शासकीय <span class="text-emerald-500">आर्थिक</span> योजना',
      'scheme.jandhan.title': 'प्रधानमंत्री जन धन योजना',
      'scheme.jandhan.copy': 'नागरिकांसाठी आर्थिक समावेशन उपक्रम.',
      'scheme.mudra.title': 'प्रधानमंत्री मुद्रा कर्ज',
      'scheme.mudra.copy': 'MSME आणि उद्योजकांसाठी व्यवसाय कर्ज सहाय्य.',
      'scheme.digital.title': 'डिजिटल इंडिया बँकिंग',
      'scheme.digital.copy': 'डिजिटल बँकिंग आणि UPI आर्थिक सुविधा.',
      'app.eyebrow': 'आमचे अॅप डाउनलोड करा',
      'app.title': 'सर्वांसाठी बँकिंग, आजच्या गरजांसाठी पेमेंट्स',
      'app.copy': 'डिजिटल बँकिंग, पेमेंट्स, गुंतवणूक आणि सहकारी सेवांद्वारे प्रत्येक सभासदापर्यंत आधुनिक वित्त सेवा.',
      'partners.eyebrow': 'अग्रणी बँका आणि वित्तीय संस्थांचा विश्वास',
      'awards.badge': '★ पुरस्कार विजेता',
      'awards.title': 'अंबिका अर्बनला सर्वात प्रतिष्ठित पुरस्कार मिळाले',
      'features.eyebrow': 'वैशिष्ट्ये',
      'features.title': 'सुरुवात करा आणि सर्व सेवा वैशिष्ट्यांचा आनंद घ्या',
      'features.copy': 'प्रगत तंत्रज्ञान आणि आर्थिक कौशल्य एकत्र करून आम्ही व्यक्ती आणि व्यवसाय दोघांसाठी सर्वसमावेशक सेवा पुरवतो.',
      'features.mobile': 'मोबाईल बँकिंग',
      'features.net': 'नेट बँकिंग',
      'features.upi': 'UPI/QR कोड',
      'features.rtgs': 'RTGS/IMPS/NEFT',
      'features.van': 'मोबाईल व्हँन',
      'rates.eyebrow': 'माहिती मिळवा आणि अद्ययावत राहा',
      'rates.title': 'व्याज <span class="text-emerald-400 italic">दर</span> जाणून घ्या',
      'rates.copy': 'नवीनतम मुदत ठेवी आणि कर्ज व्याजदरांसाठी अद्ययावत राहा. दर पूर्वसूचनाशिवाय बदलू शकतात.',
      'rates.cta': 'तपशिल पहा >',
      'footer.preheader': 'संपर्क करा',
      'footer.title': 'कुठूनही जोडलेले राहा',
      'footer.cta1': 'सुरुवात करा >',
      'footer.cta2': 'आमहाला संपर्क करा >',
      'footer.mission': 'आम्ही पारंपारिक बँकिंग आणि आधुनिक तंत्रज्ञान यांच्यातील दरी भरून सुलभ वित्तीय सेवा पुरवतो.',
      'footer.quicklinks': 'द्रुत दुवे',
      'footer.link.rates': 'व्याजदर तक्ता',
      'footer.link.contact': 'शाखेशी संपर्क करा',
      'footer.link.reports': 'उत्तरदायित्व निवारण',
      'footer.link.faq': 'सामान्य प्रश्न',
      'footer.link.rbi': 'RBI मार्गदर्शन',
      'footer.svc.education': 'शिक्षा कर्ज',
      'footer.svc.money': 'मनी ट्रान्सफर',
      'footer.svc.vehicle': 'वाहन कर्ज',
      'footer.svc.deposit': 'निश्चित ठेवी',
      'footer.services': 'आमच्या सेवा',
      'footer.svc.gold': 'सोने/चांदी कर्ज',
      'footer.svc.personal': 'वैयक्तिक कर्ज',
      'footer.svc.rtgs': 'RTGS/NEFT/DD',
      'footer.touch': 'संपर्कात राहा'
    }
  };

  function getHeaderOffset() {
    var header = document.querySelector('.site-header');
    return header ? header.getBoundingClientRect().height + 10 : 0;
  }

  navLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      var targetId = link.getAttribute('href');
      var target = targetId ? document.querySelector(targetId) : null;

      if (!target) {
        return;
      }

      event.preventDefault();

      // Close mobile nav on link click
      var siteNav = document.getElementById('site-nav');
      var hamburgerBtn = document.getElementById('hamburger-btn');
      if (siteNav && siteNav.classList.contains('is-open')) {
        siteNav.classList.remove('is-open');
        hamburgerBtn && hamburgerBtn.classList.remove('is-open');
        hamburgerBtn && hamburgerBtn.setAttribute('aria-expanded', 'false');
      }

      window.scrollTo({
        top: target.getBoundingClientRect().top + window.pageYOffset - getHeaderOffset(),
        behavior: 'smooth'
      });
    });
  });

  // Hamburger toggle
  var hamburgerBtn = document.getElementById('hamburger-btn');
  var siteNav = document.getElementById('site-nav');
  if (hamburgerBtn && siteNav) {
    hamburgerBtn.addEventListener('click', function () {
      var isOpen = siteNav.classList.toggle('is-open');
      hamburgerBtn.classList.toggle('is-open', isOpen);
      hamburgerBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }

  function setActiveNav() {
    if (!navLinks.length) {
      return;
    }

    var current = navLinks[0];
    var offset = getHeaderOffset() + 20;

    navLinks.forEach(function (link) {
      var section = document.querySelector(link.getAttribute('href'));

      if (section && section.getBoundingClientRect().top <= offset) {
        current = link;
      }
    });

    navLinks.forEach(function (link) {
      link.classList.toggle('is-active', link === current);
    });
  }

  function applyLanguage(lang) {
    var pack = translations[lang] || translations.en;

    document.documentElement.lang = lang === 'mr' ? 'mr' : 'en';
    document.querySelectorAll('[data-i18n]').forEach(function (node) {
      var key = node.getAttribute('data-i18n');

      if (pack[key]) {
        node.innerHTML = pack[key];
      }
    });

    document.querySelectorAll('[data-i18n-en][data-i18n-mr]').forEach(function (node) {
      node.textContent = node.getAttribute(lang === 'mr' ? 'data-i18n-mr' : 'data-i18n-en');
    });

    document.querySelectorAll('.services-slider__readmore').forEach(function (node) {
      node.innerHTML = lang === 'mr' ? 'अधिक वाचा ↗' : 'Read More ↗';
    });

    langButtons.forEach(function (button) {
      button.classList.toggle('is-active', button.getAttribute('data-lang-switch') === lang);
    });

    try {
      window.localStorage.setItem('ambikaLang', lang);
    } catch (error) {}
  }

  langButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      applyLanguage(button.getAttribute('data-lang-switch'));
    });
  });

  try {
    applyLanguage(window.localStorage.getItem('ambikaLang') || 'en');
  } catch (error) {
    applyLanguage('en');
  }

  window.addEventListener('scroll', function () {
    window.requestAnimationFrame(setActiveNav);
  });
  setActiveNav();

  if (slider) {
    var slides = Array.prototype.slice.call(slider.querySelectorAll('[data-slide]'));

    if (slides.length >= 2) {
      var index = 0;

      function showSlide(nextIndex) {
        slides[index].classList.remove('is-active');
        index = nextIndex;
        slides[index].classList.add('is-active');
      }

      window.setInterval(function () {
        var nextIndex = (index + 1) % slides.length;
        showSlide(nextIndex);
      }, 4500);
    }
  }

  if (statsTrack && statsSlider) {
    var originalCards = Array.prototype.slice.call(statsTrack.children);
    originalCards.forEach(function (card) {
      statsTrack.appendChild(card.cloneNode(true));
    });

    var paused = false;
    var position = 0;
    var speed = 0.5;

    statsSlider.addEventListener('mouseenter', function () {
      paused = true;
    });

    statsSlider.addEventListener('mouseleave', function () {
      paused = false;
    });

    function animateStats() {
      if (!paused) {
        position += speed;
        var halfWidth = statsTrack.scrollWidth / 2;

        if (position >= halfWidth) {
          position = 0;
        }

        statsTrack.style.transform = 'translateX(' + (-position) + 'px)';
      }

      window.requestAnimationFrame(animateStats);
    }

    window.requestAnimationFrame(animateStats);
  }

  if (!servicesTrack) {
    return;
  }

  var serviceCards = Array.prototype.slice.call(servicesTrack.querySelectorAll('.services-slider__card'));

  function setActiveServiceCard() {
    if (!serviceCards.length) {
      return;
    }

    var trackRect = servicesTrack.getBoundingClientRect();
    var centerX = trackRect.left + trackRect.width / 2;
    var closestCard = serviceCards[0];
    var closestDistance = Number.POSITIVE_INFINITY;

    serviceCards.forEach(function (card) {
      var cardRect = card.getBoundingClientRect();
      var cardCenter = cardRect.left + cardRect.width / 2;
      var distance = Math.abs(centerX - cardCenter);

      if (distance < closestDistance) {
        closestDistance = distance;
        closestCard = card;
      }
    });

    serviceCards.forEach(function (card) {
      card.classList.toggle('is-active', card === closestCard);
    });
  }

  function scrollServices(direction) {
    var card = servicesTrack.querySelector('.services-slider__card');
    var cardWidth = card ? card.getBoundingClientRect().width : 0;
    var gap = 16;
    servicesTrack.scrollBy({
      left: direction * (cardWidth + gap),
      behavior: 'smooth'
    });
    window.setTimeout(setActiveServiceCard, 180);
  }

  if (servicesPrev) {
    servicesPrev.addEventListener('click', function () {
      scrollServices(-1);
    });
  }

  if (servicesNext) {
    servicesNext.addEventListener('click', function () {
      scrollServices(1);
    });
  }

  servicesTrack.addEventListener('scroll', function () {
    window.requestAnimationFrame(setActiveServiceCard);
  });

  window.addEventListener('resize', setActiveServiceCard);
  setActiveServiceCard();

  // Four-pillar toggle system
  var pillarButtons = document.querySelectorAll('[data-pillar]');
  var pillarCardTitle = document.querySelector('[data-pillar-card-title]');
  var pillarCardDescription = document.querySelector('[data-pillar-card-description]');
  var pillarImage = document.querySelector('[data-pillar-img]');

  if (pillarButtons.length > 0 && pillarCardTitle && pillarCardDescription && pillarImage) {
    pillarButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var title = btn.getAttribute('data-pillar-title');
        var description = btn.getAttribute('data-pillar-description');
        var image = btn.getAttribute('data-pillar-image-url');

        // Update card content
        pillarCardTitle.textContent = title;
        pillarCardDescription.textContent = description;
        if (image) {
          pillarImage.src = image;
        }

        // Remove active class from all buttons
        pillarButtons.forEach(function (b) {
          b.classList.remove('is-active');
          b.classList.remove('bg-emerald-900/50');
          b.classList.add('bg-slate-800');
          b.classList.remove('border-emerald-800');
        });

        // Add active class to clicked button
        btn.classList.add('is-active');
        btn.classList.add('bg-emerald-900/50');
        btn.classList.remove('bg-slate-800');
        btn.classList.add('border-emerald-800');
      });
    });
  }

  // Innovative projects slider
  var innovativeTrack = document.querySelector('[data-innovative-track]');
  var innovativePrev = document.querySelector('[data-innovative-prev]');
  var innovativeNext = document.querySelector('[data-innovative-next]');

  if (innovativeTrack && innovativePrev && innovativeNext) {
    function scrollInnovative(direction) {
      var card = innovativeTrack.querySelector('.innovative-slider__card');
      var cardWidth = card ? card.getBoundingClientRect().width : 0;
      var gap = 16;
      var cardsToScroll = 2;
      innovativeTrack.scrollBy({
        left: direction * (cardWidth + gap) * cardsToScroll,
        behavior: 'smooth'
      });
    }

    innovativePrev.addEventListener('click', function () {
      scrollInnovative(-1);
    });

    innovativeNext.addEventListener('click', function () {
      scrollInnovative(1);
    });
  }

  // Video play button handler
  var videoPlayBtn = document.querySelector('.video-play-btn');
  if (videoPlayBtn) {
    videoPlayBtn.addEventListener('click', function (e) {
      e.preventDefault();
      var videoUrl = videoPlayBtn.getAttribute('data-video-url');
      if (videoUrl) {
        window.open(videoUrl, '_blank');
      }
    });
  }
});
