@props(['icon', 'title', 'link' => '#', 'delay' => '0'])

<a href="{{ $link }}"
   class="flex items-start gap-4 border border-gray-200 p-5 rounded-xl hover:shadow-lg transition duration-300 bg-white group"
   data-aos="fade-up" data-aos-delay="{{ $delay }}">
  
  <div class="text-purple-600 text-3xl mt-1">
    <i class="bi bi-{{ $icon }}"></i>
  </div>

  <div class="flex flex-col">
    <h5 class="text-lg font-semibold text-gray-900 mb-1 group-hover:text-purple-700 transition">
      {{ $title }}
    </h5>
    <p class="text-gray-600 text-sm mb-2">{{ $slot }}</p>
    <span class="text-sm text-purple-600 group-hover:underline">Learn More →</span>
  </div>
</a>
