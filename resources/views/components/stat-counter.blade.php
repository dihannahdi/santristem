<div class="text-center" data-aos="fade-up">
    <div 
        x-data="{ 
            count: 0, 
            target: {{ $target }},
            increment() {
                if (this.count < this.target) {
                    this.count += Math.ceil(this.target / 50);
                    if (this.count > this.target) this.count = this.target;
                    setTimeout(() => this.increment(), 30);
                }
            }
        }"
        x-init="
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && count === 0) {
                        increment();
                    }
                });
            });
            observer.observe($el);
        "
        class="mb-4"
    >
        <div class="text-5xl font-bold text-green-600 mb-2">
            <span x-text="count.toLocaleString('id-ID')">0</span>{{ $suffix ?? '' }}
        </div>
        <div class="text-gray-600 font-semibold">{{ $label }}</div>
    </div>
    @if(isset($description))
        <p class="text-sm text-gray-500 mt-2">{{ $description }}</p>
    @endif
</div>
