<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenSpace Lawn & Garden - Healthy Lawns, Beautiful Gardens</title>
    <meta name="description" content="Professional lawn care and garden supplies store. Quality grass seeds, tools, fertilizers, and outdoor decor for beautiful, healthy outdoor spaces.">
    
    <!-- External Libraries -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'forest': '#2d5016',
                        'lawn': '#4a7c59',
                        'sage': '#87a96b',
                        'mint': '#a8c686',
                        'earth': '#8b6914',
                        'stone': '#d4c5a9',
                        'cream': '#f5f2e8'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-cream text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <i class="fas fa-leaf text-3xl text-lawn"></i>
                    <div>
                        <h1 class="text-xl font-bold text-forest">GreenSpace</h1>
                        <p class="text-xs text-sage">Lawn & Garden</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link text-forest hover:text-lawn transition-colors">Home</a>
                    <div class="relative group">
                        <a href="#products" class="nav-link text-forest hover:text-lawn transition-colors flex items-center">
                            Products <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="absolute top-full left-0 bg-white shadow-xl rounded-lg p-4 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="grid grid-cols-1 gap-2">
                                <a href="products.html#grass-seeds" class="block px-3 py-2 text-forest hover:bg-mint hover:bg-opacity-20 rounded">Grass Seeds</a>
                                <a href="products.html#lawn-tools" class="block px-3 py-2 text-forest hover:bg-mint hover:bg-opacity-20 rounded">Lawn Tools</a>
                                <a href="products.html#fertilizers" class="block px-3 py-2 text-forest hover:bg-mint hover:bg-opacity-20 rounded">Fertilizers</a>
                                <a href="products.html#outdoor-decor" class="block px-3 py-2 text-forest hover:bg-mint hover:bg-opacity-20 rounded">Outdoor Decor</a>
                            </div>
                        </div>
                    </div>
                    <a href="services.html" class="nav-link text-forest hover:text-lawn transition-colors">Services</a>
                    <a href="blog.html" class="nav-link text-forest hover:text-lawn transition-colors">Blog</a>
                    <a href="offers.html" class="nav-link text-forest hover:text-lawn transition-colors">Offers</a>
                    <a href="about.html" class="nav-link text-forest hover:text-lawn transition-colors">About</a>
                    <a href="contact.html" class="nav-link text-forest hover:text-lawn transition-colors">Contact</a>
                </div>

                <!-- Search & Cart -->
                <div class="flex items-center space-x-4">
                    <!-- Search Bar -->
                    <div class="relative hidden lg:block">
                        <input type="text" id="searchInput" placeholder="Search products..." 
                               class="pl-10 pr-4 py-2 border border-sage rounded-full focus:outline-none focus:ring-2 focus:ring-lawn w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-sage"></i>
                    </div>
                    
                    <!-- Cart -->
                    <div class="relative">
                        <button id="cartToggle" class="flex items-center space-x-1 bg-lawn text-white px-4 py-2 rounded-full hover:bg-forest transition-colors">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cartCount" class="bg-earth text-white rounded-full px-2 py-1 text-xs">0</span>
                        </button>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuToggle" class="md:hidden text-forest">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="md:hidden mt-4 pb-4 hidden">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="text-forest hover:text-lawn transition-colors">Home</a>
                    <a href="products.html" class="text-forest hover:text-lawn transition-colors">Products</a>
                    <a href="services.html" class="text-forest hover:text-lawn transition-colors">Services</a>
                    <a href="blog.html" class="text-forest hover:text-lawn transition-colors">Blog</a>
                    <a href="offers.html" class="text-forest hover:text-lawn transition-colors">Offers</a>
                    <a href="about.html" class="text-forest hover:text-lawn transition-colors">About</a>
                    <a href="contact.html" class="text-forest hover:text-lawn transition-colors">Contact</a>
                </div>
                <!-- Mobile Search -->
                <div class="relative mt-4">
                    <input type="text" placeholder="Search products..." 
                           class="w-full pl-10 pr-4 py-2 border border-sage rounded-full focus:outline-none focus:ring-2 focus:ring-lawn">
                    <i class="fas fa-search absolute left-3 top-3 text-sage"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gradient-to-br from-lawn to-forest text-white">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="relative container mx-auto px-4 py-24 md:py-32">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-6xl font-serif font-bold mb-6 leading-tight">
                    Healthy Lawns,<br>
                    <span class="text-mint">Beautiful Gardens</span>
                </h2>
                <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
                    Transform your outdoor space with premium lawn care products and expert gardening solutions. 
                    Your journey to a stunning landscape starts here.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="products.html" class="bg-mint text-forest px-8 py-4 rounded-full text-lg font-semibold hover:bg-white transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-seedling mr-2"></i>
                        Explore Products
                    </a>
                    <a href="services.html" class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-forest transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-tools mr-2"></i>
                        Our Services
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Hero Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,60 C300,120 900,0 1200,60 L1200,120 L0,120 Z" fill="#f5f2e8"/>
            </svg>
        </div>
    </section>

    <!-- Quick Categories -->
    <section class="py-16 bg-cream">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-serif font-bold text-forest mb-4">Shop by Category</h3>
                <p class="text-lg text-sage max-w-2xl mx-auto">Everything you need for a thriving outdoor space</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="products.html#grass-seeds" class="category-card group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="bg-mint bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-lawn group-hover:bg-opacity-20 transition-colors">
                            <i class="fas fa-seedling text-2xl text-lawn"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-forest mb-2">Grass Seeds</h4>
                        <p class="text-sage">Premium seeds for lush, healthy lawns</p>
                    </div>
                </a>
                
                <a href="products.html#lawn-tools" class="category-card group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="bg-mint bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-lawn group-hover:bg-opacity-20 transition-colors">
                            <i class="fas fa-tools text-2xl text-lawn"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-forest mb-2">Lawn Tools</h4>
                        <p class="text-sage">Professional-grade equipment for every job</p>
                    </div>
                </a>
                
                <a href="products.html#fertilizers" class="category-card group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="bg-mint bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-lawn group-hover:bg-opacity-20 transition-colors">
                            <i class="fas fa-flask text-2xl text-lawn"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-forest mb-2">Fertilizers</h4>
                        <p class="text-sage">Nourish your lawn and garden naturally</p>
                    </div>
                </a>
                
                <a href="products.html#outdoor-decor" class="category-card group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="bg-mint bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-lawn group-hover:bg-opacity-20 transition-colors">
                            <i class="fas fa-tree text-2xl text-lawn"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-forest mb-2">Outdoor Decor</h4>
                        <p class="text-sage">Beautiful accents for your landscape</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-serif font-bold text-forest mb-4">Featured Products</h3>
                <p class="text-lg text-sage max-w-2xl mx-auto">Top-rated products trusted by lawn care professionals</p>
            </div>
            
            <div id="featuredProducts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Products will be loaded here by JavaScript -->
            </div>
            
            <div class="text-center mt-12">
                <a href="products.html" class="bg-lawn text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-forest transition-colors inline-flex items-center">
                    View All Products
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-16 bg-gradient-to-r from-sage to-mint">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h3 class="text-3xl font-serif font-bold mb-6">Professional Lawn Care Services</h3>
                <p class="text-xl mb-8 opacity-90">Let our experts transform your outdoor space with professional maintenance and design services</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white bg-opacity-20 rounded-lg p-6 backdrop-blur-sm">
                        <i class="fas fa-cut text-3xl mb-4"></i>
                        <h4 class="text-lg font-semibold mb-2">Lawn Maintenance</h4>
                        <p class="text-sm opacity-90">Regular mowing, edging, and trimming</p>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-lg p-6 backdrop-blur-sm">
                        <i class="fas fa-spa text-3xl mb-4"></i>
                        <h4 class="text-lg font-semibold mb-2">Fertilization</h4>
                        <p class="text-sm opacity-90">Seasonal feeding and soil treatment</p>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-lg p-6 backdrop-blur-sm">
                        <i class="fas fa-palette text-3xl mb-4"></i>
                        <h4 class="text-lg font-semibold mb-2">Landscape Design</h4>
                        <p class="text-sm opacity-90">Custom outdoor space planning</p>
                    </div>
                </div>
                
                <a href="services.html" class="bg-white text-sage px-8 py-3 rounded-full text-lg font-semibold hover:bg-cream transition-colors inline-flex items-center">
                    Learn More About Services
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-cream">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-serif font-bold text-forest mb-4">What Our Customers Say</h3>
                <p class="text-lg text-sage max-w-2xl mx-auto">Trusted by thousands of homeowners and professionals</p>
            </div>
            
            <div id="testimonials" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonials will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-16 bg-forest text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="text-3xl font-serif font-bold mb-4">Stay Green with Our Tips</h3>
                <p class="text-xl mb-8 opacity-90">Get expert lawn care advice and exclusive offers delivered to your inbox</p>
                
                <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" id="newsletterEmail" placeholder="Enter your email" required
                           class="flex-1 px-4 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-mint">
                    <button type="submit" class="bg-mint text-forest px-6 py-3 rounded-full font-semibold hover:bg-white transition-colors">
                        Subscribe
                    </button>
                </form>
                
                <p class="text-sm opacity-75 mt-4">
                    <i class="fas fa-lock mr-1"></i>
                    We respect your privacy. Unsubscribe at any time.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-leaf text-2xl text-mint"></i>
                        <div>
                            <h4 class="text-xl font-bold">GreenSpace</h4>
                            <p class="text-sm text-gray-400">Lawn & Garden</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-4">Creating beautiful, healthy outdoor spaces since 2010. Your trusted partner for all lawn and garden needs.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-mint transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-mint transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-mint transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h5 class="text-lg font-semibold mb-4">Quick Links</h5>
                    <ul class="space-y-2">
                        <li><a href="products.html" class="text-gray-400 hover:text-white transition-colors">Products</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="blog.html" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="offers.html" class="text-gray-400 hover:text-white transition-colors">Special Offers</a></li>
                        <li><a href="about.html" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h5 class="text-lg font-semibold mb-4">Customer Service</h5>
                    <ul class="space-y-2">
                        <li><a href="contact.html" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Returns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h5 class="text-lg font-semibold mb-4">Get in Touch</h5>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-mint"></i>
                            <span class="text-gray-400">(555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-mint"></i>
                            <span class="text-gray-400">info@greenspacelawn.com</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-mint mt-1"></i>
                            <span class="text-gray-400">123 Garden Way<br>Green City, GC 12345</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2024 GreenSpace Lawn & Garden. All rights reserved. 
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a> | 
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div id="cartSidebar" class="fixed right-0 top-0 h-full w-96 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-forest">Shopping Cart</h3>
                <button id="closeCart" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div id="cartItems" class="space-y-4 mb-6">
                <!-- Cart items will be loaded here -->
            </div>
            
            <div class="border-t pt-4">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-lg font-semibold">Total:</span>
                    <span id="cartTotal" class="text-xl font-bold text-forest">$0.00</span>
                </div>
                <button class="w-full bg-lawn text-white py-3 rounded-lg font-semibold hover:bg-forest transition-colors">
                    Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- Cart Overlay -->
    <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Scripts -->
    <script src="js/main.js"></script>
</body>
</html>
