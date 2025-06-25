<header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-2 space-x-reverse">
                <div class="bg-gradient-islamic text-white p-2 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-islamic-green-700">العروسي للرقية</h1>
                    <p class="text-xs text-gray-600">الشفاء بالقرآن والسنة</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 space-x-reverse">
                <a href="#home" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 font-medium">الرئيسية</a>
                <a href="#about" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 font-medium">عن الرقية</a>
                <a href="#plans" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 font-medium">الخطط</a>
                <a href="#contact" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 font-medium">تواصل معنا</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#plans" class="bg-gradient-islamic text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                    احجز جلستك
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2" onclick="toggleMobileMenu()">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden py-4 bg-white border-t hidden">
            <nav class="flex flex-col space-y-4">
                <a href="#home" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 px-4 py-2" onclick="closeMobileMenu()">الرئيسية</a>
                <a href="#about" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 px-4 py-2" onclick="closeMobileMenu()">عن الرقية</a>
                <a href="#plans" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 px-4 py-2" onclick="closeMobileMenu()">الخطط</a>
                <a href="#contact" class="text-gray-700 hover:text-islamic-green-600 transition-colors duration-200 px-4 py-2" onclick="closeMobileMenu()">تواصل معنا</a>
                <a href="#plans" class="bg-gradient-islamic text-white px-6 py-2 rounded-full mx-4 text-center" onclick="closeMobileMenu()">
                    احجز جلستك
                </a>
            </nav>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
}

function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    mobileMenu.classList.add('hidden');
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
}
</script> 