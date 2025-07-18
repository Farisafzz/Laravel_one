@props(['icon', 'title', 'delay'])

<div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $delay }}">
  <div class="service-item">
    <div class="service-icon">
      <i class="bi bi-{{ $icon }}"></i>
    </div>
    <div class="service-content">
      <h3>{{ $title }}</h3>
      <p>{{ $slot }}</p>
      <a href="#" class="service-link">
        <span>Learn More</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
</div>
