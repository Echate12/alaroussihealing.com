<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العروسي للرقية الشرعية - الشفاء بالقرآن والسنة</title>
    <meta name="description" content="منصة متخصصة في الرقية الشرعية والعلاج بالقرآن الكريم، نقدم لك الإرشاد والدعم الروحي من خلال راقي معتمد وخبير في العلاج الإسلامي">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'islamic-green': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d'
                        },
                        'islamic-gold': {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f'
                        }
                    },
                    backgroundImage: {
                        'gradient-islamic': 'linear-gradient(135deg, #22c55e 0%, #f59e0b 100%)'
                    },
                    fontFamily: {
                        'amiri': ['Amiri', 'serif'],
                        'cairo': ['Cairo', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-cairo">
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-50 via-white to-islamic-gold-50"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-20 right-10 w-20 h-20 bg-islamic-gold-200 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-40 left-10 w-16 h-16 bg-islamic-green-200 rounded-full opacity-20 animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 left-1/4 w-12 h-12 bg-islamic-gold-300 rounded-full opacity-15 animate-float" style="animation-delay: 2s;"></div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <!-- Main Heading -->
                <div class="mb-8 animate-fade-in">
                    <h1 class="text-5xl md:text-7xl font-bold text-islamic-green-800 mb-4 font-amiri leading-tight">
                        الرقية الشرعية
                    </h1>
                    <div class="flex justify-center items-center mb-6">
                        <div class="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
                        <svg class="w-6 h-6 text-islamic-gold-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <div class="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
                    </div>
                    <p class="text-xl md:text-2xl text-gray-700 mb-8 font-cairo leading-relaxed">
                        الشفاء بالقرآن الكريم والسنة النبوية المطهرة
                    </p>
                </div>

                <!-- Description -->
                <div class="mb-12 animate-slide-up">
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                        منصة متخصصة في الرقية الشرعية والعلاج بالقرآن الكريم، نقدم لك الإرشاد والدعم الروحي 
                        من خلال راقي معتمد وخبير في العلاج الإسلامي
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-6 mb-12 animate-slide-up">
                    <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-islamic-green-100">
                        <svg class="w-12 h-12 text-islamic-green-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3 class="text-xl font-semibold text-islamic-green-800 mb-2">رقية شرعية معتمدة</h3>
                        <p class="text-gray-600">وفقاً للقرآن والسنة النبوية</p>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-islamic-gold-100">
                        <svg class="w-12 h-12 text-islamic-gold-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <h3 class="text-xl font-semibold text-islamic-green-800 mb-2">علاج شامل</h3>
                        <p class="text-gray-600">للروح والنفس والجسد</p>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-islamic-green-100">
                        <svg class="w-12 h-12 text-islamic-green-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <h3 class="text-xl font-semibold text-islamic-green-800 mb-2">خبرة واعتماد</h3>
                        <p class="text-gray-600">سنوات من الممارسة والتخصص</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <a href="#plans" class="bg-gradient-islamic text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 min-w-[200px]">
                        اختر خطتك الآن
                    </a>
                    <a href="#about" class="border-2 border-islamic-green-600 text-islamic-green-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-islamic-green-600 hover:text-white transition-all duration-300 min-w-[200px]">
                        تعرف على المزيد
                    </a>
                </div>

                <!-- Scroll Indicator -->
                <div class="animate-bounce">
                    <svg class="w-8 h-8 text-islamic-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/about.php'; ?>
    <?php include 'includes/plans.php'; ?>
    <?php include 'includes/contact.php'; ?>
    <?php include 'includes/footer.php'; ?>

    <!-- Smooth Scrolling -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html> 