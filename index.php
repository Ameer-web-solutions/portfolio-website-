<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Ameer Hamza" />
  <meta name="keywords" content="Website Development, Full-Stack Developer, SEO Services, WordPress Websites" />

  <!-- SEO Title and Description -->
  <title>Ameer Web Solutions</title>
  <meta name="description" content="We craft high-performing websites and SEO strategies for businesses that want to grow online. From custom design to speed optimization, we build success" />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.ameerwebsolutions.com/" />

  <!-- Open Graph / Facebook Meta Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ameerwebsolutions.com/" />
  <meta property="og:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta property="og:description" content="Need a website that performs and ranks? I help businesses with full-stack development, SEO, and digital strategy." />
  <meta property="og:image" content="https://www.ameerwebsolutions.com/images/author-picture.webp" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta name="twitter:description" content="Need a website that performs and ranks? I help businesses with full-stack development, SEO, and digital strategy." />
  <meta name="twitter:image" content="https://www.ameerwebsolutions.com/images/logo.png" />

  <!-- Structured Data: JSON-LD Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Ameer Web Solutions",
  "url": "https://ameerwebsolutions.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://ameerwebsolutions.com/?s={search_term_string}{search_term_string}",
    "query-input": "required name=search_term_string"
  }
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
    <style>
      .image{
        background: url('images/laptop-with-glowing-screen-table.webp');
        background-size: cover; 
        background-position: center;
        background-attachment: fixed;
      }
      .glass-card {
        background: rgba(255, 255, 255, 0.2); /* semi-transparent */
        backdrop-filter: blur(10px);          /* BLUR EFFECT */
        -webkit-backdrop-filter: blur(10px);  /* Safari support */
        border: 1px solid rgba(255, 255, 255, 0.3); /* optional for glass look */
        color: white;
        }
        .hero-gradient {
          background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdf4 100%);
        }
        .process-step {
          position: relative;
          padding-left: 80px;
          margin-bottom: 40px;
        }
    
    .process-number {
      position: absolute;
      left: 0;
      top: 0;
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
    }
      .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .pricing-popular {
      position: relative;
      overflow: hidden;
    }
    
    .pricing-popular::before {
      content: 'Most Popular';
      position: absolute;
      top: 0;
      right: 0;
      background: var(--secondary);
      color: white;
      font-size: 12px;
      padding: 2px 10px;
      border-bottom-left-radius: 10px;
    }

        /* FAQ Item Hover */

    .faq-item:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        
    }
    .faq-item {
        transition: all 0.3s ease;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .faq-question {
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .faq-question:hover {
      color: var(--primary);
    }
    
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    
    .faq-answer.active {
      max-height: 500px;
    }
/* FAQ Items Hover Effect */
.faq-item {
    transition: all 0.3s ease;
}

.faq-item:hover {
    transform: translateX(10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}
    .cta-section {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    </style>
</head>
<body class="bg-gray-50">
  <!-- Navigation -->
  <?php
  require('header.php')
  ?>

  <!-- Hero Section -->
  <section id="home" class="image pt-32 overflow-hidden min-h-screen flex pb-20">

        <!-- Animated Background Shapes -->
        <div class="absolute inset-0 z-1 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-500/20 rounded-full filter blur-3xl animate-pulse delay-1000"></div>
        </div>

        <!-- Content Container -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white space-y-4 animate__animated animate__fadeInLeft">
                    <div class="inline-block px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/20 to-light-500/20 border border-white/10 mb-4">
                        <span class="text-sm font-medium white">🚀 Welcome to the Future of Web Development</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl xl:text-7xl font-bold leading-tight hero-gradient-text animate__animated animate__fadeInUp animate__delay-1s">
                        Transform Your <br/>
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-600">Digital Presence</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white  max-w-2xl ">
                        Expert web development solutions tailored to your business needs. We create stunning, high-performance websites that drive results and enhance your online success.
                    </p>
                    <ul class="grid grid-cols-2 gap-6 py-4 animate__animated animate__fadeInUp animate__delay-2s">
                        <li class="flex items-center transform hover:scale-105 transition-transform cursor-pointer space-x-3 group">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center group-hover:bg-blue-500/40 transition-all duration-300">
                                <i class="fas fa-check text-blue-400"></i>
                            </span>
                            <span class="font-medium">Custom Web Development</span>
                        </li>
                        <li class="flex items-center transform hover:scale-105 transition-transform cursor-pointer space-x-3 group">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center group-hover:bg-purple-500/40 transition-all duration-300">
                                <i class="fas fa-mobile-alt text-green-400"></i>
                            </span>
                            <span class="font-medium">Responsive Design</span>
                        </li>
                        <li class="flex items-center transform hover:scale-105 transition-transform cursor-pointer space-x-3 group">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center group-hover:bg-indigo-500/40 transition-all duration-300">
                                <i class="fas fa-shopping-cart text-blue-500"></i>
                            </span>
                            <span class="font-medium">E-commerce Solutions</span>
                        </li>
                        <li class="flex items-center transform hover:scale-105 transition-transform cursor-pointer space-x-3 group">
                            <span class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center group-hover:bg-blue-500/40 transition-all duration-300">
                                <i class="fas fa-search text-green-500"></i>
                            </span>
                            <span class="font-medium">SEO Optimization</span>
                        </li>
                    </ul>
                    <div class="flex flex-wrap gap-6 pt-4 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="text-center transform hover:scale-105 transition-transform cursor-pointer group">
                            <h4 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-600">3+years</h4>
                            <p class="text-sm text-white">Experience</p>
                        </div>
                        <div class="text-center transform hover:scale-105 transition-transform cursor-pointer group">
                            <h4 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-600">20+</h4>
                            <p class="text-sm text-white">Projects Completed</p>
                        </div>
                        <div class="text-center transform hover:scale-105 transition-transform cursor-pointer group">
                            <h4 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-600">24/7</h4>
                            <p class="text-sm text-white">Support</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Floating Cards -->
                <div class="hidden lg:block relative animate__animated animate__fadeInRight">
                    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-400/30 to-green-500/30 rounded-full filter blur-3xl opacity-30 animate-pulse"></div>
                    <div class="relative z-10 grid grid-cols-2 gap-6">
                        <!-- Service Cards -->
                        <div class="glass-card p-8 rounded-2xl transform hover:scale-105 transition-transform duration-300  border border-white group cursor-pointer">
                            <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-to-br from-blue-400/30 to-green-500/30 mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-laptop text-4xl text-green-400 group-hover:text-green-300 transition-colors"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-white mb-3">Web Development</h2>
                            <p class="text-white text-medium">websites that represent your brand perfectly.</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl transform hover:scale-105 transition-transform duration-300 border border-white/10 mt-12 group cursor-pointer">
                            <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-to-br from-blue-400/30 to-green-500/30 mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-mobile-alt text-4xl text-green-400 group-hover:text-green-300 transition-colors"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-white mb-3">Responsive Design</h2>
                            <p class="text-white text-medium">Fully responsive design that looks perfect on all devices</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl transform hover:scale-105 transition-transform duration-300  border border-white/10 group cursor-pointer">
                            <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-to-br from-blue-400/30 to-green-500/30 mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-rocket text-4xl text-blue-400 group-hover:text-blue-300 transition-colors"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-white mb-3">Performance</h2>
                            <p class="text-white text-medium">Optimized for high performance with fast loading speeds</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl transform hover:scale-105 transition-transform duration-300  border border-white/10 mt-12 group cursor-pointer">
                            <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-to-br from-blue-400/30 to-green-500/30 mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-search text-4xl text-green-400 group-hover:text-yello-600 transition-colors"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-white mb-3">SEO Optimized</h2>
                            <p class="text-white text-medium">drive more organic traffic with white-hat SEO strategies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Services Section -->
    <section class="py-20 bg-gradient-to-b from-gray-900 to-blue-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center my-20">
                <h2 class="text-4xl font-bold text-white mb-4">Our Services</h2>
                <p class="text-xl text-gray-300">Comprehensive web solutions for your business</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition-all duration-300 group">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-white mb-4">Custom Development</h3>
                    <p class="text-gray-300 mb-6">Tailored web solutions that perfectly match your business requirements and goals.</p>
                    <ul class="space-y-2 text-white">
                      <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Fully responsive across all devices
                      </li>
                      <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Clean, SEO-friendly code structure
                      </li>
                      <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Optimized for speed
                      </li>
                    </ul>
                    <a href="service.php" class="inline-flex mt-5 items-center text-blue-400 hover:text-blue-300 transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            
            <!-- Service Card 2 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition-all duration-300 group">
                <div class="bg-gradient-to-br from-blue-500 to-blue-300 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fab fa-wordpress text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">WordPress Development</h3>
                <p class="text-gray-300 mb-6">Custom WordPress solutions ranging from simple blogs to dynamic business sites.</p>
                <ul class="space-y-2 text-white">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Advanced theme customization
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Plugin configurations
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    WooCommerce integrations
                  </li>
                </ul>
                <a href="service.php" class="inline-flex mt-5 items-center text-blue-400 hover:text-blue-300 transition-colors">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
            
            <!-- Service Card 3 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition-all duration-300 group">
                <div class="bg-gradient-to-br from-pink-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-shopping-cart text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">E-commerce Solutions</h3>
                <p class="text-gray-300 mb-6">Powerful online stores with seamless shopping experiences.</p>
                <ul class="space-y-2 text-white">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    WooCommerce setup
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Product management
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Conversion optimization
                  </li>
                </ul>
                <a href="service.php" class="inline-flex mt-5 items-center text-blue-400 hover:text-blue-300 transition-colors">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>

            <!-- Service Card 4 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition-all duration-300 group">
                <div class="bg-gradient-to-br from-green-500 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-search text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">Search Engine Optimization</h3>
                <p class="text-gray-300 mb-6">Result-driven SEO strategies to boost your site’s visibility, and organic traffic.</p>
                <ul class="space-y-2 text-white">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Keyword research and content planning
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    On-page SEO enhancements
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Strategic link building
                  </li>
                </ul>
                <a href="service.php" class="inline-flex mt-5 items-center text-green-400 hover:text-green-300 transition-colors">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>

            <!-- Service Card 5 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 transform hover:scale-105 transition-all duration-300 group">
                <div class="bg-gradient-to-br from-blue-500 to-indigo-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-laptop text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-semibold text-white mb-4">Web Application Development</h3>
                <p class="text-gray-300 mb-6">Build powerful, scalable, and user-friendly web applications tailored to your business goals.</p>
                <ul class="space-y-2 text-white">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Custom Web App Solutions
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Responsive & Modern UI/UX
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    Secure & Scalable Architecture
                  </li>
                </ul>
                <a href="service.php" class="inline-flex mt-5 items-center text-green-400 hover:text-green-300 transition-colors">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center my-20">
                <h2 class="text-4xl font-bold text-white mb-4 ">Why Choose Us</h2>
                <p class="text-xl text-gray-300">Experience the difference of working with experts</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-blue-600/20 to-purple-600/20 backdrop-blur-lg rounded-2xl p-6 border border-white/10 text-center group hover:bg-white/5 transition-all duration-300">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-rocket text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Fast Performance</h3>
                    <p class="text-gray-300">Lightning-fast loading speeds for optimal user experience</p>
                </div>
    
                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-purple-600/20 to-pink-600/20 backdrop-blur-lg rounded-2xl p-6 border border-white/10 text-center group hover:bg-white/5 transition-all duration-300">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Secure & Reliable</h3>
                    <p class="text-gray-300">Built with the latest security standards and best practices</p>
                </div>
    
                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-pink-600/20 to-red-600/20 backdrop-blur-lg rounded-2xl p-6 border border-white/10 text-center group hover:bg-white/5 transition-all duration-300">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-pink-500 to-red-500 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-comments text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">24/7 Support</h3>
                    <p class="text-gray-300">Round-the-clock assistance for all your needs</p>
                </div>
    
                <!-- Feature 4 -->
                <div class="bg-gradient-to-br from-red-600/20 to-orange-600/20 backdrop-blur-lg rounded-2xl p-6 border border-white/10 text-center group hover:bg-white/5 transition-all duration-300">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-chart-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">SEO Optimized</h3>
                    <p class="text-gray-300">Built to rank higher and attract more visitors</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Pricing Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Pricing Plans</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Flexible pricing options to suit your needs</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Basic Plan -->
        <div class="pricing-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="text-center mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Basic</h3>
            <p class="text-gray-600 mb-4">Perfect for small businesses</p>
            <div class="flex justify-center items-baseline">
              <span class="text-4xl font-bold text-gray-800">$250</span>
              <span class="text-gray-500 ml-1">/project</span>
            </div>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>5 Pages Website</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Responsive Design</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Basic SEO Setup</span>
            </li>
            <li class="flex items-center text-gray-400">
              <i class="fas fa-times text-red-400 mr-2"></i>
              <span>E-Commerce Functionality</span>
            </li>
            <li class="flex items-center text-gray-400">
              <i class="fas fa-times text-red-400 mr-2"></i>
              <span>Custom Plugin Development</span>
            </li>
          </ul>
          <a href="contact.php" class="block text-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-medium transition duration-300">
            Get Started
          </a>
        </div>
        
        <!-- Popular Plan -->
        <div class="pricing-card pricing-popular bg-white p-8 rounded-xl shadow-lg border-2 border-blue-500 transition duration-300 transform scale-105">
          <div class="text-center mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Professional</h3>
            <p class="text-gray-600 mb-4">Best for growing businesses</p>
            <div class="flex justify-center items-baseline">
              <span class="text-4xl font-bold text-gray-800">$700</span>
              <span class="text-gray-500 ml-1">/project</span>
            </div>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Up to 15 Pages Website</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Advanced Responsive Design</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Comprehensive SEO Setup</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Basic E-Commerce Functionality</span>
            </li>
            <li class="flex items-center text-gray-400">
              <i class="fas fa-times text-red-400 mr-2"></i>
              <span>Advanced Custom Development</span>
            </li>
          </ul>
          <a href="contact.php" class="block text-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
            Get Started
          </a>
        </div>
        
        <!-- Enterprise Plan -->
        <div class="pricing-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="text-center mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Enterprise</h3>
            <p class="text-gray-600 mb-4">For large scale projects</p>
            <div class="flex justify-center items-baseline">
              <span class="text-4xl font-bold text-gray-800">$1,499</span>
              <span class="text-gray-500 ml-1">/project</span>
            </div>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Unlimited Pages Website</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Premium Responsive Design</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Full SEO Optimization</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Advanced E-Commerce</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-check text-green-500 mr-2"></i>
              <span>Custom Plugin Development</span>
            </li>
          </ul>
          <a href="contact.php" class="block text-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-medium transition duration-300">
            Get Started
          </a>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <p class="text-gray-600">Need something custom? <a href="contact.php" class="text-blue-600 hover:text-blue-800 font-medium">Contact me</a> for a personalized quote.</p>
      </div>
    </div>
  </section>

  <!-- My proceess  -->

  <section id="process" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-10 sm:px-6 lg:px-12">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">My Process</h2>
            <p class="text-lg text-gray-700 font-medium max-w-2xl mx-auto">A structured approach to deliver exceptional results</p>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
        </div>
        
        <div class="flex flex-col items-center mb-16">
            <div class="process-step mb-8">
                <div class="process-number">1</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Discovery & Planning</h3>
                <p class="text-gray-700 font-medium text-center">
                    Every project begins with a deep dive into your business, goals, and audience. In this stage, I gather all the details, analyze your competitors, plan the content structure, and outline the technical roadmap. This helps set a strong foundation for a results-driven website.            
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">2</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Design & Prototyping</h3>
                <p class="text-gray-700 font-medium text-center">
                    Next, I design wireframes and visual mockups to bring your ideas to life. We’ll collaborate closely during this phase to fine-tune the look, layout, and user experience until everything aligns perfectly with your vision.
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">3</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Development</h3>
                <p class="text-gray-700 font-medium text-center">
                    Once the design is approved, I begin building your site using clean code, responsive design, and the latest web technologies. The site is tested across all major browsers and devices to ensure it’s fast, functional, and user-friendly.
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">4</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Launch & Optimization</h3>
                <p class="text-gray-700 font-medium text-center">
                    After final checks and approval, your website goes live with complete SEO setup and tracking tools in place. I also handle speed optimization and performance tuning to make sure your site is ready to perform from day one — and beyond.
                </p>
            </div>
        </div>
    </div>
</section>

       <!-- Hook Section - Why Choose Us -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Crafting Digital Excellence You Can Trust</h2>
      <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-6 lg:gap-8">
      <!-- Quality Pillar 1 -->
      <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-100 transform hover:-translate-y-2">
        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-medal text-blue-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Premium Quality</h3>
        <p class="text-gray-600">
          We don't just build websites - we craft digital experiences with meticulous attention to detail, using only the latest technologies and best practices.
        </p>
      </div>
      
      <!-- Quality Pillar 2 -->
      <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-100 transform hover:-translate-y-2">
        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-lock text-purple-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Trusted Expertise</h3>
        <p class="text-gray-600">
          With 20+ successful projects and 3+ years in the industry, we've earned the trust of businesses worldwide. Your project is in expert hands.
        </p>
      </div>
      
      <!-- Quality Pillar 3 -->
      <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-100 transform hover:-translate-y-2">
        <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-mobile-alt text-green-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Flawless Performance</h3>
        <p class="text-gray-600">
          Our websites aren't just beautiful - they're built for speed, security, and seamless performance across all devices and platforms.
        </p>
      </div>
      
      <!-- Quality Pillar 4 -->
      <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-100 transform hover:-translate-y-2">
        <div class="w-14 h-14 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-headset text-orange-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-3">Dedicated Support</h3>
        <p class="text-gray-600">
          Our relationship continues long after launch. Enjoy ongoing support, updates, and expert advice whenever you need it.
        </p>
      </div>
    </div>

    <!-- Trust Indicators -->
    <div class="mt-20 grid md:grid-cols-3 gap-8 bg-white rounded-xl shadow-sm p-8 border border-gray-100">
      <div class="text-center md:border-r border-gray-200 md:pr-8">
        <div class="text-4xl font-bold text-blue-600 mb-2">100%</div>
        <p class="text-gray-600 font-medium">Client Satisfaction Rate</p>
      </div>
      <div class="text-center md:border-r border-gray-200 md:pr-8">
        <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
        <p class="text-gray-600 font-medium">Support Availability</p>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-blue-600 mb-2">4.9</div>
        <p class="text-gray-600 font-medium">Average Client Rating</p>
      </div>
    </div>
    
    <!-- CTA -->
    <div class="text-center mt-16">
      <a href="https://wa.me/923402710523" class="inline-flex items-center px-6 py-4 border border-transparent text-lg font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-blue-600 to-blue-400 hover:from-blue-400 hover:to-blue-700 transition duration-300">
        Lets Discuss
        <i class="fas fa-arrow-right ml-3 animate-pulse"></i>
      </a>
    </div>
  </div>
</section>

  <!-- Projects Section -->
  <section id="projects" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 ">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Projects</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">A selection of my recent work showcasing diverse skills and solutions</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Project 1 -->

         <!-- <a href=" project.php#blog"> -->
            <div class="bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="relative overflow-hidden h-60">
                  <img src="images/blogging-website.webp" alt="SEO Blog" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                      <span class="text-sm text-blue-300 font-medium">WordPress Development</span>
                      <h3 class="text-xl font-bold text-white mt-1">SEO-Friendly Blog</h3>
                    </div>
                  </div>
                </div>
                <div class="p-6">
                <p class="text-gray-600 mb-4">
                  Built a fast, mobile-optimized blog with full SEO setup that ranks on Google's first page for targeted keywords.
                </p>
                <div class="flex flex-wrap gap-2">
                  <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">SEO</span>
                  <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">WordPress</span>
                  <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Performance</span>
                </div>
              </div>
            </div>
          <!-- </a> -->

        <!-- Project 2 -->
         <!-- <a href="project.php#business-website"> -->
        <div class=" bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/business-website-design.webp" alt="Custom WP Theme" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Custom Development</span>
                <h3 class="text-xl font-bold text-white mt-1">Business WordPress Site</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Designed and developed a modern WordPress business site with custom theme and advanced functionality.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Custom Theme</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">WordPress</span>
              <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">UI/UX</span>
            </div>
          </div>
        </div>
        <!-- </a> -->
        
        <!-- Project 3 -->
         <!-- <a href="project.php#ecommerce-website"> -->
          <div class=" bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/online-store-website.webp" alt="Ecommerce" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">E-Commerce</span>
                <h3 class="text-xl font-bold text-white mt-1">Online Fashion Store</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Created a responsive WooCommerce site with smooth UX, integrated payment gateways, and inventory management.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">WooCommerce</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">E-Commerce</span>
              <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Payments</span>
            </div>
          </div>
        </div>
         <!-- </a> -->
        
        
        <!-- Project 4 -->
         <a href="project.php#school-management">
        <div class=" bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/service-providing-website.webp" alt="Web Application" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Web Application</span>
                <h3 class="text-xl font-bold text-white mt-1">School management Website</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Developed a custom school management website with real-time updates and data management features.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">PHP</span>
              <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">MySQL</span>
            </div>
          </div>
        </div>
        </a>
        
        <!-- Project 5 -->
         <a href="project.php#portfolio-website">
        <div class=" bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/portfolio-website.webp" alt="Portfolio Website" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Portfolio</span>
                <h3 class="text-xl font-bold text-white mt-1">Freelancer Portfolio</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Designed a visually stunning portfolio website for a digital artist with gallery and cms system
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Design</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Gallery</span>
              <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">WordPress</span>
            </div>
          </div>
        </div>
        </a>
        
        <!-- Project 6 -->
         <a href="project.php#local-business-website">
        <div class=" bg-white rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/corporate-website.webp" alt="Corporate Website" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Local Business</span>
                <h3 class="text-xl font-bold text-white mt-1">Local business Website</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Built a professional business website with blog section, and contact management.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Professional</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">dashboard</span>
              <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">CMS</span>
            </div>
          </div>
        </div>
      </div>
      </a>
      
      <div class="text-center mt-12">
        <a href="contact.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
          Start Your Project
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

 


  <!-- Testimonials Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Client Testimonials</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">What my clients say about my work</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white p-8 rounded-xl shadow-md">
          <div class="flex items-center mb-4">
            <div class="flex-shrink-0">
              <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-bold text-gray-800">Sarah</h4>
              <p class="text-gray-600">Marketing Director</p>
            </div>
          </div>
          <p class="text-gray-600 italic mb-4">
            "Ameer transformed our outdated website into a modern, high-performing platform. Our organic traffic increased by 80% within 3 months of launch."
          </p>
          <div class="flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="bg-white p-8 rounded-xl shadow-md">
          <div class="flex items-center mb-4">
            <div class="flex-shrink-0">
              <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-bold text-gray-800">Farhad Ali</h4>
              <p class="text-gray-600">E-Commerce Manager</p>
            </div>
          </div>
          <p class="text-gray-600 italic mb-4">
            "The WooCommerce store Ameer built for us handles 500+ daily orders flawlessly. His attention to detail and post-launch support are exceptional."
          </p>
          <div class="flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star-half-alt text-yellow-400"></i>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="bg-white p-8 rounded-xl shadow-md">
          <div class="flex items-center mb-4">
            <div class="flex-shrink-0">
              <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Rodriguez">
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-bold text-gray-800">Sidra </h4>
              <p class="text-gray-600">Small Business Owner</p>
            </div>
          </div>
          <p class="text-gray-600 italic mb-4">
            "Working with Ameer was a pleasure. He understood my vision perfectly and delivered a beautiful website that perfectly represents my brand."
          </p>
          <div class="flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star-half-alt text-yellow-400"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 ">
      <div class="text-center mb-16 ">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Answers to common questions about my services</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="space-y-6">
        <!-- FAQ Item 1 -->
        <div class="faq-item">
          <div class="faq-question flex justify-between items-center py-4">
            <h3 class="text-lg font-medium text-gray-800">How long does a typical website project take?</h3>
            <i class="fas fa-plus text-blue-600"></i>
          </div>
          <div class="faq-answer pb-4">
            <p class="text-gray-600">
              The timeline varies depending on the project's complexity. A simple website typically takes 2-4 weeks, while more complex website can take 6-12 weeks. During our initial consultation, I'll provide a more accurate timeline based on your specific requirements.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="faq-item">
          <div class="faq-question flex justify-between items-center py-4">
            <h3 class="text-lg font-medium text-gray-800">What's included in your website maintenance services?</h3>
            <i class="fas fa-plus text-blue-600"></i>
          </div>
          <div class="faq-answer pb-4">
            <p class="text-gray-600">
              My maintenance packages typically include regular updates (WordPress core, plugins, themes), security monitoring, daily backups, performance optimization, uptime monitoring, and content updates (up to a certain number of changes per month). I offer different tiers to match your specific needs.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="faq-item">
          <div class="faq-question flex justify-between items-center py-4">
            <h3 class="text-lg font-medium text-gray-800">Do you provide hosting services?</h3>
            <i class="fas fa-plus text-blue-600"></i>
          </div>
          <div class="faq-answer pb-4">
            <p class="text-gray-600">
              While I don't provide hosting directly, I partner with premium hosting providers and can recommend the best solution for your needs. For clients who prefer a hands-off approach, I can manage your hosting account and handle all technical aspects for an additional fee.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="faq-item">
          <div class="faq-question flex justify-between items-center py-4">
            <h3 class="text-lg font-medium text-gray-800">What's your pricing structure?</h3>
            <i class="fas fa-plus text-blue-600"></i>
          </div>
          <div class="faq-answer pb-4">
            <p class="text-gray-600">
              I offer both project-based pricing and milestone, depending on the scope of work. Most website projects are priced as a flat fee based on the features and complexity. For ongoing services like SEO or maintenance, I offer monthly retainers. During our discovery call, I'll provide a detailed quote tailored to your specific needs.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 5 -->
        <div class="faq-item">
          <div class="faq-question flex justify-between items-center py-4">
            <h3 class="text-lg font-medium text-gray-800">Will my website be mobile-friendly?</h3>
            <i class="fas fa-plus text-blue-600"></i>
          </div>
          <div class="faq-answer pb-4">
            <p class="text-gray-600">
              Absolutely! All websites I develop are fully responsive and optimized for all devices, from smartphones to desktops. I follow mobile-first design principles to ensure the best possible experience for your mobile visitors, who typically make up more than 50% of web traffic.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section py-32 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Online Presence?</h2>
      <p class="text-xl mb-8 max-w-2xl mx-auto">
        Let's discuss how I can help you achieve your business goals with a custom digital solution.
      </p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
        <a href="contact.php" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-medium transition duration-300 text-lg">
          Get Started Now
        </a>
        <a href="https://wa.me/923402710523" class="bg-white hover:bg-gray-100 text-gray-800 px-8 py-4 rounded-lg font-medium transition duration-300 text-lg">
          <i class="fas fa-phone mr-2"></i> Call Me
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <a href="contact.php">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Get In Touch</h2>
        </a>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Ready to start your project? Let's discuss how I can help you achieve your goals.</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
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
  <script src="home.js"></script>
  </body>
</html>
