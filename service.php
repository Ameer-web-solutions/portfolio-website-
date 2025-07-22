<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Ameer Hamza" />
  <meta name="keywords" content="about Ameer Web Solutions, professional web developer in Pakistan, WordPress developer and SEO expert, WordPress expert, SEO specialist" />

  <!-- SEO Title and Description -->
  <title>Web Development & SEO Services | Ameer Web Solutions</title>
  <meta name="description" content="Explore professional web development, WordPress setup, website optimization, and SEO services tailored for businesses and individuals." />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.ameerwebsolutions.com/about" />

  <!-- Open Graph / Facebook Meta Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ameerwebsolutions.com/service" />
  <meta property="og:title" content="Web Development & SEO Services | Ameer Web Solutions" />
  <meta property="og:description" content="Explore professional web development, WordPress setup, website optimization, and SEO services tailored for businesses and individuals." />
  <meta property="og:image" content="https://www.ameerwebsolutions.com/images/logo.png" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta name="twitter:description" content="Explore professional web development, WordPress setup, website optimization, and SEO services tailored for businesses and individuals." />
  <meta name="twitter:image" content="https://www.ameerwebsolutions.com/images/logo.png" />

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Web Development and SEO Services",
    "provider": {
        "@type": "Organization",
        "name": "Ameer Web Solutions",
        "url": "https://ameerwebsolutions.com",
        "logo": "https://ameerwebsolutions.com/logo.png"
    },
    "serviceType": "Web Design, WordPress Development, SEO Optimization",
    "areaServed": {
        "@type": "Country",
        "name": "Pakistan"
    },
    "description": "Professional web development, WordPress setup, and SEO optimization services tailored to businesses and individuals.",
    "url": "https://ameerwebsolutions.com/services"
    }
