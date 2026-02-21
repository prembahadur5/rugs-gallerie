<!DOCTYPE html>
<html lang="en">
<head>
<style>
.cinematic-banner {
    position: relative;
    height: 450px;
    overflow: hidden;
}

.cinematic-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 2s ease-in-out;
}

.cinematic-slide.active {
    opacity: 1;
}
 </style>

    <style>
        .cinematic-banner {
            position: relative;
            height: 450px;           /* Desktop */
            overflow: hidden;
        }

        /* Tablet */
        @media (max-width: 991px) {
            .cinematic-banner {
                height: 320px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            .cinematic-banner {
                height: 220px;
            }
        }

        .cinematic-slide {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .cinematic-slide.active {
            opacity: 1;
        }
   


</style>
<style>

/* Default transparent */
.navbar-transparent {
    background: transparent;
    transition: background-color 0.4s ease, box-shadow 0.4s ease;
}

/* Dark when scrolled */
.navbar-scrolled {
    background-color: rgba(0,0,0,0.9) !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.4);
}

/* Force dark on mobile */
@media (max-width: 991px) {
    .navbar-transparent {
        background-color: rgba(0,0,0,0.9);
    }
}

.cinematic-banner {
    margin-top: 80px;
}


:root {
    --logo-color: #d4af37; /* change if needed */
    --dark-bg: #111;
}


/* Navbar link color same as logo */
.navbar .nav-link {
    color: var(--logo-color) !important;
    font-weight: 500;
    transition: color 0.3s ease;
}

/* Hover effect */
.navbar .nav-link:hover {
    color: #ffffff !important;
}

/* Active link */
.navbar .nav-link.active {
    color: #ffffff !important;
}

/* Brand text (if you ever add text back) */
.navbar-brand {
    color: var(--logo-color) !important;
}

.navbar-scrolled .nav-link {
    color: var(--logo-color) !important;
}

@media (max-width: 991px) {
    .navbar-collapse {
        background-color: #111;
        padding: 15px;
        border-radius: 8px;
    }
}


</style>
<style>
.site-footer {
    background-color: var(--dark-bg);
    color: var(--logo-color);
    border-top: 1px solid rgba(212,175,55,0.3);
}

/* Footer text */
.site-footer p,
.site-footer span {
    color: var(--logo-color);
}

/* Footer links (if added later) */
.site-footer a {
    color: var(--logo-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.site-footer a:hover {
    color: #ffffff;
}

</style>


    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon.png') }}">
<title>Rugs Gallerie</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>

<!-- NAVBAR -->
<!--nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm"-->
<!--nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top"-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-transparent">



    <div class="container">
        <!--a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
			<img src="{{ asset('images/logo.png') }}" alt="Rugs Gallerie" height="100">
		</a-->
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/logo.png') }}"
				alt="Rugs Gallerie"
				style="height:80px; max-height:none; display:block;">
			</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-center">

			<li class="nav-item">
				<a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }}</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about') }}</a>

			</li>

			<li class="nav-item">
        
				<a class="nav-link" href="{{ url('/carpets') }}">{{ __('messages.carpets') }}</a>
			</li>

			<li class="nav-item">
        
				<a class="nav-link" href="{{ url('/contact') }}">{{ __('messages.contact') }}</a>
			</li>

			<li class="nav-item">
        
				<a class="nav-link" href="{{ url('/inquiry') }}">{{ __('messages.inquiry') }}</a>
			</li>

			<!-- Language Switch -->
			<li class="nav-item ms-3">
				<a class="nav-link" href="{{ url('/') }}">EN</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ url('/hi') }}">हिंदी</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="{{ url('/dashboard') }}">Admin Login</a>
			</li>

		</ul>

        </div>
    </div>
</nav>

<!-- PAGE CONTENT -->


    @yield('content')
</div>

<!-- Footer -->
<!--footer class="bg-dark text-white text-center py-3"-->
<footer class="site-footer text-center py-4">

    © {{ date('Y') }} Rugs Gallerie. All Rights Reserved.
</footer>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.cinematic-slide');
    let current = 0;

    if (slides.length > 1) {
        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 3000); // change every 4 seconds
    }
});
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.cinematic-slide');
    let current = 0;
    let interval = null;

    function startSlider() {
        interval = setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 4000);
    }

    function stopSlider() {
        clearInterval(interval);
    }

    if (slides.length > 1) {
        startSlider();

        const banner = document.querySelector('.cinematic-banner');
        banner.addEventListener('mouseenter', stopSlider);
        banner.addEventListener('mouseleave', startSlider);
    }
});
</script>
<!--for whatsUp only----->
<a
    href="https://wa.me/918826631573?text=Hello%20Rugs%20Gallerie,%20I%20would%20like%20to%20make%20an%20inquiry."
    target="_blank"
    class="whatsapp-float">
    <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp"
        width="50">
</a>

<style>
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}
.whatsapp-float img {
    border-radius: 50%;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
    const banner = document.querySelector('.cinematic-banner');

    if (!navbar || !banner) return;

    function updateNavbar() {
        const bannerBottom = banner.getBoundingClientRect().bottom;

        if (bannerBottom <= 80) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    }

    updateNavbar();
    window.addEventListener('scroll', updateNavbar);
});
</script>



</body>
</html>
