<nav class="fixed w-full bg-white shadow-md z-50 " >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex-shrink-0 flex items-center">
                <img src="images/logo.png" alt="" class="logo">
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-8">
                    <a href="index.php" class="nav-link text-gray-700 hover:text-blue-500 px-2 py-2 font-medium text-lg">Home</a>
                    <a href="about.php" class="nav-link text-gray-700 hover:text-blue-500 px-2 py-2 font-medium text-lg">About</a>
                    <a href="service.php" class="nav-link text-gray-700 hover:text-blue-500 px-2 py-2 font-medium text-lg">Services</a>
                    <!-- <a href="projects" class="nav-link text-gray-700 hover:text-blue-500 px-2 py-2 font-medium text-lg">Projects</a> -->
                    <a href="contact.php" class="nav-link text-gray-700 hover:text-blue-500 px-2 py-2 font-medium text-lg">Contact</a>
                </div>
            </div>

            <div class="text-center hidden md:block">
                <a href="https://wa.me/923402710523" class="inline-flex items-center px-4 py-3 border border-none text-lg font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-blue-500 to-green-500 hover:from-blue-700 hover:to-blue-400 transition duration-300">
                    <i class="fas fa-phone animate-pulse mr-2"></i> Call Now
                </a>
            </div>

            <div class="md:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-500 focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="hidden md:hidden bg-white  shadow-lg" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Home</a>
            <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">About</a>
            <a href="service.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Services</a>
            <!-- <a href="projects.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Projects</a> -->
            <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-500">Contact</a>

                <a href="https://wa.me/923402710523" class="inline-flex items-center px-3 py-2 border border-none font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-blue-500 to-green-500 hover:from-blue-700 hover:to-blue-400 transition duration-300">
                    <i class="fas fa-phone animate-pulse mr-2"></i> Call Now
                </a>

        </div>
    </div>
</nav>
