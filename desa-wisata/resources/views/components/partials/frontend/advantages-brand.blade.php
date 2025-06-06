<div class="max-w-screen-xl font-sans px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-20 lg:px-6">
    <!-- Row -->
    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
        <div class="text-gray-700 sm:text-lg">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 gs_reveal">About Us</h2>
            <p class="gs_reveal gs_reveal_fromLeft">
                Sulawesi Tengah Tourism offers a perfect blend of breathtaking natural beauty and rich cultural experiences. 
                Our destination has been recognized as one of Indonesia's hidden gems, providing visitors 
                with unforgettable experiences and authentic local interactions. From stunning landscapes to cultural 
                attractions, Central Sulawesi has something for every traveler.
                
                Our team is dedicated to ensuring that every visitor has an exceptional experience while promoting 
                sustainable tourism practices that benefit local communities and preserve our natural resources.
            </p>
            <a href="{{ route('about-us') }}"
                class="gs_reveal gs_reveal_fromLeft inline-flex mt-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-md focus:ring-4 focus:outline-none focus:ring-primary-300 hover:bg-primary-700">
                LEARN MORE
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
        <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex gs_reveal gs_reveal_fromRight"
            src="{{ asset('assets/img/dummy-vilage.jpg') }}" alt="Sulawesi Tengah tourism destination">
    </div>
</div>

<script>
    function animateFrom(elem, direction) {
        direction = direction || 1;
        var x = 0,
            y = direction * 100;
        if (elem.classList.contains("gs_reveal_fromLeft")) {
            x = -100;
            y = 0;
        } else if (elem.classList.contains("gs_reveal_fromRight")) {
            x = 100;
            y = 0;
        }
        elem.style.transform = "translate(" + x + "px, " + y + "px)";
        elem.style.opacity = "0";
        gsap.fromTo(elem, {
            x: x,
            y: y,
            autoAlpha: 0
        }, {
            duration: 1.25,
            x: 0,
            y: 0,
            autoAlpha: 1,
            ease: "expo",
            overwrite: "auto"
        });
    }

    function hide(elem) {
        gsap.set(elem, {
            autoAlpha: 0
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
            hide(elem); // Assure that the element is hidden when scrolled into view

            ScrollTrigger.create({
                trigger: elem,
                start: "top bottom", // Start animation when top of the element hits bottom of viewport
                end: "bottom top", // End animation when bottom of the element hits top of viewport

                onEnter: function() {
                    animateFrom(elem);
                },
                onEnterBack: function() {
                    animateFrom(elem, -1);
                },
                onLeave: function() {
                    hide(elem);
                }
            });
        });
    });
</script>
