<?php
// Handle form submission
$message = '';
$messageType = '';
$whatsapp_url = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $type = $_POST['type'] ?? '';
    $message_text = $_POST['message'] ?? '';
    
    // Validate required fields
    if (empty($name) || empty($phone) || empty($email) || empty($type) || empty($message_text)) {
        $message = 'جميع الحقول مطلوبة';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'البريد الإلكتروني غير صحيح';
        $messageType = 'error';
    } else {
        // Create WhatsApp message
        $whatsapp_message = "رسالة جديدة من موقع العروسي للرقية:\n\n";
        $whatsapp_message .= "الاسم: " . $name . "\n";
        $whatsapp_message .= "رقم الهاتف: " . $phone . "\n";
        $whatsapp_message .= "البريد الإلكتروني: " . $email . "\n";
        $whatsapp_message .= "نوع الاستشارة: " . $type . "\n";
        $whatsapp_message .= "الرسالة: " . $message_text . "\n";
        $whatsapp_message .= "\nالتاريخ: " . date('Y-m-d H:i:s');
        
        // Encode message for URL
        $encoded_message = urlencode($whatsapp_message);
        
        // Create WhatsApp URL
        $whatsapp_url = "https://wa.me/212666462665?text=" . $encoded_message;
        
        // Set success message
        $message = 'تم إرسال الرسالة بنجاح! انقر على الرابط أدناه لفتح واتساب';
        $messageType = 'success';
        
        // Clear form data
        $name = $phone = $email = $type = $message_text = '';
        
        // Try to save to file for backup (optional - won't break if it fails)
        try {
            $contact_data = [
                'timestamp' => date('Y-m-d H:i:s'),
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'type' => $type,
                'message' => $message_text,
                'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
            ];
            
            $log_file = __DIR__ . '/../contact_submissions.txt';
            $log_entry = json_encode($contact_data, JSON_UNESCAPED_UNICODE) . "\n";
            
            // Use error suppression to prevent breaking the form
            @file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        } catch (Exception $e) {
            // Silently fail - don't break the form if file writing fails
        }
    }
}
?>

