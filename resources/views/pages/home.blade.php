@php
use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Locomotive Scroll CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Locomotive Scroll Compatibility Styles */
        html {
            scroll-behavior: auto !important; /* Disable default smooth scrolling */
        }

        body {
            overflow: hidden; /* Prevent default browser scrolling */
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Scroll Container */
        #scroll-container {
            position: relative;
            width: 100%;
            min-height: 100vh;
        }

        /* Ensure sections are scrollable */
        .hero, .services, .team, .contact, .footer {
            position: relative;
            width: 100%;
        }

        /* Fix Swiper slider */
        .swiper {
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Ensure footer is visible and has enough space */
        .footer {
            width: 100%;
            min-height: 400px; /* Ensure footer has enough height to be visible */
        }

        /* Loader overlay */
        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: rgba(255, 255, 255, 0.9); /* Optional: Add a background for better visibility */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Fix for Swiper pagination */
        .swiper-pagination {
            position: absolute;
            bottom: 20px;
            z-index: 10;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    @include('layouts.header')

    <!-- Main Scroll Container for Locomotive Scroll -->
    <div id="scroll-container" data-scroll-container>
        <!-- Hero Section -->
        <section class="hero" data-scroll-section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/person-working-wood-working-industry-factory_23-2151352607.jpg?t=st=1742837384~exp=1742840984~hmac=da9507f551165ecef7eb4e4f0dc4f42d2057d367c1c3cd6b8a41df4e0fd47e23&w=1800');"></div>
                    <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
                    <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/full-shot-women-stretching-indoors_23-2149832819.jpg?t=st=1742837468~exp=1742841068~hmac=0759d711dbb74ed5a342724b39e9120e030379598e0687edf6f49e3d5fa3b302&w=1800');"></div>
                    <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/service-maintenance-worker-repairing_23-2149176718.jpg?t=st=1742837538~exp=1742841138~hmac=3633f457ac6fde216dddf8d08a0c21aad8e5bf80abecf7daf24c200ba61a3cd7&w=1800');"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="hero-content">
                <h1>Quick Services</h1>
                <p>Fast, Reliable, and Professional Services at Your Fingertips</p>
            </div>
        </section>


      <!-- Marquee Section -->
      <section class="marquee-section" data-scroll-section>
        <div class="marquee">
            @if(isset($services) && $services->count() > 0)
                @php
                    $serviceList = $services->pluck('name')->join(' | ') . ' | '; // Join services with a separator
                @endphp
                <span>{{ $serviceList }}</span>
                <span>{{ $serviceList }}</span> <!-- Duplicate for seamless loop -->
            @else
                <span>No Services Available • </span>
                <span>No Services Available • </span>
            @endif
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section" data-scroll-section>
        <div class="counter-container">
            <div class="counter-item">
                <h3 id="live-service-counter" data-target="8">8</h3>
                <p>Live Services</p>
            </div>
            <div class="counter-item">
                <h3 id="completed-customer-counter" data-target="1500">1500+</h3>
                <p>Completed Customers</p>
            </div>
            <div class="counter-item">
                <h3 id="satisfied-clients-counter" data-target="1200">1200+</h3>
                <p>Satisfied Clients</p>
            </div>
            <div class="counter-item">
                <h3 id="services-offered-counter" data-target="15">4</h3>
                <p>Services Offered</p>
            </div>
        </div>
    </section>

        <!-- Services Section -->
        <section id="services" class="services" data-scroll-section>
            <div class="container">
                <h2>Our Services</h2>
                <div class="row justify-content-center">
                    @if(isset($services) && $services->count() > 0)
                        @foreach($services as $service)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <a href="/{{ strtolower(str_replace(' ', '-', $service->name)) }}">
                                    <div class="service-card">
                                        <img src="{{ $service->image }}" alt="{{ $service->name }}">
                                        <h4>{{ $service->name }}</h4>
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>No services found.</p>
                    @endif
                </div>
            </div>
        </section>

     <!-- Meet Our Team Section -->
<section id="meet-our-team" class="team" data-scroll-section>
    <div class="container">
        <div class="team-header">
            <h2>Meet Our Team</h2>
            <p class="team-description">
                Our talented professionals bring expertise and dedication to every project. Shah, currently pursuing an MCA at Sankalchand Patel University with a BCA from Shri Sarvajanik College, is interning at MyriadSolutionz. He specializes in PHP, Laravel, and MySQL, with proven experience in developing web applications like an Online Hotel Booking System.
            </p>
        </div>
        <div class="team-content">
            <div class="team-photo">
                <img src="\images\Tejas.jpg" alt="Tejas Shah" class="main-photo">
            </div>
            <div class="team-members">
                <div class="team-member">
                    <img src="\images\Tejas.jpg" alt="Tejas Shah" class="member-photo">
                    <div class="member-info">
                        <h4>Tejas Shah</h4>
                        <p class="role">Frontend & Backend Developer</p>
                        <p class="bio">A skilled developer with a passion for creating efficient and scalable web solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="reviews" data-scroll-section>
    <div class="container">
        <div class="reviews-header">
            <h1>Our Happy Customers</h1>
        </div>
        <div class="testimonials-container">
            @if($reviews->count() > 0)
                @foreach($reviews as $review)
                    @php
                        $wordCount = str_word_count($review->comment);
                        $shouldTruncate = $wordCount > 10;
                        $truncatedText = $shouldTruncate ? Str::words($review->comment, 10, '...') : $review->comment;
                    @endphp
                    <div class="testimonial">
                        <div class="stars">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="bi bi-star-fill {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                            @endfor
                        </div>
                        <h2>{{ $review->name ?? 'Anonymous' }} <span class="bullet">●</span></h2>
                        <p class="testimonial-text">
                            "{{ $truncatedText }}"
                            @if($shouldTruncate)
                                <span class="read-more-btn" onclick="toggleReadMore(this)">Read More</span>
                                <span class="full-text" style="display: none;">"{{ $review->comment }}"</span>
                            @endif
                        </p>
                        <small class="text-muted">{{ $review->created_at->format('M d, Y') }}</small>
                    </div>
                @endforeach
            @else
                <div class="testimonial">
                    <div class="stars">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <h2>Be the First to Review! <span class="bullet">●</span></h2>
                    <p class="testimonial-text">We'd love to hear your feedback about our services.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<script>
    function toggleReadMore(button) {
        const testimonialText = button.parentElement;
        const truncatedText = testimonialText.firstChild.nextSibling; // Adjust for Blade quotes
        const fullText = button.nextElementSibling;

        if (fullText.style.display === 'none') {
            truncatedText.textContent = '';
            fullText.style.display = 'inline';
            button.textContent = 'Read Less';
        } else {
            truncatedText.textContent = "{{ $truncatedText }}";
            fullText.style.display = 'none';
            button.textContent = 'Read More';
        }
    }
</script>

      <!-- Get in Touch Section -->
<section id="get-in-touch" class="contact" data-scroll-section>
    <div class="container">
        <div class="contact-header">
            <h2>Get in Touch</h2>
            <p class="contact-description">
                Reach out, and let's create a universe of possibilities together!<br>
                Let's connect constellations. Reach out and let the stars guide us.
            </p>
        </div>

        <div id="success-message" class="success-message" style="display: none;"></div>

        <div class="contact-content">
            <div class="contact-form-wrapper">
                <form id="contact-form" class="contact-form">
                    @csrf
                    <input type="hidden" name="is_authenticated" value="{{ Auth::check() ? '1' : '0' }}">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" value="{{ Auth::check() ? Auth::user()->name : '' }}" {{ Auth::check() ? 'readonly' : '' }} required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" value="{{ Auth::check() ? Auth::user()->email : '' }}" {{ Auth::check() ? 'readonly' : '' }} required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

            <div class="contact-info-wrapper">
                <div class="contact-info">
                    <h3>Contact Details</h3>
                    <ul class="contact-details">
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>+91 82000-51378</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>shahtejas3333@gmail.com</span>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Mehsana, Gujarat, India</span>
                        </li>
                    </ul>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14663.411970068263!2d72.369322!3d23.5880305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b0b9e0b7d6f%3A0x5c2e0b0b9e0b7d6f!2sMehsana%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sus!4v1697041234567!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-media">
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</section>

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67ea4517e9190b190d415749/1inlhrq1o';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

        <!-- Include Footer -->
        <div data-scroll-section>
            @include('layouts.footer')
        </div>
    </div>

    <!-- Loader Section -->
    <div class="loader-overlay" id="custom-loader" style="display: none;">
        <div class="loader">
            <div class="truckWrapper">
                <div class="truckBody">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 198 93" class="trucksvg">
                        <path stroke-width="3" stroke="#282828" fill="#F83D3D" d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z"></path>
                        <path stroke-width="3" stroke="#282828" fill="#7D7C7C" d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z"></path>
                        <path stroke-width="2" stroke="#282828" fill="#282828" d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z"></path>
                        <rect stroke-width="2" stroke="#282828" fill="#FFFCAB" rx="1" height="7" width="5" y="63" x="187"></rect>
                        <rect stroke-width="2" stroke="#282828" fill="#282828" rx="1" height="11" width="4" y="81" x="193"></rect>
                        <rect stroke-width="3" stroke="#282828" fill="#DFDFDF" rx="2.5" height="90" width="121" y="1.5" x="6.5"></rect>
                        <rect stroke-width="2" stroke="#282828" fill="#DFDFDF" rx="2" height="4" width="6" y="84" x="1"></rect>
                    </svg>
                </div>
                <div class="truckTires">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                        <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15"></circle>
                        <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                        <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15"></circle>
                        <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                    </svg>
                </div>
                <div class="road"></div>
                <svg xml:space="preserve" viewBox="0 0 453.459 453.459" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1" fill="#000000" class="lampPost">
                    <path d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0zM232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Locomotive Scroll JS -->
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Initialize Locomotive Scroll
        let scroll;
        function initLocomotiveScroll() {
            scroll = new LocomotiveScroll({
                el: document.querySelector('[data-scroll-container]'),
                smooth: true,
                multiplier: 1, // Adjust scroll speed
                lerp: 0.1, // Smoothness factor
                smartphone: {
                    smooth: true
                },
                tablet: {
                    smooth: true
                }
            });

            // Update scroll after initialization
            setTimeout(() => {
                scroll.update();
            }, 500);

            // Force another update after a longer delay to ensure footer is included
            setTimeout(() => {
                scroll.update();
            }, 1000);
        }

        // Initialize Swiper
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
                clickable: true,
            },
        });

        // Initialize Locomotive Scroll after DOM is fully loaded
        document.addEventListener('DOMContentLoaded', () => {
            initLocomotiveScroll();
        });

        // Update Locomotive Scroll on Swiper slide change
        swiper.on('slideChange', () => {
            scroll.update();
        });

        // Update Locomotive Scroll on window resize
        window.addEventListener('resize', () => {
            scroll.update();
        });

        // Update Locomotive Scroll when Bootstrap navbar toggles (mobile)
        document.querySelector('.navbar-toggler').addEventListener('click', () => {
            setTimeout(() => {
                scroll.update();
            }, 300); // Wait for navbar animation to complete
        });

        // Smooth scroll to anchor links (e.g., navbar links)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    scroll.scrollTo(targetElement, {
                        offset: -80, // Adjust for sticky navbar height
                        duration: 1000, // Duration of the scroll animation
                        easing: [0.25, 0.0, 0.35, 1.0] // Easing function
                    });
                }
            });
        });

        // Handle contact form submission with loader
        $(document).ready(function() {
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                console.log("Form submitted");

                // Show the loader
                $('#custom-loader').fadeIn();
                console.log("Loader shown");

                const isAuthenticated = $('input[name="is_authenticated"]').val() === '1';

                if (!isAuthenticated) {
                    $('#success-message').text('Please log in first').fadeIn();
                    setTimeout(function() {
                        $('#success-message').fadeOut();
                    }, 2000);
                    $('#custom-loader').fadeOut();
                    return;
                }

                let minimumLoaderTime = 3000;
                let loaderShownTime = Date.now();

                $.ajax({
                    url: '{{ route('contact.store') }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#success-message').text(response.message).fadeIn();
                            $('#contact-form')[0].reset();
                            setTimeout(function() {
                                $('#success-message').fadeOut();
                            }, 2000);
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        $('.text-danger').remove();
                        $.each(errors, function(key, value) {
                            $('[name="' + key + '"]').after('<div class="text-danger">' + value[0] + '</div>');
                        });
                    },
                    complete: function() {
                        console.log("AJAX request complete");
                        let elapsedTime = Date.now() - loaderShownTime;
                        let remainingTime = minimumLoaderTime - elapsedTime;

                        if (remainingTime > 0) {
                            setTimeout(function() {
                                console.log("Hiding loader after remaining time");
                                $('#custom-loader').fadeOut();
                            }, remainingTime);
                        } else {
                            console.log("Hiding loader immediately");
                            $('#custom-loader').fadeOut();
                        }

                        // Update Locomotive Scroll after form submission
                        scroll.update();
                    }
                });
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            scroll.scrollTo(targetElement, {
                offset: -80, // Adjust for sticky navbar height
                duration: 1000, // Duration of the scroll animation
                easing: [0.25, 0.0, 0.35, 1.0] // Easing function
            });
        }
    });
});


