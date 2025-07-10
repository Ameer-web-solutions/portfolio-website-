<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pAP0bD0I2yL2P9+ex..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>


<body class="bg-gray-50">

  <!-- Navigation -->
  <nav class="fixed w-full bg-white shadow-md z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20 items-center">
        <div class="flex-shrink-0 flex items-center">
          <img src="images/logo.png" alt="" class="logo">
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-center space-x-8">
            <a href="#home" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">Home</a>
            <a href="#about" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">About</a>
            <a href="#services" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">Services</a>
            <a href="#projects" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">Projects</a>
            <a href="#process" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">Process</a>
            <a href="#contact" class="nav-link text-gray-700 hover:text-blue-500 px-3 py-2 font-medium">Contact</a>
          </div>
        </div>
        <div class="md:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-500 focus:outline-none" id="mobile-menu-button">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="hidden md:hidden bg-white shadow-lg" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Home</a>
        <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">About</a>
        <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Services</a>
        <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Projects</a>
        <a href="#process" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Process</a>
        <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-gradient pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2 mb-12 lg:mb-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-4">
                    Hi, I'm <span class="gradient-text">Ameer Hamza</span>
                </h1>
                <h2 class="text-2xl md:text-3xl text-gray-600 mb-6">
                    Full-Stack Developer & SEO Specialist
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    I craft high-performance digital experiences designed to boost visibility, engage users, and drive real business growth. With over 3 years of hands-on experience as a web developer and SEO specialist, I turn ideas into scalable, secure, and conversion-focused web solutions that not only look great but perform even better.
                <div class="flex space-x-4">
                    <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                        Get Started
                    </a>
                    <a href="#projects" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-lg font-medium transition duration-300">
                        View Portfolio
                    </a>
                </div>
                
                <div class="flex items-center mt-8 space-x-6">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client 1">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client 2">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client 3">
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-600">Trusted by <span class="font-bold">50+</span> clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 flex justify-center">
                <div class="relative">
                    <img src="images/author-picture.webp" alt="Ameer Hamza" class="rounded-lg shadow-xl w-full max-w-md h-auto">
                    <div class="absolute -bottom-5 -right-5 bg-white p-4 rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-3">
                                <i class="fas fa-medal text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Experience</p>
                                <p class="font-bold text-gray-800">3+ Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-5 -left-5 bg-white p-4 rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-full mr-3">
                                <i class="fas fa-check-circle text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Projects</p>
                                <p class="font-bold text-gray-800">20+</p>
                            </div>
                        </div>
                    </div>
                    <!-- Author Image -->
                    <div class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2">
                        <img src="images/author-picture.webp" alt="Author" class="w-24 h-24 rounded-full border-4 border-white shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">About Me</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">My journey in web development and digital solutions</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="lg:flex lg:items-center lg:space-x-12">
        <div class="lg:w-1/2 mb-12 lg:mb-0">
          <div class="bg-gray-100 p-8 rounded-xl">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Professional Journey</h3>
            <p class="text-gray-600 mb-6">
              I'm Ameer Hamza, a dedicated full-stack web developer and digital solutions architect. 
            </p>
            <p class="text-gray-600 mb-6">
              My journey started at ATS Software House, where I built a solid foundation in web development and advanced WordPress customization. Since then, I’ve spent the last 2 years helping businesses of all sizes strengthen their digital presence through tailored websites, e-commerce platforms, and strategic digital solutions.
            </p>
            <p class="text-gray-600 mb-6">
              Whether you're a startup, entrepreneur, or established business, I bring the technical skills and creative thinking needed to turn your ideas into reliable, scalable, and high-performing online experiences.
            </p>
            <div class="grid grid-cols-2 gap-4">
              <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">Responsive Design</span>
                </div>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">SEO Optimized</span>
                </div>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">Fast Performance</span>
                </div>
              </div>
              <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex items-center">
                  <i class="fas fa-check-circle text-green-500 mr-2"></i>
                  <span class="text-gray-700">Secure Code</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="lg:w-1/2">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">My Skills</h3>
          
          <div class="mb-6">
            <div class="flex justify-between mb-2">
              <span class="text-gray-700 font-medium">HTML/CSS/JavaScript</span>
              <span class="text-gray-500">95%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
            </div>
          </div>
          
          <div class="mb-6">
            <div class="flex justify-between mb-2">
              <span class="text-gray-700 font-medium">WordPress</span>
              <span class="text-gray-500">90%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-blue-600 h-2.5 rounded-full" style="width: 90%"></div>
            </div>
          </div>
          
          <div class="mb-6">
            <div class="flex justify-between mb-2">
              <span class="text-gray-700 font-medium">PHP/MySQL</span>
              <span class="text-gray-500">85%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
            </div>
          </div>
          
          <div class="mb-6">
            <div class="flex justify-between mb-2">
              <span class="text-gray-700 font-medium">SEO Optimization</span>
              <span class="text-gray-500">92%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-blue-600 h-2.5 rounded-full" style="width: 92%"></div>
            </div>
          </div>
          
          <div class="flex space-x-4 mt-8">
            <div class="bg-blue-100 p-4 rounded-lg text-center flex-1">
              <i class="fas fa-project-diagram text-blue-600 text-2xl mb-2"></i>
              <p class="font-bold text-gray-800">20+</p>
              <p class="text-sm text-gray-600">Projects</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg text-center flex-1">
              <i class="fas fa-users text-green-600 text-2xl mb-2"></i>
              <p class="font-bold text-gray-800">20+</p>
              <p class="text-sm text-gray-600">Clients</p>
            </div>
            <div class="bg-purple-100 p-4 rounded-lg text-center flex-1">
              <i class="fas fa-star text-purple-600 text-2xl mb-2"></i>
              <p class="font-bold text-gray-800">4.9/5</p>
              <p class="text-sm text-gray-600">Rating</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tech Stack Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Technologies I Work With</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Modern tools and frameworks for exceptional results</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-8">
        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">HTML5</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">CSS3</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="React" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">Bootstrap</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">JavaScript</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" alt="Node.js" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">jQuery</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">PHP</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">MySQL</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" alt="WordPress" class="h-12 w-12">
          </div>
          <span class="text-sm text-gray-700">WordPress</span>
        </div>
        
        
        
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">My Services</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive digital solutions tailored to your business needs</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-code text-blue-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Custom Web Development</h3>
          <p class="text-gray-600 mb-4">
            Tailored website development using modern technologies to ensure fast performance, seamless UX, and long-term scalability.          
          </p>
          <ul class="space-y-2 text-gray-600">
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
              Optimized for speed and performance
            </li>
          </ul>
        </div>
        
        <!-- Service 2 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
            <i class="fab fa-wordpress text-green-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">WordPress Development</h3>
          <p class="text-gray-600 mb-4">
            Custom WordPress solutions ranging from simple blogs to dynamic business sites and full-featured e-commerce platforms.
          </p>
          <ul class="space-y-2 text-gray-600">
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
              WooCommerce and third-party integrations
            </li>
          </ul>
        </div>
        
        <!-- Service 3 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-search text-purple-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">SEO Optimization</h3>
          <p class="text-gray-600 mb-4">
            Result-driven SEO strategies to boost your site’s visibility, search rankings, and organic traffic.
          </p>
          <ul class="space-y-2 text-gray-600">
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
        </div>
        
        <!-- Service 4 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-shopping-cart text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">E-Commerce Solutions</h3>
          <p class="text-gray-600 mb-4">
            End-to-end development of secure, scalable online stores built to convert and grow.
          </p>
          <ul class="space-y-2 text-gray-600">
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
        </div>
        
        <!-- Service 5 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-mobile-alt text-red-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Mobile-First Design</h3>
          <p class="text-gray-600 mb-4">
            Websites designed with mobile users in mind first, ensuring flawless experience on all devices.
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              Responsive frameworks
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              Touch optimization
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              Lightweight Fast loading
            </li>
          </ul>
        </div>
        
        <!-- Service 6 -->
        <div class="service-card bg-white p-8 rounded-xl shadow-md transition duration-300">
          <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-chart-line text-indigo-600 text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Performance Optimization</h3>
          <p class="text-gray-600 mb-4">
            Speed up your existing website with advanced optimization techniques and caching strategies.
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              Page speed analysis
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              Resource optimization
            </li>
            <li class="flex items-center">
              <i class="fas fa-check-circle text-green-500 mr-2"></i>
              CDN setup and caching integration
            </li>
          </ul>
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
          <a href="#contact" class="block text-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-medium transition duration-300">
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
          <a href="#contact" class="block text-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
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
          <a href="#contact" class="block text-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-medium transition duration-300">
            Get Started
          </a>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <p class="text-gray-600">Need something custom? <a href="#contact" class="text-blue-600 hover:text-blue-800 font-medium">Contact me</a> for a personalized quote.</p>
      </div>
    </div>
  </section>

  <!-- My proceess  -->

  <section id="process" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-10 sm:px-6 lg:px-12">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">My Process</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">A structured approach to deliver exceptional results</p>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
        </div>
        
        <div class="flex flex-col items-center mb-16">
            <div class="process-step mb-8">
                <div class="process-number">1</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Discovery & Planning</h3>
                <p class="text-gray-600 text-center">
                    Every project begins with a deep dive into your business, goals, and audience. In this stage, I gather all the details, analyze your competitors, plan the content structure, and outline the technical roadmap. This helps set a strong foundation for a results-driven website.            
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">2</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Design & Prototyping</h3>
                <p class="text-gray-600 text-center">
                    Next, I design wireframes and visual mockups to bring your ideas to life. We’ll collaborate closely during this phase to fine-tune the look, layout, and user experience until everything aligns perfectly with your vision.
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">3</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Development</h3>
                <p class="text-gray-600 text-center">
                    Once the design is approved, I begin building your site using clean code, responsive design, and the latest web technologies. The site is tested across all major browsers and devices to ensure it’s fast, functional, and user-friendly.
                </p>
            </div>
            
            <div class="process-step mb-8">
                <div class="process-number">4</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Launch & Optimization</h3>
                <p class="text-gray-600 text-center">
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
      <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-100 rounded-full mb-4">WHY CHOOSE US</span>
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
      <a href="#contact" class="inline-flex items-center px-6 py-4 border border-transparent text-lg font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition duration-300">
        Experience the Difference
        <i class="fas fa-arrow-right ml-3 animate-pulse"></i>
      </a>
    </div>
  </div>
