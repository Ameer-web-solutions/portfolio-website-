<!-- now create a thank you massage by using code when user input their details in contact form and click the  submit button and the detail safe in database the the massage show like a popup   -->
<?php

// Database connection settings
$server   = "localhost";
$username = "u917690034_aws";
$password = "2aBq!7#OxB!";
$dbname   = "u917690034_aws";

// Connect to MySQL
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Correct SQL for your table
        $query = "INSERT INTO `contactform`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
        $run = mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Ameer Hamza" />
  <meta name="keywords" content="about Ameer Web Solutions, professional web developer in Pakistan, WordPress developer and SEO expert, WordPress expert, SEO specialist" />

  <!-- SEO Title and Description -->
  <title>Contact Ameer Web Solutions</title>
  <meta name="description" content="Get in touch with Ameer Web Solutions for web development, WordPress, or SEO services. Send a message, request a quote, or ask a question—we're here to help." />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.ameerwebsolutions.com/about" />

  <!-- Open Graph / Facebook Meta Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ameerwebsolutions.com/service" />
  <meta property="og:title" content="Web Development & SEO Services | Ameer Web Solutions" />
  <meta property="og:description" content="Get in touch with Ameer Web Solutions for web development, WordPress, or SEO services. Send a message, request a quote, or ask a question—we're here to help." />
  <meta property="og:image" content="https://www.ameerwebsolutions.com/images/logo.png" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Ameer Web Solutions | Launch Your Website the Right Way" />
  <meta name="twitter:description" content="Get in touch with Ameer Web Solutions for web development, WordPress, or SEO services. Send a message, request a quote, or ask a question—we're here to help." />
  <meta name="twitter:image" content="https://www.ameerwebsolutions.com/images/logo.png" />

    <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

  <!-- Core Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Animation Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />

    <style>
      .hero-bg {
            background-image: url("images/laptop-with-glowing-screen-table.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .contact-input:focus {
          outline: none;
          box-shadow: 0 0 0 2px var(--primary);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
  <?php
  require('header.php')
  ?>
 <!-- hero section -->
  <section class="hero-bg min-h-screen flex items-center justify-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 ">Contact Us</h1>
            <h2 class="text-xl md:text-3xl font-medium mb-8 ">We provide a wide range of Services</h2>
            <p class="text-lg md:text-xl leading-relaxed max-w-3xl mx-auto " >
                Ready to grow and innovate? Connect with Ameer Web Solutions for customized digital solutions designed to accelerate your business success.
            </p>
        </div>
    </section>

<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:space-x-12">
        <div class="lg:w-1/2 mb-12 lg:mb-0">
          <h3 class="text-4xl md:text-4xl text-gray-800 font-bold mb-6">Request Free Consultation</h3>
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
                  <i class="fas fa-map-marker-alt text-red-600"></i>
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
<?php
require('footer.php')
?>
<script src="home.js"></script>
</body>
</html>