// Counter Animation Function
function animateCounter(element, target, duration) {
            let start = 0;
            const increment = target / (duration / 16); // 60 FPS
            const counter = setInterval(() => {
                start += increment;
                if (start >= target) {
                    start = target;
                    clearInterval(counter);
                }
                element.textContent = Math.floor(start);
            }, 16);
        }

        // Check if element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 8 &&
                rect.left >= 1500 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Initialize everything after DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            initLocomotiveScroll();

            const liveCounter = document.getElementById('live-service-counter');
            const completedCounter = document.getElementById('completed-customer-counter');
            let hasAnimated = false;

            // Trigger counter animation when section is in view
            scroll.on('scroll', (args) => {
                if (!hasAnimated && isInViewport(document.querySelector('.counter-section'))) {
                    animateCounter(liveCounter, parseInt(liveCounter.getAttribute('data-target')), 2000);
                    animateCounter(completedCounter, parseInt(completedCounter.getAttribute('data-target')), 2000);
                    hasAnimated = true; // Prevent re-animation
                }
            });
        });

      // Initialize Reviews Swiper
const reviewsSwiper = new Swiper('.reviews-slider', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    // Update Locomotive Scroll when slide changes
    on: {
        slideChange: function () {
            scroll.update();
        },
    },
});

    function toggleReadMore(button) {
        const testimonialText = button.parentElement;
        const truncatedText = testimonialText.firstChild;
        const fullText = button.nextElementSibling;

        if (fullText.style.display === 'none') {
            truncatedText.textContent = '';
            fullText.style.display = 'inline';
            button.textContent = 'Read Less';
        } else {
            const originalText = "{{ $truncatedText }}";
            truncatedText.textContent = originalText;
            fullText.style.display = 'none';
            button.textContent = 'Read More';
        }
    }



    </script>
</body>
</html>