<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-islamic-green-800 mb-6 font-amiri">
                تواصل معنا
            </h2>
            <div class="flex justify-center items-center mb-6">
                <div class="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
                <svg class="w-6 h-6 text-islamic-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <div class="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
            </div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                نحن هنا لخدمتك ومساعدتك في رحلتك نحو الشفاء والعافية. تواصل معنا في أي وقت
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div>
                <h3 class="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
                    معلومات التواصل
                </h3>
                
                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 border border-gray-100">
                        <div class="flex items-start space-x-4 space-x-reverse">
                            <div class="bg-gradient-islamic-green p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-islamic-green-800 mb-2">اتصل بنا</h4>
                                <p class="text-gray-600 leading-relaxed">+212 666462665</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 border border-gray-100">
                        <div class="flex items-start space-x-4 space-x-reverse">
                            <div class="bg-gradient-islamic-gold p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-islamic-green-800 mb-2">البريد الإلكتروني</h4>
                                <p class="text-gray-600 leading-relaxed">info@alaroussihealing.com</p>
                                <p class="text-gray-600 leading-relaxed">booking@alaroussihealing.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 border border-gray-100">
                        <div class="flex items-start space-x-4 space-x-reverse">
                            <div class="bg-gradient-islamic-green p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-islamic-green-800 mb-2">العنوان</h4>
                                <p class="text-gray-600 leading-relaxed">المغرب</p>
                                <p class="text-gray-600 leading-relaxed">نقدم خدماتنا أونلاين لجميع أنحاء العالم</p>
                            </div>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 border border-gray-100">
                        <div class="flex items-start space-x-4 space-x-reverse">
                            <div class="bg-gradient-islamic-gold p-3 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-islamic-green-800 mb-2">ساعات العمل</h4>
                                <p class="text-gray-600 leading-relaxed">السبت - الخميس: 9 صباحاً - 10 مساءً</p>
                                <p class="text-gray-600 leading-relaxed">الجمعة: 2 ظهراً - 10 مساءً</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Action Buttons -->
                <div class="mt-8 space-y-4">
                    <a href="tel:+212666462665" class="flex items-center justify-center space-x-3 space-x-reverse bg-gradient-islamic text-white px-6 py-4 rounded-2xl hover:shadow-lg transition-all duration-300 w-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="font-semibold">اتصل الآن</span>
                    </a>
                    <a href="https://wa.me/212666462665" class="flex items-center justify-center space-x-3 space-x-reverse bg-green-600 text-white px-6 py-4 rounded-2xl hover:shadow-lg transition-all duration-300 w-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-semibold">واتساب</span>
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h3 class="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
                    أرسل رسالة
                </h3>
                
                <?php if ($message): ?>
                    <div id="contact-success" class="mb-6 p-4 rounded-xl <?php echo $messageType === 'success' ? 'bg-green-100 text-green-700 border border-green-200' : 'bg-red-100 text-red-700 border border-red-200'; ?>">
                        <?php echo htmlspecialchars($message); ?>
                        <?php if ($messageType === 'success' && $whatsapp_url): ?>
                            <div class="mt-4">
                                <a href="<?php echo htmlspecialchars($whatsapp_url); ?>" target="_blank" class="inline-flex items-center space-x-2 space-x-reverse bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <span>فتح واتساب</span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <script>
                // Auto-scroll to the success message if it exists
                window.addEventListener('DOMContentLoaded', function() {
                  var success = document.getElementById('contact-success');
                  if (success) {
                    success.scrollIntoView({ behavior: 'smooth', block: 'center' });
                  }
                });
                </script>
                
                <form method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-islamic-green-800 font-semibold mb-2">
                                الاسم الكامل
                            </label>
                            <input
                                type="text"
                                name="name"
                                value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                                placeholder="اسمك الكامل"
                                required
                            />
                        </div>
                        <div>
                            <label class="block text-islamic-green-800 font-semibold mb-2">
                                رقم الهاتف
                            </label>
                            <input
                                type="tel"
                                name="phone"
                                value="<?php echo htmlspecialchars($phone ?? ''); ?>"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                                placeholder="رقم هاتفك"
                                required
                            />
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-islamic-green-800 font-semibold mb-2">
                            البريد الإلكتروني
                        </label>
                        <input
                            type="email"
                            name="email"
                            value="<?php echo htmlspecialchars($email ?? ''); ?>"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                            placeholder="بريدك الإلكتروني"
                            required
                        />
                    </div>
                    
                    <div>
                        <label class="block text-islamic-green-800 font-semibold mb-2">
                            نوع الاستشارة
                        </label>
                        <select name="type" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200" required>
                            <option value="">اختر نوع الاستشارة</option>
                            <option value="رقية شرعية عامة" <?php echo ($type ?? '') === 'رقية شرعية عامة' ? 'selected' : ''; ?>>رقية شرعية عامة</option>
                            <option value="علاج من العين والحسد" <?php echo ($type ?? '') === 'علاج من العين والحسد' ? 'selected' : ''; ?>>علاج من العين والحسد</option>
                            <option value="علاج من السحر" <?php echo ($type ?? '') === 'علاج من السحر' ? 'selected' : ''; ?>>علاج من السحر</option>
                            <option value="علاج نفسي وروحي" <?php echo ($type ?? '') === 'علاج نفسي وروحي' ? 'selected' : ''; ?>>علاج نفسي وروحي</option>
                            <option value="استشارة أخرى" <?php echo ($type ?? '') === 'استشارة أخرى' ? 'selected' : ''; ?>>استشارة أخرى</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-islamic-green-800 font-semibold mb-2">
                            تفاصيل الرسالة
                        </label>
                        <textarea
                            name="message"
                            rows="5"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-islamic-green-500 focus:ring-2 focus:ring-islamic-green-200 transition-all duration-200"
                            placeholder="اكتب تفاصيل حالتك أو استفسارك هنا..."
                            required
                        ><?php echo htmlspecialchars($message_text ?? ''); ?></textarea>
                    </div>
                    
                    <button
                        type="submit"
                        class="w-full bg-gradient-islamic text-white px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-2 space-x-reverse"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        <span>إرسال الرسالة</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> 