</script>
    <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

  <!-- Core Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Animation Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" ></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .hero-bg {
            background: url('images/laptop-with-glowing-screen-table.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .service-card {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            transition: all 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
        }
        
        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #10b981, #059669);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: linear-gradient(135deg, #059669, #047857);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
            html, body {
            overflow-x: hidden;
            }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- header -->
    <?php
        require('header.php')
    ?>
    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center justify-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 fade-in">Services</h1>
            <h2 class="text-xl md:text-2xl font-medium mb-8 fade-in" style="animation-delay: 0.2s;">We provide a wide range of Services</h2>
            <p class="text-lg md:text-xl leading-relaxed max-w-3xl mx-auto fade-in" style="animation-delay: 0.4s;">
                Explore our development services to grow your business. From professional website development and advanced web applications to strategic digital marketing and Search Engine Optimization, we deliver innovative services designed to meet your goals.
            </p>
        </div>
    </section>

   <!-- Services Grid Section -->
    <section class="pt-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            
            <!-- Service 1 - Web Development -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-left">
                <div class="order-2 lg:order-1">
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-blue-400 to-purple-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fas fa-code text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Custom Website Development</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Create a stunning online presence with professionally designed and fully functional websites that represent your brand perfectly.
                        </p>
                        <a href="contact.php">
                        <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                            Book Now
                            <i class="fas fa-arrow-right ml-2 "></i>
                        </button>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="images/custom-website.webp" 
                         alt="Web Development Service" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
            </div>

            <!-- Service 2 - Wordpress website -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-right">
                <div>
                    <img src="images/wordpress.webp" 
                         alt="wordpress website development" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
                <div>
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-300 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fab fa-wordpress text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">WordPress Website Design</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Launch a modern, mobile-friendly WordPress site that’s easy to manage and built for growth.
                        </p>
                         <a href="contact.php">
                            <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                                Book Now
                                <i class="fas fa-arrow-right ml-2 "></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 - wordpresss website maintainence -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-left">
                <div class="order-2 lg:order-1">
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-300 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fab fa-wordpress text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">WordPress Maintenance & Security</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Keep your WordPress site safe, updated, and running smoothly with expert care and support.
                        </p>
                        <a href="contact.php">
                            <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                                Book Now
                                <i class="fas fa-arrow-right ml-2 "></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="images/wordpress-website-maintainence.webp" 
                         alt="wordpress website maintainence" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
            </div>

            <!-- Service 4 - SEO -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-right">
                <div>
                    <img src="images/SEO-services.webp" 
                         alt="seo services" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
                <div>
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-green-500 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fas fa-search text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Search Engine Optimization (SEO)</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Achieve measurable results with expertly managed Google Ads campaigns that maximize your ROI.
                        </p>
                        <a href="contact.php">
                            <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                                Book Now
                                <i class="fas fa-arrow-right ml-2 "></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 5 - local SEO -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-left">
                <div class="order-2 lg:order-1">
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-blue-300 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fas fa-search text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Local SEO for Small Businesses</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Get found by local customers searching for your services with powerful local SEO tactics.
                        </p>
                        <a href="contact.php">
                            <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                                Book Now
                                <i class="fas fa-arrow-right ml-2 "></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="images/local-seo-service.webp" 
                         alt="local SEO Services" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
            </div>

            <!-- Service 6 - web App Development -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 slide-in-right">
                <div>
                    <img src="images/web-application.webp" 
                         alt="Web Application Development" 
                         class="rounded-2xl shadow-lg w-full h-96 object-cover">
                </div>
                <div>
                    <div class="service-card p-8 rounded-2xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-blue-500 to-purple-700 w-16 h-16 rounded-2xl flex items-center justify-center mb-3 mr-2 group-hover:scale-110 transition-transform">
                                <i class="fas fa-laptop-code text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Web Application Development</h3>
                        </div>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Build powerful, scalable web applications tailored to your unique business needs.
                        </p>
                        <a href="contact.php">
                            <button class="btn-primary text-white px-8 py-3 rounded-full font-medium inline-flex items-center">
                                Book Now
                                <i class="fas fa-arrow-right ml-2 "></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- Benefits Section -->
    <section class="py-24 bg-gradient-to-b from-blue-900 to-gray-900 relative overflow-hidden z-10">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden z-0">
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            <div class="absolute -top-1/2 -right-1/2 w-full h-full bg-gradient-to-bl from-blue-500/10 to-transparent rounded-full animate-pulse"></div>
            <div class="absolute -bottom-1/2 -left-1/2 w-full h-full bg-gradient-to-tr from-purple-500/10 to-transparent rounded-full animate-pulse"></div>
        </div>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <!-- Section Header -->
            <div class="text-center mb-16 animate__animated animate__fadeIn max-w-4xl mx-auto">
                <span class="text-blue-300 text-lg font-semibold tracking-wider mb-2 block">WhY CHOOSE US</span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-400 to-green-400">Benefits of Working With Us</h2>
                <p class="text-white text-lg mx-auto">Experience excellence in web development with our comprehensive suite of benefits</p>
            </div>
    
            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 max-w-7xl mx-auto">
                <!-- Fast Delivery -->
                <div class="group" data-aos="fade-up">
                    <div class="relative p-6 rounded-2xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg border border-white/10 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full bg-gradient-to-br from-blue-500 to-blue-600 shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 transform transition-all duration-300 group-hover:scale-110">
                                <i class="fas fa-rocket text-2xl text-white animate-float"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 text-center">Fast Delivery</h3>
                            <p class="text-gray-300 text-center">Quick turnaround times without compromising quality. We ensure your project launches on schedule.</p>
                        </div>
                    </div>
                </div>

                <!-- Quality Work -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative p-6 rounded-2xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg border border-white/10 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-green-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full bg-gradient-to-br from-green-500 to-green-600 shadow-lg shadow-green-500/30 group-hover:shadow-green-500/50 transform transition-all duration-300 group-hover:scale-110">
                                <i class="fas fa-check-circle text-2xl text-white animate-float"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 text-center">Quality Work</h3>
                            <p class="text-gray-300 text-center">Pixel-perfect designs and clean, efficient code that meets the highest standards of quality.</p>
                        </div>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative p-6 rounded-2xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg border border-white/10 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-purple-600 shadow-lg shadow-purple-500/30 group-hover:shadow-purple-500/50 transform transition-all duration-300 group-hover:scale-110">
                                <i class="fas fa-headset text-2xl text-white animate-float"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 text-center">24/7 Support</h3>
                            <p class="text-gray-300 text-center">Round-the-clock assistance for your needs. We're always here when you need us.</p>
                        </div>
                    </div>
                </div>

                <!-- Secure Code -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative p-6 rounded-2xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg border border-white/10 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/20">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-red-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full bg-gradient-to-br from-red-500 to-red-600 shadow-lg shadow-red-500/30 group-hover:shadow-red-500/50 transform transition-all duration-300 group-hover:scale-110">
                                <i class="fas fa-shield-alt text-2xl text-white animate-float"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 text-center">Secure Code</h3>
                            <p class="text-gray-300 text-center">Built with security best practices in mind, ensuring your application stays protected.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Footer -->
