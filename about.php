<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Ameer Hamza" />
  <meta name="keywords" content="about Ameer Web Solutions, professional web developer in Pakistan, WordPress developer and SEO expert, WordPress expert, SEO specialist" />

  <!-- SEO Title and Description -->
  <title>Ameer Web Solutions</title>
  <meta name="description" content="We craft high-performing websites and SEO strategies for businesses that want to grow online. From custom design to speed optimization, we build success" />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.ameerwebsolutions.com" />

  <!-- Open Graph / Facebook Meta Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ameerwebsolutions.com/about" />
  <meta property="og:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta property="og:description" content="Need a website that performs and ranks? I help businesses with full-stack development, SEO, and digital strategy." />
  <meta property="og:image" content="https://www.ameerwebsolutions.com/images/author-picture.webp" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta name="twitter:description" content="Need a website that performs and ranks? I help businesses with full-stack development, SEO, and digital strategy." />
  <meta name="twitter:image" content="https://www.ameerwebsolutions.com/images/author-picture.webp" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Ameer Hamza",
  "url": "https://ameerwebsolutions.com/about",
  "image": "https://www.ameerwebsolutions.com/images/author-picture.webp",
  "jobTitle": "Web Developer",
  "worksFor": {
    "@type": "Organization",
    "name": "Ameer Web Solutions"
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
  /* Modern Card Styles */
    .modern-card {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .modern-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
     .gradient-text {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .hero-gradient {
      background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdf4 100%);
    }
</style>

</head>

<body class="bg-grey-50 text-gray-800">
    <!-- header -->
    <?php
        require('header.php')
    ?>

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
                    <a href="contact.php" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                        Get Started
                    </a>
                    <a href="#" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-lg font-medium transition duration-300">
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
                            <p class="text-sm text-gray-600">Trusted by <span class="font-bold">20+</span> clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 flex justify-center">
                <div class="relative">
                    <img src="images/author-picture.webp" alt="Ameer Hamza" class="rounded-lg shadow-xl w-full max-w-md h-auto">
                    <div class="absolute -bottom-5 -right-4 bg-white p-4 rounded-lg shadow-lg">
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
                    <div class="absolute top-0 right-9 transform translate-x-1/2 -translate-y-1/2">
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
              <i class="fas fa-star text-yellow-300 text-2xl mb-2"></i>
              <p class="font-bold text-gray-800">4.9/5</p>
              <p class="text-sm text-gray-600">Rating</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tech Stack Section -->
  <section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Technologies I Work With</h2>
        <p class="text-lg text-gray-600 font-semibold max-w-2xl mx-auto">Modern tools and frameworks for exceptional results</p>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4"></div>
      </div>
      
      <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-8">
        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="h-12 w-12">
          </div>
          <span class="mediumxt-sm text-gray-700">HTML5</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">CSS3</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="React" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">Bootstrap</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">JavaScript</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" alt="JQuery" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">jQuery</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">PHP</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">MySQL</span>
        </div>

        <div class="tech-stack-item flex flex-col items-center">
          <div class="bg-white p-4 rounded-full transform hover:scale-105 transition-all duration-300 shadow-md mb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" alt="WordPress" class="h-12 w-12">
          </div>
          <span class="text-medium text-gray-700">WordPress</span>
        </div>
      </div>
    </div>
  </section>

    <!-- Our Process -->
    <section id="process" class="py-20 relative overflow-hidden bg-gradient-to-br from-gray-50 via-white to-blue-50">

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="text-center mb-16 animate__animated animate__fadeIn">
                <span class="text-m font-semibold text-blue-600  mb-2 block">OUR PROCESS</span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-green-400 bg-clip-text text-transparent">Development Journey</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">A systematic and innovative approach to turning your vision into digital reality</p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-200 via-purple-200 to-green-200"></div>

                <!-- Timeline Items -->
                <div class="space-y-24 relative">
                    <!-- Discovery Phase -->
                    <div class="flex flex-col lg:flex-row items-center group">
                        <div class="lg:w-1/2 lg:pr-16 text-right mb-8 lg:mb-0 animate__animated animate__fadeInLeft">
                            <div class="modern-card group-hover:border-blue-500 border-2 border-transparent transition-all duration-300">
                                <div class="flex items-center justify-end mb-4">
                                    <span class="text-5xl font-bold text-blue-500 opacity-20 mr-4">01</span>
                                    <h3 class="text-2xl font-bold text-blue-600">Discovery</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed">We dive deep into understanding your business goals, target audience, and project requirements to create a strategic roadmap that ensures success.</p>
                                <div class="mt-4 flex justify-end gap-4">
                                    <span class="text-blue-600 text-sm font-semibold"><i class="fas fa-chart-line mr-2"></i>Analysis</span>
                                    <span class="text-blue-600 text-sm font-semibold"><i class="fas fa-bullseye mr-2"></i>Strategy</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-16 h-16 absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full border-4 border-white shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-search text-2xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Design Phase -->
                    <div class="flex flex-col lg:flex-row items-center lg:flex-row-reverse group">
                        <div class="lg:w-1/2 lg:pl-16 text-left mb-8 lg:mb-0 animate__animated animate__fadeInRight">
                            <div class="modern-card group-hover:border-green-500 border-2 border-transparent transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <span class="text-5xl font-bold text-green-500 opacity-20 mr-4">02</span>
                                    <h3 class="text-2xl font-bold text-green-600">Design</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed">Creating stunning, user-centric designs that not only look beautiful but also deliver an exceptional user experience across all devices.</p>
                                <div class="mt-4 flex gap-4">
                                    <span class="text-green-600 text-sm font-semibold"><i class="fas fa-mobile-alt mr-2"></i>Responsive</span>
                                    <span class="text-green-600 text-sm font-semibold"><i class="fas fa-palette mr-2"></i>Creative</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-16 h-16 absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full border-4 border-white shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-paint-brush text-2xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Development Phase -->
                    <div class="flex flex-col lg:flex-row items-center group">
                        <div class="lg:w-1/2 lg:pr-16 text-right mb-8 lg:mb-0 animate__animated animate__fadeInLeft">
                            <div class="modern-card group-hover:border-blue-800 border-2 border-transparent transition-all duration-300">
                                <div class="flex items-center justify-end mb-4">
                                    <span class="text-5xl font-bold text-blue-800 opacity-20 mr-4">03</span>
                                    <h3 class="text-2xl font-bold text-blue-800">Development</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed">Transforming designs into fully functional websites using cutting-edge technologies and best coding practices for optimal performance.</p>
                                <div class="mt-4 flex justify-end gap-4">
                                    <span class="text-blue-800 text-sm font-semibold"><i class="fas fa-code mr-2"></i>Clean Code</span>
                                    <span class="text-blue-800 text-sm font-semibold"><i class="fas fa-bolt mr-2"></i>Performance</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-16 h-16 absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-800 to-blue-800 rounded-full border-4 border-white shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-code text-2xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Launch Phase -->
                    <div class="flex flex-col lg:flex-row items-center lg:flex-row-reverse group">
                        <div class="lg:w-1/2 lg:pl-16 text-left mb-8 lg:mb-0 animate__animated animate__fadeInRight">
                            <div class="modern-card group-hover:border-green-400 border-2 border-transparent transition-all duration-300">
                                <div class="flex items-center mb-4">
                                    <span class="text-5xl font-bold text-green-400 opacity-20 mr-4">04</span>
                                    <h3 class="text-2xl font-bold text-green-400">Launch & Support</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed">Rigorous testing, smooth deployment, and ongoing support to ensure your website performs at its best and stays ahead of the curve.</p>
                                <div class="mt-4 flex gap-4">
                                    <span class="text-green-400 text-sm font-semibold"><i class="fas fa-rocket mr-2"></i>Launch</span>
                                    <span class="text-green-400 text-sm font-semibold"><i class="fas fa-headset mr-2"></i>Support</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-16 h-16 absolute left-1/2 transform -translate-x-1/2 items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-400 rounded-full border-4 border-white shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-rocket text-2xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Final CTA -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background with animated gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-800 via-blue-500 to-green-600 opacity-90">
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        </div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate__animated animate__fadeInUp">
                    <span class="inline-block text-white/80 text-sm font-semibold tracking-wider uppercase mb-4">Let's Create Together</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                        Ready to Transform Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-500">Digital Presence</span>?
                    </h2>
                    <p class="text-xl text-white/90 mb-12 leading-relaxed">
                        Join hands with us to create something extraordinary. Your vision combined with our expertise will result in a digital masterpiece that stands out.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="contact.php" class="group relative inline-flex items-center justify-center overflow-hidden rounded-full bg-white px-8 py-4 font-semibold text-blue-600 transition duration-300 ease-out hover:scale-105">
                        <span class="absolute inset-0 bg-gradient-to-r from-blue-600 via-green-400 to-green-600 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"></span>
                        <span class="relative group-hover:text-white transition-colors duration-300 ease-out">
                            Start Your Project
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300 ease-out group-hover:translate-x-1"></i>
                        </span>
                    </a>
                    
                    <a href="#" class="group relative inline-flex items-center justify-center overflow-hidden rounded-full border-2 border-white/30 px-8 py-4 font-semibold text-white transition duration-300 ease-out hover:border-white/60 hover:scale-105">
                        <span class="relative">
                            View Our Work
                            <i class="fas fa-external-link-alt ml-2 transition-transform duration-300 ease-out group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust Indicators Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="text-center mb-16 animate__animated animate__fadeIn">
                <span class="text-sm font-semibold text-blue-600 tracking-wider uppercase mb-2 block">Why Trust Us</span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-green-500 via-green-400 to-blue-600 bg-clip-text text-transparent">Building Trust Through Excellence</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">Our commitment to quality, transparency, and client success has earned us the trust of businesses worldwide</p>
            </div>

            <!-- Trust Indicators Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Security & Compliance -->
                <div class="modern-card group hover:border-green-500 border-2 border-transparent transition-all duration-300 animate__animated animate__fadeInUp">
                    <div class="p-6">
                        <div class="mb-6 text-green-500 bg-green-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto transform group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-4">Security & Compliance</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2 text-medium"></i>SSL Security Protection</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2 text-medium"></i>GDPR Compliance</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2 text-medium"></i>Data Privacy Guaranteed</li>
                        </ul>
                    </div>
                </div>

                <!-- Industry Recognition -->
                <div class="modern-card group hover:border-blue-500 border-2 border-transparent transition-all duration-300 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="p-6">
                        <div class="mb-6 text-blue-500 bg-blue-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto transform group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-award text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-4">Industry Recognition</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2 text-medium"></i>Top Web Developer 2025</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2 text-medium"></i>4.9 Star Client Rating</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2 text-medium"></i>Industry Certifications</li>
                        </ul>
                    </div>
                </div>

                <!-- Quality Assurance -->
                <div class="modern-card group hover:border-blue-800 border-2 border-transparent transition-all duration-300 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="p-6">
                        <div class="mb-6 text-blue-800 bg-blue-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto transform group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clipboard-check text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-4">Quality Assurance</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-blue-800 mr-2 text-medium"></i>Rigorous Testing</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-800 mr-2 text-medium"></i>Code Quality Standards</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-800 mr-2 text-medium"></i>Performance Optimization</li>
                        </ul>
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
  <script src="home.js"></script>

</body>
</html>