document.addEventListener('DOMContentLoaded', function () {
  var slider = document.querySelector('[data-purpose="hero-slider"]');
  var statsTrack = document.querySelector('[data-stats-track]');
  var statsSlider = document.querySelector('[data-purpose="stats-slider"]');
  var servicesTrack = document.querySelector('[data-services-track]');
  var servicesPrev = document.querySelector('[data-services-prev]');
  var servicesNext = document.querySelector('[data-services-next]');

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