<?php
require('footer.php')
?>
<!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition duration-300 opacity-0 invisible hover:bg-blue-700">
    <i class="fas fa-arrow-up"></i>
  </button>
<script src="home.js">   
</script>

    <!-- jQuery Animation Example -->
    <script>
        $(document).ready(function () {
            // Initialize AOS with a small delay to ensure content is loaded
            setTimeout(function() {
                AOS.init({
                    duration: 1000,
                    once: true,
                    offset: 100,
                    delay: 100
                });
            }, 500);

            // Refresh AOS on window resize
            $(window).on('resize', function() {
                AOS.refresh();
            });

            $(".hover\:shadow-xl").hover(
                function () {
                    $(this).addClass("scale-105");
                },
                function () {
                    $(this).removeClass("scale-105");
                }
            );
        });


        $(document).ready(function() {
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Function to check if element is partially in viewport
            function isPartiallyInViewport(element) {
                const rect = element.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                const windowWidth = window.innerWidth || document.documentElement.clientWidth;
                
                return (rect.bottom >= 0 && rect.top <= windowHeight) &&
                       (rect.right >= 0 && rect.left <= windowWidth);
            }

            // Animate elements on scroll
            function animateOnScroll() {
                $('.fade-in, .slide-in-left, .slide-in-right, .scale-in').each(function() {
                    if (isPartiallyInViewport(this) && !$(this).hasClass('visible')) {
                        $(this).addClass('visible');
                    }
                });
            }

            // Initial animation trigger
            animateOnScroll();

            // Animate on scroll
            $(window).on('scroll', animateOnScroll);

            // Smooth scrolling for navigation links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Add parallax effect to hero background
            $(window).scroll(function() {
                var scrolled = $(window).scrollTop();
                var parallax = $('.hero-bg');
                var speed = scrolled * 0.5;
                parallax.css('background-position', 'center ' + speed + 'px');
            });

            // Service card hover effects
            $('.service-card').hover(
                function() {
                    $(this).find('.service-icon').addClass('animate-pulse');
                },
                function() {
                    $(this).find('.service-icon').removeClass('animate-pulse');
                }
            );

            // Add click animation to buttons
            $('button, .btn-primary, .btn-secondary').on('click', function(e) {
                var $this = $(this);
                var $ripple = $('<span class="ripple"></span>');
                
                $this.append($ripple);
                
                setTimeout(function() {
                    $ripple.remove();
                }, 600);
            });

            // Mobile menu toggle (if needed)
            $('.mobile-menu-button').on('click', function() {
                $('.mobile-menu').toggleClass('hidden');
            });

            // Add loading animation to service images
            $('img').on('load', function() {
                $(this).addClass('animate-fade-in');
            });

            // Counter animation for stats (if you want to add stats)
            function animateValue(element, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    element.text(Math.floor(progress * (end - start) + start));
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            // Trigger animations when hero section comes into view
            if (isPartiallyInViewport($('.hero-bg')[0])) {
                $('.hero-bg .fade-in').each(function(index) {
                    const $this = $(this);
                    setTimeout(() => {
                        $this.addClass('visible');
                    }, index * 200);
                });
            }
        });
    </script>
</body>

</html>