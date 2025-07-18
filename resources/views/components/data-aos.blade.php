<div class="col-lg-4 mb-4 mb-lg-0" data-aos="{{ $animation }}" data-aos-delay="{{ $delay }}">
  <div class="feature-box border rounded-3 p-4 shadow-sm transition-hover">
    <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
      <i class="bi bi-{{ $icon }}"></i>
    </div>
    <div class="feature-content">
      <h3 class="feature-title">{{ $title }}</h3>
      <p class="feature-text">{{ $slot }}</p>
    </div>
  </div>
</div>
@props(['animation' => 'fade-up', 'delay' => 0, 'icon' => 'check-circle', 'title' => 'Feature Title'])