</section>

  <!-- Projects Section -->
  <section id="projects" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Featured Projects</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">A selection of my recent work showcasing diverse skills and solutions</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project 1 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/blogging-website-design.webp" alt="SEO Blog" class="w-full h-full object-cover transition duration-500 hover:scale-105">
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
        
        <!-- Project 2 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
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
        
        <!-- Project 3 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
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
        
        <!-- Project 4 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/service-providing-website.webp" alt="Web Application" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Web Application</span>
                <h3 class="text-xl font-bold text-white mt-1">Service Providing Website</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Developed a custom service Providing website with real-time updates and team collaboration features.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">PHP</span>
              <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">MySQL</span>
            </div>
          </div>
        </div>
        
        <!-- Project 5 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/portfolio-website.webp" alt="Portfolio Website" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Portfolio</span>
                <h3 class="text-xl font-bold text-white mt-1">Artist Portfolio</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Designed a visually stunning portfolio website for a digital artist with gallery and e-commerce functionality.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Design</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Gallery</span>
              <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">E-Commerce</span>
            </div>
          </div>
        </div>
        
        <!-- Project 6 -->
        <div class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
          <div class="relative overflow-hidden h-60">
            <img src="images/corporate-website.webp" alt="Corporate Website" class="w-full h-full object-cover transition duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
              <div>
                <span class="text-sm text-blue-300 font-medium">Corporate</span>
                <h3 class="text-xl font-bold text-white mt-1">Corporate Website</h3>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Built a professional corporate website with multilingual support, news section, and contact management.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Corporate</span>
              <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Multilingual</span>
              <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">CMS</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <a href="#contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
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
              <h4 class="text-lg font-bold text-gray-800">Sarah Johnson</h4>
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
              <h4 class="text-lg font-bold text-gray-800">Michael Chen</h4>
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
              <h4 class="text-lg font-bold text-gray-800">Emma Rodriguez</h4>
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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
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
        <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-medium transition duration-300 text-lg">
          Get Started Now
        </a>
        <a href="tel:+923402710523" class="bg-white hover:bg-gray-100 text-gray-800 px-8 py-4 rounded-lg font-medium transition duration-300 text-lg">
          <i class="fas fa-phone mr-2"></i> Call Me
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Get In Touch</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Ready to start your project? Let's discuss how I can help you achieve your goals.</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="lg:flex lg:space-x-12">
        <div class="lg:w-1/2 mb-12 lg:mb-0">
          <form class="space-y-6" action="index.php" method="post">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
              <input type="text" id="name" name="name" aria-required="true" class="contact-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Full name" required>
            </div>
            
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
              <input type="email" id="email" name="email" aria-required="true" class="contact-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="john@example.com" required>
            </div>
            
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone number</label>
              <input type="tel" id="phone" name="phone" aria-required="true" class="contact-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Phone" required>
            </div>
            
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
              <textarea id="message" name="message" rows="5" aria-required="true" class="contact-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Tell me about your project..." required></textarea>
            </div>
            
            <button type="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
              Send Message
            </button>
          </form>
        </div>
        
        <div class="lg:w-1/2">
          <div class="bg-gray-50 p-8 rounded-xl h-full">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Contact Information</h3>
            
            <div class="space-y-6">
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                  <i class="fas fa-envelope text-blue-600"></i>
                </div>
                <div class="ml-4">
                  <h4 class="text-sm font-medium text-gray-500">Email</h4>
                  <a href="mailto:ahmeer034027@gmail.com" class="text-base text-gray-800 hover:text-blue-600">ahmeer034027@gmail.com</a>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                  <i class="fab fa-whatsapp text-green-600"></i>
                </div>
                <div class="ml-4">
                  <h4 class="text-sm font-medium text-gray-500">WhatsApp</h4>
                  <a href="https://wa.me/923402710523" target="_blank" class="text-base text-gray-800 hover:text-green-600">+92 340 2710523</a>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                  <i class="fas fa-map-marker-alt text-purple-600"></i>
                </div>
                <div class="ml-4">
                  <h4 class="text-sm font-medium text-gray-500">Location</h4>
                  <p class="text-base text-gray-800">Main Abu Talib Road, Hazara Town, Quetta</p>
                </div>
              </div>
            </div>
            
            <div class="mt-8">
              <h4 class="text-lg font-bold text-gray-800 mb-4">Connect With Me</h4>
              <div class="flex space-x-4">
                <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-200 transition duration-300">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition duration-300">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition duration-300">
                  <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-gray-900 transition duration-300">
                  <i class="fab fa-github"></i>
                </a>
              </div>
            </div>
            
            <div class="mt-8">
              <h4 class="text-lg font-bold text-gray-800 mb-4">Business Hours</h4>
              <div class="space-y-2">
                <div class="flex justify-between">
                  <span class="text-gray-600">Monday - Friday</span>
                  <span class="text-gray-800 font-medium">9:00 AM - 8:00 PM</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Saturday</span>
                  <span class="text-gray-800 font-medium">Closed</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Sunday</span>
                  <span class="text-gray-800 font-medium">Closed</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8">
        <div class="md:col-span-2">
          <h3 class="text-xl font-bold mb-4">Ameer Hamza</h3>
          <p class="text-gray-400 mb-4">
            Full-Stack Web Developer specializing in creating high-performance websites with excellent SEO foundations.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold mb-4">Services</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Web Development</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">WordPress</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">SEO Optimization</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">E-Commerce</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
            <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
            <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300">Services</a></li>
            <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
        <p>&copy; 2025 Ameer Hamza. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition duration-300 opacity-0 invisible hover:bg-blue-700">
    <i class="fas fa-arrow-up"></i>
  </button>
  <script src="home.js"></script>
  </body>
</html>
