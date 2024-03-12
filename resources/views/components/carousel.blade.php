<!-- Carousel Section -->
<section x-data="carousel()" class="overflow-hidden">
  <div class="carousel-container relative">
    <div x-ref="slider" class="carousel-slider flex transition-transform duration-500 ease">
      <div class="carousel-item w-screen flex-none">
        <img src="https://via.placeholder.com/600x400/000000/FFFFFF?text=Slide+1" class="w-full h-[80vh] object-cover" alt="Slide 1">
      </div>
      <div class="carousel-item w-screen flex-none">
        <img src="https://via.placeholder.com/600x400/000000/FFFFFF?text=Slide+2" class="w-full h-[80vh] object-cover" alt="Slide 2">
      </div>
      <div class="carousel-item w-screen flex-none">
        <img src="https://via.placeholder.com/600x400/000000/FFFFFF?text=Slide+3" class="w-full h-[80vh] object-cover" alt="Slide 3">
      </div>
    </div>
    <button @click="prev" class="prev-btn absolute top-1/2 left-0 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full">&#10094;</button>
    <button @click="next" class="next-btn absolute top-1/2 right-0 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full">&#10095;</button>
  </div>
</section>
@push('js')
<script>
  function carousel() {
    return {
      counter: 0,
      size: 0,
      slider: null,
      autoplayInterval: 3000, // Auto-play interval in milliseconds
      autoplayTimer: null,
      init() {
        this.slider = this.$refs.slider;
        this.size = this.slider.children[0].clientWidth;
        this.startAutoplay();
      },
      next() {
        if (this.counter >= this.slider.children.length - 1) {
          this.counter = 0; // Reset to first slide if end is reached
        } else {
          this.counter++;
        }
        this.slideTo(this.counter);
      },
      prev() {
        if (this.counter <= 0) {
          this.counter = this.slider.children.length - 1; // Go to last slide if at the beginning
        } else {
          this.counter--;
        }
        this.slideTo(this.counter);
      },
      slideTo(index) {
        this.slider.style.transform = `translateX(${-this.size * index}px)`;
      },
      startAutoplay() {
        this.autoplayTimer = setInterval(() => {
          this.next();
        }, this.autoplayInterval);
      },
      pauseAutoplay() {
        clearInterval(this.autoplayTimer);
      },
      restartAutoplay() {
        this.pauseAutoplay();
        this.startAutoplay();
      },
    }
  }
</script>
@endpush
